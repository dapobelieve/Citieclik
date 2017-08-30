<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public function locations()
    {
    	//the second parameter is the name of the fkey in the child table
        return $this->hasMany('App\Location', 'state_id');        												 
    }

}
