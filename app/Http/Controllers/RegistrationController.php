<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function index(){
        return view('register');
    }

    function register(Request $getReqData){

        echo "<pre>";
        print_r($getReqData->all());
    }
}
