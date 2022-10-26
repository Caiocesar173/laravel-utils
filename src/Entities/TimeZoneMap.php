<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\TimeZoneMapFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeZoneMap extends ModelAbstract
{
    protected $table = 'time_zone_maps';
    protected $primaryKey = 'id';

    protected $fillable = [
       'zone',
       'country'
    ];

    protected static function newFactory(): Factory
    {
        return TimeZoneMapFactory::new();
    }
}
