<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        @if(session()->get('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Firstname -->
            <div>
                <x-label for="firstname" :value="__('Prénom')" />

                <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>

            <!-- Lastname -->
            <div>
            <x-label for="lastname" :value="__('Nom')" />

            <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Adresse email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Role -->
            <div>
                <label for="role">Responsabilité</label>
                <select id="role" class="block mt-1 w-full" name="role" required>
                    <option value="">Rôle</option>
                    <option value="Directeur">Directeur</option>
                    <option value="Secrétaire">Secrétaire</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <!--
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
-->

                <x-button class="ml-4">
                    {{ __('Valider') }}
                </x-button>
            </div>
        </form>
        <div>
            <a href="{{ route('dashboard') }}">Fermer</a>
        </div>
    </x-auth-card>
</x-guest-layout>
