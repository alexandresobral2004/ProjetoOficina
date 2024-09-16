<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Wavey\Sweetalert\Sweetalert;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se o usuário está autenticado e se é um administrador
        if (Auth::check() && Auth::user()->role == 'admin') {
        return $next($request); // Permite acesso
        }

         Sweetalert::error('Acesso negado!!', 'Erro!');
        // Se não for administrador, redireciona para outra rota
        return redirect('/home');
    }
}
