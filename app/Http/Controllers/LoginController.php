<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('name', $request->username)->first();

        if (!$user) {
            return back()->with('error', 'اسم المستخدم غير صحيح');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'كلمة المرور غير صحيحة');
        }

        session(['LoggedUser' => $user->id]);
        return redirect('/Repo')->with('success', 'تم تسجيل الدخول بنجاح');
    }

    public function logout()
    {
        session()->forget('LoggedUser');
        return redirect('/login')->with('success', 'تم تسجيل الخروج');
    }
}
