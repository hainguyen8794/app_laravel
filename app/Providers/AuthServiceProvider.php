<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Khai báo các gate của chúng ta ở đây

        Gate::define('admin', function ($user) {
            return $user->role_id == 1;
        });
        Gate::define('truong_lang', function ($user) {
            return $user->role_id == 2;
        });
        Gate::define('lang_vien', function ($user) {
            return $user->role_id == 3;
        });
        Gate::define('lang_thang', function ($user) {
            return $user->role_id == 4;
        });
    }
}
