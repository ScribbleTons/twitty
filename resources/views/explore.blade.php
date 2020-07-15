<x-app>
   <div> 
       @foreach ($users as $user)
            <a href="{{$user->path()}}">
                <div class="flex items-center mb-3">
                    <img 
                    src="{{$user->avatar}}"
                    alt="{{$user->name}}your avatar"
                    class="rounded-full mr-4"
                    width="40"
                    height="40"
                    >
                    <div>
                        <h4 class="font-bold">
                        {{'@'.$user->name}}
                        </h4></div>
                </div>
            </a>
        {{$users->links()}}
        @endforeach
    </div>
</x-app>