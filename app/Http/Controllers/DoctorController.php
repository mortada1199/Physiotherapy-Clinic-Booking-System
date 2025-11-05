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
        // Insert doctor
        $doctor = Doctor::create($request->validated());

        if ($doctor) {
            return redirect()->back()->with('success', 'تم الإضافة بنجاح');
        }

        return redirect()->back()->with('error', 'حدث خطأ، يرجى المحاولة لاحقاً');
    }

    /**
     * Display a listing of doctors.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor.view', compact('doctors'));
    }

    /**
     * Show the form for editing the specified doctor.
     */
    public function edit(int $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified doctor in storage.
     */
    public function update(Request $request, int $id)
    {
        $doctor = Doctor::findOrFail($id);

        $doctor->update([
            'name'       => $request->name ?? $doctor->name,
            'experience' => $request->experience ?? $doctor->experience,
            'address'    => $request->address ?? $doctor->address,
            'phone'      => $request->phone ?? $doctor->phone,
            'persent'    => $request->persent ?? $doctor->persent,
            'email'      => $request->email ?? $doctor->email,
        ]);

        return redirect()->back()->with('success', 'تم التحديث بنجاح');
    }

    /**
     * Remove the specified doctor from storage.
     */
    public function destroy(int $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
