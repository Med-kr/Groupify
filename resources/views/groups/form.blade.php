<form method="POST" action="{{ $action }}" class="space-y-6">
    @csrf
    @if(isset($method) && $method === 'PUT')
        @method('PUT')
    @endif

    <!-- Nom du groupe -->
    <div>
        <label class="block text-sm text-gray-300 mb-1">
            Nom du groupe
        </label>
        <input type="text" name="name" value="{{ old('name', $group->name ?? '') }}"
            placeholder="Ex: Famille, Travail..." class="w-full bg-black/30 border border-white/10
                      rounded-xl px-4 py-3 outline-none
                      focus:ring-2 focus:ring-indigo-500
                      transition">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Button -->
    <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-600
                   py-3 rounded-xl font-semibold tracking-wide
                   hover:scale-[1.02] hover:shadow-xl hover:shadow-indigo-500/30
                   transition">
        {{ $buttonText }}
    </button>
</form>
