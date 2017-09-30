<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
    public function getCategory($slug)
    {
    	$serviceCat = Category::where('slug', $slug)->first();
    	$data = $serviceCat->services;
    	$subCat = $serviceCat->subCats;
    	return view('service.catService')
    	->with('sdata', $data)
    	->with('subCats', $subCat)
    	->with('catName', $serviceCat->category);
    }
}
