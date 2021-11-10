<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class Statuses extends CustomModel
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'visible',
        'active',
        'responsable'
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
