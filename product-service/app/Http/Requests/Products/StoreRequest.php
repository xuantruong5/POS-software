<?php

namespace App\Http\Requests\Products;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'id_category' => 'required|integer',
            'id_store' => 'required|integer',
            'id_branch' => 'required|integer',
            'loai_hang' => 'required|string',
            'ten_san_pham' => 'required|string|max:255',
            'ma_san_pham' => 'required|string|max:100',
            'ma_vach' => 'nullable|string|max:100',
            'hinh_anh' => 'nullable|string',
            'thuong_hieu' => 'nullable|string|max:255',
            'don_vi_tinh' => 'nullable|string|max:100',
            'trong_luong' => 'nullable|numeric',
            'gia_von' => 'nullable|numeric',
            'gia_ban' => 'nullable|numeric',

            'so_luong_ton' => 'nullable|numeric',
            'ton_kho_toi_thieu' => 'nullable|numeric',
            'ton_kho_toi_da' => 'nullable|numeric',
            'vi_tri_de_hang' => 'nullable|string|max:255',
        ];
    }
     public function messages(): array
    {
        return [
            'id_category.required' => 'Vui lòng chọn danh mục sản phẩm.',
            'id_category.integer' => 'Danh mục sản phẩm không hợp lệ.',

            'id_store.required' => 'Vui lòng chọn cửa hàng.',
            'id_store.integer' => 'Cửa hàng không hợp lệ.',

            'id_branch.required' => 'Vui lòng chọn chi nhánh.',
            'id_branch.integer' => 'Chi nhánh không hợp lệ.',

            'loai_hang.required' => 'Vui lòng nhập loại hàng.',
            'loai_hang.string' => 'Loại hàng phải là chuỗi.',

            'ten_san_pham.required' => 'Vui lòng nhập tên sản phẩm.',
            'ten_san_pham.string' => 'Tên sản phẩm phải là chuỗi.',
            'ten_san_pham.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',

            'ma_san_pham.required' => 'Vui lòng nhập mã sản phẩm.',
            'ma_san_pham.string' => 'Mã sản phẩm phải là chuỗi.',
            'ma_san_pham.max' => 'Mã sản phẩm không được vượt quá 100 ký tự.',

            'ma_vach.max' => 'Mã vạch không được vượt quá 100 ký tự.',
            'thuong_hieu.max' => 'Thương hiệu không được vượt quá 255 ký tự.',
            'don_vi_tinh.max' => 'Đơn vị tính không được vượt quá 100 ký tự.',

            'trong_luong.numeric' => 'Trọng lượng phải là số.',
            'gia_von.numeric' => 'Giá vốn phải là số.',
            'gia_ban.numeric' => 'Giá bán phải là số.',

            'so_luong_ton.numeric' => 'Số lượng tồn phải là số.',
            'ton_kho_toi_thieu.numeric' => 'Tồn kho tối thiểu phải là số.',
            'ton_kho_toi_da.numeric' => 'Tồn kho tối đa phải là số.',
            'vi_tri_de_hang.string' => 'Vị trí để hàng phải là chuỗi.',
            'vi_tri_de_hang.max' => 'Vị trí để hàng không được vượt quá 255 ký tự.',
        ];
    }

}
