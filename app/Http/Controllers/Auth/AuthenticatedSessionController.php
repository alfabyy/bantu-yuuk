<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Melakukan autentikasi pengguna
        $request->authenticate();

        // Regenerasi sesi
        $request->session()->regenerate();

        // Arahkan berdasarkan peran pengguna
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard'); // Arahkan ke dashboard admin
        }

        return redirect()->route('user.dashboard'); // Arahkan ke dashboard user biasa
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout pengguna
        Auth::guard('web')->logout();

        // Invalidasi sesi
        $request->session()->invalidate();

        // Regenerasi token
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
