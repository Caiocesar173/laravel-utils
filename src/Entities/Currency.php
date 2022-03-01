<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Currency extends ModelAbstract
{
    protected $table = 'currency';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'currency_symbol',
        'tld',
        'country',
    ];
}
