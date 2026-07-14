<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserRequest extends FormRequest
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
        $user = $this->route('user');
        if ($this->isMethod('post'))
        {
            return [
                'name'      => 'required|string|max:255',
                'email'     => 'required|email|unique:users,email',
                'password'  => ['required',Password::defaults()],
                'role'      => 'required|exists:roles,name',
                'status'    =>'required|boolean'
            ];
        }

        return [
            'name'   => 'required|string|max:255',
            'email'  => ['required','email',Rule::unique('users','email')->ignore($user)],
            'role'   => 'required|exists:roles,name',
            'status' => 'required|boolean',
        ];
    }
}
