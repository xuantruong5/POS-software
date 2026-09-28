<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;
use App\Models\ProductBranch;
use App\RabbitMQ\ProductEventPublisher;


class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
        $storeId = $request->query('id_store');
        $branchId = $request->query('id_branch');

        $products = Product::join( 'product_branches', 'products.id', '=', 'product_branches.id_product' )
            ->where('products.id_store', $storeId)
            ->where('product_branches.id_branch', $branchId)
            ->select('products.*')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Lấy danh sách sản phẩm thành công',
            'id_store' => $storeId,
            'id_branch' => $branchId,
            'data' => $products
        ]);
    }

    public function store(StoreRequest $request)
    {
        $product = Product::create([
            'id_category' => $request->id_category,
            'id_store' => $request->id_store,
            'loai_hang' => $request->loai_hang,
            'ten_san_pham' => $request->ten_san_pham,
            'ma_san_pham' => $request->ma_san_pham,
            'ma_vach' => $request->ma_vach,
            'hinh_anh' => $request->hinh_anh,
            'thuong_hieu' => $request->thuong_hieu,
            'don_vi_tinh' => $request->don_vi_tinh,
            'trong_luong' => $request->trong_luong,
            'gia_von' => $request->gia_von ?? 0,
            'gia_ban' => $request->gia_ban ?? 0,
            'ban_chay' => false,
            'khach_dat' => false,
            'trang_thai' => true,
        ]);
        ProductBranch::create([
            'id_product' => $product->id,
            'id_branch' => $request->id_branch,
            'trang_thai' => true,
        ]);
        // 3. Publish event
        $publisher = new ProductEventPublisher();
        $publisher->publishProductCreated([
            'event' => 'product.created',

            'id_product' => $product->id,

            'id_store' => $request->id_store,
            'id_branch' => $request->id_branch,

            'ten_san_pham' => $product->ten_san_pham,
            'ma_san_pham' => $product->ma_san_pham,

            'so_luong_ton' => $request->so_luong_ton ?? 0,
            'ton_kho_toi_thieu' => $request->ton_kho_toi_thieu ?? 0,
            'ton_kho_toi_da' => $request->ton_kho_toi_da ?? 0,
            'vi_tri_de_hang' => $request->vi_tri_de_hang,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Thêm sản phẩm thành công.',
            'data' => $product,
        ], 201);
    }
}
