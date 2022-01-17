<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // creating the function for add member
    function addMemberData(Request $req){

        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('add');
    }

    // creating the function for show the member list

    function showMemberData(Request $request){
        $data =  Member::paginate(5);
        return view('show_member',['members'=>$data]);
    }
}
