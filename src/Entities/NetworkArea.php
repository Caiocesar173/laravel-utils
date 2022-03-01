<?php

namespace  Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class NetworkArea extends ModelAbstract
{
    protected $table = 'network_area';
    protected $primaryKey = 'id';

    protected $fillable = [
        'hosts',
        'users',
        'level_domain',
        'iso2',
        'iso3',
        'iso_numeric',
        'area_km2',
        'e164'
    ];
}
