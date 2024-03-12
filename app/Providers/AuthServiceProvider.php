<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('ver-patologias', function ($user) {
            if ($user->type == 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('estadisticas', function ($user) {
            if ($user->type == 'admin' || $user->type == 'enfermera' || $user->type == 'oirs') {
                return true;
            }
            return false;
        });

        Gate::define('controles-all', function ($user) {
            if ($user->type == 'admin' || $user->type == 'medico') {
                return true;
            }
            return false;
        });

        Gate::define('oirs', function ($user) {
            if ($user->type == 'oirs' || $user->type == 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('rx', function ($user) {
            if ($user->type == 'rx') {
                return true;
            }
            return false;
        });
        Gate::define('some', function ($user) {
            if ($user->type == 'some' || $user->type == 'admin') {
                return true;
            }
            return false;
        });
    }
}
