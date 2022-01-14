<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

// importing the databse file
use Illuminate\Support\Facades\DB;

// importing the user model
use App\Models\User;

// import the http client
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // create function for Register page show on the browser
    function loadRegisterPage(Request $request){
         $data = $request->input('username');
         $request->session()->flash('username',$data);
         return view('register');
    }

    // creating function for showing the login page on the browser
    function loadLoginPage(Request $req){

        $data = $req->input('username');
        $req->session()->put('username',$data);
        return redirect('profile');
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

    // create function for user http client 
    function userDataHttpClient(){
        $api_data = Http::get('https://reqres.in/api/users?page=1');
        return view('userdata_api',['collection'=>$api_data['data']]);
    }


}
