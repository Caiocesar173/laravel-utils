<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use Caiocesar173\Utils\Classes\Network;
use Caiocesar173\Utils\Repositories\RequestValidationRepository;


class RequestValidationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $route)
    {
        $response = null;
        $url = $request->url();
        $body = $request->all();

        if(empty($body))
            $body = '{}';

        if(empty($body))
            $response = '{}';


        $data = [
            'url' => $url,
            'body' => json_encode($body, true),
        ];
        
        $log = app(RequestValidationRepository::class)->create($data);
        if(is_string($log))
            return false;

        $log->delete();
        return $next($request);
    }
}
