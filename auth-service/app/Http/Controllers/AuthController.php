<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SystemUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\loginRequest;


class AuthController extends Controller
{
    public function login(loginRequest $request)
    {
        $user = SystemUser::with([
            'store',
            'branch',
            'role.system'
        ])->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng.',
            ], 401);
        }

        if ($user->trang_thai != 1) {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản không hoạt động.',
            ], 403);
        }

        $token = $user->createToken('system_user')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Đăng nhập thành công.',
            'token' => $token,
            'user' => $user,
        ]);
    }
    public function userSystem(Request $request)
    {
        $user = $request->system_user;

        $user->load([
            'store',
            'branch',
            'role.system',
        ]);

        return response()->json([
            'success' => true,
            'user' => $user
        ]);
    }


}
