<?php

namespace App\Actions\Sale;

use App\Repositories\Interfaces\SaleItemRepositoryInterface;

class CreateSaleItemAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SaleItemRepositoryInterface $saleItemRepository
    )
    {}
    public function execute(array $data)
    {
        return $this->saleItemRepository->create($data);
    }
}
