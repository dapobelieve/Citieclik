<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function state()
    {
    	$this->belongsTo('App\State');
    }
}
