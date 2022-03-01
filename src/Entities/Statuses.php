<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Statuses extends ModelAbstract
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'visible',
        'active',
        'responsable'
    ];
}
