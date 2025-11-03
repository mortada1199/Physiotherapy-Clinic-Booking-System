<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;



class DoctorController extends Controller
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





   public function edit($doctorr_id){
        $doctors = Doctor::find($doctorr_id);
        if(!$doctors)
        return redirect()->back();
          return view('doctor.edit',compact('doctors'));

      }
    public function update(Request $request, $id)
    {
        $doctor = Doctor::where('id', $id)->first();
        if (!$doctor) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        } else {
            $doctor->update([
                'name' => $request->name ?? $doctor->name,
                'experience' => $request->experience ?? $doctor->experience,
                'address' => $request->address ?? $doctor->address,
                'phone' => $request->phone ?? $doctor->phone,
                'persent' => $request->persent  ?? $doctor->persent,
                'email' => $request->email ?? $doctor->email
            ]);
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        }
    }





    public function delete($doctor_id){
        //check if offer id is exists
        $offer = Doctor::find($doctor_id);

        if(!$offer)
        return redirect()
        ->back()
        ->with(['error' => 'العنصر غير موجود']);


       $offer -> delete();
        return redirect()
        ->back()
        ->with(['successd' => 'تم الحذف بنجاح']);
      }
}
