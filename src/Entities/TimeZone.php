<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class TimeZone extends ModelAbstract
{
    protected $table = 'time_zone';
    protected $primaryKey = 'id';

    protected $fillable = [
        'abbreviation',
        'offset',
        'offset_name',
        'name',
        'tz_name',
    ];
}
