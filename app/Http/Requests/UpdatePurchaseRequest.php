<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePurchaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'supplier_id' => ['required','exists:suppliers,id'],
            'purchase_date' => ['required','date'],
            'invoice_date' => ['required','date'],
            'invoice_no'  => ['nullable','string','max:100'],
            'discount_amount' => ['nullable','numeric','min:0'],
            'tax_amount' => ['nullable','numeric','min:0'],
            'shipping_cost' => ['nullable','numeric','min:0'],
            'other_cost' => ['nullable','numeric','min:0'],
            'paid_amount' => ['nullable','numeric','min:0'],
            'payment_status' => ['required','in:pending,partial,paid'],
            'payment_method' => ['required','in:cash,bank,mobile_banking,cheque,other'],
            'payment_date' => ['nullable','date','required_with:paid_amount'],
            'transaction_no' => ['nullable','string','max:200'],
            'status' => ['required','in:draft,ordered,received,completed,cancelled'],
            'note' => ['nullable','string','max:255'],
            'items' => ['required','array','min:1'],
            'items.*.product_id' =>['required','exists:products,id'],
            'items.*.ordered_quantity' =>['required','numeric','min:1'],
            'items.*.received_quantity' => ['nullable','numeric','min:0'],
            'items.*.unit_cost' => ['required','numeric','min:0'],
            'items.*.discount_amount' =>['nullable','numeric','min:0'],
            'items.*.tax_amount' => ['nullable','numeric','min:0']
        ];
    }
    public function messages():array
    {
        return [
            'supplier_id.required' => 'please select a supplier',
            'supplier_id.exists' => 'The selected Supplier does not exist.',
            'purchase_date.required' => 'Please select a purchase date',
            'purchase_date.date' => 'Please select a valid purchase date.',
            'invoice_date.required' => 'please select a invoice date',
            'invoice_date.date' => 'Please select a valid invoice date',
            'payment_status.required' => 'please select a payment status',
            'payment_status.in' => 'Please select a valid payment status',
            'items.required' => 'Please add at least one purchase item.',
            'items.array' => 'Invalid purchase item format.',
            'items.min' => 'please Add at least one purchase item',
            'items.*.product_id.required' => 'Please select a product',
            'items.*.product_id.exists' => 'The select product does not exist',
            'items.*.ordered_quantity.required' => 'please enter quantity',
            'items.*.ordered_quantity.min' => 'Quantity must be at least 1',
            'items.*.unit_cost.required' => 'Please enter unit cost',
        ];

    }
    protected function prepareForValidation():void
    {
        $this->merge([
            'discount_amount' => (float) ($this->discount_amount ?? 0),
            'tax_amount' => (float) ($this->tax_amount ?? 0),
            'shipping_cost' => (float) ($this->shipping_cost ?? 0),
            'other_cost' => (float) ($this->other_cost ?? 0),
            'paid_amount' => (float) ($this->paid_amount ?? 0),
        ]);
    }
}
