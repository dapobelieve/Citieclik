<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    
    protected $fillable = [
        'trxn_ref',
        'status',
        'plan_id',
        'pay_status'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
