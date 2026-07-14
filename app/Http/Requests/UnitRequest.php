<?php

namespace App\Http\Requests;

use App\Models\Unit;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UnitRequest extends FormRequest
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
        $unit = $this->route('unit');
        return [
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:255',
            'code' => ['required','string',Rule::unique('units','code')->ignore($unit)],
            'status' => 'required|boolean',
        ];
    }
}
