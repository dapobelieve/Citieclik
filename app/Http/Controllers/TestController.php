<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Plan;
// use App\Subscription;

class TestController extends Controller
{
    public function index()
    {
        // isSubscribed()
        // testing the whereHas ORM
        // $data = User::whereHas('subscriptions', function($q) {
        //     $q->where('username', 'dapoBelieve');
        // })->get();
        // dd($data);

         $data = User::has('subscriptions')->get();
         $numString = '';
         foreach ($data as $key ) {
            if($key->isSubscribed())
                $numString .= $key['phone'].',';
         }
         dd($numString);


        // get count of services posted by a user
    	// $val = Auth::user()->subscriptions()
     //                        ->select('plan_id')
     //                        ->where('pay_status', 1)
     //                        ->get();
     //    $userPlans = $val->toArray();

     //    dd($userPlans);

     //    $sumPlans =  Plan::whereIn('id', $userPlans)
     //                        ->sum('listing');
     //    $userServices = Auth::user()->getNumberOfPosts();

     //    dd((int)$sumPlans);
    }
}