<?php

namespace Caiocesar173\Utils\Enum;

use Caiocesar173\Utils\Abstracts\EnumAbstract;

/**
 * Will search the Status by the name informed and then return the id on statuses table
 */
abstract class StatusEnum extends EnumAbstract
{
    const ACTIVE   = 'active';
    const INACTIVE = 'inactive';
    const BLOCKED  = 'blocked';

    public static function lists()
    {
        return [
            self::ACTIVE   => 'active',
            self::INACTIVE => 'inactive',
            self::BLOCKED  => 'blocked',
        ];
    }
}
