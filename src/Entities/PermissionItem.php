<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\PermissionItemFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionItem extends ModelAbstract
{
    protected $table = 'permission_items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'code',
        'icon',
        'icon_type',
        'type',
        'status',
    ];

    protected static function newFactory(): Factory
    {
        return PermissionItemFactory::new();
    }
}
