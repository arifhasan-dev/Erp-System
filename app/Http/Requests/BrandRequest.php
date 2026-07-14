<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
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
        $brand = $this->route('brand');
        return [
            'category_id'   =>'required|exists:categories,id',
            'name'          => 'required|string|max:255',
            'code'          => ['required','string',Rule::unique('brands','code')->ignore($brand)],
            'status'        => 'required|boolean',
            'image'         => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }
}
