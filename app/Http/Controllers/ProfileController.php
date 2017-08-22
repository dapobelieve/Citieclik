<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ProfileController extends Controller
{
    public function index()
    {
    	$cat = Category::take(3)->orderBy('category')->get();
    	return view('profile')>with('cats', $cat);
    }

    // Get account details 
    public function getAccount()
    {
    	$cat = Category::take(3)->orderBy('category')->get();
    	return view('account')->with('cats', $cat);
    }

}
