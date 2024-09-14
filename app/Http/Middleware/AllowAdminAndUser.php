<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AllowAdminAndUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário está autenticado como 'user' ou 'admin'
        if (Auth::guard('web')->check() || Auth::guard('admin')->check()) {
        return $next($request);
        }

        return redirect('/login')->with('error', 'Você não tem permissão para acessar esta área.');
    }
}
