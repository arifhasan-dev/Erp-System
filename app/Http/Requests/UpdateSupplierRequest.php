<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSupplierRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $supplier = $this->route('supplier');

        return [
            'name' => 'required|string|max:256',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('suppliers', 'email')->ignore($supplier),
            ],

            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('suppliers', 'phone')->ignore($supplier),
            ],

            'supplier_type' => 'required|in:local,international',
            'country' => 'required|string|max:100',
            'city' => 'nullable|max:100',
            'address' => 'nullable|string|max:100',
            'payment_term' => 'nullable|max:100',
            'currency' => 'required|string|max:10',

            'company_name' => 'nullable|string|max:256',
            'company_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'company_email' => 'nullable|email|max:255',
            'company_phone' => 'nullable|string|max:20',
            'company_website' => 'nullable|url|max:255',
            'company_address' => 'nullable|string',
            'tax_number' => 'nullable|string|max:100',
            'industry_type' => 'nullable|string|max:100',

            'status' => 'required|boolean',

            // Bank Information
            'bank_name' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
            'account_type' => 'required|in:savings,current,other',
            'account_number' => 'required|string|max:100',
            'swift_iban' => 'nullable|string|max:100',
            'routing_number' => 'nullable|string|max:100',
            'branch_code' => 'nullable|string|max:100',
            'bank_city' => 'nullable|string|max:100',
            'bank_country' => 'nullable|string|max:100',
            'is_primary' => 'nullable|boolean',
            'default_payment' => 'nullable|boolean',
        ];
    }
}
