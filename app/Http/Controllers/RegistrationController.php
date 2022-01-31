<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class RegistrationController extends Controller
{
    function index(){
        $url = url('/addcustomer');
        $title = "Customer Registration Page";
        $data = compact('url','title');
        return view('addcustomer')->with($data);
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
        
        $customer = new Customer;
        $customer->user_name = $getReqData['name'];
        $customer->email = $getReqData['email'];
        $customer->password = md5($getReqData['password']);
        $customer->gender = $getReqData['gender'];
        $customer->address = $getReqData['address'];
        $customer->state = $getReqData['state'];
        $customer->country = $getReqData['country'];
        $customer->dob = $getReqData['date'];
        $customer->save();
        return redirect('/customer/view');
    }

    function viewCustomerData(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            $customers = Customer::where('user_name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{
            $customers = Customer::all();
        }
        $data = compact('customers','search');
        return view('viewcustomer')->with($data);
    }

    public function trash(){
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }

    // Soft (temporary) Delete
    function deleteCustomerData($id){
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/customer/view');
    }
    
    // Restore temporary Deleted Data
    function restoreCustomerData($id){
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('/customer/view');
    }

    // Permanent Delete from soft(temporary) deleted
    function deleteCustomer($id){
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect('/customer/view');
    }

    // getting old data
    public function editCustomerData($id){

        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer/view');
        }else{
            $url = url('/customer/update/')."/".$id;
            $title = "Update Customer";
            $data = compact('customer','url','title');
            return view('addcustomer')->with($data);
        }
    }
    // setting new data
    public function updateCustomerData($id, Request $getReqData){
        $customer = Customer::find($id);
        $customer->user_name = $getReqData['name'];
        $customer->email = $getReqData['email'];
        $customer->password = md5($getReqData['password']);
        $customer->gender = $getReqData['gender'];
        $customer->address = $getReqData['address'];
        $customer->state = $getReqData['state'];
        $customer->country = $getReqData['country'];
        $customer->dob = $getReqData['date'];
        $customer->save();
        return redirect('/customer/view');
    }
}
