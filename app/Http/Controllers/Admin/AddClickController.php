<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Funcs\Hasher;
use App\User;
use App\Plan;
use Carbon\Carbon;

class AddClickController extends Controller
{
    private $start;
    private $next;
    private $end;


    public function __construct()
    {
        $this->middleware('citi_admin');
        $this->start = Carbon::now('Africa/Lagos'); 
        $this->next  = Carbon::now('Africa/Lagos');
        $this->end   = $this->next->addDays(30);
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'plan' => 'required'
        ]);

        $user = User::where('slug', $request->slug)->first();

        $plan = Plan::where('slug', $request->plan)->first();

        $user->subscriptions()->create([
            'trxn_ref'   => Hasher::getHashedToken(10),
            'plan_id'    => $plan->id,
            'status'     => 1,
            'amount'     => $plan->price,
            'pay_status' => 1,
            'click'      => $plan->clicks,
            'starts_at'  => $this->start,
            'ends_at'    => $this->end,
            'meta'       => 'admin-payment'
        ]);

        return redirect()->back()->with('info', 'Clicks Added to user');
    }
}
