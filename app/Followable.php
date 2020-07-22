<?php
namespace App;

trait Followable 
{
    public function follow(User $user){
        return $this->follows()->save($user);
    }
    public function unfollow(User $user){
        return $this->follows()->detach($user);
    }
    public function follows(){
        
        return $this->belongsToMany(User::class, 'follows','user_id', 'following_user_id' )->withTimestamps();
    }
    public function following(User $user){

         return ($this->follows()->pluck('following_user_id')->contains($user->id));
        
    }
    public function toggleFollow(User $user){
        
        return $this->follows()->toggle($user);
    }
    
}
?>