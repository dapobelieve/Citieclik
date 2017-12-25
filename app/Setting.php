<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    public function getApiDetails()
    {
        dd($this);
        // $smsKeys = array(
        //     'username' => $this->sms_api_username , 
        //     'password' => $this->sms_api_password , 
        // );
        // return $smsKeys;
    }
}