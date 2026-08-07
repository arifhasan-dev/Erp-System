<?php


namespace App\Actions\Purchase;

use App\Repositories\PurchaseRepository;
use App\Repositories\Interfaces\PurchaseRepositoryInterface;


class CreatePurchaseAction
{

    public function __construct(protected PurchaseRepositoryInterface $purchaseRepository)
    {
    }
    public function execute(array $data)
    {
        return $this->purchaseRepository->create($data);
    }
}
