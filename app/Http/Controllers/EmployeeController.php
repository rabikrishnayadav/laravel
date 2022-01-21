<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// importing the models
use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function getEmployeeData(){
        return DB::table('employees')
        ->join('companies','employee.id', '=', 'companies.employee_id')
        ->select('companies.*','employees.*') // this is for validation it is not require for only join
        ->where('employees.name','Rabi')   // this is for filter data it is also not require for only join
        ->select('employees.name','companies.name') // for showing only company name
        ->get();
    }

    // function for one to one relation
    function onetoOne(){
        return Employee::find(2)->one_to_one_companyData;
    }
}
