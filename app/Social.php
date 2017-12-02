<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //Social Auth Model

    protected $fillable = ['social_id', 'service'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
