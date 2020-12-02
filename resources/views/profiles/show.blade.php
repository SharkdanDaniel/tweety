<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <a onclick="in" href="">
                <img
                    src="/images/background.jpg"
                    alt="background profile"
                    width="700"
                    class="mb-2 rounded-lg"
                >
            </a>

            @can ('edit', $user)
                <a onclick="in" href="{{ $user->path('avatar') }}">
                    <img
                        src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                        style="left: 50%"
                        width="150"
                    >
                </a>
            @endcan


            @unless (auth()->user()->is($user))
                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="left: 50%"
                    width="150"
                >
            @endunless

        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a
                        href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <div class="font-bold">
            About me
        </div>
        <p class="text-sm">
            I like going out to bars, restaurants and other few things. Let's get along. You're welcome to follow me and sending me messages if you want.
        </p>


    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
