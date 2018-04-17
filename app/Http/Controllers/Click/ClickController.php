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

        // $service->clicks()->create([
        //     'user_id' => $userId,
        // ]);
        $user = $service->userz;

        $serv = $service->clicks()->count();


        return response()->json($user, 200);
    }
}
