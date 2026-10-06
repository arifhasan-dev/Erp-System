<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalePayment extends Model
{
    protected $fillable = [
        'sale_id',
        'payment_date',
        'amount',
        'payment_method',
        'transaction_reference',
        'note',
        'created_by'
    ];
    protected $casts = [
        'payment_date' => 'date',
        'amount' => 'decimal:2',
    ];
    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
