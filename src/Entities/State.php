<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class State extends ModelAbstract
{
    protected $table = 'state';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'geonameid',
        'coutry',
        'latitude',
        'longitude',
    ];
}
