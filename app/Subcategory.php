<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function cat()
    {
    	return $this->belongsTo('App\Category');
    }

    public function servy()
    {
    	return $this->hasMany('App\Service');
    }
}
