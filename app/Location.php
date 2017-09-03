<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function state()
    {
    	return $this->belongsTo('App\State');
    }
}
