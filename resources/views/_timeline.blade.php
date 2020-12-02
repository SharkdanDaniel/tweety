<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse
    <hr>
    <div class="bg-gray-100">
        {{ $tweets->links() }}
    </div>
</div>
