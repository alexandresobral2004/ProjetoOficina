<?php

namespace App\Providers;
use App\Http\Middleware\IsAdmin;

use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         // Registrar middleware para rotas
         $this->app['router']->aliasMiddleware('admin', IsAdmin::class);
    }
}
