<?php

namespace  Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class PhoneArea extends CustomModel
{
    protected $table = 'phone_area';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'mobile',
        'landline',
        'gdp'
    ];

    public static function rules($id = null, $merge = [])
    {
        //'field'  => 'required|min:11|max:14|unique:table,field' . ($id ? ",$id" : ''),

        return array_merge(
            [],
            $merge
        );
    }
}
