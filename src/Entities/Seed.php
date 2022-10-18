<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;

class Seed extends ModelAbstract
{
    protected $table = 'seeds';
    protected $primaryKey = 'id';

    protected $fillable = [
        'seed',
        'batch',
    ];
}
