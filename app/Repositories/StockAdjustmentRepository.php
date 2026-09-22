<?php

namespace App\Repositories;

use App\Models\StockAdjustment;
use App\Repositories\Interfaces\StockAdjustmentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class StockAdjustmentRepository extends BaseRepository implements StockAdjustmentRepositoryInterface
{
    public function __construct(StockAdjustment $stockAdjustment)
    {
        parent::__construct($stockAdjustment);
    }
}
