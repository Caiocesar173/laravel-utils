<?php

namespace Caiocesar173\Utils\Entities;

use Caiocesar173\Utils\Abstracts\ModelAbstract;
use Caiocesar173\Utils\Database\Factories\PermissionFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Permission extends ModelAbstract
{
    protected $table = 'permissions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'icon',
        'icon_type',
    ];

    protected static function newFactory(): Factory
    {
        return PermissionFactory::new();
    }
}
