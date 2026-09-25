<?php

namespace App\Http\Requests\Products;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class storeCategoryRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'ten_danh_muc' => 'required|string|max:150',
            'id_parent' => 'nullable|integer|exists:categories,id',
            'mo_ta' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [
            'ten_danh_muc.required' => 'Tên danh mục không được để trống',
            'ten_danh_muc.string' => 'Tên danh mục phải là chuỗi',
            'ten_danh_muc.max' => 'Tên danh mục không được quá 150 ký tự',
            'id_parent.integer' => 'Danh mục cha không hợp lệ',
            'id_parent.exists' => 'Danh mục cha không tồn tại',
            'mo_ta.string' => 'Mô tả phải là chuỗi',
        ];
    }
}
