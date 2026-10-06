<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SalePaymentRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class CreateSalePaymentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SalePaymentRepositoryInterface $salePaymentRepository
    ){}
    public function execute(array $data)
    {
        $data['created_by'] = Auth::id();
        return $this->salePaymentRepository->create($data);
    }
}
