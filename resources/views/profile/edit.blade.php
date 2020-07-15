<x-app>
    <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input 
            type="text"
            name="name"
            id="name"
            value="{{$user->name}}"
            required
            class="border border-gray-400 p-2 w-full"
            >
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
            @enderror
        </div>
        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input 
            type="text"
            name="username"
            id="username"
            value="{{$user->username}}"
            required
            class="border border-gray-400 p-2 w-full"
            >
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
            @enderror
        </div>
        <div class="mb-6">
            <div>
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700 rounded-full">
                    Avatar
                </label>
                <img class="p-2" src="{{$user->avatar}}" alt="your avatar" width="70px">
                <input 
                type="file"
                name="avatar"
                id="avatar"
                class="border border-gray-400 p-2 w-full rounded-full"
                >
                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
                @enderror
            </div>
           
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input 
            type="text"
            name="email"
            id="email"
            value="{{$user->email}}"
            required
            class="border border-gray-400 p-2 w-full"
            >
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input 
            type="password"
            name="password"
            id="password"
            class="border border-gray-400 p-2 w-full"
            >
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
            @enderror
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>
            <input 
            type="password"
            name="password_confirmation"
            id="password_confirmation"
            
            class="border border-gray-400 p-2 w-full"
            >
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>           
            @enderror
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Update
            </button>
        </div>
    
    </form>
</x-app>