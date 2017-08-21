<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$cat = Category::all();
    	return view('category')->with('cats', $cat);
    }
}
