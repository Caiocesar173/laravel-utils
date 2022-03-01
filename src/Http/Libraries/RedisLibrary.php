<?php

namespace Caiocesar173\Utils\Http\Libraries;

use Illuminate\Support\Facades\Redis;

class RedisLibrary
{
    public function infoRequest($request){
        $session = Redis::hgetall($request->bearerToken());
       
        if(empty($session))
            return false;

        $data = $session['token_data'];

        return json_decode(json_decode($data, true));
    }

    public function infoSession($token){
        $session = Redis::hgetall($token);
       
        if(empty($session))
            return false;

        return json_decode($session['token_data']);
    }
}