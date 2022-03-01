<?php

namespace Caiocesar173\Utils\Classes;

class Mask
{
    //Remember to pass a clean string for the mask
    public static function Apply($mask, $str)
    {
        for($i=0;$i<strlen($str);$i++)
            $mask[strpos($mask,"#")] = $str[$i];

        return $mask;
    }
}