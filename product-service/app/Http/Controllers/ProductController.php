<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\StoreRequest;
use App\Http\Requests\Products\StoreComBoRequest;
use App\Models\ProductBranch;
use App\RabbitMQ\ProductEventPublisher;
use App\Models\ProductCombo;
use App\Models\ProductComboItem;
use App\Models\ProductUnit;
use App\Models\ProductVariant;


class ProductController extends Controller
{
    public function getProduct(Request $request)
    {
        $storeId = $request->query('id_store');
        $branchId = $request->query('id_branch');

        $products = Product::join( 'product_branches', 'products.id', '=', 'product_branches.id_product' )
            ->join( 'categories', 'products.id_category','=', 'categories.id')
            ->leftJoin('product_sales_channels','products.id','=','product_sales_channels.id_product')
            ->leftJoin('sales_channels','product_sales_channels.id_sales_channel','=','sales_channels.id')
            ->leftJoin('product_variants','products.id','=','product_variants.id_product')
            ->leftJoin('product_prices','products.id','=', 'product_prices.id_product')
            ->leftJoin('price_lists','product_prices.id_price_list','=', 'price_lists.id')
            ->leftJoin('brands','products.id_brand','=','brands.id')
            ->leftJoin('product_units','products.id','=','product_units.id_product')
            ->where('products.id_store', $storeId)
            ->where('product_branches.id_branch', $branchId)
            ->select( 'products.*', 'categories.ten_danh_muc','sales_channels.channel_name',
                'product_variants.huong_vi','product_variants.dung_tich','product_variants.mau_sac','product_variants.trong_luong','product_variants.kich_thuoc','product_variants.gia_tri',
                'price_lists.ten_bang_gia','product_prices.don_gia', 'brands.ten_thuong_hieu', 
                'product_units.ten_don_vi','product_units.ty_le_quy_doi','product_units.gia_ban_don_vi','product_units.ban_truc_tiep','product_units.la_don_vi_co_ban')
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

    
    public function storeCombo(StoreComBoRequest $request)
    {
        $check = Product::where('id_store', $request->id_store)
            ->where('ma_san_pham', $request->ma_san_pham)
            ->first();
        if ($check) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm Combo đã tồn tại.',
                'id_product' => $check->id,
            ], 409);
        }
        // 1. Tạo sản phẩm Combo
        $product = Product::create([
            'id_category' => $request->id_category,
            'id_store' => $request->id_store,
            'id_brand' => $request->id_brand,
            'loai_hang' => Product::COMBO_DONGGOI,
            'ten_san_pham' => $request->ten_san_pham,
            'ma_san_pham' => $request->ma_san_pham,
            'ma_vach' => $request->ma_vach,
            'hinh_anh' => $request->hinh_anh,
            'trong_luong' => $request->trong_luong,
            'gia_nhap_cuoi' => 0,
            'gia_von' => 0,
            'gia_ban' => $request->gia_ban,
            'ban_chay' => false,
            'khach_dat' => false,
            'trang_thai' => 1,
        ]);

        // 2. Gán sản phẩm Combo vào chi nhánh
        ProductBranch::create([
            'id_product' => $product->id,
            'id_branch' => $request->id_branch,
            'trang_thai' => true,
        ]);

        // 3. Tạo thông tin Combo
        $productCombo = ProductCombo::create([
            'id_product' => $product->id,
            'mo_ta' => $request->mo_ta,
            'ghi_chu' => $request->ghi_chu,
        ]);

        // 4. Thêm sản phẩm vào Combo
        foreach ($request->items as $item) {
            ProductComboItem::create([
                'id_product_combo' => $productCombo->id,
                'id_product' => $item['id_product'],
                'so_luong' => $item['so_luong'],
            ]);
        }

        // 5. Thêm đơn vị tính
        if ($request->has('units')) {
            foreach ($request->units as $unit) {
                ProductUnit::create([
                    'id_product' => $product->id,
                    'ten_don_vi' => $unit['ten_don_vi'],
                    'gia_ban_don_vi' => $unit['gia_ban_don_vi'],
                ]);
            }
        }

        // 6. Thêm thuộc tính
        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                ProductVariant::create([
                    'id_product' => $product->id,
                    'ten_bien_the' => $variant['ten_bien_the'],
                    'gia_tri' => $variant['gia_tri'],
                ]);
            }
        }
        // 7. Publish event cho Inventory Service
        $publisher = new ProductEventPublisher();

        $publisher->publishProductCreated([
            'event' => 'product.created',
            'id_product' => $product->id,
            'id_store' => $request->id_store,
            'id_branch' => $request->id_branch,
            'loai_hang' => Product::COMBO_DONGGOI,

            'ten_san_pham' => $product->ten_san_pham,
            'ma_san_pham' => $product->ma_san_pham,
            // 'so_luong_ton' => $request->so_luong_ton ?? 0,
            // 'ton_kho_toi_thieu' => $request->ton_kho_toi_thieu ?? 0,
            // 'ton_kho_toi_da' => $request->ton_kho_toi_da ?? 0,
            // Chỉ liên kết vị trí để hàng
            'id_location' => $request->id_location ?? null,
        ]);



        return response()->json([
            'success' => true,
            'message' => 'Tạo Combo thành công.',
            'id_product' => $product->id,
            'id_product_combo' => $productCombo->id,
        ], 201);
    }




}
