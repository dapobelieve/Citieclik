<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

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
    	$state = State::find(5);
    	return response::json_encode($state->locations);
    	// return 'great';
    }
}
