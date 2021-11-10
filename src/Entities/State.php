<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class State extends CustomModel
{
    protected $table = 'state';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'geonameid',
        'coutry',
        'latitude',
        'longitude',
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
