<?php

namespace  Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class PhoneArea extends ModelAbstract
{
    protected $table = 'phone_area';
    protected $primaryKey = 'id';

    protected $fillable = [
        'code',
        'mobile',
        'landline',
        'gdp'
    ];
}
