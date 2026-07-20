<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $leadership ? 'Edit' : 'Create' }} Leadership</h2>
    </x-slot>
    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Position</label>
                <input type="text" wire:model="position" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('position') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Biography</label>
                <input type="text" wire:model="biography" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('biography') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700">Profile Photo</label>
                
                @if ($leadership && $leadership->photo && !is_object($photo))
                    <div class="mb-2">
                        <img src="{{ Storage::url($leadership->photo) }}" class="w-20 h-20 object-cover rounded-full shadow-sm border border-slate-200">
                    </div>
                @endif
                
                @if ($photo && is_object($photo))
                    <div class="mb-2">
                        <img src="{{ $photo->temporaryUrl() }}" class="w-20 h-20 object-cover rounded-full shadow-sm border border-orange-200">
                    </div>
                @endif

                <input type="file" wire:model="photo" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                <div wire:loading wire:target="photo" class="text-sm text-orange-600 mt-1">Uploading...</div>
                @error('photo') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Save</button>
        </form>
    </div></div></div>
</div>