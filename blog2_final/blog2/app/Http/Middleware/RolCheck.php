<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolCheck
{
    public function handle(Request $request, Closure $next, $rol)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // No logueado
        }

        if (Auth::user()->rol !== $rol) {
            return redirect()->route('posts.index'); // Rol incorrecto
        }

        return $next($request);
    }
}
