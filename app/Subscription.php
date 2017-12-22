<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    
    protected $fillable = [
        ''
    ];

    public function planz()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
