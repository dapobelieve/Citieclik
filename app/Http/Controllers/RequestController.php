<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RequestController extends Controller
{
    public function getRequest($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	// $services = $user->services()->get();
    	return view('profile.requests')
    			->with('user', $user);
    }

    public function postRequest(Request $request)
    {
    	$data = json_encode($request->all());
    	dd($data);
    }
}
