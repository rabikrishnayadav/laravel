<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberQueryBuilder;
use App\Http\Controllers\AggregateController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\RegistrationController;
use App\Mail\SampleMail;
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

Route::get('/api', function () {
    return view('api_part');    
});

Route::get('/intermediate', function () {
    return view('intermediate');    
});

// this route for calling the controller of register page for show on the browser
Route::post('register',[UserController::class,'loadRegisterPage']);
Route::view('registration-page','register');

// calling the view for the login page first method
// Route::view('login','login');

// calling the controller for view file login page
Route::post('login',[UserController::class,'loadLoginPage']);

// create route for profile page
Route::view('profile','profile');
Route::post('profile',[UserController::class,'loadProfilePage']);

// create route for logout
Route::get('/logout', function(){
    if (session()->has('username')) {
        session()->pull('username',null);
    }
    return redirect('login');
});

// create route for logout
Route::get('/login', function(){
    if (session()->has('username')) {
        return redirect('profile');
    }
    return view('login');
});

// creating route for no access page
Route::view('access-denied-page','noaccess');

// this route for calling the view home page
    
    Route::get('/home/{lang}',function($lang){
        App::setlocale($lang);
        return view('home');
    });

// creat route for froup middleware
Route::group(['middleware'=>['protectPage']],function(){
    
//this route for calling the view users page
Route::get('user-data',[UserController::class,'usersfun']);    
});

/*
|--------------------------------------------------------------------------------------
|                                Database(CRUD) Operation
|--------------------------------------------------------------------------------------
*/

// create route for calling 
Route::get('db',[UserController::class,'databaseCon']);

// creating route for user model
Route::get('users',[UserController::class,'userModel']);

// creating route for http client
Route::get('users-data-api',[UserController::class,'userDataHttpClient']);
Route::view('userdataapi','userdata_api');


// creating route for addmember into database
Route::view('add','addmember');
Route::post('add',[MemberController::class,'addMemberData']);

// creating route for show the member from database
Route::get('member_list',[MemberController::class,'showMemberData']);

// creating the route for update the member data
Route::get('update/{id}',[MemberController::class,'showForUpdateMemberData']);
Route::post('update',[MemberController::class,'UpdateMemberData']);

// creating the route for delete the member
Route::get('delete/{id}',[MemberController::class,'deleteMemberData']);

/*
|--------------------------------------------------------------------------------------
|                                Query builder
|--------------------------------------------------------------------------------------
*/

// creating route for query builder
Route::get('list',[MemberQueryBuilder::class,'memberList']);

// creating route for where clause member with query builder
Route::get('where_list',[MemberQueryBuilder::class,'whereMember']);

// creating route for find member with query builder
Route::get('find_list',[MemberQueryBuilder::class,'findMember']);

// creating route for insert data into table with query builder
Route::get('insert_data',[MemberQueryBuilder::class,'insertMember']);

// creating route for update the particular data in the table inside the database
Route::get('update_data',[MemberQueryBuilder::class,'updateMember']);

// creating route for delte the particular data in the table inside the database
Route::get('delete_data',[MemberQueryBuilder::class,'deleteMember']);

/*
|--------------------------------------------------------------------------------------
|                                Route for Aggregate function
*/

// route for addtion value show on web page
Route::get('addition',[AggregateController::class,'sumOperation']);

// route for maximum value show on web page
Route::get('max',[AggregateController::class,'maxOperation']);

// route for minimum value show on web page
Route::get('min',[AggregateController::class,'minOperation']);

// route for average value show on web page
Route::get('avg',[AggregateController::class,'avgOperation']);

/*
|--------------------------------------------------------------------------------------
*/

// making path for employee data
Route::get("employee",[EmployeeController::class,"getEmployeeData"]);


// route for relation data show path
Route::get("one_to_one_relation",[EmployeeController::class,"onetoOne"]);
Route::get("one_to_many_relation",[EmployeeController::class,"onetoMany"]);


// route for model binding
Route::get('device/{key:name}',[DeviceController::class,"deviceIndex"]);


// route for mail template
Route::get('/mail',function(){
    return new SampleMail();
});

/*
|--------------------------------------------------------------------------------------
|                                CRUD Operation Second Time
|--------------------------------------------------------------------------------------
*/

Route::get('/customer',[RegistrationController::class,'index']);
Route::post('/customers',[RegistrationController::class,'addcustomerData']);
Route::get('/customer/view',[RegistrationController::class,'viewCustomerData']);
Route::get('/customer/delete/{id}',[RegistrationController::class,'deleteCustomerData'])->name('customer.delete');
Route::get('/customer/edit/{id}',[RegistrationController::class,'editCustomerData'])->name('customer.edit');
Route::post('/customer/update/{id}',[RegistrationController::class,'updateCustomerData']);