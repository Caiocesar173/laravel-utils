<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\PhoneAreaFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneArea extends ModelAbstract
{
    protected $table = 'phone_areas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'mobile',
        'landline',
        'gdp',
        'country',
    ];

    protected static function newFactory(): Factory
    {
        return PhoneAreaFactory::new();
    }
}
