<?php

namespace Caiocesar173\Utils\Enum;

abstract class CustomEnum
{
    abstract public static function lists();

    public static function getValue($key)
    {
        $list = static::lists();

        if (!isset($list[$key]))
            return '';

        return $list[$key];
    }

    public static function keys()
    {
        return array_keys(static::lists());
    }
}