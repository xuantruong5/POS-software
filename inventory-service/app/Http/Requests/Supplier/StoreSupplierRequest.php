<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'ten_nha_cung_cap' => 'required|string|max:200',
            'so_dien_thoai' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:150',
            'dia_chi' => 'nullable|string|max:255',
            'khu_vuc' => 'nullable|string|max:100',
            'phuong_xa' => 'nullable|string|max:100',
            'id_supplier_group' => 'nullable|integer|exists:supplier_groups,id',
            'ghi_chu' => 'nullable|string',
            'cong_ty' => 'nullable|string|max:200',
            'ma_so_thue' => 'nullable|string|max:50',
            'so_cccd_cmnd' => 'nullable|string|max:30',
            'trang_thai' => 'nullable|in:0,1',
        ];
    }
    public function messages(): array
    {
        return [
            'ten_nha_cung_cap.required' => 'Tên nhà cung cấp là bắt buộc.',
            'ten_nha_cung_cap.max' => 'Tên nhà cung cấp không được vượt quá 200 ký tự.',
            'email.email' => 'Email không đúng định dạng.',
            'id_supplier_group.exists' => 'Nhóm nhà cung cấp không tồn tại.',
        ];
    }
}
