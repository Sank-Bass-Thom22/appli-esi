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

        <div>
            <h3>Modification</h3>
        </div>

        <form method="POST" action="{{ route('updateemploye', $employe->id) }}">
            @csrf

            <!-- Firstname -->
            <div>
                <label for="firstname">Prénom : </label><br />

                <input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value={{ $employe->firstname }} required autofocus />
            </div>

            <!-- Lastname -->
            <div>
            <label for="lastname">Nom : </label><br />

            <input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value={{ $employe->lastname }} required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Adresse email : </label><br />

                <input id="email" class="block mt-1 w-full" type="email" name="email" value={{ $employe->email }} required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Mot de passe : </label><br />

                <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Confirmer le mot de passe : </label><br />

                <input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Role -->
            <div>
                <label for="role">Responsabilité</label><br />

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

                <button class="ml-4">
                    {{ __('Valider') }}
                </button>
            </div>
        </form>
        <div>
            <a href="{{ route('listeemploye') }}">Fermer</a>
        </div>
    </x-auth-card>
</x-guest-layout>