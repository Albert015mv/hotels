<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
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
    $request->authenticate(); // Autentica al usuario
    $request->session()->regenerate(); // Regenera la sesión para seguridad

    $user = auth()->user(); // Obtén el usuario autenticado

    // Redirige según el rol del usuario
    if ($user->rol == 2) {
        return redirect('/adm/dashboard');
    } elseif ($user->rol == 3) {
        return redirect('/admHotel/dashboard');
    } elseif ($user->rol == 1) {
        return redirect('/dashboard');
    }
    
    // Rol no válido
    Auth::logout();
    return redirect('/')->with('error', 'Rol no válido.');
    
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
