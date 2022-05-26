<?php

namespace Caiocesar173\Utils\Enum;

use Caiocesar173\Utils\Enum\CustomEnum;


/**
 * Will search the Status by the name informed and then return the id on statuses table
*/
abstract class StatusEnum extends CustomEnum
{
    const ACTIVE   = 'active';
    const INACTIVE = 'inactive';
    const BLOCKED  = 'blocked';
    const EXCLUDED = 'excluded';

    public static function lists() {
        return [
            self::ACTIVE   => 'active',
            self::INACTIVE => 'inactive',
            self::BLOCKED  => 'blocked',
            self::EXCLUDED => 'excluded'
        ];
    }
}