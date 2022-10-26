<?php

use Caiocesar173\Utils\Http\Controllers\Permission\PermissionMapController;
use Illuminate\Support\Facades\Route;

$controller = PermissionMapController::class;

Route::middleware(['Log:api.permission_map', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_map')->group(function () use ($controller) {
    Route::apiResource('map', $controller);
    Route::get('map/{map}/audit'   ,['as' => 'permission_map.audit'   ,'uses' => "$controller@audit"   ]);
    Route::get('map/{map}/recover' ,['as' => 'permission_map.recover' ,'uses' => "$controller@recover" ]);
    Route::get('map/{map}/block'   ,['as' => 'permission_map.block'   ,'uses' => "$controller@block"   ]);
    Route::get('map/{map}/unblock' ,['as' => 'permission_map.unblock' ,'uses' => "$controller@unblock" ]);
});
