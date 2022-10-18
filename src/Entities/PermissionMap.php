<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;


class PermissionMap extends ModelAbstract 
{
    protected $table = 'permission_maps';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'responsable_id',
        'responsable_type',

        'permission_id',
        'permission_type',
    ];

}

