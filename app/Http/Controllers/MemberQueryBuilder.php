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

    // create function for show the member where id = 4 in database
    function whereMember(){
       return DB::table('members')
       ->where('id',4)
       ->get();
    }

    // create function for find the specific id member with find(6) in database
    function findMember(){
       return (array)DB::table('members')->find(6);
    }
}
