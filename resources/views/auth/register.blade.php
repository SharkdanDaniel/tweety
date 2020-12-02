<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-400 rounded-lg w-50">
            <div class="w-100">
                <div class="w-100">
                    <div class="font-bold text-lg mb-4 ml-3">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    Username
                                </label>

                                    <input
                                        id="username"
                                        type="text"
                                        class="border border-gray-400 p-2 w-full @error('username') is-invalid @enderror"
                                        name="username"
                                        value="{{ old('username') }}"
                                        required
                                        autocomplete="username"
                                        autofocus
                                    >

                                    @error('username')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    Name
                                </label>

                                    <input
                                        id="name"
                                        type="text"
                                        class="border border-gray-400 p-2 w-full @error('name') is-invalid @enderror"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="name"
                                        autofocus
                                    >

                                    @error('name')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    Email
                                </label>

                                    <input
                                        id="email"
                                        type="email"
                                        class="border border-gray-400 p-2 w-full @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                    >

                                    @error('email')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <label
                                    for="password"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    password
                                </label>

                                    <input
                                        id="password"
                                        type="password"
                                        class="border border-gray-400 p-2 w-full @error('password') is-invalid @enderror"
                                        name="password"
                                        value="{{ old('password') }}"
                                        required
                                        autocomplete="password"
                                        autofocus
                                    >

                                    @error('password')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <label
                                    for="password-confirm"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    Confirme Password
                                </label>

                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="border border-gray-400 p-2 w-full"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    >
                            </div>

                            <div class="form-group row mb-0 px-3">

                                <button type="submit" class="px-6 py-3 rounded-full text-sm uppercase bg-blue-600 text-white col-12">
                                    {{ __('Register') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
