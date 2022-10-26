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

$controller = UserController::class;

Route::middleware(['Log:api.user.create'])->post('register' ,['as' => 'user.register' ,'uses' => "$controller@store" ]);

Route::middleware(['Log:api.user', 'auth:api', 'AccessControl'])->prefix('/')->group(function () use ($controller) {
    Route::get('user/list'                ,['as' => 'user.index'       ,'uses' => "$controller@index"       ]);
    Route::get('user/search/{user?}'      ,['as' => 'user.show'        ,'uses' => "$controller@show"        ]);
    Route::put('user/update/{user?}'      ,['as' => 'user.update'      ,'uses' => "$controller@update"      ]);
    Route::delete('user/destroy/{user?}'  ,['as' => 'user.destroy'     ,'uses' => "$controller@destroy"     ]);
    Route::get('user/permission/{user?}'  ,['as' => 'user.permission'  ,'uses' => "$controller@permission"  ]);
    Route::get('user/information/{user?}' ,['as' => 'user.information' ,'uses' => "$controller@information" ]);
    Route::get('user/audit/{user?}'       ,['as' => 'user.audit'       ,'uses' => "$controller@audit"       ]);
    Route::get('user/recover/{user?}'     ,['as' => 'user.recover'     ,'uses' => "$controller@recover"     ]);
    Route::get('user/block/{user?}'       ,['as' => 'user.block'       ,'uses' => "$controller@block"       ]);
    Route::get('user/unblock/{user?}'     ,['as' => 'user.unblock'     ,'uses' => "$controller@unblock"     ]);
});
