<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSaleRequest extends FormRequest
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
            'customer_id' => ['required','integer','exists:customers,id'],
            'sale_date'   => ['required','date'],
            'discount'    => ['nullable','numeric','min:0'],
            'tax'         => ['nullable','numeric','min:0'],
            'shipping_charge' => ['nullable','numeric','min:0'],
            'paid_amount' => ['nullable','numeric','min:0'],
            'payment_date' => ['nullable','date'],
            'payment_method' => [Rule::requiredIf(fn() => (float) $this->input('paid_amount',0) > 0),'nullable','in:cash,bank,mobile_banking,cheque,other'],
            'transaction_reference' => ['nullable','string','max:255'],
            'payment_note' => ['nullable','string'],
            'note' =>['nullable','string'],
            'items' => ['required','array','min:1'],
            'items.*.product_id' => ['required','integer','exists:products,id'],
            'items.*.quantity' => ['required','numeric','min:0.01'],
            'items.*.unit_price' => ['required','numeric','min:0'],
            'items.*.discount' => ['nullable','numeric','min:0'],
            'items.*.tax' => ['nullable','numeric','min:0'],


        ];
    }
}
