<?php

namespace App\Providers;

use App\Repositories\CustomerRepository;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Interfaces\ProductImageRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;
use App\Repositories\Interfaces\SupplierRepositoryInterface;
use App\Repositories\ProductImageRepository;
use App\Repositories\ProductRepository;
use App\Repositories\StockAdjustmentRepository;
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
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            ProductImageRepositoryInterface::class,
            ProductImageRepository::class
        );
        $this->app->bind(
            StockAdjustmentRepositoryInterface::class,
            StockAdjustmentRepository::class
        );
        $this->app->bind(
            CustomerRepositoryInterface::class,
            CustomerRepository::class
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
