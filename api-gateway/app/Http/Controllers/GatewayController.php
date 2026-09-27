<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function test()
    {
        $response = Http::get('http://auth-service:8001/api/test');

        return response()->json($response->json(), $response->status());
    }
    public function login(Request $request)
    {
        $response = Http::post( 'http://auth-service:8001/api/login', $request->all());
        return response()->json($response->json(), $response->status());
    }

    public function productCategories()
    {
        $response = Http::get( 'http://product-service:8002/api/product-category' );
        return response()->json( $response->json(), $response->status() );
    }


    public function products(Request $request)
    {
        // 1. Lấy thông tin user
        $userResponse = Http::withToken( $request->bearerToken())->get('http://auth-service:8001/api/user-system' );

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không xác thực được tài khoản.'
            ], 401);
        }

        $user = $userResponse->json('user');

        // Lấy branch và store từ Auth-service
        $storeId = $user['id_store'];
        $branchId = $user['id_branch'];

        // 2. Lấy sản phẩm
        $productResponse = Http::get('http://product-service:8002/api/products' );
        if (!$productResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể lấy danh sách sản phẩm.'
            ], 500);
        }
        $products = collect( $productResponse->json('data'));

        // Lấy danh sách ID sản phẩm
        $productIds = $products
            ->pluck('id')
            ->toArray();
            
        // 3. Lấy tồn kho
        $inventoryResponse = Http::get( 'http://inventory-service:8004/api/inventories/products',
            [
                'id_branch' => $branchId,
                'product_ids' => $productIds,
            ]
        );

        if (!$inventoryResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể lấy dữ liệu tồn kho.'
            ], 500);
        }

        $inventories = collect( $inventoryResponse->json('data') );

        // 4. Ghép sản phẩm + tồn kho
        $products->transform(function ($product) use ($inventories) {
            $inventory = $inventories->firstWhere(
                'id_product',
                $product['id']
            );

            return [
                // Thông tin sản phẩm
                'id' => $product['id'],
                'id_category' => $product['id_category'],
                'id_store' => $product['id_store'],
                'loai_hang' => $product['loai_hang'],
                'ten_san_pham' => $product['ten_san_pham'],
                'ma_san_pham' => $product['ma_san_pham'],
                'ma_vach' => $product['ma_vach'],
                'hinh_anh' => $product['hinh_anh'],
                'thuong_hieu' => $product['thuong_hieu'],
                'don_vi_tinh' => $product['don_vi_tinh'],
                'trong_luong' => $product['trong_luong'],
                'gia_von' => $product['gia_von'],
                'gia_ban' => $product['gia_ban'],
                'ban_chay' => $product['ban_chay'],
                'khach_dat' => $product['khach_dat'],
                'trang_thai' => $product['trang_thai'],

                // Thông tin tồn kho
                'so_luong_ton' => $inventory['so_luong_ton'] ?? 0,
                'ton_kho_toi_thieu' => $inventory['ton_kho_toi_thieu'] ?? 0,
                'ton_kho_toi_da' => $inventory['ton_kho_toi_da'] ?? 0,
                'vi_tri_de_hang' => $inventory['vi_tri_de_hang'] ?? null,
            ];
        });
        // 5. Trả kết quả
        return response()->json([
            'success' => true,
            'id_store' => $storeId,
            'id_branch' => $branchId,
            'data' => $products
        ]);
    }


}
