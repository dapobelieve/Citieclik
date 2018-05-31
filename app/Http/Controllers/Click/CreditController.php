<?php

namespace App\Http\Controllers\Click;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\Funcs\Hasher;

/*
* Controller to give free clicks to users
*/

class CreditController extends Controller
{
    // set the dates (start and end)
    private $start;
    private $next;
    private $end;


    public function __construct()
    {
        $this->middleware(['AuthCheck', 'verified_user']);
        $this->start = Carbon::now('Africa/Lagos'); 
        $this->next  = Carbon::now('Africa/Lagos');
        $this->end   = $this->next->addDays(30);
    }

    public function create()
    {
        // create a subscription for user
        // if they have no subscription record aka new user
        if(!(bool) (Auth::user()->subscriptions()->count())){

            Auth::user()->subscriptions()->create([
                'trxn_ref'   => 'citi-'.Hasher::getHashedToken(10),
                'plan_id'    => 1,
                'status'     => 1,
                'amount'     => 1000,
                'pay_status' => 1,
                'click'      => 1000,
                'starts_at'  => $this->start,
                'ends_at'    => $this->end,
                'meta'       => 'free-clicks'
            ]);

            // fire event to send mail

            return redirect()->back()->with('info', 'You have received your 1000 free clicks.');
        }else{
            return redirect()->route('home');
        }

    }


}
