<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\LanguageMapFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageMap extends ModelAbstract
{
    protected $table = 'language_maps';
    protected $primaryKey = 'id';

    protected $fillable = [
        'country',
        'language'
    ];

    protected $casts = [
        'code' => 'array',
        'usage' => 'array'
    ];

    protected static function newFactory(): Factory
    {
        return LanguageMapFactory::new();
    }
}
