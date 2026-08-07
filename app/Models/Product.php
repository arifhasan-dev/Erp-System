<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }


    protected $fillable = [
        'category_id',
        'brand_id',
        'unit_id',
        'supplier_id',
        'code',
        'sku',
        'barcode',
        'name',
        'slug',
        'purchase_price',
        'selling_price',
        'opening_stock',
        'minimum_stock',
        'description',
        'status',
        'created_by',
        'updated_by',
    ];
}
