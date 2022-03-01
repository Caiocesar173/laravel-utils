<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class TimeZoneMap extends ModelAbstract
{
    protected $table = 'time_zone_map';
    protected $primaryKey = 'id';

    protected $fillable = [
       'zone',
       'country'
    ];
}
