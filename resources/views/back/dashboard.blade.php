<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MENU PRINCIPAL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Section principale. -->
                    <h3>Compte</h3>
                    <section>
                        <div>
                            <ul>
                                <!-- Menu des employés. -->
                                <li>
                                    <button type="button">Employé</button>
                                    <div>
                                        <ul>
                                            <li><a href="{{ route('listeemploye') }}">Liste des employés</a></li>
                                            <li><a href="{{ route('register') }}">Enregistrer un employé</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <!-- Menu des étudiants. -->
                                <li>
                                    <button type="button">Etudiant</button>
                                    <div>
                                        <ul>
                                            <li><a href="">Liste des étudiants</a></li>
                                            <li><a href="">Enregistrer un étudiant</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- Pied de page. -->
                    <hr>
                    <footer>
                        <strong>Copyright &copy; 2021-2022 ESI tout droit réservé</strong>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
