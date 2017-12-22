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

        if($user->hasActiveSubscription($request->plan)){
            //if user has an active sub of the same ones he's tryna sub too
            return redirect()->back()->with('message', 'You already subscribed to that plan');
        }else{
            dd($user->subscriptions()->active());
            // return Paystack::getAuthorizationUrl()->redirectNow();
            //update sub details
            //log the details etc
        }

        return Paystack::getAuthorizationUrl()->redirectNow();
        //record sub details
        //log the details etc
        
    }

    public function getPayDetails()
    {
        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails);
    }
}
