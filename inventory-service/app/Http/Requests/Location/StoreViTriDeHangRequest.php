<?php

namespace App\Http\Requests\Location;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreViTriDeHangRequest extends FormRequest
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
            // 'id_branch' => 'required|integer',
            'ten_vi_tri' => 'required|string|max:100',
        ];
    }
     public function messages(): array
    {
        return [
            // 'id_branch.required' => 'Chi nhánh không được để trống.',
            // 'id_branch.integer' => 'ID chi nhánh không hợp lệ.',

            'ten_vi_tri.required' => 'Tên vị trí không được để trống.',
            'ten_vi_tri.string' => 'Tên vị trí phải là chuỗi.',
            'ten_vi_tri.max' => 'Tên vị trí không được vượt quá 100 ký tự.',
        ];
    }
}
