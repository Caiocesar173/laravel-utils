<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\PermissionMapController;


if (env('UTILS_API_PERMISSION_ROUTES_ENABLE') === TRUE) 
{
    Route::middleware(['Log:api.permission_map', 'auth:api', 'AccessControl'])->prefix('permission_map')->as('permission_map')->group(function() {
        Route::apiResource('permission_map', PermissionMapController::class);
        Route::as('permission_map.recover')->put('recover/{id}' ,[PermissionMapController::class, 'recover']);    
    });
}