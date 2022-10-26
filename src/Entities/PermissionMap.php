<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\PermissionMapFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

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

    protected static function newFactory(): Factory
    {
        return PermissionMapFactory::new();
    }
}
