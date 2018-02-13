<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use App\Category;
use Auth;
use App\User;
use Cloudder;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck', 'verified_user']);
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

	public function getProfile($slug)
    {
    	$user = User::where('slug', $slug)->first();
        // $userServices = $user->getUserServices();
    	if(!$user){
    		abort(404);
    	}

    	return view('profile.services')
    			->with('user', $user);
    }

     //Get user Services 
    public function getService($slug)
    {
    	$user = User::where('slug', $slug)->first();
    	if(!$user){
    		abort(404);
    	}
    	// $services = $user->services()->get();
    	return view('profile.services')
    			->with('user', $user);
    }

    public function getEditProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile.index')->with('user', $user);
    }

    public function postEditProfile(Request $request)
    {
        // validating the data
        $this->validate($request , [
            'fname' => 'required|string',
            
            'email' => [
                            'required',
                             Rule::unique('users')->ignore(Auth::user()->id),
                            'email',
                            'max:255',
                        ],
            'phone' => [
                            'required',
                            Rule::unique('users')->ignore(Auth::user()->id),
                            'digits:11',
                        ],
            'username' => [
                            'required',
                            'string',
                            Rule::unique('users')->ignore(Auth::user()->id),
                          ],
            // 'phone' => 'required|unique:users|digits:11',
            // 'username' => 'unique:users|string',
        ],
        [
            'phone.required'  => 'Phone Number Required',
            'username.unique' => 'Username Already Exists',
            'phone.digits'    => 'Phone Number must be 11 digits',
            'fname.required'  => 'The first name is required',
            'lname.string'    => 'The last name must be a Word',
        ]);

        // submmiting users details to the db
        Auth::user()->update([
            'email'      => $request->input('email'),
            'username'   => $request->input('username'),
            'first_name' => $request->input('fname'),
            'last_name'  => $request->input('lname'),
            'phone'      => $request->input('phone'),
            'slug'       => $this->slugIt($request->input('username')),
        ]);

        return redirect()->back()->with('info', 'Profile Updated.');
    }

    public function updatePic(Request $request)
    {
        // return $request;
        if(empty($request->user()->image)){
            $this->uploadPicture($request);
            return $this->imageObj;
        }else{
            $userImage = json_decode(Auth::user()->image, true);
            $this->deletePicture($userImage['public_id']);
            $this->uploadPicture($request);
            return $this->imageObj;
        }
    }

    private function uploadPicture(Request $req)
    {
        $fileUrl = $req->file('dfile')->getRealPath();
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'profilePics',
                'timeout'  =>  600,
                'format'   => 'Webp',
                'quality'  => '20',
                'gravity'  => 'face',
                'width'    => '150',
                'height'   => '150',
                'crop'     => 'thumb',
            ));

            if(!$result)
                return "Error!!!"; 
            else {
                $file_url  = Cloudder::getResult();
                $this->imageObj = $file_url;
                Auth::user()->update([
                    'image' => json_encode($file_url),
                ]);                
            }
    }

    private function deletePicture($imagePubId)
    {
        Cloudder::delete($imagePubId);
    }

}
