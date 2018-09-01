<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model 
{
    protected $fillable = ['name', 'slug'];

    public $timestamps = false;
    // public function 
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function getRoutekeyName()
    {
        return 'slug';
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function latestService () 
    {
        return $this->hasOne(Service::class)->latest();
    }
}