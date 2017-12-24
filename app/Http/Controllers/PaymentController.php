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
        $user = $request->user();

        //check if user has an active subscription
        if( $user->isSubscribed() && $user->hasActiveSubscription($request->dplan) ){
            // check if users active subscription is the same as the one in the request
            return redirect()->back()->with('message', 'You already subscribed to that plan');
        }else{

            return Paystack::getAuthorizationUrl()->redirectNow();
            //update sub details
            //log the details etc
        }

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
