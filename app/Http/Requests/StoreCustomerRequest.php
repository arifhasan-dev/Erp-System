<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required','string','max:255'],
            'phone' => ['nullable','string','max:20'],
            'email' => ['nullable','email','max:255'],
            'address' => ['nullable','string'],
            'opening_balance' =>['nullable','numeric','min:0'],
            'credit_limit' => ['nullable','numeric','min:0'],
            'status' => ['nullable','boolean'],
            'note' => ['nullable','string'],
        ];
    }
}
