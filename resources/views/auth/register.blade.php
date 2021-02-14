<x-guest-layout>
    <x-guestnav />

    <section class="text-gray-500 bg-gray-900 body-font h-screen">
        <form method="POST" action="{{ route('register') }}">
            {{-- ensure there is a CSRF token in the
            request.--}}
            @csrf
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 md:ml-auto w-full mt-10 md:mt-0 mx-auto">
                <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="relative mb-4">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div class="relative mb-4">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required />
                </div>
                <div class="relative mb-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="relative mb-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" type="password" name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
