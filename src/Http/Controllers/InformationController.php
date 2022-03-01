<?php

namespace Caiocesar173\Utils\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caiocesar173\Utils\Classes\ApiReturn;


class InformationController extends Controller
{
    public function information(Request $request)
    {   
        $user = auth()->user();
        
        $response = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'img' => $user->avatar,
            'role' => 0,
            'date' => null
        ];

        return ApiReturn::SuccessMessage('Informações', 200, $response);
    }
}
