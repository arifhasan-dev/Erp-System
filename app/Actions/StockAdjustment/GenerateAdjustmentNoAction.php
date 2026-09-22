<?php

namespace App\Actions\StockAdjustment;

use App\Models\StockAdjustment;

class GenerateAdjustmentNoAction
{
    public function execute():string
    {
        $data = now()->format('Ymd');
        $lastAdjustment = StockAdjustment::latest('id')->first();
        $nextNumber = $lastAdjustment ? $lastAdjustment->id + 1 : 1;
        return 'ADJ-' . $data . '-' . str_pad($nextNumber,5,'0',STR_PAD_LEFT);
    }
}
