<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4  flex-shrink-0">
        <a href="{{route('profile', ['user' => $tweet->user->username])}}">
            <img 
            src="{{$tweet->user->avatar}}"
            alt=""
            class="rounded-full mr-2"
            width="50"
            height="50"
            >
        </a>
    </div>
    <div>
        <h5 class="mb-2 text-bold">{{$tweet->user->username}}</h5>
        <a href="{{route('profile', ['user' => $tweet->user])}}">
            <p class="text-sm mb-2">
                {{$tweet->body}}
            </p>
        </a>
    </div>
</div>