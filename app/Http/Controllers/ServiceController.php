<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Funcs\Cloudinary;

use App\State;
use App\Category;
use App\Service;

use Auth;
use App\Image;
use Carbon;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware(['AuthCheck','verified_user','subscribed']);
    }


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


    //get Add services page
    public function getAddService()
    {
    	return view('pages.addservice')->with('tdata', 's');;
    }

    public function getAddProduct()
    {
        return view('pages.addservice')->with('tdata', 'p');
    }

    //validate and save service details
    public function postService(ServiceRequest $serRequest)
    {

		$slugSer = $this->slugIt($serRequest->input('serTitle'));

		$service = new Service;
        $service->title             = $serRequest->input('serTitle');
        $service->user_id           = $serRequest->user()->id;
        $service->category_id       = $serRequest->input('serCat');
        $service->sub_category_id   = $serRequest->input('subCat');
        $service->description       = $serRequest->input('description');
        $service->slug              = $slugSer;
        $service->price             = $serRequest->input('serPrice');
        $service->type              = $serRequest->input('typo');
        $service->state_id          = $serRequest->input('serState');
        $service->location_id       = $serRequest->input('location');

        $service->save();

        //here i check if an image is in the 
        //image field and upload it to cloudinary
        if($serRequest->hasFile('image')){
            foreach($serRequest->file('image') as $photo){
                $imageData = Cloudinary::uploadPicture($photo);
               Image::create([
                    'service_id' => $service->id,
                    'image' => $imageData,
                ]);
            }
        }
        


        if($serRequest->input('typo') == 's'){

            return redirect()->route('profile.service', ['slug' => $serRequest->user()->slug])->with('info', 'Service Posted Successfully');

        }else if ($serRequest->input('typo') == 'p'){
            return redirect()->route('profile.products', ['slug' => $serRequest->user()->slug])->with('info', 'Product Posted Successfully');
        }
    }

    public function getEditService($id)
    {
        $post = Service::findOrFail($id);
        return view('pages.edit')->with('sdata', $post);
    }

    //validate and update service details
    public function postServiceUpdate(ServiceRequest $serRequest, $id)
    {
        $slugSer = $this->slugIt($serRequest->input('serTitle'));

        $service =  Service::find($id);
        $service->title             = $serRequest->input('serTitle');
        $service->user_id           = Auth::user()->id;
        $service->category_id       = $serRequest->input('serCat');
        $service->sub_category_id   = $serRequest->input('subCat');
        $service->description       = $serRequest->input('description');
        $service->slug              = $slugSer;
        $service->type              = $serRequest->input('typo');
        $service->state_id          = $serRequest->input('serState');
        $service->location_id       = $serRequest->input('location');
        
        $service->save();
        
        if($serRequest->hasFile('image')){
            foreach($serRequest->file('image') as $photo){
                $imageData = Cloudinary::uploadPicture($photo);
               Image::create([
                    'service_id' => $service->id,
                    'image' => $imageData,
                ]);
            }
        }

        //fire sms sending event
        if($serRequest->input('typo') == 's'){
            return redirect()->route('profile.service', ['slug' => $serRequest->user()->slug])->with('info', 'Service Updated Successfully');
        }elseif($serRequest->input('typo') == 'p'){
            return redirect()->route('profile.products', ['slug' => $serRequest->user()->slug])->with('info', 'Product Updated Successfully');
        }
    }

    public function getDeleteService($id)
    {
        $post = Service::findOrFail($id);
        if(!empty($post->image)){
            $imageData = json_decode($post->image, true);
            $this->deletePicture($imageData['public_id']);
        }
        
        $post->delete();
        return redirect()->back()->with('info', 'Deleted.');
    }

    

    
}
