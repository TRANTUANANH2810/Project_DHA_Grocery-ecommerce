<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'sku' => 'required|unique:product,sku',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được bỏ trống.',
            'price.required' => 'Bạn chưa nhập giá sản phẩm',
            'category_id.required' => 'Bạn chưa chọn danh mục sản phẩm.',
            'sku.required' => 'Mã sản phẩm không được bỏ trống',
            'sku.unique' => 'Mã sản phẩm này đã tồn tại trong hệ thống',
        ];
    }
}
