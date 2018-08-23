<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model 
{
    // public function 
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}