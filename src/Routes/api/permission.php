<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\PermissionController;

Route::middleware(['Log:api.permission_group', 'auth:api', 'AccessControl'])->prefix('permission_group')->as('permission_group')->group(function () {
    Route::apiResource('permission_group', PermissionController::class);
    Route::as('permission_group.recover')->put('recover/{id}', [PermissionController::class, 'recover']);
});
