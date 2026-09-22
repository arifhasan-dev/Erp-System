<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class StockMovement extends Model
{
    protected $fillable = [
        'product_id',
        'type',
        'reference_type',
        'reference_id',
        'quantity',
        'before_stock',
        'after_stock',
        'remarks',
        'created_by'
    ];
    protected $casts = [
        'quantity' => 'decimal:2',
        'before_stock' => 'decimal:2',
        'after_stock' =>'decimal:2',
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function reference(): MorphTo
    {
        return $this->morphTo();
    }
    public  function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
}
