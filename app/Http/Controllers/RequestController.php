<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
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

    public function postRequest(Request $serRequest)
    {
        dd($serRequest);
        // $this->validate($serRequest, [
        //     'serTitle'  =>  'required|string|max:255',
        //     'serState'  => 'required|integer',
        //     'location'  => 'required|integer',
        //     'serCat'    => 'required|integer',
        //     'subCat'    => 'required|integer',
        //     'serImg'    => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
        //     // 'servicePrice' => "integer",
        //     'description'  => 'required|string'
        // ], 
        // [
        //     'serTitle.required'     => 'The service you offer needs to have a name e.g I write final year projects, Hair stylist, Bead Designer etc',
        //     'serState.required'     => 'Select the state  where you currently provide this service',
        //     'serState.integer'     => 'Select the state  where you currently provide this service',
        //     'location.required'     => 'Select the location',
        //     'location.integer'     => 'Select the location',
        //     'description.required'  => 'Give a short description of the sevice',
        //     'serCat.required'       => 'Select a Category',
        //     'serCat.integer'       => 'Select a Category',
        //     'subCat.required'       => 'Select a Sub Category',
        //     'subCat.integer'       => 'Select a Sub Category',
        //     // 'servicePrice.integer' => 'The price must be in digits e.g 50000',
        //     'serImg.mimes'          => 'The image must have jpeg, jpg or png format',
        //     'serImg.max'            => 'The Image is too large, It must not be more than 2MB',
        // ]); 

        // $slugSer = $this->slugIt($serRequest->input('serviceName'));

        // $service = new Service;
        // $service->title             = $serRequest->input('serTitle');
        // $service->user_id           = $serRequest->user()->id;
        // $service->category_id       = $serRequest->input('serCat');
        // $service->sub_category_id   = $serRequest->input('subCat');
        // $service->description       = $serRequest->input('description');
        // $service->slug              = $slugSer;
        // $service->type              = 'r';
        // $service->state_id          = $serRequest->input('serState');
        // $service->location_id       = $serRequest->input('location');

        // //here i check if an image is in the 
        // //image field and upload it to cloudinary
        // if($serRequest->hasFile('serImg'))
        //     $this->uploadPicture($serRequest);

        // $service->save();
        // return redirect()->route('profile.requests')->with('info', 'Request Posted Successfully');
    }
}
