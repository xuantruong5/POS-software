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

    public function productCategories()
    {
        $response = Http::get( 'http://product-service:8002/api/product-category' );
        return response()->json( $response->json(), $response->status() );
    }
}
