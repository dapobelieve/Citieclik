<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
    	$cat = Category::orderBy('img_order', 'desc')->get();
        // dd($cat);
    	return view('home')->with('cats', $cat);
    }
}
