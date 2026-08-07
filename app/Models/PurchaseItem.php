<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PurchaseItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_id',
        'product_id',

        'product_code',
        'product_name',
        'unit_name',

        'ordered_quantity',
        'received_quantity',

        'unit_cost',
        'discount_amount',
        'tax_amount',
        'tax_percent',

        'line_total',
        'unit_id',
    ];
    protected $casts = [
        'ordered_quantity' => 'decimal:2',
        'received_quantity' => 'decimal:2',
        'unit_cost'         => 'decimal:2',
        'discount_amount'   => 'decimal:2',
        'tax_amount'        => 'decimal:2',
        'tax_percent'       => 'decimal:2',
        'line_total'        => 'decimal:2',
    ];
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
