<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class TimeZoneMap extends CustomModel
{
    protected $table = 'time_zone_map';
    protected $primaryKey = 'id';

    protected $fillable = [
       'zone',
       'country'
    ];
   
    public static function rules($id = null, $merge = [])
    {
        //'field'  => 'required|min:11|max:14|unique:table,field' . ($id ? ',$id' : ''),

        return array_merge(
            [],
            $merge
        );
    }
}
