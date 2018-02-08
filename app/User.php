<?php
namespace App;

use App\Service;
use App\Plan;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 
    protected $table = 'users';

    protected $cast = [
        'verify' => 'boolean'
    ];

    public function getName()
    {
        if($this->first_name){
            return ucwords($this->first_name);
        }
        return null;
    }

    public function getUsername()
    {
        return ucwords($this->username);
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: ucfirst($this->username);
    }

    public function getFullName()
    {
        return ucfirst($this->first_name." ".$this->last_name) ?: ucfirst($this->username);
    }

    protected $fillable = [
        'email',
        'username',
        'phone',
        'password',
        'first_name',
        'last_name',
        'location',
        'slug',
        'image',
        'verify'
    ];

    // a user hasMany services
    public function services()
    {
        return $this->hasMany('App\Service', 'user_id');
    }
    //All about subscriptions
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    //check if user has an active subscription
    public function isSubscribed()
    {
        return (bool) $this->subscriptions()->where('status', 1)->count();
    }

    public function getActiveSubscription()
    {
        return $this->subscriptions()->where('status', 1)->first();
    }

    public function getPlan()
    {
        return $this->getActiveSubscription()->plan;
    }

    public function getActiveSubFromPlan()
    {
        $plan =  $this->getActiveSubscription()->plan()->first();
        return $plan->price * 100;
    }


    // checks if active subscription is the same as the one in the request
    public function subscribedToPlan($plan)
    {
        return (bool) $this->subscriptions()->where([
            ['status', 1],
            ['plan_id', $plan]
         ])->count();
    }

    public function allSubscriptions()
    {
        return $this->subscriptions()->where('pay_status', 1);
    }

    //subscription ends

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    //setup token relationship
    public function token()
    {
        return $this->hasOne(Token::class);
    }

    //get services posted by a user
    public function getUserServices()
    {
        return $this->services()->where('type', 'p')->get();
    }

    // gets the number of posts posted by a user
    public function getNumberOfPosts()
    {
        return $this->getUserServices()->count();
    }

    public function getUserRequests()
    {
        return $this->services()->where('type', 'r')->get();
    }

    public function hasSocialLinked($service)
    {
        return (bool) $this->social->where('service', $service)->count();
    }

    //get the image of a user or set a default one
    public function getUserImg()
    {
        if(empty($this->image)){
            return '/assets/img/vatar.png';
        }else{
            $userImage = json_decode($this->image, true);
            return $userImage['url'];
        }
    }

    public function social()
    {
        return $this->hasMany(Social::class);
    }


}