<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function cat()
    {
    	return $this->belongsTo('App\Category');
    }
}
