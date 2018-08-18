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
            $img = "/assets/img/default.jpg";
        }else
        {
            $img = json_decode($this->image, true);

            return cl_image_tag($img['public_id'], 
                array(
                    'cloud_name' => 'citieclik',
                    'width'      => 300,
                    'height'     => 250,
                    "crop"       => "fill"
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
