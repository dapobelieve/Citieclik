<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
            return $img['url'];
        }
        return $img;
    }
}
