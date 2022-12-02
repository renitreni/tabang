<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        Gate::define('user', fn(User $user) => $user->roles == 3);
        Gate::define('agency', fn(User $user) => $user->roles == 2);
        Gate::define('admin', fn(User $user) => $user->roles == 1);
    }
}
