<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SalePaymentRepositoryInterface;

class UpdateSalePaymentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SalePaymentRepositoryInterface $salePaymentRepository
    ){}
    public function execute(int $id,array $data)
    {
        return $this->salePaymentRepository->update($id,$data);
    }
}
