<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;
    protected $fillable =  [
        'sale_no',
        'customer_id',
        'sale_date',
        'subtotal',
        'discount',
        'tax',
        'shipping_charge',
        'grand_total',
        'paid_amount',
        'due_amount',
        'payment_status',
        'status',
        'note',
        'created_by',
        'updated_by',
    ];
    protected $casts = [
        'sale_date' => 'date',
        'subtotal'  => 'decimal:2',
        'discount'  => 'decimal:2',
        'tax'       => 'decimal:2',
        'shipping_charge' => 'decimal:2',
        'grand_total' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'due_amount'  => 'decimal:2',
    ];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class,'updated_by');
    }
    public function items(): HasMany
    {
        return $this->hasMany(SaleItem::class);
    }
    public function payments(): HasMany
    {
        return $this->hasMany(SalePayment::class);
    }
}
