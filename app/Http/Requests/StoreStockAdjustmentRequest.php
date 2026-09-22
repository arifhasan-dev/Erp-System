<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStockAdjustmentRequest extends FormRequest
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

    protected function prepareForValidation():void
    {
        $this->merge([
            'status' => $this->status ?? 'approved',
        ]);
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required','exists:products,id'],
            'adjustment_date' => ['required','date'],
            'type' => ['required','in:increase,decrease'],
            'quantity' => ['required','numeric','min:0.01'],
            'reason' => ['required','in:damaged,expired,lost,found,manual_correction,stock_count'],
            'status' => ['required','in:draft,approved,cancelled'],
            'note' => ['nullable','string','max:1000'],
        ];
    }
}
