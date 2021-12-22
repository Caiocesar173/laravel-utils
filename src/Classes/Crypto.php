<?php 

namespace Caiocesar173\Utils\Classes;


class Crypto
{
    protected static $key = '!A%D*G-Ka= U@Xp2_5v8y/B?Ç(H+Mb)';
    protected static $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\| ';


    public static function Encrypt(string $message, string $key = null): String
    {   
        if(!isset($key))
            $key = self::$key;

        if (mb_strlen($key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
            return false;
            //throw new RangeException('Key is not the correct size (must be 32 bytes).');
        }
        $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
        
        $cipher = base64_encode(
            $nonce.
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
        if(!isset($key))
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
        if(!isset($keyspace))
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
        if($length < 8)
            $length = 8;

        $str = '';
        $max = strlen(self::$chars) - 1;
      
        for ($i=0; $i < $length; $i++)
          $str .= self::$chars[mt_rand(0, $max)];
      
        return $str;
    }
}