<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class NotAllowedException extends Exception
{
    public function render()
    {       
        return ApiReturn::ErrorMessage("Usuário não tem premissão para acessar este recurso" ,401);
    }
}
