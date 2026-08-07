<?php


namespace App\Services;


use App\Actions\Purchase\CreatePurchaseAction;
use App\Actions\Purchase\CreatePurchaseItemAction;
use App\Actions\Purchase\CreatePurchasePaymentAction;
use App\Actions\Purchase\DeletePurchaseItemAction;
use App\Actions\Purchase\GeneratePurchaseNoAction;
use App\Actions\Purchase\SyncPurchasePaymentAction;
use App\Actions\Purchase\UpdateProductStockAction;
use App\Actions\Purchase\UpdatePurchaseAction;
use App\Repositories\Interfaces\PurchaseRepositoryInterface;
use App\Models\Purchase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Actions\Purchase\DeletePurchaseAction;

class PurchaseService
{
    public function __construct(
        protected CreatePurchaseAction $createPurchaseAction,
        protected CreatePurchaseItemAction $createPurchaseItemAction,
        protected CreatePurchasePaymentAction $createPurchasePaymentAction,
        protected GeneratePurchaseNoAction $generatePurchaseNoAction,
        protected UpdateProductStockAction $updateProductStockAction,
        protected UpdatePurchaseAction $updatePurchaseAction,
        protected DeletePurchaseItemAction $deletePurchaseItemAction,
        protected SyncPurchasePaymentAction $syncPurchasePaymentAction,
        protected PurchaseRepositoryInterface $purchaseRepository,
        protected DeletePurchaseAction $deletePurchaseAction,
    )
    {}
    public function store(array $data): Purchase
    {
        try {
            return DB::transaction(function () use ($data) {

                $subtotal = collect($data['items'])->sum(function ($item) {
                    $qty = (float) $item['ordered_quantity'];
                    $cost = (float) $item['unit_cost'];
                    $discount = (float) ($item['discount_amount'] ?? 0);
                    $tax = (float) ($item['tax_amount'] ?? 0);

                    return ($qty * $cost) - $discount + $tax;
                });

                $discountAmount = (float) ($data['discount_amount'] ?? 0);
                $taxAmount = (float) ($data['tax_amount'] ?? 0);
                $shippingCost = (float) ($data['shipping_cost'] ?? 0);
                $otherCost = (float)($data['other_cost'] ?? 0);
                $paidAmount = (float) ($data['paid_amount'] ?? 0);

                $totalAmount = $subtotal +$taxAmount+$shippingCost+$otherCost-$discountAmount;

                $dueAmount = max($totalAmount - $paidAmount,0);


                $purchase = $this->createPurchaseAction->execute([
                    'purchase_no' => 'TEMP-' . now()->timestamp,
                    'supplier_id'       => $data['supplier_id'],
                    'purchase_date' => $data['purchase_date'],
                    'invoice_date'      => $data['invoice_date'],
                    'invoice_no'     => $data['invoice_no'] ?? null,

                    'subtotal'         => $subtotal,
                    'discount_amount'  => $discountAmount,
                    'tax_amount'       => $taxAmount,
                    'shipping_cost'    => $shippingCost,
                    'other_cost'       => $otherCost,
                    'total_amount'     => $totalAmount,
                    'paid_amount'      => $paidAmount,
                    'due_amount'       => $dueAmount,

                    'payment_status'    => $data['payment_status'],
                    'payment_method'    => $data['payment_method'],
                    'status'            => $data['status'],
                    'note'              => $data['note'] ?? null,
                    'created_by'        => auth()->id(),
                ]);
                $purchase->update([
                    'purchase_no' => $this->generatePurchaseNoAction->execute($purchase->id),
                ]);
                $this->createPurchaseItemAction->execute($purchase->id,$data['items']);
                if (!empty($data['paid_amount']) && (float)$data['paid_amount'] > 0)
                {
                    $this->createPurchasePaymentAction->execute([
                        'purchase_id'    => $purchase->id,
                        'payment_date' => $data['payment_date'] ?? now()->toDateString(),
                        'amount'         => $data['paid_amount'],
                        'payment_method' => $data['payment_method'] ?? 'cash',
                        'transaction_no' => $data['transaction_no'] ?? null,
                        'note'           => $data['note'],
                        'created_by'     => auth()->id(),
                    ]);
                }
                $this->updateProductStockAction->execute($data['items']);

                return $purchase->fresh([
                    'supplier',
                    'items.product',
                    'payments',
                    'creator',
                ]);

            });
        }
        catch (\Throwable $e)
        {
            Log::error('Purchase Creation Failed',[
                'message'   => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'data'      => $data,
            ]);

            throw $e;
        }
    }
    public function getAll()
    {
        return $this->purchaseRepository->getAll();
    }
    public function update(int $purchaseId,array $data): Purchase
    {
        try {
            return DB::transaction(function () use ($purchaseId,$data)
            {
                $purchase = $this->purchaseRepository->findById($purchaseId);

                $subTotal = collect($data['items'])->sum(function ($item){
                    $qty = (float) $item['ordered_quantity'];
                    $cost = (float) $item['unit_cost'];
                    $discount = (float) ($item['discount_amount'] ?? 0);
                    $tax = (float)($item['tax_amount'] ?? 0);

                    return ($qty * $cost) - $discount + $tax;
                });

                $discountAmount = (float) ($data['discount_amount'] ?? 0);
                $taxAmount = (float) ($data['tax_amount'] ?? 0);
                $shippingAmount = (float) ($data['shipping_cost'] ?? 0);
                $otherCost = (float) ($data['other_cost'] ?? 0);
                $paidAmount = (float) ($data['paid_amount'] ?? 0);

                $totalAmount = $subTotal + $taxAmount +$shippingAmount + $otherCost -$discountAmount;

                $dueAmount = max($totalAmount - $paidAmount,0);

                $purchase = $this->updatePurchaseAction->execute($purchaseId, [
                    'supplier_id' => $data['supplier_id'],
                    'purchase_id' => $purchaseId,
                    'invoice_date' => $data['invoice_date'],
                    'invoice_no' => $data['invoice_no'],

                    'subtotal' => $subTotal,
                    'discount_amount' => $discountAmount,
                    'tax_amount' => $taxAmount,
                    'shipping_cost' => $shippingAmount,
                    'other_cost' => $otherCost,
                    'totalAmount' => $totalAmount,
                    'paid_amount' => $paidAmount,
                    'due_amount'  => $dueAmount,
                    'payment_status' => $data['payment_status'],
                    'payment_method' =>$data['payment_method'],
                    'status' => $data['status'],
                    'note' => $data['note'] ?? null,
                ]);
                $this->deletePurchaseItemAction->execute($purchaseId);

                $this->createPurchaseItemAction->execute($purchaseId,$data['items']);

                if ($paidAmount > 0)
                {
                    $this->syncPurchasePaymentAction->execute($purchaseId, [
                        'payment_date' => $data['payment_data'] ?? now()->toDateString(),
                        'amount' => $paidAmount,
                        'payment_method' => $data['payment_method'],
                        'transaction_no' =>$data['transaction_no'] ?? null,
                        'create_by'    =>auth()->id(),
                    ]);
                }

                $this->updateProductStockAction->execute($data['items']);

                return $purchase->fresh([
                    'supplier',
                    'items.product',
                    'payments',
                    'creator',
                ]);

            });
        }
        catch (\Throwable $e)
        {
            Log::error('Purchase Update Failed',[
                'purchase_id' =>$purchaseId,
                'message'  => $e->getMessage(),
                'trace'   =>$e->getTraceAsString(),
                'data' => $data,
            ]);
            throw $e;
        }
    }
    public function destroy(int $purchaseId): bool
    {
        try {
            return DB::transaction(function () use ($purchaseId){
                $purchase = $this->purchaseRepository->findById($purchaseId);

                $purchase->payments()->delete();

                $purchase->items()->delete();

                return (bool) $this->deletePurchaseAction->execute($purchaseId);
            });
        }
        catch (\Throwable $e)
        {
            Log::error('Purchase Delete Failed',[
                'purchase_id' =>$purchaseId,
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            throw $e;
        }
    }

}
