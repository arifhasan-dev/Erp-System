<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes,HasFactory;
    protected $fillable = [
        'purchase_no',
        'supplier_id',
        'purchase_date',
        'invoice_date',
        'invoice_no',

        'subtotal',
        'discount_amount',
        'tax_amount',
        'shipping_cost',
        'other_cost',
        'total_amount',
        'tax_percent',

        'paid_amount',
        'due_amount',
        'payment_status',
        'payment_method',

        'status',
        'note',
        'created_by',
    ];
    protected $casts = [
        'purchase_date'   => 'date',
        'invoice_date'    => 'date',

        'subtotal'        => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'tax_amount'      => 'decimal:2',
        'shipping_cost'   => 'decimal:2',
        'other_cost'      => 'decimal:2',
        'total_amount'    => 'decimal:2',
        'tax_percent'     => 'decimal:2',

        'paid_amount'     => 'decimal:2',
        'due_amount'      => 'decimal:2',
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function items()
    {
        return $this->hasMany(PurchaseItem::class);
    }
    public function payments()
    {
        return $this->hasMany(PurchasePayment::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
