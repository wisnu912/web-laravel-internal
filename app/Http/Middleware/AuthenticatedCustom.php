<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Belum login, coba akses dashboard
        if (!Auth::check() && $request->is('dashboard*')) {
            return redirect()->route('login')->with('error', 'Silakan login dulu.');
        }

          // Sudah login → larang akses login/register
    if (Auth::check() && $request->is(['login*', 'register*' , '/*'])) {
        return redirect()->route('dashboard');
    }

        return $next($request);
    }
}
