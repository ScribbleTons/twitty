<x-app>
    
       <header class="mb-6 rounded position-relative">
            <img src="/images/banner.jpg" width=100% class="rounded-md mb-2">
            
            <div class="flex justify-between items-center mb-2">
                <div>
                    <h2 class="text-bold text-2xl mb-0">{{$user->name}}</h2>
                    <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div class="flex">
                    @can('edit', $user)
                        <a href="{{$user->path('edit')}}" 
                            class="rounded-full border-solid border-2 border-gray-300 px-4 py-2 text-black text-xs ">
                            Edit Profile
                        </a>
                    @endcan                    
                    <x-follow-button :user='$user'></x-follow-button>         
                </div>
            </div>

            <img src="{{$user->avatar}}"
             alt=""
             class="rounded-full mr-2 absolute"
             style="width: 150px; left: calc(41% - 10px); top:52%;"
             >
             <p class="text-xs mt-10 text-justify">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quas vel corporis aperiam error ut ratione dolor suscipit quibusdam necessitatibus iste numquam eius illum deleniti, perspiciatis et. Sit, dolore iste.
            </p>
        </header>  

    @include('_timeline', [
        'tweets' => $user->tweets
    ])

</x-app>
