<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Respect the following s while creating new route files:
|   
| File Name
| route_description.php
|
| File Content: 
|
| <?php
|   use App\Http\Controllers\Controller;
|   use Illuminate\Support\Facades\Route;
|
|
|   Route::middleware(['Log:api.{resource}', 'auth:api', 'AccessControl'])->prefix('/')->group(function () use ($controller) {
|       Route::get('/{resource}' ,['as' => 'user.{resource}' ,'uses' => "$controller@{resource}"]);
|   });
*/

use Caiocesar173\Utils\Classes\Routes;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->prefix('api')->group(function () {
    Routes::RequirePath(__DIR__ . '/api');
});
