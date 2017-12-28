<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plan;
use Auth;
use Carbon\Carbon;
use Paystack;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }

    private function create(Request $request)
    {
        Auth::user()->subscriptions()->create([
            'trxn_ref' => $request->reference,
            'status'   => 0,
            'plan_id'  => $request->dplan,
        ]);

    }

    public function redirectToGateway(Request $request)
    {
        $user = $request->user();

        //check if user has an active subscription
        if( $user->isSubscribed() && $user->subscribedToPlan($request->dplan) ){
            // check if users active subscription is the same as the one in the request
            return redirect()->back()->with('message', 'You already subscribed to that plan');
        }else{
             Auth::user()->subscriptions()->create([
                'trxn_ref' => $request->reference,
                'status'   => 0,
                'plan_id'  => $request->dplan,
            ]);
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        
    }

    public function getPayDetails()
    {
        $paymentDetails = Paystack::getPaymentData();
        if(!$paymentDetails['status'])
        {
            return redirect()->back()->with('pay-message', $paymentDetails['message']);
        }

        if($paymentDetails['data']['status'] == 'success'){

            Auth::user()->subscriptions()->where('trxn_ref',$paymentDetails['data']['reference'] )->update([
                'status'   => 1,
                'pay_status' => 1,
            ]);
            // log the trxn too

            return redirect()->back()->with('pay-message','Payment Successful. Your Subscription has been activated. ');
        }
        // dd($paymentDetails);
    }
}
