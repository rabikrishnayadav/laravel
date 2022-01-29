<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function index(){
        return view('register');
    }

    function register(Request $getReqData){

        $getReqData->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );
        echo "<pre>";
        print_r($getReqData->all());
    }
}
