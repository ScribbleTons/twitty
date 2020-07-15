@unless (current_user()->is($user))
    <form action="POST" action="/profile/{{$user->username}}/follow">
            @csrf
            <button 
                type="submit" 
                class="bg-blue-600 shadow-sm rounded-full px-4 py-2 text-white text-xs"
                >
                {{current_user()->following($user)?'Unfollow Me':'Follow Me'}}
            </button>
        </form>
@endunless
        
