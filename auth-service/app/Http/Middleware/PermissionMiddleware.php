<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = $request->system_user;

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Bạn cần đăng nhập.',
            ], 401);
        }

        if (!$user->role->permissions()
            ->where('code', $permission)
            ->where('trang_thai', 1)
            ->exists()) {

            return response()->json([
                'status' => false,
                'message' => 'Bạn không có quyền.',
            ], 403);
        }
        return $next($request);
    }
}
