<?php

use Illuminate\Support\Facades\Route;

// importing the controller
use App\Http\Controllers\UserController;

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
    return view('welcome');     // this will show result in brower when you return something or echo
});

// calling the controller

Route::get('user',[UserController::class,'show']);

// Pass Params with URL
Route::get('user/{id}',[UserController::class,'showparam']);