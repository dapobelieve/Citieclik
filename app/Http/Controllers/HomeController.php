<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{

	// $servy = Service::select(DB::raw('count(servy.id) as scount, category_id'))
 //                        ->take(4)
 //                        ->where('type', 'P')
 //                        ->groupBy('category_id')
 //                        ->orderBy('scount', 'desc')
 //                        ->get();
 //                $view->with('pcats', $servy);
 //        });
    public function index()
    {
    	$cat = Category::take(3)->orderBy('category')->get();
    	return view('home')->with('cats', $cat);
    }
}
