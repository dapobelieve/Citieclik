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

        // dd($data);

        return view('category.index', compact('listings', 'cat'));
    }
}
