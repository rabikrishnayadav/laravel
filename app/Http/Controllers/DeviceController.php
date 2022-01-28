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
    function deviceList(){
        return Device::all();
    }
}
