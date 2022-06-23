<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LISTE DES EMPLOYES') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if(session()->get('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif

                <section>
                <table>
                    <!-- Titre du tableau. -->
                <thead>
                    <tr>
                        <td>Prénom</td><td>Nom</td>
                        <td>Email</td><td>Responsabilité</td>
                        <td colspan="2">Option</td>
                    </tr>
                </thead>

                <!-- Corps du tableau. -->
                <tbody>
                @foreach($listeEmployes as $list)
                <tr>
                    <td>{{ $list->firstname }}</td><td>{{ $list->lastname }}</td>
                    <td>{{ $list->email }}</td><td>{{ $list->role }}</td>
                    <td><a href="{{route('editemploye', $list->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form method="POST" action="{{route('removeemploye', $list->id)}}">
                        @csrf

                        <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>

                <div>
                    <a href="/dashboard">Fermer</a>
                </div>
                </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>