<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\Services\GeocodingService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GeocodingService::class, function ($app) {
            return new GeocodingService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Gate definitions (migrated from AuthServiceProvider)
        Gate::define('ver-patologias', function ($user) {
            return $user->type == 'super-admin';
        });

        Gate::define('estadisticas', function ($user) {
            return in_array($user->type, ['admin', 'enfermera', 'oirs', 'super-admin']);
        });

        Gate::define('controles-all', function ($user) {
            return in_array($user->type, ['admin', 'medico', 'super-admin']);
        });

        Gate::define('oirs', function ($user) {
            return in_array($user->type, ['oirs', 'admin', 'super-admin']);
        });

        Gate::define('some', function ($user) {
            return in_array($user->type, ['some', 'admin', 'super-admin']);
        });

        Gate::define('super-admin', function ($user) {
            return $user->type == 'super-admin';
        });
    }
}
