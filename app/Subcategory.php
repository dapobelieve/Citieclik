<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'sub_category',
        'slug'
    ];
    // $appends = 
    public function cat()
    {
    	return $this->belongsTo('App\Category');
    }

    public function servy()
    {
    	return $this->hasMany(Service::class);
    }

    public function subCats2()
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
    }
}
