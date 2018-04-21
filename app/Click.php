<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = [
        'user_id'
    ];


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
