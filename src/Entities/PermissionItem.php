<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class PermissionItem extends ModelAbstract 
{
    protected $table = 'permission_item';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'code',
        'status_id',
        'icon',
        'icon_type',
        'type'
    ];
}

