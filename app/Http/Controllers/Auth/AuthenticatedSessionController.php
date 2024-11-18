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
    if ($user->rol == 2) { // Administrador
        return redirect('/Admin/indexA'); // Ruta de administrador
    }

    if ($user->rol == 1) { // Usuario
        return redirect('/dashboard'); // Ruta de usuario
    }

    // Si no tiene rol válido, redirige al welcome
    return redirect('/')->with('error', 'No tienes acceso.');
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
