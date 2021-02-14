<x-guest-layout>
    <x-guestnav />

    <section class="text-gray-500 bg-gray-900 body-font h-screen">
        <form method="POST" action="{{ route('login') }}">
            {{-- Ensure there is a CSRF token in the request.--}}
            @csrf
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 md:ml-auto w-full mt-10 md:mt-0 mx-auto">
                <h2 class="text-white text-lg font-medium title-font mb-5">Login</h2>

                 <x-auth-session-status class="mb-4" :status="session('status')" />


                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="relative mb-4">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                <div class="relative mb-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-button class="ml-3">
                        {{ __('Login') }}
                    </x-button>
                </div>
            </div>
        </form>
    </section>
  </x-guest-layout>