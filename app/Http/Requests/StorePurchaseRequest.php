<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseRequest extends FormRequest
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
            'supplier_id'       => 'required|exists:suppliers,id',
            'invoice_date'      => 'required|date',
            'invoice_no'        => 'nullable|string|max:100',
            'discount_amount'   => ['nullable', 'numeric', 'min:0'],
            'tax_amount'        => ['nullable', 'numeric', 'min:0'],
            'shipping_cost'     => ['nullable', 'numeric', 'min:0'],
            'other_cost'        => ['nullable', 'numeric', 'min:0'],
            'paid_amount'       => ['nullable', 'numeric', 'min:0'],
            'purchase_date' => ['required', 'date'],
            'payment_status' => ['required','in:pending,partial,paid'],
            'payment_method'    => ['required','in:cash,bank,mobile_banking,cheque,other'],
            'payment_date'      => ['nullable','date','required_with:paid_amount'],
            'transaction_no'   => ['nullable','string','max:255'],
            'status'             => ['required','in:draft,ordered,received,completed,cancelled'],
            'note'              => ['nullable','string','max:255'],
            'items'              => ['required','array','min:1'],
            'items.*.product_id'   => ['required','exists:products,id'],
            'items.*.ordered_quantity'   => ['required','numeric','min:1'],
            'items.*.received_quantity'   => ['nullable','numeric','min:0'],
            'items.*.unit_cost'         => ['required','numeric','min:0'],
            'items.*.discount_amount'   => ['nullable','numeric','min:0'],
            'items.*.tax_amount'        => ['nullable','numeric','min:0'],
        ];
    }
    public function messages(): array
    {
        return [
            'supplier_id.required' => 'Please select a supplier.',
            'supplier_id.exists'   => 'The supplier you are trying to add does not exist.',
            'invoice_date.required' => 'Please select a invoice date.',
            'invoice_date.date' => 'Please select a valid invoice date.',
            'payment_status.required' => 'Please select a payment status.',
            'payment_status.in' => 'Please select a valid payment status.',
            'payment_method.in' => 'Please select a valid payment method.',
            'items.required'   => 'Please select at least one item.',
            'items.array'   => 'Please select at least one item.',
            'items.min'   => 'Please select at least one item.',
            'items.*.product_id.required'   => 'Please select at least one product.',
            'items.*.product_id.exists' => 'The product you are trying to add does not exist.',
            'items.*.ordered_quantity.required' => 'Please select a ordered quantity.',
            'items.*.ordered_quantity.min' => 'Please select at least one ordered quantity.',
            'items.*.unit_cost.required' => 'Please select at least one unit cost.',
            'purchase_date.required' => 'Please select a purchase date.',
            'purchase_date.date' => 'Please select a valid purchase date.',
        ];
    }
    protected function prepareForValidation():void
    {
        $this->merge([
            'discount_amount' =>(float) ($this->discount_amount ?? 0),
            'tax_amount' => (float) ($this->tax_amount ?? 0),
            'shipping_cost' =>(float)  ($this->shipping_cost ?? 0),
            'other_cost' => (float) ($this->other_cost ?? 0),
            'paid_amount' =>(float)  ($this->paid_amount ?? 0),
            'payment_method' => $this->payment_method ?? 'cash',
        ]);
    }
}
