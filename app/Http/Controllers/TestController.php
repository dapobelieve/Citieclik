<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Plan;
use App\Subcategory;
use Carbon\Carbon;
use App\Subscription;

use App\Http\Controller\Funcs\Slug;
/**
* A contorller to test
* some logics before 
* using them in my app 
*/

class TestController extends Controller
{
    public function catsy()
    {
        // used this function to slug all the subcategories 
        $cats = Subcategory::where('slug', null)->get();
        foreach ($cats as $key => $value) {
            $value->slug = str_slug($value->sub_category);
            $value->save();
        }        

    }
    private $today;

    public function __construct()
    {
        $this->today = Carbon::now('Africa/Lagos');
    }

    public function carbon()
    {
        Subscription::where('status', 1)->chunk(20, function ($subers) {

            foreach ($subers as $suber) {

                $x = Carbon::createFromTimestampUTC(strtotime($suber->ends_at));

                if($this->today->gte($x)){

                    $suber->update(['status' => 0]);
                }

            }
        });
    }



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

    public function getMail()
    {
        return view('Mail.verify');
    }
}