<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\SystemUser;


class SystemUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Thử lấy user từ token trước
        $user = null;
        if ($request->bearerToken()) {
            $accessToken = PersonalAccessToken::findToken( $request->bearerToken() );
            if ( $accessToken && $accessToken->tokenable_type === SystemUser::class) { 
                $user = $accessToken->tokenable; 
            }
        }

        // Nếu chưa có user từ token, thử lấy từ session
        if (!$user && Auth::check()) {
            $user = Auth::user();
        }

        // Kiểm tra SystemUser
        if ( $user && $user instanceof SystemUser && $user->trang_thai == 1 ) {
            // Kiểm tra Store
            if (!$user->store || $user->store->trang_thai != 1) {
                return response()->json([
                    'status' => false,
                    'message' => 'Cửa hàng không hoạt động.',
                ], 403);
            }

            // Kiểm tra Role
            if (!$user->role || $user->role->trang_thai != 1) {
                return response()->json([
                    'status' => false,
                    'message' => 'Chức vụ của tài khoản không hoạt động.',
                ], 403);
            }

            // Kiểm tra System
            if (
                !$user->role->system ||
                $user->role->system->trang_thai != 1
            ) {
                return response()->json([
                    'status' => false,
                    'message' => 'Hệ thống không hoạt động.',
                ], 403);
            }
            // Đưa SystemUser vào request
            $request->merge([
                'system_user' => $user,
            ]);

            return $next($request);
        }

        return response()->json([
            'status' => false,
            'message' => 'Bạn cần đăng nhập để thực hiện chức năng này.',
        ], 401);
    }
}
