<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\StateFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class State extends ModelAbstract
{
    protected $table = 'states';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'geonameid',
        'country',
        'latitude',
        'longitude',
    ];

    protected static function newFactory(): Factory
    {
        return StateFactory::new();
    }
}
