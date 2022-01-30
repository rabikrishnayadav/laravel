<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";

    // mutator for going data in db
    public function setUserNameAttribute($value){
        $this->attributes['user_name'] = ucwords($value);
    }

     // accessor for display data from db
    public function getDobAttribute($value){
        return date("d-M-Y",strtotime($value));
    }
}
