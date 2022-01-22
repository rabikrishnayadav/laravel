<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApiController extends Controller
{
    //
    function getData(){
        return ["name"=>"Rabi Kr Yadav", "email"=>"rabikrishnayadav@gmail.com","addresss"=>"Janakpur Nepal"];
    }
}
