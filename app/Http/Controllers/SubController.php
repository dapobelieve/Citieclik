<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class SubController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }

    
    public function index(Request $request)
    {
        $plans = Plan::all();
        $user = $request->user();
        return view('profile.sub')
            ->with('user', $user)
            ->with('plans', $plans);
    }

    public function show(Request $request, Plan $plan)
    {
        dd($request->user()->getUserServices()->count()."  ".$plan);
    }

    //a fucntion to create subscriptions
}
