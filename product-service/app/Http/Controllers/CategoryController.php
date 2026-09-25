<?php

namespace App\Http\Controllers;
use App\Http\Requests\Products\StoreCategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory() {
        $categories = Category::where('trang_thai', 1)
            ->orderBy('id')
            ->get();
        return response()->json([
            'success' => true,
            'message' => 'Lấy danh sách nhóm hàng thành công',
            'data' => $categories,
        ]);
    }

    public function storeCategory(StoreCategoryRequest $request){
        $category = Category::create([
            'ten_danh_muc' => $request->ten_danh_muc,
            'id_parent' => $request->id_parent,
            'mo_ta' => $request->mo_ta,
            'trang_thai' => 1,
        ]);
        return response()->json([
            'message' => 'Tạo nhóm hàng thành công',
            'data' => $category,
        ], 201);
    }
}
