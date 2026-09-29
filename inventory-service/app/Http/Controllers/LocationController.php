<?php

namespace App\Http\Controllers;
use App\Http\Requests\Location\StoreViTriDeHangRequest;
use App\Models\ViTriDeHang;

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
}
