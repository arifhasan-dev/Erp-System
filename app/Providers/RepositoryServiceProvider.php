<?php

namespace App\Providers;

use App\Repositories\Interfaces\SupplierRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SupplierRepository;
use App\Repositories\SupplierBankAccountRepository;
use App\Repositories\Interfaces\SupplierBankAccountRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupplierRepositoryInterface::class,
            SupplierRepository::class
        );
        $this->app->bind(
            SupplierBankAccountRepositoryInterface::class,
            SupplierBankAccountRepository::class

        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
