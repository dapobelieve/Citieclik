<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


	public function catty()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}


	// A small function to DRY up our queries when
	// we run it in our controller. something like 
	// a way to just filter the resullts
    public function scopePostOnly($query)
    {
        return $query->where([
            ['type', 'P'],
            ['status', '1'],
        ]);
    }
}
