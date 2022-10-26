<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\LoginController;

$controller = LoginController::class;

Route::get('login'  ,['as' => 'login'      ,'uses' => "$controller@unauthorized" ]);
Route::post('login' ,['as' => 'auth.login' ,'uses' => "$controller@login"        ]);

Route::middleware(['Log:api.auth', 'auth:api', 'AccessControl'])->prefix('auth')->group(function () use ($controller) {
    Route::post('logout', ['as' => 'auth.logout', 'uses' => "$controller@logout" ]);
});
