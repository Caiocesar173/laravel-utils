<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class InactiveException extends Exception
{
    protected $id;
    protected $entityName;

    public function __construct($id, $entityName)
    {
        $this->id = $id;
        $this->entityName = $entityName;
    }

    public function render()
    {       
        return ApiReturn::ErrorMessage("O registro com o código {$this->id} do tipo {$this->entityName} se encontra inativo no momento", 409);
    }
}
