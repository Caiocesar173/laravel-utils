<?php 

namespace Caiocesar173\Utils\Classes;

use Exception;
use Illuminate\Support\Facades\Response;

########################################
#                Errors                # 
########################################
define('DefaultError', ApiReturn::ErrorMessage());

########################################
#               Success                # 
########################################
define('DefaultSuccess', ApiReturn::SuccessMessage());


class ApiReturn
{
	const DefaultError = DefaultError;
	const DefaultSuccess = DefaultSuccess;

	public static function ErrorException(Exception $exception, $code = 409, $status = false)
	{	
		$error = $exception->getMessage();
		if(env('APP_DEBUG') === true)
			$error = $exception->getTraceAsString();

		return self::ErrorMessage($error, $code, $status);
	}

	public static function ErrorMessage($message = 'Ops, algo deu errado...', $code = 409, $status = false)
	{
		$data = [
			'status' => $status,
			'description' => $message
		];

		return self::KeyMessage($message, $code, $data, 'error', null, $status);
	}

	public static function SuccessMessage($message = 'Successo', $code = 200, $data = [], $redirect = null, $status = true)
	{
		return self::KeyMessage($message, $code, $data, 'data', $redirect, $status);
	}

	public static function KeyMessage($message = 'Successo', $code = 200, $data = [], $keyName = 'data', $redirect = null, $status = true)
	{
		$response = [];
		
		if($code >= 200 && $code <= 300)
			$response = [
				'status' => $status,
				'description' => $message	
			];

		if(!empty($data))
			$response[$keyName] = $data;

		if(!is_null($redirect))
		{
			if(!is_array($redirect) && !is_string($redirect))
				throw new \Exception("Redirect must be type array or string", 1);

			if(is_array($redirect))
				$response['redirect'] = $redirect;
				
			if(is_string($redirect))
				$response['redirect'] = $redirect;
		}

		return  Response::json($response, $code);
	}

	public static function Stream($callback, $headers, $code = 200)
	{
		return Response::stream($callback, $code, $headers);
	}
}