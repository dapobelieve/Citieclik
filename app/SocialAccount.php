<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{

	$protected = [
		'user_id',
		'provider_user_id',
		'provider'
	];

    public function user()
    {
    	$this->belongsTo('App\User');
    }
}
