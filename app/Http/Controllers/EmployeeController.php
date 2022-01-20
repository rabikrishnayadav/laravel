<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getEmployeeData(){
        return DB::table('employee')
        ->join('company','employee.id', '=', 'company.employee_id')
        ->select('company.*','employee.*') // this is for validation it is not require for only join
        ->where('employee.name','Rabi')   // this is for filter data it is also not require for only join
        ->select('employee.name','company.name') // for showing only company name
        ->get();
    }
}
