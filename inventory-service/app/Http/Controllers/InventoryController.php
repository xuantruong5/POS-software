<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
     public function getProducts(Request $request)
    {
        $data = Inventory::query();

        // Lọc theo chi nhánh nếu có
        if ($request->id_branch) {
            $data->where('id_branch', $request->id_branch);
        }

        // Lấy danh sách product_id nếu product-service truyền sang
        if ($request->product_ids) {
            $data->whereIn('id_product', $request->product_ids);
        }

        $inventories = $data->get();

        return response()->json([
            'success' => true,
            'data' => $inventories
        ]);
    }
}
