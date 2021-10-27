<?php 

namespace Caiocesar173\Utils\Classes;

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
	

	public static function ErrorMessage($message = 'Ops, algo deu errado...', $code = 409, $status = false){
		return Response::json([
			'error' => [
				'status' => $status,
				'description' => $message
			]
		], $code);
	}

	public static function SuccessMessage($message = 'Success', $code = 200, $data = [], $redirect = null, $status = true){
		$response = [
			'status' => $status,
			'description' => $message	
		];

		if(!empty($data))
			$response['data'] = $data;

		#Redirect must be type array or string
		if(is_array($redirect))
			$response['redirect'] = $redirect;
			
		if(is_string($redirect))
			$response['redirect'] = $redirect;

		return  Response::json($response, $code);
	}
}