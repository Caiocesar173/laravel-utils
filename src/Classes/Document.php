<?php

use Caiocesar173\Utils\Classes\Mask;

class CPF_CNPJ
{

    public static function Validate($document)
    {
        if (empty($document))
            return false;

        $document = preg_replace('/[^0-9]/', '', $document);
        return strlen($document) > 11 ? self::validateCNPJ($document) : self::validateCPF($document);
    }

    public static function Check($document)
    {
        if (empty($document))
            return false;

        $document = preg_replace('/[^0-9]/', '', $document);
        return strlen($document) > 11 ? 'CNPJ' : 'CPF';
    }

    public static function ValidateCPF($cpf)
    {
        // Verificar se foi informado
        if (empty($cpf))
            return false;

        // Remover caracteres especias
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        // Verifica se o numero de digitos informados
        if (strlen($cpf) != 11)
            return false;

        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{10}/', $cpf))
            return false;

        // Calcula os digitos verificadores para verificar se o
        // CPF é válido
        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{
                $c} * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf{
            $c} != $d)
                return false;
        }

        return true;
    }

    public static function ValidateCNPJ($cnpj)
    {
        // Verificar se foi informado
        if (empty($cnpj))
            return false;

        // Remover caracteres especias
        $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

        // Verifica se o numero de digitos informados
        if (strlen($cnpj) != 14)
            return false;

        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj))
            return false;

        $b = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        for ($i = 0, $n = 0; $i < 12; $n += $cnpj[$i] * $b[++$i]);

        if ($cnpj[12] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            return false;

        for ($i = 0, $n = 0; $i <= 12; $n += $cnpj[$i] * $b[$i++]);

        if ($cnpj[13] != ((($n %= 11) < 2) ? 0 : 11 - $n))
            return false;

        return true;
    }

    public static function Format($document)
    {
        if (empty($document)) 
            return false;
        
        return self::Check($document) === 'CPF' ? self::FormatCPF($document) : self::FormatCNPJ($document);
    }

    public static function FormatCNPJ($cnpj)
    {
        return Mask::Apply($cnpj, "##.###.###/####-##");
    }

    public static function FormatCPF($cpf)
    {
        return Mask::Apply($cpf, "###.###.###-##");
    }
}
