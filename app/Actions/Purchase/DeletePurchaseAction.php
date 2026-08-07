<?php

namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchaseRepositoryInterface;

class DeletePurchaseAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected PurchaseRepositoryInterface $purchaseRepository
    ){}
    public function execute(int $purchaseId)
    {
        return $this->purchaseRepository->delete($purchaseId);
    }
}
