<?php

namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchaseItemRepositoryInterface;

class DeletePurchaseItemAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected PurchaseItemRepositoryInterface $purchaseItemRepository
    ){}
    public function execute(int $purchaseId): bool
    {
        return $this->purchaseItemRepository->deleteByPurchaseId($purchaseId);
    }
}
