<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if ($request->segment(1) == 'admin') {
            if (Auth::guard('admin')->check()) {
                if (Auth::guard('admin')->user()->is_active == 0) {
                    Auth::guard('admin')->logout();
                    session()->flash('error', 'Akun anda telah dinonaktifkan');
                    return redirect(route('admin.auth.login'));
                }
                return redirect(route('admin.dashboard'));
            }
        }
        
        if ($request->segment(1) == 'login') {
            if (Auth::guard('siswa')->check()) {
                if (Auth::guard('siswa')->user()->is_active == 0) {
                    Auth::guard('siswa')->logout();
                    session()->flash('error', 'Akun anda telah dinonaktifkan');
                    return redirect(route('auth.siswa.login'));
                }
                return redirect(route('siswa.dashboard'));
            }
        }
        return $next($request);
    }
}
