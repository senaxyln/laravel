<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello, Laravel!';
});
use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'about']);
Route::get('/home', [PageController::class, 'home']);

Route::get('/test', [CategoryController::class, 'index']);
