<?php

namespace App\Http\Requests\PriceList;

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
            'ten_bang_gia' => 'required|string|max:150',

            'loai_bang_gia' => 'nullable|string|max:30',

            'mo_ta' => 'nullable|string',

            'tu_ngay' => 'nullable|date',

            'den_ngay' => 'nullable|date|after_or_equal:tu_ngay',

            'trang_thai' => 'required|integer|in:0,1',

            'cho_ban_ngoai_bang_gia' => 'required|integer|in:0,1',

            'canh_bao_ngoai_bang_gia' => 'required|integer|in:0,1',

            // Công thức giá
            'loai_cong_thuc' => 'required|in:gia_von,gia_nhap_cuoi,bang_gia',

            'id_bang_gia_goc' => 'nullable|integer|exists:price_lists,id',

            'phep_tinh' => 'required|in:cong,tru',

            'gia_tri_cong_thuc' => 'required|numeric|min:0',

            'don_vi_cong_thuc' => 'required|in:vnd,percent',
        ];
    }
    public function messages(): array
    {
        return [
            'ten_bang_gia.required' => 'Vui lòng nhập tên bảng giá.',
            'ten_bang_gia.string' => 'Tên bảng giá phải là chuỗi ký tự.',
            'ten_bang_gia.max' => 'Tên bảng giá không được vượt quá 150 ký tự.',

            'loai_bang_gia.string' => 'Loại bảng giá không hợp lệ.',
            'loai_bang_gia.max' => 'Loại bảng giá không được vượt quá 30 ký tự.',

            'mo_ta.string' => 'Mô tả phải là chuỗi ký tự.',

            'tu_ngay.date' => 'Ngày bắt đầu hiệu lực không hợp lệ.',

            'den_ngay.date' => 'Ngày kết thúc hiệu lực không hợp lệ.',
            'den_ngay.after_or_equal' => 'Ngày kết thúc phải lớn hơn hoặc bằng ngày bắt đầu.',

            'trang_thai.required' => 'Vui lòng chọn trạng thái bảng giá.',
            'trang_thai.integer' => 'Trạng thái bảng giá không hợp lệ.',
            'trang_thai.in' => 'Trạng thái chỉ được là áp dụng hoặc chưa áp dụng.',

            'cho_ban_ngoai_bang_gia.required' => 'Vui lòng chọn quyền bán hàng ngoài bảng giá.',
            'cho_ban_ngoai_bang_gia.integer' => 'Quyền bán hàng không hợp lệ.',
            'cho_ban_ngoai_bang_gia.in' => 'Quyền bán hàng không hợp lệ.',

            'canh_bao_ngoai_bang_gia.required' => 'Vui lòng chọn trạng thái cảnh báo.',
            'canh_bao_ngoai_bang_gia.integer' => 'Trạng thái cảnh báo không hợp lệ.',
            'canh_bao_ngoai_bang_gia.in' => 'Trạng thái cảnh báo không hợp lệ.',

            // Công thức
            'loai_cong_thuc.required' => 'Vui lòng chọn loại công thức giá.',
            'loai_cong_thuc.in' => 'Loại công thức giá không hợp lệ.',

            'id_bang_gia_goc.integer' => 'Bảng giá gốc không hợp lệ.',
            'id_bang_gia_goc.exists' => 'Bảng giá gốc không tồn tại.',

            'phep_tinh.required' => 'Vui lòng chọn phép tính.',
            'phep_tinh.in' => 'Phép tính chỉ được là cộng hoặc trừ.',

            'gia_tri_cong_thuc.required' => 'Vui lòng nhập giá trị công thức.',
            'gia_tri_cong_thuc.numeric' => 'Giá trị công thức phải là số.',
            'gia_tri_cong_thuc.min' => 'Giá trị công thức không được nhỏ hơn 0.',

            'don_vi_cong_thuc.required' => 'Vui lòng chọn đơn vị công thức.',
            'don_vi_cong_thuc.in' => 'Đơn vị công thức chỉ được là VND hoặc phần trăm.',
        ];
    }
}
