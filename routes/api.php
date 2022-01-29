<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// importing the dummyapiController
use App\Http\Controllers\dummyApiController;

// importing the Device Controller
use App\Http\Controllers\DeviceController;

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

// route for dummy api
Route::get('data',[dummyApiController::class,'getData']);

// route for get list data with get method
Route::get('list/{id?}',[DeviceController::class,'deviceList']);

// route for insert data in device with api
Route::post('add',[DeviceController::class,'insertDevice']);

// route for update data in device with api
Route::put('update',[DeviceController::class,'updateDevice']);

// route for update data in device with api
Route::delete('delete/{id}',[DeviceController::class,'deleteDevice']);

// route for search list data before search data we have to get the data with get method
Route::get('search/{name}',[DeviceController::class,'searchDevice']);

// route for insert valid data in device table with API
Route::post('valid',[DeviceController::class,'validData']);