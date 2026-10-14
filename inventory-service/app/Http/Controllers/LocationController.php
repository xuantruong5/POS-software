<?php

namespace App\Http\Controllers;
use App\Http\Requests\Location\StoreViTriDeHangRequest;
use App\Models\ViTriDeHang;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function storeLocation(StoreViTriDeHangRequest $request)
    {
        $viTri = ViTriDeHang::where(
            'ten_vi_tri',
            $request->ten_vi_tri
        )->first();

        if ($viTri) {
            return response()->json([
                'status' => false,
                'message' => 'Vị trí ' . $request->ten_vi_tri . ' đã tồn tại.',
            ], 400);
        }

        ViTriDeHang::create([
            'ten_vi_tri' => $request->ten_vi_tri,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Thêm vị trí ' . $request->ten_vi_tri . ' thành công.',
        ]);
    }
    public function searchProvince(Request $request)
    {
        $noi_dung_tim_kiem = $request->noi_dung_tim_kiem;

        $data = Province::where('name', 'like', '%' . $noi_dung_tim_kiem . '%')
            ->orWhere( 'codename','like', '%' . $noi_dung_tim_kiem . '%')
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'Lấy dữ liệu tỉnh thành công',
            'data' => $data
        ]);
    }
    public function searchWard(Request $request)
    {
        $province_code = $request->province_code;
        $noi_dung_tim_kiem = $request->noi_dung_tim_kiem;

        $province = Province::where('code', $province_code)->first();

        if (!$province) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy tỉnh thành',
                'data' => []
            ], 404);
        }

        $data = Ward::where('id_province', $province->id)
            ->where(function ($query) use ($noi_dung_tim_kiem) {
                $query->where('name','like','%' . $noi_dung_tim_kiem . '%')
                ->orWhere('codename','like','%' . $noi_dung_tim_kiem . '%');
            })
            ->get();
        return response()->json([
            'status' => true,
            'message' => 'Lấy dữ liệu phường xã thành công',
            'data' => $data
        ]);
    }
}
