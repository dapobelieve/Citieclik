<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;

class ServiceController extends Controller
{
    public function index()
    {
    	return view('services');
    }

    //Add services
    public function getAddService()
    {
    	return view('pages.addservice');
    }

    public function postService(Request $serRequest)
    {
    	dd($serRequest);
    }

    public function getLocation(Request $request, $id)
    {
    	$state = State::find($id);
    	$data = $state->locations;
    	return $data->toJson();
    }

    public function getSubCat(Request $request, $id)
    {
    	$cat = Category::find($id);
    	// $data = $cat->
    }
}
