<?php

namespace App\Actions\StockAdjustment;

use App\Models\Product;

class UpdateProductStockAction
{
    public function execute(
        int $productId,
        float $quantity,
        string $operation = 'increase'
    ): Product
    {
        $product = Product::findOrFail($productId);
        if ($operation === 'increase')
        {
            $product->increment('current_stock',$quantity);
        }
        else
        {
            $product->decrement('current_stock',$quantity);
        }
        return $product->refresh();
    }
}
