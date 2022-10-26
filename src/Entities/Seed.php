<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\SeedFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Seed extends ModelAbstract
{
    protected $table = 'seeds';
    protected $primaryKey = 'id';

    protected $fillable = [
        'seed',
        'batch',
    ];

    protected static function newFactory(): Factory
    {
        return SeedFactory::new();
    }
}
