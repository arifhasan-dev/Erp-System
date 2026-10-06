<?php

namespace App\Actions\Sale;



class CalculateSaleTotalsAction
{
    /**
     * Create a new class instance.
     */
    public function execute(array $data): array
    {
        $subtotal = $data['quantity'] * $data['unit_price'];
        $total = $subtotal - ($data['discount'] ?? 0 ) + ($data['tax'] ?? 0);
        return [
            'subtotal' => $subtotal,
            'total'    => $total
        ];
    }
    public function calculateGrandTotal(float $subtotal, float $discount = 0, float $tax = 0, float $shippingCharge = 0):float
    {
        return $subtotal - $discount + $tax +$shippingCharge;
    }
    public function calculatePayment(float $grandTotal,float $paidAmount = 0): array
    {
        $dueAmount = max($grandTotal - $paidAmount,0);
        if ($paidAmount <= 0 )
        {
            $paymentStatus = 'unpaid';
        }
        elseif ($paidAmount < $grandTotal)
        {
            $paymentStatus = 'partial';
        }
        else
        {
            $paymentStatus = 'paid';
        }
        return [
            'paid_amount' => $paidAmount,
            'due_amount' => $dueAmount,
            'payment_status' => $paymentStatus,
        ];
    }
}
