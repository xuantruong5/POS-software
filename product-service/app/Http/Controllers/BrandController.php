<?php

namespace App\Http\Controllers;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function storeBrand(StoreBrandRequest $request)
    {
        $brand = Brand::where('ten_thuong_hieu', $request->ten_thuong_hieu)->first();
        if ($brand) {
            return response()->json([
                'status' => false,
                'message' => 'Thương hiệu ' . $request->ten_thuong_hieu . ' đã tồn tại',
            ], 400);
        }

        Brand::create([
            'ten_thuong_hieu' => $request->ten_thuong_hieu,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Thêm mới thương hiệu ' . $request->ten_thuong_hieu . ' thành công',
        ]);
    }
}
