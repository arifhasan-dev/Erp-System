<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable = [
        'product_id',
        'image',
        'is_primary',
        'sort_order',
    ];
}
