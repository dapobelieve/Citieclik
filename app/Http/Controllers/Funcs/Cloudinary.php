<?php

namespace App\Http\Controllers\Funcs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Cloudder;


/**
* Handles the uploading and deletion of images to Clodinary
*/
class Cloudinary 
{
    /*
    * The Upload Method
    */
    public static function uploadPicture($photo)
    {
        // dd($photo);
        $fileUrl = $photo->getRealPath();
            $result  =  Cloudder::upload($fileUrl,null, $options = array(
                'folder'   => 'services',
                'timeout'  =>  600,
                'format'   => 'jpg',
                'quality'  => '20',
                "height"   => 500,
                "crop"     => "limit"
            ));

            if(!$result)
                return redirect()->back()->with('info', 'Internal Server Error. Please try again.');
            else {
                $fileData  = Cloudder::getResult();
                return json_encode($fileData);
            }
    }

    public static function deletePicture($imagePubId)
    {
        Cloudder::delete($imagePubId);
    }
}