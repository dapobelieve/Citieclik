<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    
    protected $fillable = [
        'trxn_ref',
        'status',
        'plan_id',
        'pay_status',
        'click',
        'starts_at',
        'ends_at'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
