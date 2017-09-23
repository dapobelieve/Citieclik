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
        // $userServices = $user->getUserServices();
    	if(!$user){
    		abort(404);
    	}

        dd($userServices);
    	return view('profile.services')
    			->with('user', $user);
                // ->with('userServ', $userServices);
    }

     //Get user Services 
    public function getService($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	// $services = $user->services()->get();
    	return view('profile.services')
    			->with('user', $user);
    }

    // View my requests
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



    // public function index()
    // {
    // 	return view('profile.profile');
    // }

    // // Get account details 
    // public function getAccount()
    // {
    // 	return view('profile.account');
    // }
}
