<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('LoggedUser')) {
            return redirect('/login')->with('error', 'الرجاء تسجيل الدخول أولاً');
        }

        return $next($request);
    }
}
