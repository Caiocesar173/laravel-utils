<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class Permission extends CustomModel 
{
    protected $table = 'permission';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'code',
        'icon',
        'icon_type',
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

