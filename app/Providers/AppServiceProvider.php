<?php

namespace App\Providers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\ServiceProvider;

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
    }
}
