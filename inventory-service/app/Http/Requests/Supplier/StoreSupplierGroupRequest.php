<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierGroupRequest extends FormRequest
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
            'ten_nhom' => 'required|string|max:100',
            'mo_ta' => 'nullable|string',
            'trang_thai' => 'nullable|in:0,1',
        ];
    }
    public function messages(): array
    {
        return [
            'ten_nhom.required' => 'Tên nhóm nhà cung cấp không được để trống.',
            'ten_nhom.string' => 'Tên nhóm nhà cung cấp phải là chuỗi.',
            'ten_nhom.max' => 'Tên nhóm nhà cung cấp không được vượt quá 100 ký tự.',
            'mo_ta.string' => 'Mô tả phải là chuỗi.',
            'trang_thai.in' => 'Trạng thái chỉ được là 0 hoặc 1.',
        ];
    }
}
