<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Memeriksa apakah pengguna memiliki peran yang benar
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Jika peran tidak sesuai, redirect ke halaman lain
        return redirect('/'); // Atau halaman lain sesuai kebutuhan
    }
}
