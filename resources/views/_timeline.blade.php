<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweep')
    @empty
        <p class="p-4">No tweep yet!</p>
    @endforelse
 </div>
 