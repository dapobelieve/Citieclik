<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


	public function catty()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}

	public function state()
	{
		return $this->belongsTo('App\State', 'state_id');
	}

	public function loca()
	{
		return $this->belongsTo('App\Location', 'location_id');
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

    public function slugIt($slug)
    {
        $lettersNamesSpaces = '/[^\-\s\pN\pL]+/u';
        $spacesHypens = '/[\-\s]+/';
        $removeAmpersAnd = '&';//added this to remove ampersand

        $slug = preg_replace($lettersNamesSpaces, '', mb_strtolower($slug, 'UTF-8'));

        $slug = preg_replace($spacesHypens, '-', $slug);
        $slug = preg_replace($spacesHypens, '-', $slug);
        $slug = str_replace($removeAmpersAnd, '-', $slug);
        // also note strip tags

        $slug = trim($slug, '-');

        return $slug;
    }
}
