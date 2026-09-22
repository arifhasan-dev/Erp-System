<?php

namespace App\Actions\StockAdjustment;

use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;

class CreateStockAdjustmentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected StockAdjustmentRepositoryInterface $adjustmentRepository
    ){}
    public function execute(array $data)
    {
        return $this->adjustmentRepository->create($data);
    }
}
