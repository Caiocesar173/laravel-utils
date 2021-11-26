<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class PermissionMap extends CustomModel 
{
    protected $table = 'permission_map';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'permission_id',
        'permission_item_id'
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

