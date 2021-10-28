<?php 

namespace Caiocesar173\Utils\Classes;


class Arrays
{
    public static function Flatten(array $array) {
        $flatten = array();
        array_walk_recursive($array, function($value) use(&$flatten) {
            $flatten[] = $value;
        });
    
        return $flatten;
    }
}