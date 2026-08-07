<?php


namespace App\Actions\Purchase;


use App\Models\Product;

class UpdateProductStockAction
{
    public function execute(array $items)
    {
        foreach ($items as $item)
        {
            if (empty($item['product_id']))
            {
                continue;
            }
            $quantity = (float)($item['received_quantity'] ?? $item['ordered_quantity'] ?? 0);

            if ($quantity <= 0)
            {
                continue;
            }
            Product::where('id',$item['product_id'])->increment('current_stock',$quantity);
        }
    }
}
