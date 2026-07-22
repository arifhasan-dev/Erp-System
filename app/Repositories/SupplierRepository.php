<?php


namespace App\Repositories;

use App\Models\Supplier;
use App\Repositories\Interfaces\SupplierRepositoryInterface;

class SupplierRepository extends BaseRepository implements SupplierRepositoryInterface
{
    public function __construct(Supplier $supplier)
    {
        parent::__construct($supplier);
    }
    public function generateSupplierCode()
    {
        $lastSupplier = $this->model->latest()->first();
        if (!$lastSupplier)
        {
            return 'SUP000001';
        }
        $number = (int) substr($lastSupplier->code,3);
        $number++;
        return 'SUP' . str_pad($number,6,'0',STR_PAD_LEFT);
    }
}
