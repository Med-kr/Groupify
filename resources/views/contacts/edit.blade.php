@extends('layouts.app')

@section('content')

<div class="relative max-w-6xl mx-auto">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold tracking-wide">✏️ Modifier le contact</h2>
        <a href="{{ route('contacts.index') }}"
           class="bg-gray-700/40 hover:bg-gray-600 px-5 py-3 rounded-xl font-semibold
                  hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/30 transition">
            Retour
        </a>
    </div>

    <!-- Card -->
    <div class="bg-white/5 backdrop-blur-xl border border-white/10
                rounded-2xl shadow-2xl p-8 max-w-md">

        @include('contacts.form', [
            'action' => route('contacts.update', $contact),
            'contact' => $contact,
            'groups' => $groups,
            'method' => 'PUT',
            'buttonText' => 'Mettre à jour'
        ])

    </div>

</div>

@endsection

