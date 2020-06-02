<div class="flex">
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        <div class="flex items-center mr-4">
            <button class="text-xs text-blue-400 flex">
                <img
                    class=""
                    src="{{ asset('images/like.png') }}"
                    alt="likes"
                    width="15">

                <span class="text-xs text-blue-400">
                    {{ $tweet->likes ?: 0 }}
                </span>
            </button>
        </div>
    </form>

    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')
        <div class="flex items-center mr-4">
            <button class="text-xs text-red-400 flex">
                <img
                    src="{{ asset('images/dislike.png') }}"
                    alt="dislikes"
                    width="15">

                <span type="submit" class="text-xs text-red-400">
                    {{ $tweet->dislikes ?:0 }}
                </span>
            </button>
        </div>
    </form>
</div>
