<div>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pages</h2>
            <a href="{{ route('admin.pages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded" wire:navigate>Create</a>
        </div>
    </x-slot>
    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        @if (session()->has('message')) <div class="mb-4 text-green-600">{{ session('message') }}</div> @endif
        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead><tr><th class="px-6 py-3 text-left">ID</th><th class="px-6 py-3 text-left">Title/Name</th><th class="px-6 py-3"></th></tr></thead>
            <tbody>@foreach($items as $item) <tr class="border-b"><td class="px-6 py-4">{{ $item->id }}</td><td class="px-6 py-4">{{ $item->title ?? $item->name ?? 'Item' }}</td><td class="px-6 py-4 text-right"><a href="{{ route('admin.pages.edit', $item) }}" class="text-indigo-600 mr-3">Edit</a><button wire:click="delete({{ $item->id }})" class="text-red-600">Delete</button></td></tr> @endforeach</tbody>
        </table>
        <div class="mt-4">{{ $items->links() }}</div>
    </div></div></div>
</div>