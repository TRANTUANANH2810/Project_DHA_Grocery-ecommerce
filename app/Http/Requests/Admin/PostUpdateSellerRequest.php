<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateSellerRequest extends FormRequest
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
        $id = $this->seller_id;
        $detail_id = $this->seller_detail_id;
        return [
            'shop_name' => 'bail|unique:seller,shop_name,'.$detail_id, 
            'user_name' => 'bail|min:8|unique:user,user_name,'.$id, 
            'email' => 'bail|email|unique:user,email,'.$id,
            'phone' => 'bail|numeric|unique:user,phone,'.$id,
        ];
    }
}
