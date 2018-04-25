<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function getCategory()
    {
    	$categories = Category::get();
    	return view('dashboard.pages.category')->with('categories', $categories);
    }

    public function getCatDetail($category)
    {
    	$category = Category::where('category', $category)->first();
    	dd($category);
    }
}
