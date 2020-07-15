<div class="bg-blue-200 rounded p-2">
    @auth
        <h1 class="text-bold mb-4">Following</h1>
        <ul>
            <li class="mb-4">
                @forelse(auth()->user()->follows as $follow)
                
                    <a href="{{route('profile', $follow)}}" class="flex items-center text-sm mb-2">
                        <img 
                        src="{{$follow->avatar}}"
                        alt="{{$follow->username}} avatar"
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                        >
                        {{$follow->username}}
                    </a>
                    @empty 
                    <li>No friends yet!</li>
                
                @endforelse
            </li>
        </ul>    
    @endauth
</div>
