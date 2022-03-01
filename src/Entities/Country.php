<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Country extends ModelAbstract
{
    protected $table = 'country';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
		'code',
		'capital',
		'region',
        'subregion',
        'latitude',
        'longitude',
        'emoji',
        'emojiU',
		'geonameid',
    ];
}
