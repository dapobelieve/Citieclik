<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Cat;
use App\Service;

class HomeController extends Controller
{
    public function index()
    {
        $ads = Service::with('state', 'loca')->whereIn('category_id', [5, 7])->latest()->orderByRaw('RAND()')->limit(40)->get();

    	return view('home')->with('ads', $ads);
    }
}
