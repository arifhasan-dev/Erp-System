<?php

namespace App\Actions\Customer;

use App\Models\Customer;

class GenerateCustomerCodeAction
{
    /**
     * Create a new class instance.
     */
    public function execute(): string
    {
        $lastNumber = Customer::latest('id')->first();
        $nextNumber = $lastNumber ? $lastNumber->id + 1 : 1;
        return 'CUS' . str_pad($nextNumber,6,'0',STR_PAD_LEFT);
    }
}
