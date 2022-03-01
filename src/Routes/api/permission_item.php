<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\PermissionItemController;


if (env('UTILS_API_PERMISSION_ROUTES_ENABLE') === TRUE) 
{
    Route::prefix('permission_item')->as('permission_item')->group(function() {
        Route::apiResource('permission_item', PermissionItemController::class);
        Route::as('permission_item.recover')->put('recover/{id}' ,[PermissionItemController::class, 'recover']);
    });
}