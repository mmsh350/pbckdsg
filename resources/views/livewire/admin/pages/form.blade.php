<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $page ? 'Edit' : 'Create' }} Pages</h2>
    </x-slot>
    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form wire:submit="save">
            <div class="mb-4">
                <label class="block text-gray-700">Title</label>
                <input type="text" wire:model="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Slug</label>
                <input type="text" wire:model="slug" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Content</label>
                <input type="text" wire:model="content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Featured Image</label>
                
                @if ($page && $page->featured_image && !is_object($featured_image))
                    <div class="mb-2">
                        <img src="{{ Storage::url($page->featured_image) }}" class="w-32 h-20 object-cover rounded shadow-sm border border-slate-200">
                    </div>
                @endif
                
                @if ($featured_image && is_object($featured_image))
                    <div class="mb-2">
                        <img src="{{ $featured_image->temporaryUrl() }}" class="w-32 h-20 object-cover rounded shadow-sm border border-indigo-200">
                    </div>
                @endif

                <input type="file" wire:model="featured_image" accept="image/*" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                <div wire:loading wire:target="featured_image" class="text-sm text-indigo-600 mt-1">Uploading...</div>
                @error('featured_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Save</button>
        </form>
    </div></div></div>
</div>