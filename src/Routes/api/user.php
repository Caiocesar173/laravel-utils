<?php

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

Route::middleware(['Log:api.user.create'])->post('register' ,['as' => 'user.register'   ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@store']);

Route::middleware(['Log:api.user', 'auth:api', 'AccessControl'])->prefix('/')->group(function() {
    Route::get('user/list'                ,['as' => 'user.index'  ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@index'  ]);
    Route::get('user/search/{user?}'      ,['as' => 'user.show'  ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@show'  ]);
    Route::put('user/update/{user?}'      ,['as' => 'user.update'  ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@update'  ]);
    Route::delete('user/destroy/{user?}'  ,['as' => 'user.destroy'  ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@destroy'  ]);
    Route::get('user/permission/{user?}'  ,['as' => 'user.permission'  ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@permission'  ]);
    Route::get('user/information/{user?}' ,['as' => 'user.information' ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@information' ]);
    Route::get('user/audit/{user/}'       ,['as' => 'user.audit'       ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@audit'       ]);
    Route::get('user/recover/{user/}'     ,['as' => 'user.recover'     ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@recover'     ]);
    Route::get('user/block/{user/}'       ,['as' => 'user.block'       ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@block'       ]);
    Route::get('user/unblock/{user/}'     ,['as' => 'user.unblock'     ,'uses' => 'Caiocesar173\Utils\Http\Controllers\UserController@unblock'     ]);
});
