<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function edit(User $currentUser, User $user){
        return $currentUser->is($user);
    }
    // public function follow(User $currentUser, User $user)
    // {
    //     if ($currentUser->is($user)) {
    //         return false; // so you can't follow yourself
    //     }

    //     return $currentUser->isNotFollowing($user);
    // }

    // public function unfollow(User $currentUser, User $user)
    // {
    //     return $currentUser->isFollowing($user);
    // }
}
