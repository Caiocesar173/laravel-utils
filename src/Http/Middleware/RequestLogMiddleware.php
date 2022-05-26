<?php

namespace Caiocesar173\Utils\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Caiocesar173\Utils\Classes\Network;
use Caiocesar173\Utils\Repositories\RequestLogRepository;

class RequestLogMiddleware
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
       
        $userAgent = $request->userAgent();
        $ip = Network::GetIP();
        $url = $request->url();
        $token = $request->bearerToken();
        $header = $request->header();
        $body = $request->all();
        $type= $request->method();

        if(empty($body))
            $body = '{}';

        if(empty($body))
            $response = '{}';

        //IP validation adds another request that makes the api 1.5s more slow
        //$location = json_encode(Location::get($ip));

        $data = [
            'route' => $route,
            'user_agent' => json_encode($userAgent,true),
            'url' => $url,
            'type' => $type,
            'body' => json_encode($body, true),
            'header' => json_encode($header, true),
            'response' => json_encode($response, true),
            'token' => $token,
            'url' => $url,
            'ip' => $ip,
            //'mac' => $mac,
            //'location' => $location,
        ];
        
        $log = app(RequestLogRepository::class)->create($data);
        
        $response = $next($request);
        $log->response = json_encode($response, true);
        $log->code = $response->status();
        $log->status = $log->code >= 200 && $log->code <= 300 ? 'successful' : 'falied';
        $log->save();

        return $response;
    }
}
