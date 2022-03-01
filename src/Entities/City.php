<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class City extends ModelAbstract 
{
    protected $table = 'city';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'uf',
        'name'
    ];
}

