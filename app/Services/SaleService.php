<?php

namespace App\Services;

use App\Actions\Sale\CalculateSaleTotalsAction;
use App\Actions\Sale\CreateSaleAction;
use App\Actions\Sale\CreateSaleItemAction;
use App\Actions\Sale\CreateSalePaymentAction;
use App\Actions\Sale\UpdateSaleAction;
use App\Actions\Sale\UpdateSaleItemAction;
use App\Actions\Sale\UpdateSalePaymentAction;
use App\Repositories\Interfaces\SalePaymentRepositoryInterface;
use App\Repositories\Interfaces\SaleRepositoryInterface;
use Illuminate\Support\Facades\DB;

class SaleService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SaleRepositoryInterface $saleRepository,
        protected CreateSaleAction $createSaleAction,
        protected CreateSaleItemAction $createSaleItemAction,
        protected CreateSalePaymentAction $createSalePaymentAction,
        protected CalculateSaleTotalsAction $calculateSaleTotalsAction,

        protected UpdateSaleAction $updateSaleAction,
        protected UpdateSaleItemAction $updateSaleItemAction,
        protected UpdateSalePaymentAction $updateSalePaymentAction,

        protected SalePaymentRepositoryInterface $salePaymentRepository
    ){}
    public function store(array $data)
    {
        return DB::transaction(function () use ($data){
            $items = $data['items'];
            unset($data['items']);

            $subtotal = 0;

            foreach ($items as &$item)
            {
                $calculated = $this->calculateSaleTotalsAction->execute($item);
                $item['subtotal'] = $calculated['subtotal'];
                $item['total'] = $calculated['total'];
                $subtotal += $calculated['total'];
            }
            unset($item);
            $grandTotal = $this->calculateSaleTotalsAction->calculateGrandTotal(
                $subtotal,
                $data['discount'] ?? 0,
                $data['tax'] ?? 0,
                $data['shipping_charge'] ?? 0,
            );
            $payment = $this->calculateSaleTotalsAction->calculatePayment(
                $grandTotal,
                $data['paid_amount'] ?? 0
            );

            $data['subtotal'] = $subtotal;
            $data['grand_total'] = $grandTotal;
            $data['paid_amount'] = $payment['paid_amount'];
            $data['due_amount']  = $payment['due_amount'];
            $data['payment_status'] = $payment['payment_status'];

            $sale = $this->createSaleAction->execute($data);

            foreach ($items as $item)
            {
                $item['sale_id'] = $sale->id;
                $this->createSaleItemAction->execute($item);
            }
            if (($payment['paid_amount'] ?? 0) > 0)
            {
                $paymentData = [
                    'sale_id' => $sale->id,
                    'payment_date' => $data['payment_date'] ?? now()->toDateString(),
                    'amount' => $payment['paid_amount'],
                    'payment_method' => $data['payment_method'],
                    'transaction_reference' => $data['transaction_reference'] ?? null,
                    'note' => $data['payment_note'] ?? null,
                ];
                $this->createSalePaymentAction->execute($paymentData);
            }
            return $sale;
        });
    }
    public function update(int $id,array $data)
    {
        return DB::transaction(function () use ($id,$data){
            $items = $data['items'];
            unset($data['items']);

            $paymentData = [
                'payment_date' => $data['payment_date'] ?? now()->toDateString(),
                'payment_method' => $data['payment_method'] ?? null,
                'transaction_reference' => $data['transaction_reference'] ?? null,
            ];
            unset(
                $data['payment_date'],
                $data['payment_method'],
                $data['transaction_reference'],
                $data['payment_note'],
            );
            $subtotal =0;
            foreach ($items as &$item)
            {
                $calculated = $this->calculateSaleTotalsAction->execute($item);
                $item['subtotal'] = $calculated['subtotal'];
                $item['total'] = $calculated['total'];
                $subtotal += $calculated['total'];
            }
            unset($item);
            $grandTotal = $this->calculateSaleTotalsAction->calculateGrandTotal(
                $subtotal,
                $data['discount'] ?? 0,
                $data['tax'] ?? 0,
                $data['shipping_charge'] ?? 0,
            );
            $payment = $this->calculateSaleTotalsAction->calculatePayment(
                $grandTotal,
                $data['paid_amount'] ?? 0
            );
            $data['subtotal'] = $subtotal;
            $data['grand_total'] = $grandTotal;
            $data['paid_amount'] = $payment['paid_amount'];
            $data['due_amount'] = $payment['due_amount'];
            $data['payment_status'] = $payment['payment_status'];

            $sale = $this->updateSaleAction->execute($id,$data);

            foreach ($items as $item)
            {
                $itemId = $item['id'];
                unset($item['id']);
                $this->updateSaleItemAction->execute($itemId,$item);
            }
            $existingPayment = $sale->payments()->first();

            if ($payment['paid_amount'] > 0)
            {
                $paymentData['amount'] = $payment['paid_amount'];
                if ($existingPayment)
                {
                    $this->updateSalePaymentAction->execute($existingPayment->id,$paymentData);
                }
                else
                {
                    $paymentData['sale_id'] = $sale->id;
                    $this->createSalePaymentAction->execute($paymentData);
                }
            }
            elseif ($existingPayment)
            {
                $this->salePaymentRepository->delete($existingPayment->id);
            }
            return $sale;
        });
    }
    public function delete(int $id)
    {
        return DB::transaction(function () use($id){
            $sale = $this->saleRepository->findWithDetails($id);
            $sale->payments()->delete();
            $sale->items()->delete();
            return $sale->delete();
        });
    }
}
