<?php


namespace App\Actions\Purchase;

use App\Repositories\PurchaseRepository;
use App\Repositories\Interfaces\PurchaseRepositoryInterface;


class GeneratePurchaseNoAction
{
    public function __construct(protected PurchaseRepositoryInterface $purchaseRepository){}
    public function execute(int $id)
    {
        return $this->purchaseRepository->generatePurchaseNo($id);
    }
}
