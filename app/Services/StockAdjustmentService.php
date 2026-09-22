<?php

namespace App\Services;

use App\Actions\StockAdjustment\DeleteStockAdjustmentAction;
use App\Actions\StockAdjustment\FindStockAdjustmentAction;
use App\Actions\StockAdjustment\GenerateAdjustmentNoAction;
use App\Actions\StockAdjustment\UpdateProductStockAction;
use App\Actions\StockAdjustment\CreateStockAdjustmentAction;
use App\Actions\StockAdjustment\CreateStockMovementAction;
use App\Actions\StockAdjustment\UpdateStockAdjustmentAction;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockAdjustmentService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected CreateStockAdjustmentAction $createStockAdjustmentAction,
        protected CreateStockMovementAction $createStockMovementAction,
        protected UpdateProductStockAction $updateProductStockAction,
        protected GenerateAdjustmentNoAction $generateAdjustmentNoAction,
        protected UpdateStockAdjustmentAction $updateStockAdjustmentAction,
        protected FindStockAdjustmentAction $findStockAdjustmentAction,
        protected DeleteStockAdjustmentAction $deleteStockAdjustmentAction,
    ){}

    public function store(array $data)
    {
        return DB::transaction(function () use ($data) {

            $data['adjustment_no'] = $this->generateAdjustmentNoAction->execute();
            $data['created_by'] = Auth::id();

            $adjustment = $this->createStockAdjustmentAction->execute($data);

            if ($adjustment->status !== 'approved')
            {
                return $adjustment;
            }
            $product = Product::findOrFail($adjustment->product_id);

            $beforeStock = (float) $product->current_stock;

            $operation = $adjustment->type === 'increase' ? 'increase' : 'decrease';

            $updateProduct = $this->updateProductStockAction->execute($product->id,(float) $adjustment->quantity,$operation);

            $this->createStockMovementAction->execute([
                'product_id' => $product->id,
                'type'   => 'adjustment',
                'reference_type' => get_class($adjustment),
                'reference_id'  => $adjustment->id,
                'quantity'  => $adjustment->quantity,
                'before_stock' => $beforeStock,
                'after_stock' => $updateProduct->current_stock,
                'remarks'  => $adjustment->note,
                'created_by'  => Auth::id(),
            ]);
            return $adjustment;
        });
    }
    public function update(int $id,array $data)
    {
        return DB::transaction(function () use ($id, $data) {

            $oldAdjustment = $this->findStockAdjustmentAction->execute($id);
            if ($oldAdjustment->status === 'approved')
            {
                $product = Product::findOrFail($oldAdjustment->product_id);
                $operation = $oldAdjustment->type ==='increase' ? 'decrease' : 'increase';
                $this->updateProductStockAction->execute($product->id,(float) $oldAdjustment->quantity,$operation);
            }
            $adjustment = $this->updateStockAdjustmentAction->execute($id,$data);
            if ($adjustment->status === 'approved')
            {
                $product = Product::findOrFail($adjustment->product_id);
                $beforeStock = (float) $product->current_stock;
                $operation = $adjustment->type === 'increase' ? 'increase' : 'decrease';
                $updateProduct = $this->updateProductStockAction->execute($product->id, (float) $adjustment->quantity, $operation);

                $this->createStockMovementAction->execute([
                    'product_id' => $product->id,
                    'type' => 'adjustment',
                    'reference_type' => get_class($adjustment),
                    'reference_id' =>$adjustment->id,
                    'quantity' => $adjustment->quantity,
                    'before_stock' => $beforeStock,
                    'after_stock' => $updateProduct->current_stock,
                    'remarks' =>$adjustment->note,
                    'created_by'  => Auth::id(),
                ]);
            }
            return $adjustment;
        });
    }
    public function destroy(int $id)
    {
        return DB::transaction(function () use ($id) {
            $adjustment = $this->findStockAdjustmentAction->execute($id);
            if ($adjustment->status === 'approved') {
                $product = Product::findOrFail($adjustment->product_id);
                $operation = $adjustment->type === 'increase' ? 'decrease' : 'increase';
                $this->updateProductStockAction->execute($product->id,(float) $adjustment->quantity,$operation);
            }
            return $this->deleteStockAdjustmentAction->execute($id);
        });
    }
}
