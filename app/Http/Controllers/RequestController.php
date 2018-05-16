<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as serviceRequest;
use App\Http\Controllers\Funcs\Hasher as Hash;
use App\User;
use Cloudder;
use App\Events\RequestWasMade;

class RequestController extends Controller
{
    private $imgOb = "";
    public function __construct()
    {
        $this->middleware(['AuthCheck', 'verified_user']);
    }

    public function getRequest($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	return view('profile.requests')
    			->with('user', $user);
    }

    public function getRequestAdd()
    {
        return view('pages.request-add');
    }


    public function postRequest(Request $request)
    {
        $this->validate($request, [
            'serTitle'  =>  'required|string|max:255',
            'serState'  => 'required|integer',
            'location'  => 'required|integer',
            'serCat'    => 'required|integer',
            'subCat'    => 'required|integer',
            // 'servicePrice' => "integer",
            'description'  => 'required|string'
        ], 
        [
            'serTitle.required'     => 'The service you offer needs to have a name e.g I write final year projects, Hair stylist, Bead Designer etc',
            'serState.required'     => 'Select the state  where you currently require this service',
            'serState.integer'     => 'Select the state  where you currently require this service',
            'location.required'     => 'Select the location',
            'location.integer'     => 'Select the location',
            'description.required'  => 'Give a short description of the sevice',
            'serCat.required'       => 'Select a Category',
            'serCat.integer'       => 'Select a Category',
            'subCat.required'       => 'Select a Sub Category',
            'subCat.integer'       => 'Select a Sub Category',
            // 'servicePrice.integer' => 'The price must be in digits e.g 50000',
        ]); 

        $requestData = serviceRequest::firstOrCreate(
            ['title' => $request->serTitle, 'user_id' => $request->user()->id],[
                'title'           => $request->serTitle,
                'user_id'         => $request->user()->id,
                'category_id'     => $request->serCat,
                'sub_category_id' => $request->subCat,
                'state_id'        => $request->serState,
                'location_id'     => $request->location,
                'priority'        => $request->serPrior,
                // 'image'           => $imageVal,
                'hash'            => Hash::getHashedToken(),
                'description'     => $request->description
            ]
        );
        event(new RequestWasMade($requestData, $request->user()));

        return redirect()->route('profile.request', ['slug' => $request->user()->slug])->with('info', 'Request Posted Successfully');
    }

    public function show(serviceRequest $serviceRequest)
    {
        //awesome route model binding here
        return view('pages.requestdetail')->with('requestData', $serviceRequest);
    }
}
