<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Http\Model\CustomModel;


class RequestLog extends CustomModel
{
    protected $table = 'requests_log';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'route',
        'user_agent',
        'status',
        'code',
        'url',
        'type',
        'body',
        'header',
        'response',
        'token',
        'url',
        'ip',
        'mac',
        'location',
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
