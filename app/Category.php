<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCats()
    {
    	return $this->hasMany('App\Subcategory', 'category_id');
    }

    public function services()
    {
    	return $this->hasMany('App\Service');
    }
}
