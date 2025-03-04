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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        $intendedUrl = session('url.intended') ?: url()->previous();

        if (!empty($_COOKIE['intendedUrl'])) {
            $intendedUrl = $_COOKIE['intendedUrl'];
            setcookie('intendedUrl', '', time() - 3600);
        }
        if ($intendedUrl && $intendedUrl !== url()->previous()) {
            return redirect($intendedUrl);
        }
        if ($request->user()->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($request->user()->role === 'user') {
            return redirect()->intended('/user/dashboard');
        }
        return redirect()->intended('/login');
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
