<?php

namespace App\Http\Controllers\Click;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service;
use App\Click;

class ClickController extends Controller
{
    public function store(Request $request)
    {
        $serviceId = $request->service_id;
        $userId    = 0;

        $service = Service::find($serviceId);

        
        $user = $service->userz;

        if($user->isSubscribed()){

            // record the click event
            $service->clicks()->create([
                'user_id' => $userId,
            ]);

            $userSub = $user->getActiveSubscription();

            if($userSub->click <= 0){
                return response()->json('User out of clicks', 500);
            }

            // deduct 5 from current clicks
            $userSub->update([
                'click' => ($userSub->click - 10)
            ]);

        }else{
            return response()->json('No Data', 500);
        }

        // $serv = $service->clicks()->count();


        return response()->json($user, 200);
    }

    public function getClicks(Request $request)
    {
        $type = $request->type;

        $clicks = DB::table($type)
                                ->select(DB::raw('count(id) as '.$type.', DATE(created_at) as days'))
                                ->groupBy(DB::raw('DATE(created_at)'))
                                ->get();

        return response()->json($clicks, 200);
    }

    // public function getUsers ()
    // {

    // }
}
