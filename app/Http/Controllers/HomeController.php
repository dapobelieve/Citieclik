<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
    	$cat = Category::take(3)->orderBy('category')->get();
    	return view('home')->with('cats', $cat);
    }
}
