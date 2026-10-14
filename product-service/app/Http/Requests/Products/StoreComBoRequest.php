<?php

namespace App\Http\Requests\Products;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreComBoRequest extends FormRequest
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
            'id_brand' => 'nullable|integer',
            'ten_san_pham' => 'required|string|max:200',
            'ma_san_pham' => 'nullable|string|max:50|unique:products,ma_san_pham',
            'ma_vach' => 'nullable|string|max:100|unique:products,ma_vach',
            'hinh_anh' => 'nullable|string|max:500',
            'trong_luong' => 'nullable|numeric|min:0',
            'gia_ban' => 'required|numeric|min:0',
            'mo_ta' => 'nullable|string',
            'ghi_chu' => 'nullable|string',
            // Nhiều sản phẩm trong Combo
            'items' => 'required|array|min:1',
            'items.*.id_product' => 'required|integer',
            'items.*.so_luong' => 'required|numeric|min:0.01',
           

            // Đơn vị tính
            'units' => 'nullable|array',
            'units.*.ten_don_vi' => 'required|string|max:100',
            'units.*.gia_ban_don_vi' => 'required|numeric|min:0',

            // Biến thể
            'variants' => 'nullable|array',
            'variants.*.ten_bien_the' => 'required|string|max:100',
            'variants.*.gia_tri' => 'required|string|max:255',

            // Vị trí để hàng nếu có
            'id_location' => 'nullable|integer',


        ];
    }
    public function messages(): array
    {
        return [
            'id_category.required' => 'Vui lòng chọn nhóm hàng.',
            'id_category.integer' => 'Nhóm hàng không hợp lệ.',
            'id_brand.integer' => 'Thương hiệu không hợp lệ.',

            'ten_san_pham.required' => 'Vui lòng nhập tên sản phẩm.',
            'ten_san_pham.string' => 'Tên sản phẩm phải là chuỗi.',
            'ten_san_pham.max' => 'Tên sản phẩm không được vượt quá 200 ký tự.',

            'ma_san_pham.string' => 'Mã sản phẩm phải là chuỗi.',
            'ma_san_pham.max' => 'Mã sản phẩm không được vượt quá 50 ký tự.',
            'ma_san_pham.unique' => 'Mã sản phẩm đã tồn tại.',

            'ma_vach.string' => 'Mã vạch phải là chuỗi.',
            'ma_vach.max' => 'Mã vạch không được vượt quá 100 ký tự.',
            'ma_vach.unique' => 'Mã vạch đã tồn tại.',

            'hinh_anh.string' => 'Hình ảnh không hợp lệ.',
            'hinh_anh.max' => 'Đường dẫn hình ảnh không được vượt quá 500 ký tự.',

            'trong_luong.numeric' => 'Trọng lượng phải là số.',
            'trong_luong.min' => 'Trọng lượng không được nhỏ hơn 0.',

            'gia_ban.required' => 'Vui lòng nhập giá bán.',
            'gia_ban.numeric' => 'Giá bán phải là số.',
            'gia_ban.min' => 'Giá bán không được nhỏ hơn 0.',

            'mo_ta.string' => 'Mô tả phải là chuỗi.',
            'ghi_chu.string' => 'Ghi chú phải là chuỗi.',

            'items.required' => 'Vui lòng thêm sản phẩm vào Combo.',
            'items.array' => 'Danh sách sản phẩm trong Combo không hợp lệ.',
            'items.min' => 'Combo phải có ít nhất một sản phẩm.',

            'items.*.id_product.required' => 'Vui lòng chọn sản phẩm trong Combo.',
            'items.*.id_product.integer' => 'Sản phẩm trong Combo không hợp lệ.',

            'items.*.so_luong.required' => 'Vui lòng nhập số lượng sản phẩm.',
            'items.*.so_luong.numeric' => 'Số lượng sản phẩm phải là số.',
            'items.*.so_luong.min' => 'Số lượng sản phẩm phải lớn hơn 0.',
        ];
    }
}
