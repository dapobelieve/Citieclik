<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function cat()
    {
    	$this->belongsTo('App\Category');
    }
}
