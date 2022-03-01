<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\PermissionController;

   

if (env('UTILS_API_PERMISSION_ROUTES_ENABLE') === TRUE) 
{
    Route::prefix('permission_group')->as('permission_group')->group(function() {
        Route::apiResource('permission_group', PermissionController::class);
        Route::as('permission_group.recover')->put('recover/{id}' ,[PermissionController::class, 'recover']);
    });
}