<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    
    protected $fillable = [
        ''
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
