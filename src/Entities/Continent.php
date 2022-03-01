<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Continent extends ModelAbstract
{
    protected $table = 'continent';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
		'code',
    ];
}
