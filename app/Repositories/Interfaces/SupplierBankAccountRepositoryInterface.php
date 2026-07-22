<?php


namespace App\Repositories\Interfaces;


interface SupplierBankAccountRepositoryInterface extends BaseRepositoryInterface
{
    public function getPrimaryAccount(int $supplierId);
    public function getSupplierAccount(int $supplierId);
}
