<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;

class ProfileController extends Controller
{

	public function getProfile($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}

    	// $services = $user->services()->get();
    	return view('profile.account')
    			->with('user', $user);
                // ->with('services', $services);
    }

    public function index()
    {
    	return view('profile.profile');
    }

    // Get account details 
    public function getAccount()
    {
    	return view('profile.account');
    }

    //Get user Services 
    public function getService()
    {
    	return view('profile.services');
    }
    // View my requests
    public function getRequests()
    {
    	return view('profile.requests');
    }

}
