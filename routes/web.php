<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

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
    return view('welcome');
});

Route::post('main',[MainController::class,'getData']);
Route::view('report','main');
Route::get('my-home',[HomeController::class,'myHome']);
Route::get('my-users',[HomeController::class,'myUsers']);
// Route::post('getData',[MainController::class,'getData']);


