<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'category_id',
        'name',
        'code',
        'image',
        'status',
    ];
}
