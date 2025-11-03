<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
     public function store(StoreDoctorRequest $request)
    {

        //insert
        $doctor =  Doctor::create([
            'name' => $request->name,
            'experience' => $request->experience,
            'address' => $request->address,
            'phone' => $request->phone,
            'persent' => $request->persent,
            'email' => $request->email
        ]);
        if ($doctor) {
            return redirect()->back()->with(['success' => 'تم الاضافة بنجاح']);
        } else {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        }
    }



  public function getalldata(){

            $doctors = Doctor::all();
            return view('doctor.view',compact('doctors'));
      }
}
