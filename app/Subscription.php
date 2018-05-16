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

    protected $casts = [
        'status' => 'boolean',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
