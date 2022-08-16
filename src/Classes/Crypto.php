<?php

namespace Caiocesar173\Utils\Classes;


class Crypto
{
    protected static $key = '!A%D*G-Ka= U@Xp2_5v8y/B?Ç(H+Mb)';
    protected static $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\| ';


    public static function Encrypt(string $message, string $key = null): String
    {
        if (!isset($key))
            $key = self::$key;

        if (mb_strlen($key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
            return false;
            //throw new RangeException('Key is not the correct size (must be 32 bytes).');
        }
        $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

        $cipher = base64_encode(
            $nonce .
                sodium_crypto_secretbox(
                    $message,
                    $nonce,
                    $key
                )
        );
        sodium_memzero($message);
        sodium_memzero($key);
        return $cipher;
    }

    public static function Decrypt(string $encrypted, string $key = null): String
    {
        if (!isset($key))
            $key = self::$key;

        $decoded = base64_decode($encrypted);
        $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
        $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');

        $plain = sodium_crypto_secretbox_open(
            $ciphertext,
            $nonce,
            $key
        );
        if (!is_string($plain)) {
            return false;
            //throw new Exception('Invalid MAC');
        }
        sodium_memzero($ciphertext);
        sodium_memzero($key);
        return $plain;
    }

    public static function GenerateKey($length = 31, $keyspace = ''): String
    {
        if (!isset($keyspace))
            $keyspace = self::GeneratePassword(100);

        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;

        if ($max < 1)
            throw new \Exception('$keyspace must be at least two characters long');

        for ($i = 0; $i < $length; ++$i)
            $str .= $keyspace[random_int(0, $max)];

        return $str;
    }

    public static function GeneratePassword($length = 31)
    {
        if ($length < 8)
            $length = 8;

        $str = '';
        $max = strlen(self::$chars) - 1;

        for ($i = 0; $i < $length; $i++)
            $str .= self::$chars[mt_rand(0, $max)];

        return $str;
    }

    /**
     * Create secure uuid values
     *
     * @param int $lenght
     * @return string
     */
    public static function uuid($lenght = 13)
    {
        if (function_exists("random_bytes"))
            $bytes = random_bytes(ceil($lenght / 2));
        elseif (function_exists("openssl_random_pseudo_bytes"))
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        else
            throw new \Exception("no cryptographically secure random function available");

        return substr(bin2hex($bytes), 0, $lenght);
    }

    /**
     * Decrypt data from a CryptoJS json encoding string
     *
     * @param mixed $passphrase
     * @param mixed $jsonString
     * @return mixed
     */
    public static function cryptoJsAesDecrypt($jsonString, $passphrase = null)
    {
        if (is_null($passphrase))
            $passphrase = self::$key;

        $jsondata = json_decode($jsonString, true);
        $salt = hex2bin($jsondata["s"]);
        $ct = base64_decode($jsondata["ct"]);
        $iv  = hex2bin($jsondata["iv"]);
        $concatedPassphrase = $passphrase . $salt;
        $md5 = array();
        $md5[0] = md5($concatedPassphrase, true);
        $result = $md5[0];
        for ($i = 1; $i < 3; $i++) {
            $md5[$i] = md5($md5[$i - 1] . $concatedPassphrase, true);
            $result .= $md5[$i];
        }
        $key = substr($result, 0, 32);
        $data = openssl_decrypt($ct, 'aes-256-cbc', $key, true, $iv);
        return json_decode($data, true);
    }

    /**
     * Encrypt value to a cryptojs compatiable json encoding string
     *
     * @param mixed $passphrase
     * @param mixed $value
     * @return string
     */
    public static function cryptoJsAesEncrypt($value, $passphrase = null)
    {
        if (is_null($passphrase))
            $passphrase = self::$key;

        $salt = openssl_random_pseudo_bytes(8);
        $salted = '';
        $dx = '';
        while (strlen($salted) < 48) {
            $dx = md5($dx . $passphrase . $salt, true);
            $salted .= $dx;
        }
        $key = substr($salted, 0, 32);
        $iv  = substr($salted, 32, 16);
        $encrypted_data = openssl_encrypt(json_encode($value), 'aes-256-cbc', $key, true, $iv);
        $data = array("ct" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "s" => bin2hex($salt));
        return json_encode($data);
    }
}
