<?php

namespace App\Repositories;

use App\Models\SalePayment;
use App\Repositories\Interfaces\SalePaymentRepositoryInterface;

class SalePaymentRepository extends BaseRepository implements SalePaymentRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(SalePayment $salePayment)
    {
        parent::__construct($salePayment);
    }
}
