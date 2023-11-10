<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('teacher')->check()){
            if (Auth::guard('teacher')->user()->is_active == 0) {
                Auth::guard('teacher')->logout();
                session()->flash('error', 'Akun anda telah dinonaktifkan');
                return route('admin.auth.guru.login');
            }

            // dd("teacher aktif");
            return $next($request);
        }else if(Auth::guard('admin')->check()){
            if (Auth::guard('admin')->user()->is_active == 0) {
                Auth::guard('admin')->logout();
                session()->flash('error', 'Akun anda telah dinonaktifkan');
                return route('admin.auth.login');
            }
            return $next($request);
        }else{
            return redirect("admin/auth/login");
        }

    }
}