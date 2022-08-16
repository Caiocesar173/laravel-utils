<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class PermissionItemNotFound extends Exception
{
    protected $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function render()
    {       
        return ApiReturn::ErrorMessage("O item de permissão '{$this->item}' não foi localizado", 404);
    }
}
