<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'category_id' => ['required','exists:categories,id'],
            'brand_id' => ['nullable','exists:brands,id'],
            'unit_id' => ['required' ,'exists:units,id'],
            'supplier_id' => ['nullable' ,'exists:suppliers,id'],
            'code' => ['required','string','max:50',Rule::unique('products','code')->ignore($this->product)],
            'sku' => ['required','string','max:100',Rule::unique('products','sku')->ignore($this->product)],
            'barcode' => ['nullable','string','max:100',Rule::unique('products','barcode')->ignore($this->product)],
            'name' => ['required','string','max:255'],
            'purchase_price' => ['required','numeric','min:0'],
            'selling_price' => ['required','numeric','gt:purchase_price'],
            'opening_stock' => ['required', 'integer', 'min:0'],
            'minimum_stock' => ['required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'status' => ['required','boolean'],
            'images' => ['nullable','array'],
            'images.*' => ['image','mimes:jpg,jpeg,png,webp','max:2048'],
            'delete_images' => ['nullable','array'],
            'delete_images.*' => ['integer','exists:product_images,id']
        ];
    }
}
