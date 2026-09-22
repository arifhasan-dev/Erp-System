<?php

namespace App\Actions\StockAdjustment;

use App\Models\StockAdjustment;
use App\Models\StockMovement;

class CreateStockMovementAction
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {}
    public function execute(array $data)
    {
        return StockMovement::create($data);
    }
}
