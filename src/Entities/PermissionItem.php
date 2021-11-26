<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class PermissionItem extends CustomModel 
{
    protected $table = 'permission_item';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'code',
        'status_id',
        'icon',
        'icon_type'
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

