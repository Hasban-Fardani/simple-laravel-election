<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
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
        Paginator::useBootstrap();

        // define admin gate
        Gate::define('admin', fn ($user) => $user->role === 'admin');

        if (env('APP_ENV', 'local') == 'production') {
            URL::forceScheme('https');
        } else {
            URL::forceScheme('http');
        }
    }
}
