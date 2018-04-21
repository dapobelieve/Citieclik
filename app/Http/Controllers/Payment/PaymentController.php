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
    // set the dates (start and end)
    private $start;
    private $next;
    private $end;

    public function __construct()
    {
        $this->middleware(['AuthCheck']);
        $this->start = Carbon::now('Africa/Lagos'); 
        $this->next  = Carbon::now('Africa/Lagos');
        $this->end   = $this->next->addDays(30);
    }

    public function redirectToGateway(Request $request)
    {
        $user = $request->user();

        if ($request->amount < 0) { 

            return redirect()->back()->with('pay-message',' Sorry, you can\'t subscribe to a lower plan till your current plan expires');
        }
        //check if user has an active subscription and tries to subscribe to the same plan again
        if( $user->isSubscribed() && $user->subscribedToPlan($request->dplan) ){
            // check if users active subscription is the same as the one in the request
            return redirect()->back()->with('pay-message', 'You already subscribed to that plan');
        }else {
            Auth::user()->subscriptions()->create([
                'trxn_ref' => $request->reference,
                'status'   => 0,
                'click'   => $request->dclicks,
                'plan_id'  => $request->dplan,
            ]);

            return Paystack::getAuthorizationUrl()->redirectNow();
        }   
    }

    public function getPayDetails()
    {
        $paymentDetails = Paystack::getPaymentData();

        // check paystacks conn status
        if(!$paymentDetails['status'] )
        {
            return redirect()->back()->with('pay-message', $paymentDetails['message']);
        }

        // check transaction status
        if($paymentDetails['data']['status'] == 'failed')
        {
            return redirect()->back()->with('pay-message', $paymentDetails['data']['gateway_response']);
        }

        //if transaction was successful
        if($paymentDetails['data']['status'] == 'success'){

            // i cant seem to figure out why i did what i did here and that sucks
            // if (Auth::user()->isSubscribed()){

            //     // 1.if user is subscribed we'll get subscription details
            //     $subDetails = Auth::user()->getActiveSubscription();

            //     // 2. update status of that sub to 0
            //     Auth::user()->subscriptions()->where('plan_id', $subDetails->plan_id)->update([
            //         'status' => 0
            //     ]);
            // }

            Auth::user()->subscriptions()->where('trxn_ref', $paymentDetails['data']['reference'] )->update([
                'status'     => 1,
                'amount'     => ($paymentDetails['data']['amount'] / 100),
                'pay_status' => 1,
                'starts_at'  => $this->start,
                'ends_at'    => $this->end
            ]);

            return redirect()->back()->with('pay-message','Payment Successful. Your Subscription has been activated. ');
        }
    }

}
