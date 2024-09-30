<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Session\TokenMismatchException;
use Wavey\Sweetalert\Sweetalert;

class CheckForTokenExpiration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
        return $next($request);
        } catch (TokenMismatchException $exception) {
        // Redireciona para a página de login com uma mensagem de sessão expirada
        Sweetalert::warning('Sua sessão expirou. Por favor, atualize a página e faça o login novamente.', 'Title');
        return redirect()->route('auth.login');
        // return redirect()->route('auth.login')->with('message', 'Sua sessão expirou. Por favor, faça login novamente.');
        }
    }
}
