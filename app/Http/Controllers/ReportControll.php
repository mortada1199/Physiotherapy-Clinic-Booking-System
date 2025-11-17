<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\SessionDoctor;
use Illuminate\Http\Request;

class ReportControll extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('report.doctorreport', compact('doctors'));
    }

    public function filter(Request $request)
    {
        $request->validate([
            'from' => 'required|date',
            'to' => 'required|date',
            'doctor_id' => 'required',
        ]);

        $doctors = Doctor::all();




        $sessions = Patient::whereBetween('created_at', [$request->from, $request->to])
            ->where('excutedsession', $request->doctor_id)
            ->get();


        $totalSessions = $sessions->count();

        $totalAmount = $sessions->sum('doctorfate');



        $selectedDoctor = Doctor::find($request->doctor_id);

        return view('report.doctorreport', compact('doctors', 'sessions', 'totalSessions', 'totalAmount', 'selectedDoctor'));
    }
}
