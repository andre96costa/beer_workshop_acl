<?php

namespace App\Providers;

use App\RoleEnum;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthorizeServiceProvider extends ServiceProvider
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
        // Gate::define('access-role', function($user){
        //     return $user->role_id == RoleEnum::PROFESSOR || $user->role_id == RoleEnum::SECRETARY || $user->role_id == RoleEnum::ADMIN;
        // });

        // Gate::define('edit-role', function($user){
        //     return  $user->role_id == RoleEnum::PROFESSOR || $user->role_id == RoleEnum::SECRETARY || $user->role_id == RoleEnum::ADMIN;
        // });

        // Gate::define('create-role', function($user){
        //     return  $user->role_id == RoleEnum::PROFESSOR || $user->role_id == RoleEnum::SECRETARY || $user->role_id == RoleEnum::ADMIN;
        // });

        // Gate::define('update-role', function($user){
        //     return  $user->role_id == RoleEnum::PROFESSOR || $user->role_id == RoleEnum::SECRETARY || $user->role_id == RoleEnum::ADMIN;
        // });

        // Gate::define('delete-role', function($user){
        //     return  $user->role_id == RoleEnum::PROFESSOR || $user->role_id == RoleEnum::SECRETARY || $user->role_id == RoleEnum::ADMIN;
        // });

        Gate::before(function($user, $ability) {
            if ($user->role_id == RoleEnum::ADMIN) {
                return true;
            }
        });
    }
}
