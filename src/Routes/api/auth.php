<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\LoginController;
use Caiocesar173\Utils\Http\Controllers\InformationController;


if (env('UTILS_API_AUTH_ROUTES_ENABLE') === TRUE) 
{
    Route::as('auth.login')->post('auth' ,[LoginController::class, 'login']);

    Route::middleware(['AuthApi', 'SetUserApi', 'AccessControl'])->prefix('auth')->group(function() {
        Route::as('auth.logout')->post('logout' ,[LoginController::class, 'logout' ]);
        Route::as('auth.permission')->get('permission' ,[InformationController::class, 'permission' ]);
        Route::as('auth.information')->get('information' ,[InformationController::class, 'information' ]);
    });
}
