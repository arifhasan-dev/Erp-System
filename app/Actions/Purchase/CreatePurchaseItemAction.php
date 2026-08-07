<?php


namespace App\Actions\Purchase;

use App\Repositories\Interfaces\PurchaseItemRepositoryInterface;
use App\Models\Product;
class CreatePurchaseItemAction
{
    public function __construct(protected PurchaseItemRepositoryInterface $itemRepository) {}
    public function execute(int $purchaseId,array $items)
    {
        $preparedItems = [];
        foreach ($items as $item)
        {
            $product = Product::findOrFail($item['product_id']);
            $qty = (float) $item['ordered_quantity'];
            $cost = (float) $item['unit_cost'];
            $discount = (float) ($item['discount_amount'] ?? 0);
            $tax = (float) ($item['tax_amount'] ?? 0);
            $lineTotal = ($qty * $cost) - $discount + $tax;
            $preparedItems[] = [
                'purchase_id'       => $purchaseId,
                'product_id'        => $product->id,
                'product_code'      => $item['product_code'] ?? null,
                'product_name'      => $product->name,
                'unit_name'         => $product->unit->name ?? null ,
                'ordered_quantity'  => $qty,
                'received_quantity' => $item['received_quantity'] ?? $qty,
                'unit_cost'         => $cost,
                'discount_amount'   => $discount,
                'tax_amount'        => $tax,
                'tax_percent'       => (float)($item['tax_percent'] ?? 0),
                'line_total'        => $lineTotal,
                'unit_id'           => $item['unit_id'] ?? null,
                'created_at'        => now(),
                'updated_at'        => now(),
            ];
        }
        $this->itemRepository->createMany($preparedItems);
    }
}
