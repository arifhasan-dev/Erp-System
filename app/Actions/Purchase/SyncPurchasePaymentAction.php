<?php

namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchasePaymentRepositoryInterface;

class SyncPurchasePaymentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected PurchasePaymentRepositoryInterface $paymentRepository
    ){}
    public function execute(int $purchaseId, array $data)
    {
        return $this->paymentRepository->updateOrCreateByPurchaseId($purchaseId,$data);
    }
}
