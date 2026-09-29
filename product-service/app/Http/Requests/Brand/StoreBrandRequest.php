<?php

namespace App\Http\Requests\Brand;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'ten_thuong_hieu' => 'required|string|max:150',
            // 'trang_thai' => 'nullable|integer|in:0,1',
        ];
    }
    public function messages(): array
    {
        return [
            'ten_thuong_hieu.required' => 'Tên thương hiệu không được để trống.',
            'ten_thuong_hieu.string' => 'Tên thương hiệu phải là chuỗi.',
            'ten_thuong_hieu.max' => 'Tên thương hiệu không được vượt quá 150 ký tự.',

            // 'trang_thai.integer' => 'Trạng thái không hợp lệ.',
            // 'trang_thai.in' => 'Trạng thái chỉ được 0 hoặc 1.',
        ];
    }
}
