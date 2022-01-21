<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // creating functions for relation 

    function one_to_one_companyData(){
        return $this->hasOne('App\Models\Company'); // this line will make one to one relation 
    }
}
