<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
class City extends ModelAbstract
{
    protected $table = 'cities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'uf',
        'name',
        'state',
        'latitude',
        'longitude',
        'geonameid',
    ];

    protected static function newFactory(): Factory
    {
        return CityFactory::new();
    }
}
