<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('System Settings & User Management') }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-r-lg shadow-sm">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Add User Form -->
            <div class="lg:col-span-1">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100">
                    <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50">
                        <h3 class="text-lg font-bold text-slate-800">Add New User</h3>
                    </div>
                    <div class="p-6">
                        <form wire:submit="saveUser" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                                <input type="text" id="name" wire:model="name" class="mt-1 block w-full rounded-lg border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 transition-colors" required>
                                @error('name') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                                <input type="email" id="email" wire:model="email" class="mt-1 block w-full rounded-lg border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 transition-colors" required>
                                @error('email') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                                <input type="password" id="password" wire:model="password" class="mt-1 block w-full rounded-lg border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 transition-colors" required>
                                @error('password') <span class="text-sm text-red-600 mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Confirm Password</label>
                                <input type="password" id="password_confirmation" wire:model="password_confirmation" class="mt-1 block w-full rounded-lg border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 transition-colors" required>
                            </div>

                            <div class="pt-2">
                                <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                    Create User
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Users List -->
            <div class="lg:col-span-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100">
                    <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50 flex justify-between items-center">
                        <h3 class="text-lg font-bold text-slate-800">Admin Users</h3>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            {{ $users->count() }} Users
                        </span>
                    </div>
                    <div class="p-0 overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">User</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Role</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Joined</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @foreach($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-sm">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-slate-900">{{ $user->name }}</div>
                                                <div class="text-sm text-slate-500">{{ $user->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Administrator
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                                        {{ $user->created_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        @if(auth()->id() !== $user->id)
                                        <button wire:click="deleteUser({{ $user->id }})" wire:confirm="Are you sure you want to delete this user? This action cannot be undone." class="text-red-600 hover:text-red-900 transition-colors">
                                            Delete
                                        </button>
                                        @else
                                        <span class="text-slate-300 italic text-xs">Current</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
