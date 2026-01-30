@extends('layouts.app')

@section('content')

<div class="relative max-w-6xl mx-auto">

    <!-- Welcome Header -->
    <div class="text-center mb-12">
        <img src="{{ asset('images/Groupify-removebg.png') }}" alt="Groupify Logo" class="h-48 mx-auto mb-6 drop-shadow-2xl">
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Total Groups -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl p-6 shadow-2xl text-center">
            <div class="text-4xl mb-2 filter grayscale brightness-25">📂</div>
            <div class="text-3xl font-bold text-indigo-400">{{ $groupsCount }}</div>
            <div class="text-gray-400 mt-1">Groupes</div>
        </div>

        <!-- Total Contacts -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl p-6 shadow-2xl text-center">
            <div class="text-4xl mb-2 filter grayscale brightness-25">👥</div>
            <div class="text-3xl font-bold text-purple-400">{{ $contactsCount }}</div>
            <div class="text-gray-400 mt-1">Contacts</div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl p-6 shadow-2xl text-center">
            <div class="text-4xl mb-2 filter grayscale brightness-25">⚡</div>
            <div class="text-lg font-semibold text-green-400">Actions rapides</div>
            <div class="flex justify-center gap-3 mt-3">
                <a href="{{ route('groups.create') }}"
                   class="bg-indigo-500/20 hover:bg-indigo-500/30 text-indigo-400
                          px-3 py-1 rounded-lg text-sm transition">
                    + Groupe
                </a>
                <a href="{{ route('contacts.create') }}"
                   class="bg-purple-500/20 hover:bg-purple-500/30 text-purple-400
                          px-3 py-1 rounded-lg text-sm transition">
                    + Contact
                </a>
            </div>
        </div>
    </div>

    <!-- Latest Contacts -->
    @if($latestContacts->count() > 0)
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl overflow-hidden shadow-2xl">

            <div class="px-6 py-4 border-b border-white/10">
                <h3 class="text-xl font-bold"><span class="filter grayscale brightness-25">📋</span> Derniers contacts ajoutés</h3>
            </div>

            <table class="w-full text-sm">
                <thead class="bg-white/10 text-gray-300 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4 text-left">Nom</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Téléphone</th>
                        <th class="px-6 py-4 text-left">Groupe</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($latestContacts as $contact)
                        <tr class="border-t border-white/10 hover:bg-white/5 transition">
                            <td class="px-6 py-4 font-semibold">
                                <a href="{{ route('contacts.edit', $contact) }}" class="hover:text-indigo-400">
                                    {{ $contact->name }}
                                </a>
                            </td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-6 py-4 border-t border-white/10 text-center">
                <a href="{{ route('contacts.index') }}"
                   class="text-indigo-400 hover:underline text-sm">
                    Voir tous les contacts →
                </a>
            </div>

        </div>
    @else
        <!-- Empty State -->
        <div class="bg-white/5 backdrop-blur-xl border border-white/10
                    rounded-2xl p-12 text-center shadow-2xl">
            <div class="text-6xl mb-4 filter grayscale brightness-50">📭</div>
            <h3 class="text-xl font-bold mb-2">Pas encore de contacts</h3>
            <p class="text-gray-400 mb-6">Commencez par ajouter votre premier contact</p>
            <a href="{{ route('contacts.create') }}"
               class="bg-gradient-to-r from-indigo-500 to-purple-600
                      px-6 py-3 rounded-xl font-semibold
                      hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/30
                      transition inline-block">
                + Ajouter un contact
            </a>
        </div>
    @endif

</div>

@endsection

