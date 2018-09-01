<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

use App\Cat;

class CategoryController extends Controller
{
    public function index()
    {
    	$cat = Category::all();
    	return view('category')->with('cats', $cat);
    }

    public function getAll(Cat $cat)
    {
        $listings = $cat->services()->with('userz', 'state', 'loca', 'catty', 'images')->latest()->get();
        return view('category.index', compact('listings', 'cat'));
    }

    public function getSub (Cat $cat, Category $category)
    {
        $listings = $category->services()->with('userz', 'state', 'loca', 'catty', 'images')->latest()->get();

        // $category = $category->with;

        // dd($category);       
        return view('category.index2', compact('listings', 'category'));
    }
}
