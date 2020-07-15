<div class="border border-blue rounded-lg p-4 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea name="body" class="w-full" placeholder="What on your mind?" ></textarea>

        <hr class="my-4">
        <footer class="flex justify-between">
            <img 
                src="{{auth()->user()->avatar}}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="40"
                height="40"
                >
             <button 
             type="submit" 
             class="bg-blue-600 rounded-lg px-2 p-2 text-white"
             >
                Tweep
            
            </button>
        </footer>
       
    </form>

        @error('body')
            <p class="text-red-500 text-sm p-2">{{$message}}</p>
        @enderror

</div>