<?php

use Caiocesar173\Utils\Http\Controllers\Permission\PermissionItemController;
use Illuminate\Support\Facades\Route;

Route::middleware(['Log:api.permission_item', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_item')->group(function () {
    Route::apiResource('item', PermissionItemController::class);
    Route::get('item/{item}/audit'   ,['as' => 'permission_item.audit'   ,'uses' => [PermissionItemController::class, 'audit'  ] ]);
    Route::get('item/{item}/recover' ,['as' => 'permission_item.recover' ,'uses' => [PermissionItemController::class, 'recover'] ]);
    Route::get('item/{item}/block'   ,['as' => 'permission_item.block'   ,'uses' => [PermissionItemController::class, 'block'  ] ]);
    Route::get('item/{item}/unblock' ,['as' => 'permission_item.unblock' ,'uses' => [PermissionItemController::class, 'unblock'] ]);
});
