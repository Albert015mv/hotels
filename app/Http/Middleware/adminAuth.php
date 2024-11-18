<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->check() && auth()->user()->rol == 2) { // Rol de administrador
            return $next($request);
        }

        // Redirige si no tiene permiso
        return redirect('/dashboard')->with('error', 'No tienes acceso a esta sección.');
    
    }
}