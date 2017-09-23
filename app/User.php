<?php
namespace App;

use App\Service;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 
    protected $table = 'users';

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
        return ucfirst($this->first_name) ?: ucfirst($this->username);
    }

    protected $fillable = [
        'email',
        'username',
        'phone',
        'password',
        'first_name',
        'last_name',
        'location',
        'about',
        'state_id',
        'slug',
    ];

       
    public function services()
    {
        return $this->hasMany('App\Service', 'user_id');
    }
   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function userCats()
    {
        return $this->categories()->get();
    }

     public function userCatsCount()
    {
        return $this->categories()->count();
    }

    public function isChecked($id)
    {
        return (bool) $this->userCats()->where('id', $id)->count();
    }

    public function likes()
    {
        return $this->hasMany('App\likeable');
    }

    public function hasLikedService(Service $service)
    {
        return (bool)$service->likes->where('user_id', $this->id)->count();
    }


}