<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-400 rounded-lg w-50">
            <div class="">
                <div class="">
                    <div class="font-bold text-lg mb-4 ml-3">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                                >
                                    Email
                                </label>

                                    <input
                                        class="border border-gray-400 p-2 w-full @error('email') is-invalid @enderror"
                                        name="email"
                                        id="email"
                                        type="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
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
                                    Password
                                </label>

                                    <input
                                        class="border border-gray-400 p-2 w-full"
                                        name="password"
                                        id="password"
                                        type="password"
                                        required
                                        autocomplete="current-password"
                                    >

                                    @error('password')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="mb-6">
                                <div>
                                    <input
                                        class="mr-1"
                                        name="remember"
                                        id="remember {{ old('remember') ? 'checked' : '' }}"
                                        type="checkbox"
                                    >

                                    <label
                                        class="text-xs text-gray-700 font-bold uppercase"
                                        for=""
                                    >
                                        Remember Me
                                    </label>
                                </div>

                                <div class="flex justify-content-between">
                                    @error('remember')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror

                                    <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot your password?</a>
                                </div>

                            </div>

                            <div>
                                <button
                                    type="submit"
                                    class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500 mr-2 w-100"
                                >
                                    Submit
                                </button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
