<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cloudder;

class Image extends Model
{
    protected $fillable = [
        'service_id',
        'image'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }


    public function servieImage()
    {
        if(empty($this->image))
        {
            $ran = mt_rand(1,3);
            $img = "/assets/img/shop/cart/0".$ran.".jpg";
        }else
        {
            $img = json_decode($this->image, true);

            return cl_image_tag($img['public_id'], 
                array(
                    'cloud_name' => 'citieclik',
                    'width'      => 200,
                    'height'     => 150,
                    "crop"       => "fill"

                    // "crop"       => "scale"
                )
            );
        }
        return $img;
    }

    public function servieImage2()
    {
        if(empty($this->image))
        {
            $img = "/assets/img/default.jpg";
        }else
        {
            $img = json_decode($this->image, true);
            return $img['secure_url'];
        }
        return $img;
    }
}
