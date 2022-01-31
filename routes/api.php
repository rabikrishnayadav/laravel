<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// importing the dummyapiController
use App\Http\Controllers\dummyApiController;

// importing the Device Controller
use App\Http\Controllers\DeviceController;

// importing the resource member controller
use App\Http\Controllers\resourceMemberController;

// importing the file controller
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    // add list of api for secure
Route::get('data',[dummyApiController::class,'getData']);
Route::get('list/{id?}',[DeviceController::class,'deviceList']);
Route::post('add',[DeviceController::class,'insertDevice']);
Route::put('update',[DeviceController::class,'updateDevice']);
Route::delete('delete/{id}',[DeviceController::class,'deleteDevice']);
Route::get('search/{name}',[DeviceController::class,'searchDevice']);
Route::post('valid',[DeviceController::class,'validData']);
Route::apiResource('member',resourceMemberController::class);
Route::post('upload',[FileController::class,'fileUpload']);
});

// route for api authentication
Route::post('login',[UserApiController::class,'index']);