<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // suporte para o schema


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Redirect an Authenticated User to dashboard
        RedirectIfAuthenticated::redirectUsing(function(){
            return route('auth.dashboard');
        });

        //Redirect No Authenticated Users to Login
        Authenticate::redirectUsing(function(){
            return route('auth.login');
        });
        
        Schema::defaultStringLength(191); 
        // Definir comprimento padrão para strings como 191, 
        // Serve para não haver erros com valores ultrapassando o limite do tipo de colação do banco de dados

    }
}
