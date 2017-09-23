<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class TestController extends Controller
{
    public function index()
    {
    	$user = User::where('slug', 'believe')->first();
    	$userServices = $user->getUserServices();
    	dd($userServices);
    }
}
