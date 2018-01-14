<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Plan;

class TestController extends Controller
{
    public function index()
    {
    	$val = Auth::user()->subscriptions()
                            ->select('plan_id')
                            ->where('pay_status', 1)
                            ->get();
        $userPlans = $val->toArray();

        dd($userPlans);

        $sumPlans =  Plan::whereIn('id', $userPlans)
                            ->sum('listing');
        $userServices = Auth::user()->getNumberOfPosts();

        dd((int)$sumPlans);
    }
}