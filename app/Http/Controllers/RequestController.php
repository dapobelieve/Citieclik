<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RequestController extends Controller
{
    public function getRequests($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	// $services = $user->services()->get();
    	return view('profile.requests')
    			->with('user', $user);
    }
}
