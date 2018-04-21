<?php

namespace App\Http\Controllers\Click;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Service;
use App\Click;

class ClickController extends Controller
{
    public function store(Request $request)
    {
        $serviceId = $request->service_id;
        $userId    = $request->user_id;

        $service = Service::find($serviceId);


        // record the click event
        $service->clicks()->create([
            'user_id' => $userId,
        ]);

        // deduct 5 from current clicks
        $user = $service->userz;

        if($user->isSubscribed()){
            $userSub = $user->getActiveSubscription();

            if($userSub->click <= 0){
                return response()->json('User out of clicks', 500);
            }

            $userSub->update([
                'click' => ($userSub->click - 5)
            ]);

        }else{
            return response()->json('No Data', 500);
        }

        // $serv = $service->clicks()->count();


        return response()->json($user, 200);
    }
}
