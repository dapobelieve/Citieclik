<?php

namespace App\Http\Controllers\Click;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service;
use App\Click;

class ClickController extends Controller
{
    public function store(Request $request)
    {
        return response()->json($request, 200);
    }
}
