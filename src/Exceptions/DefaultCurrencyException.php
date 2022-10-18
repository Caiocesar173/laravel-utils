<?php

namespace Caiocesar173\Utils\Exceptions;

use Caiocesar173\Utils\Classes\ApiReturn;
use Exception;

class DefaultCurrencyException extends Exception
{
    public function render()
    {       
        return ApiReturn::ErrorMessage("Moeda padrão `BRL` não pode ser encontarda", "404");
    }
}
