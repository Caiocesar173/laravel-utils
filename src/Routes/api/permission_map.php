<?php

use Caiocesar173\Utils\Http\Controllers\Permission\PermissionMapController;
use Illuminate\Support\Facades\Route;

Route::middleware(['Log:api.permission_map', 'auth:api', 'AccessControl'])->prefix('permission/')->as('permission_map')->group(function () {
    Route::apiResource('map', PermissionMapController::class);
    Route::get('map/{map}/audit'   ,['as' => 'permission_map.audit'   ,'uses' => [PermissionMapController::class, 'audit'  ] ]);
    Route::get('map/{map}/recover' ,['as' => 'permission_map.recover' ,'uses' => [PermissionMapController::class, 'recover'] ]);
    Route::get('map/{map}/block'   ,['as' => 'permission_map.block'   ,'uses' => [PermissionMapController::class, 'block'  ] ]);
    Route::get('map/{map}/unblock' ,['as' => 'permission_map.unblock' ,'uses' => [PermissionMapController::class, 'unblock'] ]);
});
