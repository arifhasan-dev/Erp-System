<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasePayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_id',
        'payment_date',
        'amount',
        'payment_method',
        'transaction_no',
        'note',
        'created_by',
    ];
    protected $casts = [
        'payment_date' => 'date',
        'amount'       => 'decimal:2',
    ];
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

}
