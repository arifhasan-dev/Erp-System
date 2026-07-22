<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupplierBankAccount extends Model
{
    use SoftDeletes;

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    protected $fillable = [
        'supplier_id',
        'bank_name',
        'account_name',
        'account_type',
        'account_number',
        'swift_iban',
        'routing_number',
        'branch_code',
        'bank_city',
        'bank_country',
        'is_primary',
        'default_payment',
    ];
}
