<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false; // if do not want to creted update_on or created_on field in table

    function getNameAttribute($value){
        return ucfirst($value);         // for display First letter capital in browser
    }

    function getAddressAttribute($value){
        return $value.",Nepal";             // for display in address attached with nepal
    }

    // function for save extra data in database
    public function setNameAttribute($value){
        return $this->attributes['name']= 'Mr.'.$value;
    }

    public function setAddressAttribute($value){
        return $this->attributes['address']= $value.',Janakpur Nepal';
    }
}
