<?php


namespace App\Repositories\Interfaces;


interface PurchaseItemRepositoryInterface extends BaseRepositoryInterface
{
    public function createMany(array $items);

    public function deleteByPurchaseId(int $purchaseId):bool;

}
