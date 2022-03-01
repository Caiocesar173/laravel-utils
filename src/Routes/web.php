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
|   Route::middleware(['Log:web', 'web'])->group(function() {
|       Route::get('/', [Controller::class, 'index']);
|   });
*/

use Caiocesar173\Utils\Classes\Routes;

Routes::RequirePath(__DIR__.'/web');