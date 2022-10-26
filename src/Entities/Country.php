<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\CountryFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Country extends ModelAbstract
{
    protected $table = 'countries';
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
        'continent',
    ];

    protected static function newFactory(): Factory
    {
        return CountryFactory::new();
    }
}
