<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class PostRegisterSellerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_name' => 'bail|min:8|unique:user,user_name', 
            'password' => 'min:8',
            'repassword' => 'bail|same:password',
            'email' => 'bail|email|unique:user,email',
            'phone' => 'bail|numeric|unique:user,phone',
        ];
    }
}
