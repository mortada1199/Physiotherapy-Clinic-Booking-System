<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCallPatientRequest;
use App\Http\Requests\StorePatientRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\SessionDoctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function add()
    {
        // $doctors = Doctor::select('id', 'name')->get();
        $sessions = SessionDoctor::select('id', 'name')->get();
        // $sessions = SessionDoctor::all()->toArray();

        return view('patients.create', compact('sessions'));
    }


    public function store(StorePatientRequest $request)
    {


        $session = SessionDoctor::where('name', $request['session_name'])->first();
        $patient = Patient::create([
            'referingdoctor_name' => $request['referingdoctor_name'],
            'name' => $request['name'],
            'major' => $request['major'],
            'numbersession' => $session['numbersession'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'dignosis' => $request['dignosis'],
            'session_name' => $request['session_name'],
            'sessionprice' => $session['price'],
            'totalsession' => $request['countsession'],
            'excutedsession' => 0,

        ]);
        if ($patient) {
            return redirect('/viewpatient')->with(['success' => 'تم الاضافة بنجاح']);
        } else {
            return redirect('/viewpatient')->with(['error' => 'هناك خطأ ما يرجى المحاولة لاحقاً']);
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


    public function edit($patient_id)
    {
        $patient = Patient::findOrFail($patient_id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified doctor in storage.
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update([
            'referingdoctor_name'   => $request->referingdoctor_name ?? $patient->referingdoctor_name,
            'name' => $request->name ?? $patient->name,
            'major' => $request->major ?? $patient->major,
            'numbersession' => $request->numbersession ?? $patient->numbersession,
            'address' => $request->address ?? $patient->address,
            'phone' => $request->phone ?? $patient->phone,
            'dignosis' => $request->dignosis ?? $patient->dignosis,
            'totalsession' => $request->totalsession ?? $patient->totalsession,
            'session_name' => $request->session_name ?? $patient->session_name,
            'excutedsession' => $patient->excutedsession ?? 0,
        ]);

        return redirect('/viewpatient')->with(['success' => 'تم التحديث بنجاح']);
    }




    public function addsession($patient_id)
    {
        $doctors = Doctor::select('id', 'name')->get();
        $sessions = SessionDoctor::select('id', 'name')->get();
        $patient = Patient::findOrFail($patient_id);

        return view('callDoctor.create', compact('patient', 'doctors', 'sessions'));
    }


    public function sessionstore(StoreCallPatientRequest $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $latestPatient = Patient::where('name', $patient->name)->latest()->first();

        // $doctor = Doctor::where('name', $request['exectingdoctor_name'])->first();
        $session = SessionDoctor::where('name', $request['session_name'])->first();



        // $patient = Patient::create([
        $patient->create([
            'exectingdoctor_name'   => $request->exectingdoctor_name ?? $patient->exectingdoctor_name,
            'name' => $request->name ?? $patient->name,
            'numbersession' => $request->numbersession ?? $patient->numbersession,
            'session_name' => $request->session_name ?? $patient->session_name,
            'roomnumber' => $request->roomnumber ?? $patient->roomnumber,
            'persent' => $session['persent'] ?? $patient->persent,
            'referingdoctor_name'  => $request->referingdoctor_name ?? $patient->referingdoctor_name,
            'dignosis' => $request->dignosis ?? $patient->dignosis,
            'totalsession' =>  $patient->totalsession ?? 0,
            'address' => $request->address ?? $patient->address,
            'phone' => $request->phone ?? $patient->phone,
            'sessionprice' => $request->sessionprice ?? $patient->sessionprice,
            'major' => $request->major ?? $patient->major,
            'excutedsession' => $latestPatient->excutedsession + 1,
        ]);
        if ($patient) {
            return redirect('/viewpatient')->with(['success' => 'تم الاضافة بنجاح']);
        } else {
            return redirect()->back()->with(['error' => 'هناك خطأ ما يرجى المحاولة لاحقاً']);
        }
    }


    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', compact('patient'));
    }
}
