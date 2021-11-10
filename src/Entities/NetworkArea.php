<?php

namespace  Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class NetworkArea extends CustomModel
{
    protected $table = 'network_area';
    protected $primaryKey = 'id';

    protected $fillable = [
        'hosts',
        'users',
        'level_domain',
        'iso2',
        'iso3',
        'iso_numeric',
        'area_km2',
        'e164'
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
