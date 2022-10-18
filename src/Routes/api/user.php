<?php

use Caiocesar173\Utils\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| 
|
| **On this specific case is necessary to define routes manually**
*/

Route::middleware(['Log:api.user.create'])->post('register' ,['as' => 'user.register'   ,'uses' => [UserController::class, 'store'] ]);

Route::middleware(['Log:api.user', 'auth:api', 'AccessControl'])->prefix('/')->group(function() {
    Route::get('user/list'                ,['as' => 'user.index'       ,'uses' => [UserController::class, 'index'       ] ]);
    Route::get('user/search/{user?}'      ,['as' => 'user.show'        ,'uses' => [UserController::class, 'show'        ] ]);
    Route::put('user/update/{user?}'      ,['as' => 'user.update'      ,'uses' => [UserController::class, 'update'      ] ]);
    Route::delete('user/destroy/{user?}'  ,['as' => 'user.destroy'     ,'uses' => [UserController::class, 'destroy'     ] ]);
    Route::get('user/permission/{user?}'  ,['as' => 'user.permission'  ,'uses' => [UserController::class, 'permission'  ] ]);
    Route::get('user/information/{user?}' ,['as' => 'user.information' ,'uses' => [UserController::class, 'information' ] ]);
    Route::get('user/audit/{user?}'       ,['as' => 'user.audit'       ,'uses' => [UserController::class, 'audit'       ] ]);
    Route::get('user/recover/{user?}'     ,['as' => 'user.recover'     ,'uses' => [UserController::class, 'recover'     ] ]);
    Route::get('user/block/{user?}'       ,['as' => 'user.block'       ,'uses' => [UserController::class, 'block'       ] ]);
    Route::get('user/unblock/{user?}'     ,['as' => 'user.unblock'     ,'uses' => [UserController::class, 'unblock'     ] ]);
});
