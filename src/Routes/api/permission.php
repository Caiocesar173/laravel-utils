<?php

use Caiocesar173\Utils\Http\Controllers\Permission\PermissionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['Log:api.permission_group', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_group')->group(function () {
    Route::apiResource('group', PermissionController::class);
    Route::get('group/{permission}/audit'   ,['as' => 'permission_group.audit'   ,'uses' => [PermissionController::class, 'audit'  ] ]);
    Route::get('group/{permission}/recover' ,['as' => 'permission_group.recover' ,'uses' => [PermissionController::class, 'recover'] ]);
    Route::get('group/{permission}/block'   ,['as' => 'permission_group.block'   ,'uses' => [PermissionController::class, 'block'  ] ]);
    Route::get('group/{permission}/unblock' ,['as' => 'permission_group.unblock' ,'uses' => [PermissionController::class, 'unblock'] ]);
});
