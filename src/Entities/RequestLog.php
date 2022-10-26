<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\RequestLogFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestLog extends ModelAbstract
{
    protected $table = 'requests_logs';
    protected $primaryKey = 'id';

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
        'situation'
    ];

    protected static function newFactory(): Factory
    {
        return RequestLogFactory::new();
    }
}
