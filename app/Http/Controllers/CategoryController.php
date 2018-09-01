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
        $data = $cat->with('categories', 'services')->first();

        return view('category.index')->with('listings', $data);
    }
}
