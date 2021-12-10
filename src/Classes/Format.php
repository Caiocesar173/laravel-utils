<?php

namespace Caiocesar173\Utils\Classes;


class Format
{
    public static function OnlyNumber($numero)
    {
        return preg_replace('/[^0-9]/', '', $numero);
    }
    
    public static function Phone($numero)
    {
        $numero = self::OnlyNumber($numero);
        if (empty($numero)) 
            return '';

        return vsprintf('(%2d) %5d-%4d', sscanf($numero, '%2d%5d%4d'));
    }

    public static function Coin(Float $numero, String $prefix = 'R$')
    {
        return $prefix . self::Number($numero, 2);
    }

    public static function Number($numero, $decinal = 2)
    {
        return number_format($numero, $decinal, ',', '.');
    }
    
}
