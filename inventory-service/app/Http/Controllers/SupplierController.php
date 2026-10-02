<?php

namespace App\Http\Controllers;
use App\Http\Requests\Supplier\StoreSupplierGroupRequest;
use App\Http\Requests\Supplier\StoreSupplierRequest;
use App\Http\Requests\Supplier\UpdateSupplierRequest;
use App\Models\SupplierGroup;
use App\Models\Supplier;
use App\RabbitMQ\SupplierEventPublisher;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function storeSupplierGroup(StoreSupplierGroupRequest $request)
    {
        $exists = SupplierGroup::where('ten_nhom', $request->ten_nhom)->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Tên nhóm nhà cung cấp đã tồn tại.',
                'data' => null,
            ], 409);
        }
        $supplierGroup = SupplierGroup::create([
            'ten_nhom' => $request->ten_nhom,
            'mo_ta' => $request->mo_ta,
            'trang_thai' => $request->trang_thai ?? SupplierGroup::DANG_HOAT_DONG,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thêm nhóm nhà cung cấp thành công.',
            'data' => $supplierGroup,
        ], 201);
    }
    public function getSupplier()
    {
        $suppliers = Supplier::join('supplier_groups','suppliers.id_supplier_group', '=','supplier_groups.id')
            ->select('suppliers.*', 'supplier_groups.ten_nhom')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Lấy danh sách nhà cung cấp thành công',
            'data' => $suppliers
        ]);
    }
    public function storeSupplier(StoreSupplierRequest $request , SupplierEventPublisher $publisher)
    {
        if ( Supplier::where('ten_nha_cung_cap', $request->ten_nha_cung_cap)->exists()
            || ($request->ma_so_thue && Supplier::where('ma_so_thue', $request->ma_so_thue)->exists())
            || ($request->so_cccd_cmnd && Supplier::where('so_cccd_cmnd', $request->so_cccd_cmnd)->exists())
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Nhà cung cấp đã tồn tại.',
            ], 409);
        }
            // Lấy nhà cung cấp cuối cùng
        $lastSupplier = Supplier::orderByDesc('id')->first();
        // ID tiếp theo
        $nextId = $lastSupplier ? $lastSupplier->id + 1 : 1;
        // Tạo mã nhà cung cấp
        $maNhaCungCap = 'NCC' . str_pad($nextId, 2, '0', STR_PAD_LEFT);
        
        $supplier = Supplier::create([
            'id_user' => $request->id_user,
            'id_store' => $request->id_store,
            'id_branch' => $request->id_branch,
            'id_supplier_group' => $request->id_supplier_group,
            'ma_nha_cung_cap' => $maNhaCungCap,
            'ten_nha_cung_cap' => $request->ten_nha_cung_cap,
            'so_dien_thoai' => $request->so_dien_thoai,
            'email' => $request->email,
            'dia_chi' => $request->dia_chi,
            'khu_vuc' => $request->khu_vuc,
            'phuong_xa' => $request->phuong_xa,
            'cong_ty' => $request->cong_ty,
            'ma_so_thue' => $request->ma_so_thue,
            'so_cccd_cmnd' => $request->so_cccd_cmnd,
            'ghi_chu' => $request->ghi_chu,
            'no_can_tra_hien_tai' => 0,
            'tong_mua' => 0,
            'tong_mua_tru_tra_hang' => 0,
            'trang_thai' => Supplier::DANG_HOAT_DONG,
        ]);
        $publisher->publishSupplierCreated([
            'id_supplier' => $supplier->id,
            'id_user' => $supplier->id_user,
            'id_store' => $supplier->id_store,
            'id_branch' => $supplier->id_branch,
            'ma_nha_cung_cap' => $supplier->ma_nha_cung_cap,
            'ten_nha_cung_cap' => $supplier->ten_nha_cung_cap,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Tạo nhà cung cấp thành công',
            'data' => $supplier,
        ], 201);
    }
    public function updateSupplier(UpdateSupplierRequest $request,$id, SupplierEventPublisher $publisher) {
        $supplier = Supplier::find($id);
        if (!$supplier) {
            return response()->json([
                'success' => false,
                'message' => 'Nhà cung cấp không tồn tại.',
            ], 404);
        }
        if (Supplier::where('ten_nha_cung_cap', $request->ten_nha_cung_cap)->where('id', '!=', $id)->exists()
            || ($request->ma_so_thue&& Supplier::where('ma_so_thue', $request->ma_so_thue)->where('id', '!=', $id)->exists())
            || ($request->so_cccd_cmnd&& Supplier::where('so_cccd_cmnd', $request->so_cccd_cmnd)->where('id', '!=', $id)->exists())) {
        
            return response()->json([
                'success' => false,
                'message' => 'Thông tin nhà cung cấp đã tồn tại.',
            ], 409);
        }

        $supplier->update([
            'id_supplier_group' => $request->id_supplier_group,
            'ten_nha_cung_cap' => $request->ten_nha_cung_cap,
            'so_dien_thoai' => $request->so_dien_thoai,
            'email' => $request->email,
            'dia_chi' => $request->dia_chi,
            'khu_vuc' => $request->khu_vuc,
            'phuong_xa' => $request->phuong_xa,
            'cong_ty' => $request->cong_ty,
            'ma_so_thue' => $request->ma_so_thue,
            'so_cccd_cmnd' => $request->so_cccd_cmnd,
            'ghi_chu' => $request->ghi_chu,
            'trang_thai' => $request->trang_thai ?? $supplier->trang_thai,
        ]);
        $publisher->publishSupplierUpdated([
            'id_supplier' => $supplier->id,
            'id_user' => $supplier->id_user,
            'id_store' => $supplier->id_store,
            'id_branch' => $supplier->id_branch,
            'ma_nha_cung_cap' => $supplier->ma_nha_cung_cap,
            'ten_nha_cung_cap' => $supplier->ten_nha_cung_cap,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật nhà cung cấp thành công.',
            'data' => $supplier,
        ], 200);
    }
    public function deleteSupplier($id, SupplierEventPublisher $publisher)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy nhà cung cấp'
            ], 404);
        }

        $supplier->delete();

        $publisher->publishSupplierDeleted([
            'id_supplier' => $supplier->id,
            'id_user' => $supplier->id_user,
            'id_store' => $supplier->id_store,
            'id_branch' => $supplier->id_branch,
            'ma_nha_cung_cap' => $supplier->ma_nha_cung_cap,
            'ten_nha_cung_cap' => $supplier->ten_nha_cung_cap,
        ]);


        return response()->json([
            'status' => true,
            'message' => 'Xóa nhà cung cấp thành công'
        ]);
    }
    public function restoreSupplier($id)
    {
        $supplier = Supplier::withTrashed()->find($id);

        if (!$supplier) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy nhà cung cấp'
            ], 404);
        }

        if (!$supplier->trashed()) {
            return response()->json([
                'status' => false,
                'message' => 'Nhà cung cấp này chưa bị xóa'
            ], 400);
        }

        $supplier->restore();

        return response()->json([
            'status' => true,
            'message' => 'Khôi phục nhà cung cấp thành công'
        ]);
    }
    public function changeStatusSupplier(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        if (!$supplier) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy nhà cung cấp'
            ], 404);
        }

        $request->validate([
            'trang_thai' => 'required|in:0,1'
        ]);

        $supplier->trang_thai = $request->trang_thai;
        $supplier->save();

        return response()->json([
            'status' => true,
            'message' => 'Thay đổi trạng thái nhà cung cấp thành công',
            'trang_thai' => $supplier->trang_thai
        ]);
    }






}
