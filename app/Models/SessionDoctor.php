<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionDoctor extends Model
{
    protected $table = 'session_doctors';
    protected $fillable = ['name', 'price'];
}
