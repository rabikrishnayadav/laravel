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

// this route for calling the controller of register page for show on the browser
Route::post('users',[UserController::class,'loadRegisterPage']);
Route::view('registration-page','register');

// calling the controller for view file login page
Route::get('login',[UserController::class,'loadView']);

// calling the view for the login page first method
Route::view('signin','login');

// calling the view for the login page second method
Route::get('/userlogin', function () {
    return view('login');  
});

//calling the users page 
Route::get('user-data',[UserController::class,'usersfun']);

