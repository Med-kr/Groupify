@extends('layouts.app')

@section('content')

<div class="relative max-w-5xl mx-auto">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold tracking-wide">➕ Nouveau groupe</h2>
        <a href="{{ route('groups.index') }}"
           class="bg-gray-700/40 hover:bg-gray-600 px-5 py-3 rounded-xl font-semibold
                  hover:scale-105 hover:shadow-lg hover:shadow-indigo-500/30 transition">
            Retour
        </a>
    </div>

    <!-- Card -->
    <div class="bg-white/5 backdrop-blur-xl border border-white/10
                rounded-2xl shadow-2xl p-8 max-w-md">

        @include('groups.form', [
            'action' => route('groups.store'),
            'group' => new \App\Models\Group(),
            'buttonText' => 'Créer le groupe'
        ])

    </div>

</div>

@endsection

