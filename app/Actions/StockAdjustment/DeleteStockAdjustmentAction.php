<?php

namespace App\Actions\StockAdjustment;

use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;

class DeleteStockAdjustmentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected StockAdjustmentRepositoryInterface $adjustmentRepository
    ){}
    public function execute(int $id)
    {
        return $this->adjustmentRepository->delete($id);
    }
}
