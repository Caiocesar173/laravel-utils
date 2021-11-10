<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class TimeZone extends CustomModel
{
    protected $table = 'time_zone';
    protected $primaryKey = 'id';

    protected $fillable = [
        'abbreviation',
        'offset',
        'offset_name',
        'name',
        'tz_name',
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
