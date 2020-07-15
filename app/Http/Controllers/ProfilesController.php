<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user){
        return view('profile.show', compact('user'));
    }

    public function edit(User $user){
        $this->authorize('edit', $user);

        return view('profile.edit', compact('user'));
    }
    public function update(User $user){
        $attributes = request()->validate([
            'username'=>['string', 'required', 'max:255','alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' =>['file'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255',Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:15', "confirmed"],
        ]);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');

        }

        
        $user->update($attributes);
        return redirect($user->path());
    }
}
