<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importing the databse file
use Illuminate\Support\Facades\DB;

class MemberQueryBuilder extends Controller
{
    // create function for show the member list which is available in database
    function memberList(){
        $data = DB::table('members')->get();
        return view('list',['data'=>$data]);
    }
}
