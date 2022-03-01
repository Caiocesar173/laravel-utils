<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class SetUserApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        if(env('UTILS_AUTHENTICATION_ENABLE'))
        {
            $user = JWTAuth::setToken($request->bearerToken())->toUser();
            auth()->setUser($user);
        }

        return $next($request);
    }
}
