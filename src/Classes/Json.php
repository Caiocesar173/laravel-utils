<?php

namespace Caiocesar173\Utils\Classes;


class Json
{
    public static function isJson($string)
    {
        return is_string($string) && is_array(json_decode($string, true)) ? true : false;
    }

    public static function isJsonRequest()
    {
        return (request()->wantsJson() || request()->is('api/*'));
    }

    public static function String($valor) 
    {
        return nl2br(str_replace(' ', '&nbsp;', (json_encode(json_decode($valor), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))));
    }
}
