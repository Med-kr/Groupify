<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Groupify</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1'
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white">

<!-- Glow background -->
<div class="fixed inset-0 -z-10 flex justify-center items-start">
    <div class="w-[900px] h-[900px] bg-indigo-600/20 blur-[160px] rounded-full mt-[-300px]"></div>
</div>

<!-- Navbar -->
<nav class="bg-white/5 backdrop-blur-xl border-b border-white/10 px-8 py-4 flex justify-between items-center">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/Groupify-removebg.png') }}" alt="Groupify Logo" class="h-14 drop-shadow-lg hover:opacity-80 transition">
    </a>

    <div class="space-x-6 font-medium">
        <a href="{{ route('groups.index') }}"
           class="text-gray-300 hover:text-white transition {{ request()->routeIs('groups.*') ? 'text-white' : '' }}">
            Groupes
        </a>
        <a href="{{ route('contacts.index') }}"
           class="text-gray-300 hover:text-white transition {{ request()->routeIs('contacts.*') ? 'text-white' : '' }}">
            Contacts
        </a>
    </div>
</nav>

<!-- Flash message -->
@if(session('success'))
    <div class="max-w-5xl mx-auto mt-6 px-4">
        <div class="bg-green-500/10 border border-green-500/20
                    text-green-400 px-5 py-3 rounded-xl backdrop-blur">
            ✅ {{ session('success') }}
        </div>
    </div>
@endif

<!-- Content -->
<main class="max-w-5xl mx-auto mt-8 px-4">
    @yield('content')
</main>

</body>
</html>

