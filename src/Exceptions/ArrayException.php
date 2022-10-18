<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;

class ArrayException extends Exception
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {       
        return $this->data;
    }
}
