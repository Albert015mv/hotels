<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
        
    }
    public function handle($request, \Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        // Verificar si el rol del usuario es válido para la ruta actual
        $user = auth()->user();
        $path = $request->path();

        // Condicional para restringir accesos
        if (
            ($path === 'adm/dashboard' && $user->rol != 2) ||
            ($path === 'admHotel/dashboard' && $user->rol != 3) ||
            ($path === 'dashboard' && $user->rol != 1)
        ) {
            return redirect('/dashboard')->with('error', 'No tienes acceso a esta sección.');
        }

        return $next($request);
    }
}
