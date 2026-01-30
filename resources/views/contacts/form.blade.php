<form method="POST" action="{{ $action }}" class="space-y-5">
    @csrf
    @if(isset($method) && $method === 'PUT')
        @method('PUT')
    @endif

    <!-- Nom -->
    <div>
        <label class="text-sm text-gray-300">Nom complet</label>
        <input type="text" name="name" value="{{ old('name', $contact->name ?? '') }}" class="mt-1 w-full bg-black/30 border border-white/10
                      rounded-xl px-4 py-3 outline-none
                      focus:ring-2 focus:ring-indigo-500
                      transition">
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label class="text-sm text-gray-300">Adresse Email</label>
        <input type="email" name="email" value="{{ old('email', $contact->email ?? '') }}" class="mt-1 w-full bg-black/30 border border-white/10
                      rounded-xl px-4 py-3 outline-none
                      focus:ring-2 focus:ring-indigo-500
                      transition">
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Téléphone -->
    <div>
        <label class="text-sm text-gray-300">Téléphone</label>
        <input type="text" name="phone" value="{{ old('phone', $contact->phone ?? '') }}" class="mt-1 w-full bg-black/30 border border-white/10
                      rounded-xl px-4 py-3 outline-none
                      focus:ring-2 focus:ring-indigo-500
                      transition">
        @error('phone')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Groupe -->
    <div>
        <label class="text-sm text-gray-300">Groupe</label>
        <select name="group_id" class="mt-1 w-full bg-black/30 border border-white/10
                       rounded-xl px-4 py-3 outline-none
                       focus:ring-2 focus:ring-indigo-500
                       transition">
            <option value="">-- Aucun --</option>
            @foreach($groups as $group)
                <option value="{{ $group->id }}" {{ old('group_id', $contact->group_id ?? '') == $group->id ? 'selected' : '' }}>
                    {{ $group->name }}
                </option>
            @endforeach
        </select>
        @error('group_id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Button -->
    <button type="submit" class="w-full mt-4 bg-gradient-to-r from-indigo-500 to-purple-600
                   py-3 rounded-xl font-semibold tracking-wide
                   hover:scale-[1.02] hover:shadow-xl hover:shadow-indigo-500/30
                   transition">
        {{ $buttonText }}
    </button>
</form>
