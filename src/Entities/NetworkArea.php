<?php

namespace  Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\NetworkAreaFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NetworkArea extends ModelAbstract
{
    protected $table = 'network_areas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'hosts',
        'users',
        'level_domain',
        'iso2',
        'iso3',
        'iso_numeric',
        'area_km2',
        'e164',
        'country',
    ];

    protected static function newFactory(): Factory
    {
        return NetworkAreaFactory::new();
    }
}
