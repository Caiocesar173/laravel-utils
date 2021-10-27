<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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

$routes = array_diff(scandir(__DIR__.'/web'), array('..', '.'));

(env('UTILS_WEB_ROUTES_ENABLE') === TRUE) ? require_web_routes($routes) : '';

function require_web_routes($routes)
{
    foreach($routes as $route) {
        require_once("web/$route");
    }
}