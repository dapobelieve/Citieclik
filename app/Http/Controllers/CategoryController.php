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
        // dd($cat->name);
        $data = Cat::with('categories', 'services')->where('slug', $cat->slug)->first();

        // dd($data);

        return view('category.index')->with('listings', $data);
    }
}
