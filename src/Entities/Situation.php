<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Situation extends ModelAbstract
{
    protected $table = 'situation';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'visible',
        'active',
        'responsable'
    ];
}
