<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class Permission extends ModelAbstract 
{
    protected $table = 'permission';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'icon',
        'icon_type',
    ];
}
