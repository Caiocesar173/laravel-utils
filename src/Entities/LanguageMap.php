<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class LanguageMap extends CustomModel
{
    protected $table = 'language_map';
    protected $primaryKey = 'id';

    protected $fillable = [
        'country',
        'language'
    ];

    protected $casts = [
        'code' => 'array',
        'usage' => 'array'
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
