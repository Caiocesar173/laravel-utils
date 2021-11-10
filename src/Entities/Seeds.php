<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class Seeds extends CustomModel
{
    protected $table = 'seeds';
    protected $primaryKey = 'id';

    protected $fillable = [
        'seed',
        'batch',
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
