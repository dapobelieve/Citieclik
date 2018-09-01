<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cat_id',
        'category',
        'slug'
    ];

    public function cat ()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCats()
    {
    	return $this->hasMany('App\Subcategory', 'category_id');
    }

    public function services()
    {
    	return $this->hasMany('App\Service','category_id');
    }
}
