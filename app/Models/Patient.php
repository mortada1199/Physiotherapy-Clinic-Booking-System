<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'session_name',
        'sessionprice',
        'referingdoctor_name',
        'exectingdoctor_name',
        'persent',
        'name',
        'date',
        'numbersession',
        'address',
        'phone',
        'dignosis',
        
    ];
}
