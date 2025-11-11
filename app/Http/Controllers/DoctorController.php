<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Store a newly created doctor in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $doctor = Doctor::create($request->validated());

        if ($doctor) {
            return redirect('/viewdoctor')->with(['success' => 'تم الإضافة بنجاح']);
        }

        return redirect('/viewdoctor')->with(['error' => 'حدث خطأ، يرجى المحاولة لاحقاً']);
    }

    /**
     * Get all doctors and display them.
     */
    public function getalldata()
    {
        $doctors = Doctor::all();
        return view('doctor.view', compact('doctors'));
    }

    /**
     * Show the form for editing the specified doctor.
     */
    public function edit($doctorr_id)
    {
        $doctors = Doctor::findOrFail($doctorr_id);
        return view('doctor.edit', compact('doctors'));
    }

    /**
     * Update the specified doctor in storage.
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update([
            'name'       => $request->name ?? $doctor->name,
            'experience' => $request->experience ?? $doctor->experience,
            'address'    => $request->address ?? $doctor->address,
            'phone'      => $request->phone ?? $doctor->phone,
          //  'persent'    => $request->persent ?? $doctor->persent,
            'email'      => $request->email ?? $doctor->email,
        ]);

        return redirect('/viewdoctor')->with(['success' => 'تم التحديث بنجاح']);
    }

    /**
     * Delete the specified doctor from storage.
     */
    public function delete($doctor_id)
    {
        $doctor = Doctor::findOrFail($doctor_id);
        $doctor->delete();

        return redirect()->back()->with(['successd' => 'تم الحذف بنجاح']);
    }


    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor.show', compact('doctor'));
    }
}
