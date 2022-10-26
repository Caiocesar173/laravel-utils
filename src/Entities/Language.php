<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\LanguageFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Language extends ModelAbstract
{
    protected $table = 'languages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'name',
        'nativeName'
    ];

    protected static function newFactory(): Factory
    {
        return LanguageFactory::new();
    }
}
