<?php

namespace App\Actions\StockAdjustment;

use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;

class UpdateStockAdjustmentAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected StockAdjustmentRepositoryInterface $adjustmentRepository
    )
    {}
    public function execute(int $id,array $data)
    {
        return $this->adjustmentRepository->update($id,$data);
    }
}
