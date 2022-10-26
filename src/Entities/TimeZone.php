<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\TimeZoneFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeZone extends ModelAbstract
{
    protected $table = 'time_zones';
    protected $primaryKey = 'id';

    protected $fillable = [
        'abbreviation',
        'offset',
        'offset_name',
        'name',
        'tz_name',
    ];

    protected static function newFactory(): Factory
    {
        return TimeZoneFactory::new();
    }
}
