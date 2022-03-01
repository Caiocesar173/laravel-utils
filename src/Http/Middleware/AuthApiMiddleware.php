<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;

use Caiocesar173\Utils\Classes\ApiReturn;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\UserNotDefinedException;


class AuthApiMiddleware
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role = '')
    {   
        if(env('UTILS_AUTHENTICATION_ENABLE'))
        {
            try {
                if (!JWTAuth::parseToken()->authenticate())
                    return ApiReturn::ErrorMessage('Usuario não encontrado', 404);
            } catch (UserNotDefinedException $e) {
                return ApiReturn::ErrorMessage('Usuário não definido', 401);
            } catch (TokenExpiredException $e) {
                return ApiReturn::ErrorMessage('Token Expirado', 401);
            } catch (TokenInvalidException $e) {
                return ApiReturn::ErrorMessage('Token Invalido', 401);
            } catch (JWTException $e) {
                return ApiReturn::ErrorMessage('Token Ausente', 401);
            }
        }
        
        return $next($request);
    }
}
