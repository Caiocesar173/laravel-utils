<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class Country extends CustomModel
{
    protected $table = 'country';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
		'code',
		'capital',
		'region',
        'subregion',
        'latitude',
        'longitude',
        'emoji',
        'emojiU',
		'geonameid',
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
