<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SaleItemRepositoryInterface;

class UpdateSaleItemAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SaleItemRepositoryInterface $saleItemRepository
    ){}
    public function execute(int $id,array $data)
    {
        return $this->saleItemRepository->update($id,$data);
    }
}
