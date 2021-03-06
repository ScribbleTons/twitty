<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Password mutator
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAvatarAttribute($value){
        if(isset($value)){
            return asset('storage/' .$value);
        }else {

        return asset('/images/avatar.png');
        }
    }

    public function timeline(){

        $friends = $this->follows()->pluck('id');

        return tweety::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()->get();
    }

    public function tweets(){
        return $this->hasMany(tweety::class);
    }

    public function getRouteKeyName(){
        return 'username';
    }
    public function path($append = ''){
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}": $path;
    }

}
