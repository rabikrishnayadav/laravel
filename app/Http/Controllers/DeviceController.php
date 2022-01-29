<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function deviceIndex(Device $key){
        return $key->all();
    }

    // creating function for show the devices list with api
    function deviceList($id=null){
        return $id?Device::find($id):Device::all();
    }

    // creating method for inserting data into devices table with api
    function insertDevice(Request $req){
        $device = new Device; // creating a object of Device
        $device->name = $req->name;
        $device->employee_id = $req->employee_id;
        $result = $device->save();
        if ($result) {
            return["result"=>"Data has been saved"];
        }else{
            return["result"=>"Operation Faild"];
        }
    }

    // creating method for update data into devices table with api
    function updateDevice(Request $req){
        $device = Device::find($req->id);
        $device->name = $req->name;
        $device->employee_id = $req->employee_id;
        $result = $device->save();
        if ($result) {
            return["result"=>"Data has been Updated"];
        }else{
            return["result"=>"Operation Faild"];
        }
    }

    // creating function for show the devices list with api
    function deleteDevice($id){
        $device = Device::find($id);
        $result = $device->delete();
        if ($result) {
            return["result"=>"Data has been Deleted"];
        }else{
            return["result"=>"Operation Faild"];
        }
    }

    // method for search the device with api
    function searchDevice($name){
        return Device::where("name","like","%".$name."%")->get();
    }
}
