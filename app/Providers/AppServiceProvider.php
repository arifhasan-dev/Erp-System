<?php

namespace App\Providers;

use App\Repositories\Interfaces\SupplierRepositoryInterface;
use App\Repositories\SupplierRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupplierRepositoryInterface::class,
            SupplierRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function (User $user,string $ability) {
            return $user->hasRole('Super Admin') ? true :null;
        });
    }
}
