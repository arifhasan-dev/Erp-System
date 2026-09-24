<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'customer_code',
        'name',
        'phone',
        'email',
        'address',
        'opening_balance',
        'credit_limit',
        'status',
        'note',
        'created_by',
        'updated_by',
    ];
    protected $casts = [
        'opening_balance' => 'decimal:2',
        'credit_limit' => 'decimal:2',
        'status' => 'boolean',
    ];
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class,'updated_by');
    }

}
