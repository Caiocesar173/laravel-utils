<?php

use Caiocesar173\Utils\Http\Controllers\Permission\PermissionController;
use Illuminate\Support\Facades\Route;

$controller = PermissionController::class;

Route::middleware(['Log:api.permission_group', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_group')->group(function () use ($controller) {
    Route::apiResource('group', $controller);
    Route::get('group/{permission}/audit'   ,['as' => 'permission_group.audit'   ,'uses' => "$controller@audit"   ]);
    Route::get('group/{permission}/recover' ,['as' => 'permission_group.recover' ,'uses' => "$controller@recover" ]);
    Route::get('group/{permission}/block'   ,['as' => 'permission_group.block'   ,'uses' => "$controller@block"   ]);
    Route::get('group/{permission}/unblock' ,['as' => 'permission_group.unblock' ,'uses' => "$controller@unblock" ]);
});
