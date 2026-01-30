@extends('layouts.app')

@section('content')

    <div class="relative max-w-6xl mx-auto">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold tracking-wide"><span class="filter grayscale brightness-25">📇</span> Contacts</h2>

            <a href="{{ route('contacts.create') }}" class="bg-gradient-to-r from-indigo-500 to-purple-600
                      px-5 py-3 rounded-xl font-semibold
                      hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/30
                      transition">
                + Nouveau contact
            </a>
        </div>

        <!-- Flash message -->
        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20
                            text-green-400 px-5 py-3 rounded-xl backdrop-blur mb-6">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Filters -->
        <form method="GET" class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl p-5 mb-8 flex flex-col md:flex-row gap-4">

            <select name="group_id" class="bg-black/30 border border-white/10 rounded-xl px-4 py-3
                           outline-none focus:ring-2 focus:ring-indigo-500 transition">
                <option value="">Tous les groupes</option>
                @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ request('group_id') == $group->id ? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                @endforeach
            </select>

            <input type="text" name="search" value="{{ request('search') }}" placeholder="🔍 Rechercher par nom" class="flex-1 bg-black/30 border border-white/10 rounded-xl
                          px-4 py-3 outline-none focus:ring-2
                          focus:ring-indigo-500 transition">

            <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 px-6 py-3 rounded-xl font-semibold
                           hover:scale-105 transition">
                Filtrer
            </button>

            @if(request('group_id') || request('search'))
                <a href="{{ route('contacts.index') }}" class="bg-gray-700/40 hover:bg-gray-600 px-6 py-3 rounded-xl font-semibold
                              hover:scale-105 transition flex items-center">
                    Réinitialiser
                </a>
            @endif
        </form>


        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl overflow-hidden shadow-2xl">

            @if($contacts->count() > 0)
                <table class="w-full text-sm">
                    <thead class="bg-white/10 text-gray-300 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-4 text-left">ID</th>
                            <th class="px-6 py-4 text-left">Nom</th>
                            <th class="px-6 py-4 text-left">Email</th>
                            <th class="px-6 py-4 text-left">Téléphone</th>
                            <th class="px-6 py-4 text-left">Groupe</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contacts as $contact)
                            <tr class="border-t border-white/10 hover:bg-white/5 transition">
                                <td class="px-6 py-4 text-gray-400">{{ $contact->id }}</td>
                                <td class="px-6 py-4 font-semibold">{{ $contact->name }}</td>
                                <td class="px-6 py-4 text-gray-300">{{ $contact->email ?? '-' }}</td>
                                <td class="px-6 py-4">{{ $contact->phone ?? '-' }}</td>
                                <td class="px-6 py-4">
                                    @if($contact->group)
                                        <span class="px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-400 text-xs">
                                            {{ $contact->group->name }}
                                        </span>
                                    @else
                                        <span class="text-gray-500 text-xs">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right space-x-4">
                                    <a href="{{ route('contacts.edit', $contact) }}" class="text-indigo-400 hover:underline">
                                        Modifier
                                    </a>
                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:underline"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')">
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
                    <p class="mb-4">Aucun contact trouvé.</p>
                    <a href="{{ route('contacts.create') }}" class="text-indigo-400 hover:underline">
                        Ajouter votre premier contact
                    </a>
                </div>
            @endif

        </div>

    </div>

@endsection
