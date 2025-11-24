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

        $selectedDoctor = Doctor::find($request->doctor_id);
        $doctors = Doctor::all();


        $sessions = Patient::whereDate('created_at', '>=', $request->from)
            ->whereDate('created_at', '<=', $request->to)
            ->where('exectingdoctor_name', $selectedDoctor->name)
            ->get();


        $totalSessions = $sessions->count();
        $totalAmount = $sessions->sum('doctorfate');


        return view('report.doctorreport', compact('doctors', 'sessions', 'totalSessions', 'totalAmount', 'selectedDoctor'));
    }

    public function sessionsReport(Request $request)
    {

      
        // فلترة حسب التاريخ لو تم ارسالها من الفورم
        $query = Patient::query();

        if ($request->has('from') && $request->has('to')) {
            $query->whereDate('created_at', '>=', $request->from)
                ->whereDate('created_at', '<=', $request->to);
        }

        $sessions = $query->get()->unique('name')->values();

        return view('report.sessions', compact('sessions'));
    }

    public function financeReport(Request $request)
    {



        $query = Patient::query();

        if ($request->has('from') && $request->has('to')) {
            $query->whereDate('created_at', '>=', $request->from)
                ->whereDate('created_at', '<=', $request->to);
        }

        $executedSessionss = Patient::orderBy('created_at', 'desc')
            ->get()
            ->unique('name')
            ->values();

        $executedSessions =  $executedSessionss->sum('excutedsession');

        $totalSessions =  $executedSessionss->sum('totalsession');

        // جلب كل المرضى ضمن الفترة
        $sessions = $query->get();

        // حساب مجموع الإيرادات
        $totalRevenue = $sessions->sum('sessionprice');

        $netRevenue = $sessions->sum('sessionprice') - $sessions->sum('doctorfate');

        return view('report.finance', compact('sessions', 'totalRevenue', 'executedSessions', 'totalSessions', 'netRevenue'));
    }
}
