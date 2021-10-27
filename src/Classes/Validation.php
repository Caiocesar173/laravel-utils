<?php

namespace Caiocesar173\Utils\Classes;

use Illuminate\Support\Facades\Validator;


class Validation
{
    public static function Validate($request, $fields = [], $rules = 'required')
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            self::createValidate($fields, $rules)
        );
        
        if ($validator->fails())
            return false;

        return true;
    }

    public static function ValidateArray($data, $fields = [], $rules = 'required')
    {   
        $validator = Validator::make(
            $data,
            self::createValidate($fields, $rules)
        );
    
        if ($validator->fails())
            return false;

        return true;
    }

    private static function createValidate($fields, $rules)
    {
        $data = [];

        foreach($fields as $field){
           $data[$field] = $rules; 
        }

        return $data;
    }
}