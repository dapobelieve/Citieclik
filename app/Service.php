<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

// Relationships Start

	public function userz()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function catty()
	{
		return $this->belongsTo('App\Category', 'category_id');
	}

	public function state()
	{
		return $this->belongsTo('App\State', 'state_id');
	}

    public function subCat()
    {
        return $this->belongsTo('App\Subcategory', 'sub_category_id');
    }

	public function loca()
	{
		return $this->belongsTo('App\Location', 'location_id');
	}

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getImages()
    {
        // dd($this->images()->get());
        if($this->images()->first() == null){
            
            return "<img src='/assets/img/default.jpg'>";
        }else{
            return $this->images()->first()->servieImage();
        }
    }

// Relationships Ends

	// A small function to DRY up our queries when
	// we run it in our controller. something like 
	// a way to just filter the resullts
    public function scopePostOnly($query)
    {
        return $query->where([
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

    public function serviceTitle()
    {
        return ucwords($this->title);
    }
}
