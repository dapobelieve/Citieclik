<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsConttroller extends Controller
{
    public function index()
    {
    	return view('terms');
    }
}
