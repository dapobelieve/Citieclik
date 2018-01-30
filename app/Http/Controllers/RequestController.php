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
        $this->middleware(['AuthCheck']);
    }

    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
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
        // $this->validate($request, [
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

        $imageVal = '';
        if($request->hasFile('serImg')){
            $this->uploadPicture($request);
            $imageVal =  $this->imgObj;
        }else{
            $imageVal = null;
        }

        $requestData = serviceRequest::firstOrCreate(
            ['title' => $request->serTitle, 'user_id' => $request->user()->id],[
                'title'           => $request->serTitle,
                'user_id'         => $request->user()->id,
                'category_id'     => $request->serCat,
                'sub_category_id' => $request->subCat,
                'state_id'        => $request->serState,
                'location_id'     => $request->location,
                'priority'        => $request->serPrior,
                'image'           => $imageVal,
                'hash'            => Hash::getHashedToken(),
                'description'     => $request->description
            ]
        );
        event(new RequestWasMade($requestData, $request->user()));

        return redirect()->route('profile.request', ['slug' => $request->user()->slug])->with('info', 'Request Posted Successfully');
    }

    public function show(serviceRequest $serviceRequest)
    {
        dd($serviceRequest->hash);
    }


    private function uploadPicture(Request $req)
    {
        $fileUrl = $req->file('serImg')->getRealPath();
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'citiRequest',
                'timeout'  =>  600,
                'format'   => 'Webp',
                'quality'  => '20'
            ));

            if(!$result)
                return redirect()->back()->with('info', 'Internal Server Error. Please try again.');
            else {
                $fileData  = Cloudder::getResult();
                $this->imgObj = json_encode($fileData);;
            }
    }

    private function deletePicture($imagePubId)
    {
        Cloudder::delete($imagePubId);
    }
}
