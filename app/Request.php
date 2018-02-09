<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    // protected $table = 'requests';
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'sub_category_id',
        'state_id',
        'location_id',
        'description',
        'image',
        'hash',
        'priority',
        'shortUrl',
        'sms_sent_to',
        'sms_status'
    ];

    public function getRouteKeyName()
    {
        return 'hash';
    }
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
// Relationships Ends

    public function serviceTitle()
    {
        return ucwords($this->title);
    }

    public function serviceDesc()
    {
        return htmlentities($this->description);
        // (string)
    }
}
