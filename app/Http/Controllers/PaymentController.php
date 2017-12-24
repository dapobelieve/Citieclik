<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Paystack;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }

    public function redirectToGateway(Request $request)
    {
        dd($request);
        $user = $request->user();

        //check if user has an active subscription
        if($user->isSubscribed()){

            // check if users active subscription is the same as the one in the request
            if($user->hasActiveSubscription($request->plan)){

                //if user has an active sub of the same ones he's tryna sub too
                return redirect()->back()->with('message', 'You already subscribed to that plan');
            }else{

                return Paystack::getAuthorizationUrl()->redirectNow();
                //update sub details
                //log the details etc
            }


        }else{

        }
        // true:
            // check if active subscription is the same as the one in the request
            // true:
                    // return user back
            // false
                    // get diff in prices of users plan and plan requested
                    // pay
                    // log details
        // false:
            // pay
            // log details


        // return Paystack::getAuthorizationUrl()->redirectNow();
        // //record sub details
        // //log the details etc
        
    }

    public function getPayDetails()
    {
        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails);
    }
}
