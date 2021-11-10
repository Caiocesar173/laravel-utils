<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class Currency extends CustomModel
{
    protected $table = 'currency';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'currency_symbol',
        'tld',
        'country',
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
