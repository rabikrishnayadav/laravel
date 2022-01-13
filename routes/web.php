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

Route::get('/database', function () {
    return view('database_part');    
});

// this route for calling the controller of register page for show on the browser
Route::post('users',[UserController::class,'loadRegisterPage']);
Route::view('registration-page','register');

// calling the view for the login page first method
Route::view('signin','login');

// calling the controller for view file login page
Route::get('login_with_get',[UserController::class,'loadLoginPage']);

// calling the controller for view file login page
Route::post('login_with_post',[UserController::class,'loadLoginPage']);

// calling the controller for view file login page
Route::put('Updated_Data_with_put_method',[UserController::class,'loadLoginPage']);

// calling the controller for view file login page
Route::delete('Deleted_data_with_delete_method',[UserController::class,'loadLoginPage']);

// creating route for no access page
Route::view('access-denied-page','noaccess');

// this route for calling the view home page
    Route::view('home-page','home')->middleware('protectedPage');

// creat route for froup middleware
Route::group(['middleware'=>['protectPage']],function(){
    
//this route for calling the view users page
Route::get('user-data',[UserController::class,'usersfun']);    
});

// create route for calling 
Route::get('db',[UserController::class,'databaseCon']);

// creating route for user model
Route::get('users',[UserController::class,'userModel']);

// creating route for http client
Route::get('users-data-api',[UserController::class,'userDataHttpClient']);
Route::view('userdataapi','userdata_api');
