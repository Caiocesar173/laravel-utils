<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class RouteNotFoundException extends Exception
{
    protected $entityName;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function render()
    {       
        return ApiReturn::ErrorMessage("O item de rota '{$this->route}' não foi localizado", 404);
    }
}
