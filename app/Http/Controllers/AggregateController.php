<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importing the databse file
use Illuminate\Support\Facades\DB;

class AggregateController extends Controller
{
    // creating the function for addition
    function sumOperation(){
        return DB::table('members')->sum('id'); // it will perform the addition of id number
    }

    // creating the function for maximum value of column
    function maxOperation(){
        return DB::table('members')->max('id'); // it will give the maximum number of id number
    }

    // creating the function for minimum value of column
    function minOperation(){
        return DB::table('members')->min('id'); // it will give the maximum number of id number
    }

    // creating the function for average value of column
    function avgOperation(){
        return DB::table('members')->avg('id'); // it will give the average number
    }
}
