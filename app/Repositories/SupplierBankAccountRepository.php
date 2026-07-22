<?php


namespace App\Repositories;

use App\Models\SupplierBankAccount;
use App\Repositories\Interfaces\SupplierBankAccountRepositoryInterface;

class SupplierBankAccountRepository extends BaseRepository implements SupplierBankAccountRepositoryInterface
{
    public function __construct(SupplierBankAccount $supplierBankAccount)
    {
        parent::__construct($supplierBankAccount);
    }

    public function getPrimaryAccount(int $supplierId)
    {
        return $this->model->where('supplier_id',$supplierId)->where('is_primary',true)->first();
    }
    public function getSupplierAccount(int $supplierId)
    {
        return $this->model->where('supplier_id',$supplierId)->get();
    }

}
