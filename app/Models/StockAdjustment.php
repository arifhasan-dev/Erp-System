<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class StockAdjustment extends Model
{
    protected $fillable = [
        'adjustment_no',
        'product_id',
        'adjustment_date',
        'type',
        'quantity',
        'reason',
        'status',
        'note',
        'created_by'
    ];
    protected $casts = [
        'adjustment_date' => 'date',
        'quantity' => 'decimal:2',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
    public function stockMovements(): MorphMany
    {
        return $this->morphMany(StockMovement::class,'reference');
    }
}
