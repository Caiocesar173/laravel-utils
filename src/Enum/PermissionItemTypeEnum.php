<?php

namespace Caiocesar173\Utils\Enum;

use Caiocesar173\Utils\Enum\CustomEnum;


/**
 * Will search the Status by the name informed and then return the id on statuses table
*/
abstract class PermissionItemTypeEnum extends CustomEnum
{
    const ROUTE = 'rotue';
    const ITEM  = 'item';

    public static function lists() {
        return [
            self::ROUTE => 'Route',
            self::ITEM  => 'Item',
        ];
    }
}