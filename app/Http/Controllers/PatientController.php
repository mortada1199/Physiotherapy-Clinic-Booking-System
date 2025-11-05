<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\SessionDoctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function add()
    {
        $doctors = Doctor::select('id', 'name')->get();
        $sessions = SessionDoctor::select('id', 'name')->get();
        return view('patients.create', compact('doctors', 'sessions'));
    }


   public function store(StorePatientRequest $request)
{
    $referingdoctor = Doctor::find($request->referingdoctor_id);
    $exectingdoctor = Doctor::find($request->exectingdoctor_id);
    $session = SessionDoctor::find($request->session_id);

    //insert
    $patient = Patient::create([
        'session_name'          => $session->name,
        'sessionprice'          => $session->price,
        'referingdoctor_name'   => $referingdoctor->name,
        'exectingdoctor_name'   => $exectingdoctor->name,
        'persent'               => $exectingdoctor->persent,
        'name'                  => $request->name,
        'date'                  => $request->date,
        'numbersession'         => $request->numbersession,
        'address'               => $request->address,
        'phone'                 => $request->phone,
        'dignosis'              => $request->dignosis,
    ]);

    if ($patient) {
        return redirect()->back()->with(['success' => 'تم الاضافة بنجاح']);
    } else {
        return redirect()->back()->with(['error' => 'هناك خطأ ما يرجى المحاولة لاحقاً']);
    }
}



    public function getalldata()
    {
  
        $patients = Patient::all();
        return view('patients.view', compact('patients'));
    }






    public function delete($patient_id)
    {
        //check if offer id is exists
        $patient = Patient::find($patient_id);

        if (!$patient) {
            return redirect()
                ->back()
                ->with(['error' => 'العنصر غير موجود']);
        }
        $patient->delete();
        return redirect()
            ->back()
            ->with(['success' => 'تم الحذف بنجاح']);
    }
}
