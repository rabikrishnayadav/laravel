<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class RegistrationController extends Controller
{
    function index(){
        return view('addcustomer');
    }

    function addcustomerData(Request $getReqData){

        $getReqData->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );
        echo "<pre>";
        print_r($getReqData->all());

        $customer = new Customer;
        $customer->name = $getReqData['name'];
        $customer->email = $getReqData['email'];
        $customer->password = md5($getReqData['password']);
        $customer->gender = $getReqData['gender'];
        $customer->address = $getReqData['address'];
        $customer->state = $getReqData['state'];
        $customer->country = $getReqData['country'];
        $customer->dob = $getReqData['date'];
        $customer->save();
    }
}
