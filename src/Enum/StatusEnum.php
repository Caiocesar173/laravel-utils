<?php

namespace Caiocesar173\Utils\Enum;

use Caiocesar173\Utils\Enum\CustomEnum;


/**
 * Will search the Status by the name informed and then return the id on statuses table
*/
abstract class StatusEnum extends CustomEnum
{

    const ACTIVE   = 'ativo';
    const INACTIVE = 'inativo';
    const BLOCKED  = 'bloqueado';
    const EXCLUDED = 'excluded';

    public static function lists() {
        return [
            self::ACTIVE   => 'Ativo',
            self::INACTIVE => 'Inativo',
            self::BLOCKED  => 'Bloqueado',
            self::EXCLUDED => 'Excluded'
        ];
    }
}