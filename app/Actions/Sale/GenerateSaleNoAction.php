<?php

namespace App\Actions\Sale;

use App\Models\Sale;

class GenerateSaleNoAction
{
    /**
     * Create a new class instance.
     */
    public function execute(): string
    {
        $today = now()->format('Ymd');
        $lastSale = Sale::withTrashed()->whereDate('created_at',$today)->latest('id')->first();
        $nextNumber = $lastSale ? ((int) substr($lastSale->sale_no,-5)) +1 : 1;
        return 'SAL-' . $today . '-' . str_pad($nextNumber,5,'0',STR_PAD_LEFT);
    }
}
