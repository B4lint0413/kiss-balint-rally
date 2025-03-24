<?php

namespace App\Providers;

use App\Models\Race;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;

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
        Model::preventLazyLoading();

        Gate::define("create-race", function (User $user){
            return $user->role === "admin";
        });
        Gate::define("update-race", function (User $user){
            return $user->role === "admin";
        });
        Gate::define("delete-race", function (User $user){
            return $user->role === "admin";
        });

        Gate::define("create-team", function (User $user){
            return $user->role === "admin";
        });
        Gate::define("delete-team", function (User $user){
            return $user->role === "admin";
        });
    }
}
