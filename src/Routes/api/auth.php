<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\LoginController;


if (env('UTILS_API_AUTH_ROUTES_ENABLE') === TRUE) 
{
    Route::as('login')->get('login' ,[LoginController::class, 'unauthorized']);
    Route::as('auth.login')->post('login' ,[LoginController::class, 'login']);

    Route::middleware(['Log:api.auth', 'auth:api', 'AccessControl'])->prefix('auth')->group(function() {
        Route::as('auth.logout')->post('logout' ,[LoginController::class, 'logout' ]);
    });
}
