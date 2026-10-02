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
        $productResponse = Http::get( 'http://product-service:8002/api/products',
            [
                'id_store' => $storeId,
                'id_branch' => $branchId
            ]
        );
        
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
                'ten_danh_muc' => $product['ten_danh_muc'],
                'id_store' => $product['id_store'],
                'loai_hang' => $product['loai_hang'],
                'ten_san_pham' => $product['ten_san_pham'],
                'ma_san_pham' => $product['ma_san_pham'],
                'ma_vach' => $product['ma_vach'],
                'hinh_anh' => $product['hinh_anh'],
                // 'id_brand' => $product['id_brand'] ?? null,
                'ten_thuong_hieu' => $product['ten_thuong_hieu'] ?? null,
                
                'trong_luong' => $product['trong_luong'],
                'gia_von' => $product['gia_von'],
                'gia_ban' => $product['gia_ban'],
                'ban_chay' => $product['ban_chay'],
                'khach_dat' => $product['khach_dat'],
                'trang_thai' => $product['trang_thai'],

                'channel_name' => $product['channel_name'] ?? null,
                // Bảng giá
                'ten_bang_gia' => $product['ten_bang_gia'] ?? null,
                'don_gia' => $product['don_gia'] ?? null,
                
                // Biến thể
                'huong_vi' => $product['huong_vi'] ?? null,
                'dung_tich' => $product['dung_tich'] ?? null,
                'mau_sac' => $product['mau_sac'] ?? null,
                'trong_luong_variant' => $product['trong_luong_variant'] ?? null,
                'kich_thuoc' => $product['kich_thuoc'] ?? null,
                'gia_tri' => $product['gia_tri'] ?? 0,

                'ten_don_vi' => $product['ten_don_vi'] ?? null,
                'ty_le_quy_doi' => $product['ty_le_quy_doi'] ?? 1,
                'gia_ban_don_vi' => $product['gia_ban_don_vi'] ?? null,
                'ban_truc_tiep' => $product['ban_truc_tiep'] ?? 0,
                'la_don_vi_co_ban' => $product['la_don_vi_co_ban'] ?? 0,
                
                // Thời gian
                'created_at' => $product['created_at'],
                'updated_at' => $product['updated_at'],
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

    public function storeProduct(Request $request)
    {
        // 1. Lấy thông tin user
        $userResponse = Http::withToken($request->bearerToken())->get('http://auth-service:8001/api/user-system');
        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không xác thực được tài khoản.'
            ], 401);
        }
        // 2. Lấy user
        $user = $userResponse->json('user');

        // 3. Lấy store và branch
        $storeId = $user['id_store'];
        $branchId = $user['id_branch'];

         // 4. Lấy dữ liệu sản phẩm
        $data = $request->all();

        // Gán store và branch từ tài khoản đăng nhập
        $data['id_store'] = $storeId;
        $data['id_branch'] = $branchId;

        // 4. Gửi sang Product Service
        $productResponse = Http::post( 'http://product-service:8002/api/store-products', $data );

        // 5. Trả kết quả về Frontend
        return response()->json(
            $productResponse->json(),
            $productResponse->status()
        );
    }


    public function storeLocation(Request $request)
    {
        if (!$request->bearerToken()) {
            return response()->json([
                'status' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->post(
                'http://inventory-service:8004/api/store/location',
                $request->all()
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function storeBrand(Request $request)
    {
        if (!$request->bearerToken()) {
            return response()->json([
                'status' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->post(
                'http://product-service:8002/api/store-brand',
                $request->all()
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function storeCombo(Request $request)
    {

        if (!$request->bearerToken()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        // 1. Lấy thông tin user từ Auth Service
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');
        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không xác thực được tài khoản.'
            ], 401);
        }
        $user = $userResponse->json('user');

        // phân quyền thử 
        if ($user['id_system_role'] != 1) {
            return response()->json([
                'success' => false,
                'message' => 'Chỉ OWNER của tạp hóa mới có quyền tạo combo.'
            ], 403);
        }


        // 2. Lấy store + branch
        $idStore = $user['id_store'];
        $idBranch = $user['id_branch'];
        // 3. Gửi sang Product Service
        $response = Http::withToken($request->bearerToken())
            ->post(
                'http://product-service:8002/api/store-combo',
                array_merge(
                    $request->all(),
                    [
                        'id_store' => $idStore,
                        'id_branch' => $idBranch,
                    ]
                )
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function storeSupplier(Request $request)
    {
        // 1. Lấy thông tin user từ Auth Service
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        // 2. Lấy user
        $user = $userResponse->json('user');

        // 3. Lấy thông tin từ user
        $userId = $user['id'];
        $storeId = $user['id_store'];
        $branchId = $user['id_branch'];

        // 4. Lấy dữ liệu nhà cung cấp
        $data = $request->all();

        // Gán người tạo từ tài khoản đăng nhập
        $data['id_user'] = $userId;
        $data['id_store'] = $storeId;
        $data['id_branch'] = $branchId;

        

        // 5. Gửi sang Supplier Service
        $supplierResponse = Http::post(
            'http://inventory-service:8004/api/store/supplier',
            $data
        );

        return response()->json(
            $supplierResponse->json(),
            $supplierResponse->status()
        );
    }

    public function updateSupplier(Request $request, $id)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');
        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $user = $userResponse->json('user');
        $data = $request->all();
        $data['id_user'] = $user['id'];
        $data['id_store'] = $user['id_store'];
        $data['id_branch'] = $user['id_branch'];

        $response = Http::withToken($request->bearerToken())
            ->put(
                "http://inventory-service:8004/api/update/supplier/{$id}",
                $data
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }
    public function deleteSupplier(Request $request, $id)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->delete(
                "http://inventory-service:8004/api/delete/supplier/{$id}"
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }
    public function restoreSupplier(Request $request, $id)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->put(
                "http://inventory-service:8004/api/suppliers/{$id}/restore"
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }
    public function getSupplier(Request $request)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $user = $userResponse->json('user');

        $response = Http::withToken($request->bearerToken())
            ->get('http://inventory-service:8004/api/supplier', [
                'id_store' => $user['id_store'],
                'id_branch' => $user['id_branch'],
            ]);

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function changeStatusSupplier(Request $request, $id)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Vui lòng đăng nhập để thực hiện chức năng này.'
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->post(
                "http://inventory-service:8004/api/supplier/status/{$id}",
                $request->all()
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function searchProvince(Request $request)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể xác thực người dùng.',
            ], 401);
        }
        $response = Http::withToken($request->bearerToken())
            ->post(
                'http://inventory-service:8004/api/province/search',
                $request->all()
            );
        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    public function searchWard(Request $request)
    {
        $userResponse = Http::withToken($request->bearerToken())
            ->get('http://auth-service:8001/api/user-system');

        if (!$userResponse->successful()) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể xác thực người dùng.',
            ], 401);
        }

        $response = Http::withToken($request->bearerToken())
            ->post(
                'http://inventory-service:8004/api/ward/search',
                $request->all()
            );

        return response()->json(
            $response->json(),
            $response->status()
        );
    }

    



















}
