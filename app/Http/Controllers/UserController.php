<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

// importing the databse file
use Illuminate\Support\Facades\DB;

// importing the user model
use App\Models\User;

class UserController extends Controller
{
    // create function for Register page show on the browser
    function loadRegisterPage(Request $request){
         return $request->input();
    }

    // creating function for showing the login page on the browser
    function loadView(){
        return view('login');
    }

    function usersfun(){
        $friends = ['Ram','bharat','laxman','satrudhan'];
        return view('users',['name'=>'Rabi Kr Yadav', 'friends'=>$friends]);
    }


    // create function for database connection
    function databaseCon(){
        return DB::select("select * from users");
    }

    // create function for user model
    function userModel(){
        return User::all();
    }


}
