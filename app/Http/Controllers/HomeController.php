<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
    	$cat = Category::with('subCats')->orderBy('img_order', 'desc')->get();
        // dd($cat);
        $ads = Service::latest()->limit(40)->get();
    	return view('home')->with('cats', $cat)
                           ->with('ads', $ads);
    }
}
