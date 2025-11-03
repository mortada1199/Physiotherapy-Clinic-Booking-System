<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'referingdoctor_id',
        'session',
        'exectingdoctor_id',
        'name',
        'date',
        'numbersession',
        'address',
        'phone',
        'dignosis',
        'roomnumber',
        'importance',
        'orderby',
        'resson',
        'price',
    ];
}
