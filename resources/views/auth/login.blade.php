<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4 w-full">

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900 underline whitespace-nowrap">
                    Lupa Password?
                </a>
            @endif

            <div class="flex items-center gap-x-4">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900 underline whitespace-nowrap">
                        Belum punya akun?
                    </a>
                @endif
            </div>

                <x-primary-button class="py-1 px-2 text-sm">
                    {{ __('LOG IN') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
