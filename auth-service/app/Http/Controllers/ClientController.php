<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function test()
    {
       return response()->json([
            'message' => 'Auth Service is working'
        ]);
    }
}
