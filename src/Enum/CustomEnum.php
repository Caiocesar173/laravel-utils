<?php

namespace Caiocesar173\Utils\Enum;

abstract class CustomEnum
{
    abstract public static function lists();

    public static function getValue($key)
    {
        $lista = static::lists();

        if (!isset($lista[$key])):
            return '';
        endif;

        return $lista[$key];
    }

    public static function keys()
    {
        return array_keys(static::lists());
    }
}