@unless (current_user()->is($user))
    <form action="{{$user->path('follow')}}" method="post">
            @csrf
            <button 
                type="submit" 
                class="bg-blue-600 shadow-sm rounded-full px-4 py-2 text-white text-xs"
                >
                @if(current_user()->following($user))
                    Unfollow
                @else
                    Follow
                @endif
            </button>
        </form>
@endunless
        
