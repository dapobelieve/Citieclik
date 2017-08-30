<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Category;

class ServiceController extends Controller
{
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


    public function index()
    {
    	return view('services');
    }

    //Add services
    public function getAddService()
    {
    	return view('pages.addservice');
    }


    //validate and save service details
    public function postService(Request $serRequest)
    {
    	$this->validate($serRequest, [
            'serTitle' =>  "required|string|max:255",
            'serState' => "required|integer",
            'location' => "required|integer",
            'serviceLocation' => "required|string",
            'serCat' => "required|integer",
            'subCat' => "required|integer",
            // 'serviceImage' => "image|mimes:jpeg,jpg,png,bmp,svg|max:2048",
            'servicePrice' => "integer",
            'description'  => "required|string",
        ], 
        [
            'serTitle.required' => 'The service you offer needs to have a name e.g I write final year projects, Hair stylist, Bead Designer etc',
            'serState.required' => 'Select the state you where you currently provide this service',
            'location.required' => 'Select the location',
            'description.required' => 'Give a short description of the sevice',
            'serCat.required' => 'Select a Category',
            'subCat.required' => 'Select a Sub Category',
            'servicePrice.integer' => 'The price must be in digits e.g 50000'
            // 'serviceImage.mimes' => 'The image must have jpeg,jpg or png format',
        ]);

    	// dd($serRequest);
    }

    //get state local govts for ajax request
    public function getLocation(Request $request, $id)
    {
    	$state = State::find($id);
    	$data = $state->locations;
    	return $data->toJson();
    }

    //get state local govts for ajax request
    public function getSubCat(Request $request, $id)
    {
    	$cat = Category::find($id);
    	// $data = $cat->
    }
}
