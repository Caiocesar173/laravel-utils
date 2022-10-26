<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\ContinentFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Continent extends ModelAbstract
{
    protected $table = 'continents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
		'code',
    ];

    protected static function newFactory(): Factory
    {
        return ContinentFactory::new();
    }
}
