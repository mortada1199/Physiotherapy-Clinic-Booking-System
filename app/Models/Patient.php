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
        'totalsession',
        'excutedsession',
        'address',
        'phone',
        'exectingdoctor_name',
        'numbersession',
        'roomnumber',
        'sessionprice',
        'persent',
        'major',
        'type',
        'age',
        'patientnumber',
        'doctorfate',     
    ];

   

}
