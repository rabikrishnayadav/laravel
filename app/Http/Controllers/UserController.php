<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    // create function
    function show(){
        return 'Hello from Controller';
    }

    //Pass Params with URL
    function showparam($id){return $id;}

    // creating function for showing the login page on the browser
    function loadView(){
        return view('login');
    }
}
