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
|   Route::middleware(['BackLog:web', 'web'])->group(function() {
|       Route::get('/', [Controller::class, 'index']);
|   });
*/

$routes = array_diff(scandir(__DIR__.'/api'), array('..', '.'));

(env('UTILS_API_ROUTES_ENABLE') === TRUE) ? require_api_routes($routes) : '';

function require_api_routes($routes)
{
    foreach($routes as $route) {
        require_once("api/$route");
    }
}