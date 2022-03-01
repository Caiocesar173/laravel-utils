<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class LanguageMap extends ModelAbstract
{
    protected $table = 'language_map';
    protected $primaryKey = 'id';

    protected $fillable = [
        'country',
        'language'
    ];

    protected $casts = [
        'code' => 'array',
        'usage' => 'array'
    ];
}
