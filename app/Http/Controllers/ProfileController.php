<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('profile');
    }

    // Get account details 
    public function getAccount()
    {
    	return view('account');
    }

}
