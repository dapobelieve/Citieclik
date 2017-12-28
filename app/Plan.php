<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //i'm amazed by this function walai
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function getPrice()
    {
        return $this->price * 100;
    }
}
