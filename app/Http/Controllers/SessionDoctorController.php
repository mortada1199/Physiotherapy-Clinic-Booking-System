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
        $sessions =  SessionDoctor::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        if ($sessions) {
            return redirect()->back()->with(['success' => 'تم الاضافة بنجاح']);
        } else {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجى المحاولة لاحقا']);
        }
    }



  public function getalldata(){

            $sessions = SessionDoctor::all();
            return view('specialization.view',compact('sessions'));
      }





   public function edit($session_id){
        $sessions = SessionDoctor::find($session_id);
        if(!$sessions)
        return redirect()->back();
          return view('specialization.edit',compact('sessions'));

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
            ]);
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        }
    }





    public function delete($session_id){
        //check if offer id is exists
        $session = SessionDoctor::find($session_id);

        if(!$session)
        return redirect()
        ->back()
        ->with(['error' => 'العنصر غير موجود']);


       $session -> delete();
        return redirect()
        ->back()
        ->with(['successd' => 'تم الحذف بنجاح']);
      }
}


