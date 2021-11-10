<?php

namespace Caiocesar173\Utils\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Json
{
    public static function isJson($string)
    {
        return is_string($string) && is_array(json_decode($string, true)) ? true : false;
    }
}