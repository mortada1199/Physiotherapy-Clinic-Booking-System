<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSpecialRequest;
use App\Models\SessionDoctor;
use Illuminate\Http\Request;

class SessionDoctorController extends Controller
{



    public function store(StoreSpecialRequest $request)
    {

        //insert
        $sessions =  SessionDoctor::create($request->validated());
        if ($sessions) {
            return redirect('/viewspetial')->with(['success' => 'تم الاضافة بنجاح']);
        } else {
            return redirect('/viewspetial')->with(['error' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        }
    }



    public function getalldata()
    {

        $sessions = SessionDoctor::all();
        return view('specialization.view', compact('sessions'));
    }





    public function edit($session_id)
    {
        $sessions = SessionDoctor::findOrFail($session_id);
        return view('specialization.edit', compact('sessions'));
    }
    public function update(Request $request, $id)
    {
        $sessions = SessionDoctor::where('id', $id)->first();
        if (!$sessions) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        } else {
            $sessions->update([
                'name' => $request->name ?? $sessions->name,
                'price' => $request->price ?? $sessions->price,
                'numbersession' => $request->numbersession ?? $sessions->numbersession,
                'persent' => $request->persent ?? $sessions->persent,

            ]);
            return redirect('/viewspetial')->with(['success' => 'تم التحديث بنجاح']);
        }
    }





    public function delete($session_id)
    {
        //check if offer id is exists
        $session = SessionDoctor::findOrFail($session_id);
        $session->delete();

        return redirect()->back()->with(['successd' => 'تم الحذف بنجاح']);
    }
}
