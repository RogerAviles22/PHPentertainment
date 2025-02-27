<x-guest-layout> 
    <div class=" grid justify-items-end bg-gray-900 text-white">
        <div>
            <p class="text-right">¿No tienes cuenta?<a class="mx-8 underline text-lg text-gray-50 hover:text-blue-400" href="{{ route('register') }}">Registrate</a>
            </p>
        </div>
        
    </div>
</x-guest-layout> 
<x-guest-layout>    
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('images/logo.png') }} " alt="logo" class="img-fluid" width="300">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-600 shadow-sm focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Iniciar sesión') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
