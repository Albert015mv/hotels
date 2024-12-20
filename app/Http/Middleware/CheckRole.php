<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    public function handle(Request $request, Closure $next, $rol)
    {
        if (Auth::check() && Auth::user()->rol == $rol) {
            return $next($request);
        }

        // Redirige si el usuario no tiene permiso
        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');
    }
    
}