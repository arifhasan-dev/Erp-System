<?php

namespace App\Providers;

use App\Repositories\Interfaces\ProductImageRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Interfaces\PurchaseItemRepositoryInterface;
use App\Repositories\Interfaces\PurchasePaymentRepositoryInterface;
use App\Repositories\Interfaces\PurchaseRepositoryInterface;
use App\Repositories\Interfaces\SupplierRepositoryInterface;
use App\Repositories\ProductImageRepository;
use App\Repositories\ProductRepository;
use App\Repositories\PurchaseItemRepository;
use App\Repositories\PurchasePaymentRepository;
use App\Repositories\PurchaseRepository;
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
            PurchaseRepositoryInterface::class,
            PurchaseRepository::class
        );
        $this->app->bind(
            PurchaseItemRepositoryInterface::class,
            PurchaseItemRepository::class
        );
        $this->app->bind(
            PurchasePaymentRepositoryInterface::class,
            PurchasePaymentRepository::class
        );
        $this->app->bind(
            PurchaseRepositoryInterface::class,
            PurchaseRepository::class
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
