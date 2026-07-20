<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $department ? 'Edit' : 'Create' }} Departments</h2>
    </x-slot>
    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Slug</label>
                <input type="text" wire:model="slug" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Director</label>
                <input type="text" wire:model="director" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('director') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image</label>
                
                @if ($department && $department->image && !is_object($image))
                    <div class="mb-2">
                        <img src="{{ Storage::url($department->image) }}" class="w-20 h-20 object-cover rounded shadow-sm border border-slate-200">
                    </div>
                @endif
                
                @if ($image && is_object($image))
                    <div class="mb-2">
                        <img src="{{ $image->temporaryUrl() }}" class="w-20 h-20 object-cover rounded shadow-sm border border-purple-200">
                    </div>
                @endif

                <input type="file" wire:model="image" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                <div wire:loading wire:target="image" class="text-sm text-purple-600 mt-1">Uploading...</div>
                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Save</button>
        </form>
    </div></div></div>
</div>