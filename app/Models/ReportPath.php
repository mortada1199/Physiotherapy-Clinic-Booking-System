<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportPath extends Model
{
    protected $fillable = [
        'report_path',
        'patientname',
    ];
}
