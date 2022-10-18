<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class PermissionGroupNotFound extends Exception
{
    protected $group;

    public function __construct($group)
    {
        $this->group = $group;
    }

    public function render()
    {       
        return ApiReturn::ErrorMessage("O grupo de permissão '{$this->group}' não foi localizado", 404);
    }
}
