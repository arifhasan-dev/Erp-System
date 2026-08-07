<?php


namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchasePaymentRepositoryInterface;


class CreatePurchasePaymentAction
{

    public function __construct(protected PurchasePaymentRepositoryInterface $paymentRepository)
    {
    }
    public function execute(array $data)
    {
        return $this->paymentRepository->create($data);
    }
}
