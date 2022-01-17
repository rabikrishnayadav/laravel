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

    // crating the function for insert the data into the table in database
    function insertMember(){
        return DB::table('members')->insert([
            'name'=>'Rabi Kr Yadav',
            'email'=>'rabi@email.com',
            'address'=>'janakpur'
        ]);
    }

    // crating the function for update the particular data in the table inside the database
    function updateMember(){
        return DB::table('members')
        ->where('id',7)
        ->update([
            'name'=>'Rabi Kr Yadav',
            'email'=>'rabi@email.com',
            'address'=>'janakpur'
        ]);
    }

    // crating the function for delete the particular data id=9 in the table inside the database
    function deleteMember(){
        return DB::table('members')
        ->where('id',9)->delete();
    }
}
