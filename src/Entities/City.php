<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class City extends CustomModel 
{
    protected $table = 'city';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'uf',
        'name'
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

