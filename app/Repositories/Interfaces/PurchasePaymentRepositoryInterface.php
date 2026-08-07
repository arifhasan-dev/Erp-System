<?php


namespace App\Repositories\Interfaces;
use App\Models\PurchasePayment;


interface PurchasePaymentRepositoryInterface extends BaseRepositoryInterface
{
    public function updateOrCreateByPurchaseId(int $purchaseId, array $data): PurchasePayment;

    public function deleteByPurchaseId(int $purchaseId): bool;
}
