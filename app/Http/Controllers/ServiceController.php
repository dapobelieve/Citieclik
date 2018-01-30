<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;
use App\Service;
use Cloudder;
use Auth;
use Carbon;

class ServiceController extends Controller
{
    private $imgObj = "";
	//slug method cool huh ;)
    private function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }

    // get all services view
    public function index()
    {
        $serviceData = Service::take(200)->postOnly()->get();

    	return view('service.all')->with('sdata', $serviceData);
    }

    //get Add services page
    public function getAddService()
    {
    	return view('pages.addservice');
    }

    //validate and save service details
    public function postService(Request $serRequest)
    {
        //check if users posted services >= plans subsribed to


    	$this->validate($serRequest, [
            'serTitle'  =>  'required|string|max:255',
            'serState'  => 'required|integer',
            'location'  => 'required|integer',
            'serCat'    => 'required|integer',
            'subCat'    => 'required|integer',
            'serImg'    => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
            // 'servicePrice' => "integer",
            'description'  => 'required|string'
        ], 
        [
            'serTitle.required'     => 'The service you offer needs to have a name e.g I write final year projects, Hair stylist, Bead Designer etc',
            'serState.required'     => 'Select the state  where you currently provide this service',
            'serState.integer'     => 'Select the state  where you currently provide this service',
            'location.required'     => 'Select the location',
            'location.integer'     => 'Select the location',
            'description.required'  => 'Give a short description of the sevice',
            'serCat.required'       => 'Select a Category',
            'serCat.integer'       => 'Select a Category',
            'subCat.required'       => 'Select a Sub Category',
            'subCat.integer'       => 'Select a Sub Category',
            // 'servicePrice.integer' => 'The price must be in digits e.g 50000',
            'serImg.mimes'          => 'The image must have jpeg, jpg or png format',
            'serImg.max'            => 'The Image is too large, It must not be more than 2MB',
        ]); 

		$slugSer = $this->slugIt($serRequest->input('serTitle'));

		$service = new Service;
        $service->title             = $serRequest->input('serTitle');
        $service->user_id           = $serRequest->user()->id;
        $service->category_id       = $serRequest->input('serCat');
        $service->sub_category_id   = $serRequest->input('subCat');
        $service->description       = $serRequest->input('description');
        $service->slug              = $slugSer;
        $service->type              = 'p';
        $service->state_id          = $serRequest->input('serState');
        $service->location_id       = $serRequest->input('location');

        //here i check if an image is in the 
        //image field and upload it to cloudinary
        if($serRequest->hasFile('serImg')){
            $this->uploadPicture($serRequest);
            $service->image = $this->imgObj;
        }
        $service->save();
        return redirect()->route('profile.service', ['slug' => $serRequest->user()->slug])->with('info', 'Service Posted Successfully');
    }

    //Route to get subcategory based on selected category
    public function getServiceDetails()
    {
        return view('pages.servicedetails');
    }

    public function getEditService($id)
    {
        $post = Service::findOrFail($id);
        return view('pages.edit')->with('sdata', $post);
    }

    //validate and update service details
    public function postServiceUpdate(Request $serRequest, $id)
    {
        $this->validate($serRequest, [
            'serTitle'  =>  'required|string|max:255',
            'serState'  => 'required|integer',
            'location'  => 'required|integer',
            'serCat'    => 'required|integer',
            'subCat'    => 'required|integer',
            'serImg'    => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
            // 'servicePrice' => "integer",
            'description'  => 'required|string'
        ], 
        [
            'serTitle.required'     => 'The service you offer needs to have a name e.g I write final year projects, Hair stylist, Bead Designer etc',
            'serState.required'     => 'Select the state  where you currently provide this service',
            'serState.integer'     => 'Select the state  where you currently provide this service',
            'location.required'     => 'Select the location',
            'location.integer'     => 'Select the location',
            'description.required'  => 'Give a short description of the sevice',
            'serCat.required'       => 'Select a Category',
            'serCat.integer'       => 'Select a Category',
            'subCat.required'       => 'Select a Sub Category',
            'subCat.integer'       => 'Select a Sub Category',
            // 'servicePrice.integer' => 'The price must be in digits e.g 50000',
            'serImg.mimes'          => 'The image must have jpeg, jpg or png format',
            'serImg.max'            => 'The Image is too large, It must not be more than 2MB',
        ]); 


        $slugSer = $this->slugIt($serRequest->input('serTitle'));

        $service =  Service::find($id);
        $service->title             = $serRequest->input('serTitle');
        $service->user_id           = Auth::user()->id;
        $service->category_id       = $serRequest->input('serCat');
        $service->sub_category_id   = $serRequest->input('subCat');
        $service->description       = $serRequest->input('description');
        $service->slug              = $slugSer;
        $service->type              = 'p';
        $service->state_id          = $serRequest->input('serState');
        $service->location_id       = $serRequest->input('location');
        

        //here i check if an image is in the 
        //image field and upload it to cloudinary
        if($serRequest->hasFile('serImg')){
            $this->uploadPicture($serRequest);
            $service->image = $this->imgObj;
        }

        $service->save();

        //fire sms sending event
        return redirect()->route('profile.service', ['slug' => $serRequest->user()->slug])->with('info', 'Service Updated Successfully');
    }

    public function getDeleteService($id)
    {
        $post = Service::findOrFail($id);
        if(!empty($post->image)){
            $imageData = json_decode($post->image, true);
            $this->deletePicture($imageData['public_id']);
        }
        
        $post->delete();
        return redirect()->back()->with('info', 'Service Deleted.');
    }

    private function uploadPicture(Request $req)
    {
        $fileUrl = $req->file('serImg')->getRealPath();
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'citi',
                'timeout'  =>  600,
                'format'   => 'Webp',
                'quality'  => '20'
            ));

            if(!$result)
                return redirect()->back()->with('info', 'Internal Server Error. Please try again.');
            else {
                $fileData  = Cloudder::getResult();
                $this->imgObj = json_encode($fileData);
            }
    }

    private function deletePicture($imagePubId)
    {
        Cloudder::delete($imagePubId);
    }
}
