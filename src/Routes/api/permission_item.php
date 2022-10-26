<?php

use Illuminate\Support\Facades\Route;
use Caiocesar173\Utils\Http\Controllers\Permission\PermissionItemController;

$controller = PermissionItemController::class;

Route::middleware(['Log:api.permission_item', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_item')->group(function () use ($controller) {
    Route::apiResource('item', "$controller");
    Route::get('item/{item}/audit'   ,['as' => 'permission_item.audit'   ,'uses' => "$controller@audit"   ]);
    Route::get('item/{item}/recover' ,['as' => 'permission_item.recover' ,'uses' => "$controller@recover" ]);
    Route::get('item/{item}/block'   ,['as' => 'permission_item.block'   ,'uses' => "$controller@block"   ]);
    Route::get('item/{item}/unblock' ,['as' => 'permission_item.unblock' ,'uses' => "$controller@unblock" ]);
});
