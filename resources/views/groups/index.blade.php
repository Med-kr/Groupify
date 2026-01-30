@extends('layouts.app')

@section('content')

    <div class="relative max-w-5xl mx-auto">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold tracking-wide"><span class="filter grayscale brightness-25">📂</span> Groupes</h2>

            <a href="{{ route('groups.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-600
                      px-5 py-3 rounded-xl font-semibold
                      hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/30
                      transition">
                + Nouveau groupe
            </a>
        </div>

        <!-- Flash message -->
        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20
                            text-green-400 px-5 py-3 rounded-xl backdrop-blur mb-6">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl overflow-hidden shadow-2xl">

            @if($groups->count() > 0)
                <table class="w-full text-sm">
                    <thead class="bg-white/10 text-gray-300 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-4 text-left">ID</th>
                            <th class="px-6 py-4 text-left">Nom du groupe</th>
                            <th class="px-6 py-4 text-left">Contacts</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($groups as $group)
                            <tr class="border-t border-white/10 hover:bg-white/5 transition">
                                <td class="px-6 py-4 text-gray-400">{{ $group->id }}</td>
                                <td class="px-6 py-4 font-semibold">
                                    {{ $group->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-400 text-xs">
                                        {{ $group->contacts->count() }} contact(s)
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right space-x-4">
                                    <a href="{{ route('groups.edit', $group) }}" class="text-indigo-400 hover:underline">
                                        Modifier
                                    </a>
                                    <form action="{{ route('groups.destroy', $group) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:underline"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce groupe ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="p-8 text-center text-gray-400">
                    <p class="mb-4">Aucun groupe créé pour le moment.</p>
                    <a href="{{ route('groups.create') }}" class="text-indigo-400 hover:underline">
                        Créer votre premier groupe
                    </a>
                </div>
            @endif

        </div>

    </div>

@endsection
