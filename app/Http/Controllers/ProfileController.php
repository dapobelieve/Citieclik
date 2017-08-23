<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProfileController extends Controller
{
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

}
