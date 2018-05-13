<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'service_id',
        'image'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
