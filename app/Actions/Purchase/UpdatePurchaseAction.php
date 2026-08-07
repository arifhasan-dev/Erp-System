<?php

namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchaseRepositoryInterface;

class UpdatePurchaseAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected PurchaseRepositoryInterface $purchaseRepository)
    {}
    public function execute(int $purchaseId,array $data)
    {
        return $this->purchaseRepository->update($purchaseId,$data);
    }
}
