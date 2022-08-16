<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\ApiReturn;

class ApiException extends Exception
{
    protected $code;
    protected $message;

    public function __construct(string $message, int $code = 400)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function render()
    {       
        return ApiReturn::ErrorMessage($this->message, $this->code);
    }
}
