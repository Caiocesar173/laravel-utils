<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class RequestLog extends ModelAbstract
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
}
