<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    // $appends = 
    public function cat()
    {
    	return $this->belongsTo('App\Category');
    }

    public function servy()
    {
    	return $this->hasMany('App\Service');
    }

    public function subCats2()
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
    }
}
