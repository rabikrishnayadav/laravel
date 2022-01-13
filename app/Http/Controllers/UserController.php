<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    // create function for Register page show on the browser
    function loadRegisterPage(Request $req){
         return $req->input();
    }

    // creating function for showing the login page on the browser
    function loadView(){
        return view('login');
    }

    function usersfun(){
        $friends = ['Ram','bharat','laxman','satrudhan'];
        return view('users',['name'=>'Rabi Kr Yadav', 'friends'=>$friends]);
    }
}
