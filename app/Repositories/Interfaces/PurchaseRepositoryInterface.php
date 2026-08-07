<?php


namespace App\Repositories\Interfaces;


interface PurchaseRepositoryInterface extends BaseRepositoryInterface
{
    public function generatePurchaseNo(int $id): String ;
}
