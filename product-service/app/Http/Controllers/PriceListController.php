<?php

namespace App\Http\Controllers;
use App\Models\PriceList;
use App\Models\ProductPrice;
use App\Models\Product;
use App\Http\Requests\PriceList\StoreRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function storePriceList(StoreRequest $request)
    {
        $check = PriceList::where('ten_bang_gia',$request->ten_bang_gia)->exists();

        if ($check) {
            return response()->json([
                'success' => false,
                'message' => 'Tên bảng giá đã tồn tại.'
            ], 422);
        }
    
        $priceList = PriceList::create([
            'ten_bang_gia' => $request->ten_bang_gia,

            // Giao diện hiện tại không có trường này
            'loai_bang_gia' => $request->loai_bang_gia,

            'mo_ta' => $request->mo_ta,

            'tu_ngay' => $request->tu_ngay,
            'den_ngay' => $request->den_ngay,

            'trang_thai' => $request->trang_thai,

            'cho_ban_ngoai_bang_gia' =>$request->cho_ban_ngoai_bang_gia,

            'canh_bao_ngoai_bang_gia' =>$request->canh_bao_ngoai_bang_gia,

            // Công thức
            'loai_cong_thuc' =>$request->loai_cong_thuc,

            'id_bang_gia_goc' => $request->id_bang_gia_goc,

            'phep_tinh' =>$request->phep_tinh,

            'gia_tri_cong_thuc' =>$request->gia_tri_cong_thuc,

            'don_vi_cong_thuc' =>$request->don_vi_cong_thuc,
        ]);
       

        return response()->json([
            'success' => true,
            'message' => 'Tạo bảng giá thành công.',
            'data' => $priceList
        ], 201);
    }
    public function allProduct($id)
    {
        $priceList = PriceList::find($id);
        if (!$priceList) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy bảng giá.'
            ], 404);
        }

        $products = Product::where('trang_thai', 1)->get();

        foreach ($products as $product) {
            if ($priceList->loai_cong_thuc === 'gia_von') {
                $giaGoc = $product->gia_von;

            } elseif ($priceList->loai_cong_thuc === 'gia_nhap_cuoi') {
                $giaGoc = $product->gia_nhap_cuoi;

            } elseif ($priceList->loai_cong_thuc === 'gia_ban') {
                $giaGoc = $product->gia_ban;
            }
            if ($priceList->don_vi_cong_thuc === 'percent') {
                $giaThayDoi = $giaGoc * $priceList->gia_tri_cong_thuc / 100;
            } else {
                $giaThayDoi = $priceList->gia_tri_cong_thuc;
            }
            if ($priceList->phep_tinh === 'cong') {
                $donGia = $giaGoc + $giaThayDoi;
            } else {
                $donGia = max(0, $giaGoc - $giaThayDoi);
            }
            ProductPrice::updateOrCreate(
                [
                    'id_price_list' => $priceList->id,
                    'id_product' => $product->id,
                ],
                [
                    'don_gia' => $donGia,
                ]
            );
        }

        return response()->json([
            'success' => true,
            'message' => 'Đã áp dụng bảng giá cho tất cả hàng hóa.'
        ]);
    }
}
