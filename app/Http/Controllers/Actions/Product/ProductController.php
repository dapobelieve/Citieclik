<?php

namespace App\Http\Controllers\Actions\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        dd('Works');
    }

    public function create()
    {
        return view('pages.productAdd.php')->with('type','p');
    }
}
