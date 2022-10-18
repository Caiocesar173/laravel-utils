<?php

namespace Caiocesar173\Utils\Exceptions;

use Exception;
use Caiocesar173\Utils\Classes\Arrays;
use Caiocesar173\Utils\Classes\ApiReturn;

class ValidatorException extends Exception
{
    protected $code;
    protected $message;

    public function __construct(string $message, int $code = 400, array $validatorErrors = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->validatorErrors = $validatorErrors;
    }

    public function render()
    {       
        $data = [
			'status' => false,
			'description' => $this->message
		];

        if(!empty($this->validatorErrors))
            $data['validation'] = Arrays::Flatten($this->validatorErrors);

		return ApiReturn::KeyMessage($this->message, $this->code, $data, 'error', null, false);
    }
}
