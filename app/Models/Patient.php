<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'referingdoctor_name',
        'name',
        'dignosis',
        'session_name',
        'countsession',
        'address',
        'phone',
        'exectingdoctor_name',
        'numbersession',
        'roomnumber',
        'sessionprice',
        'persent',
    ];

    

}
