<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('System Settings & User Management') }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-r-lg shadow-sm">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tabbed Navigation Bar -->
        <div class="bg-white rounded-xl border border-slate-100 p-2 shadow-sm flex flex-wrap gap-2">
            <button type="button" wire:click="setTab('contact')" class="px-5 py-2.5 rounded-lg font-bold text-sm transition-all flex items-center gap-2 {{ $activeTab === 'contact' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:bg-slate-50' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span>Contact & Mail Details</span>
            </button>

            <button type="button" wire:click="setTab('system')" class="px-5 py-2.5 rounded-lg font-bold text-sm transition-all flex items-center gap-2 {{ $activeTab === 'system' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:bg-slate-50' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>System Rules</span>
            </button>

            <button type="button" wire:click="setTab('subscribers')" class="px-5 py-2.5 rounded-lg font-bold text-sm transition-all flex items-center gap-2 {{ $activeTab === 'subscribers' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:bg-slate-50' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                <span>Newsletter Subscribers</span>
                <span class="ml-1.5 px-2 py-0.5 text-xs font-bold rounded-full {{ $activeTab === 'subscribers' ? 'bg-white text-blue-700' : 'bg-slate-200 text-slate-700' }}">{{ $subscribers->count() }}</span>
            </button>

            <button type="button" wire:click="setTab('users')" class="px-5 py-2.5 rounded-lg font-bold text-sm transition-all flex items-center gap-2 {{ $activeTab === 'users' ? 'bg-blue-600 text-white shadow-md' : 'text-slate-600 hover:bg-slate-50' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <span>User Management</span>
            </button>
        </div>

        <!-- TAB 1: Contact Details & Mail Routing -->
        @if ($activeTab === 'contact')
            <div class="space-y-6">
                <!-- Head Office Info Form Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100">
                    <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50">
                        <h3 class="text-lg font-bold text-slate-800">Head Office Address, Phone Lines & Working Hours</h3>
                        <p class="text-sm text-slate-500 mt-1">Configure contact numbers, office location address, and official working hours displayed on the website and emails.</p>
                    </div>
                    
                    <form wire:submit="saveContactSettings" class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Primary Phone Line</label>
                                <input type="text" wire:model="contact_phone_primary" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="+234 (0) 800 000 0000" required>
                                @error('contact_phone_primary') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Secondary / Support Phone Line</label>
                                <input type="text" wire:model="contact_phone_secondary" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="+234 (0) 900 000 0000">
                                @error('contact_phone_secondary') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">Head Office Address</label>
                            <textarea wire:model="contact_address" rows="3" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="Planning & Budget Commission..." required></textarea>
                            @error('contact_address') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Working Hours (Weekdays)</label>
                                <input type="text" wire:model="contact_working_hours_weekday" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="Monday - Friday: 8:00 AM - 4:00 PM" required>
                                @error('contact_working_hours_weekday') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Working Hours (Weekends)</label>
                                <input type="text" wire:model="contact_working_hours_weekend" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="Saturday & Sunday: Closed" required>
                                @error('contact_working_hours_weekend') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="flex justify-end pt-2">
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 bg-blue-600 border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-sm">
                                Save Office & Contact Details
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Mail Routing Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100">
                    <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50 flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800">Contact Mail & Notification Delivery Settings</h3>
                            <p class="text-sm text-slate-500 mt-1">Manage destination email addresses and notification dispatch options for incoming contact form messages.</p>
                        </div>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 font-semibold text-xs rounded-full border border-blue-100">Queued Dispatch Active</span>
                    </div>
                    
                    <form wire:submit="saveMailSettings" class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Primary Notification Email</label>
                                <input type="email" wire:model="contact_primary_email" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="info@pbc.kdsg.gov.ng" required>
                                <p class="text-xs text-slate-500 mt-1">Displayed on Contact page & used as primary email recipient.</p>
                                @error('contact_primary_email') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-1">Secondary / Support Notification Email</label>
                                <input type="email" wire:model="contact_secondary_email" class="w-full rounded-lg border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm px-4 py-2.5" placeholder="support@pbc.kdsg.gov.ng">
                                <p class="text-xs text-slate-500 mt-1">Displayed on Contact page & used as secondary email recipient.</p>
                                @error('contact_secondary_email') <span class="text-xs text-red-600 mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="border-t border-slate-100 pt-6">
                            <h4 class="text-sm font-bold text-slate-800 mb-4">Mail Delivery Recipients Configuration</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="flex items-center space-x-3 p-3 rounded-lg border border-slate-200 bg-slate-50/50 hover:bg-slate-50 cursor-pointer">
                                    <input type="checkbox" wire:model="send_mail_to_primary" class="rounded text-blue-600 focus:ring-blue-500 h-4 w-4">
                                    <span class="text-sm font-medium text-slate-700">Send queued copy to Primary Email</span>
                                </label>

                                <label class="flex items-center space-x-3 p-3 rounded-lg border border-slate-200 bg-slate-50/50 hover:bg-slate-50 cursor-pointer">
                                    <input type="checkbox" wire:model="send_mail_to_secondary" class="rounded text-blue-600 focus:ring-blue-500 h-4 w-4">
                                    <span class="text-sm font-medium text-slate-700">Send queued copy to Support Email</span>
                                </label>

                                <label class="flex items-center space-x-3 p-3 rounded-lg border border-slate-200 bg-slate-50/50 hover:bg-slate-50 cursor-pointer">
                                    <input type="checkbox" wire:model="send_mail_to_all_admins" class="rounded text-blue-600 focus:ring-blue-500 h-4 w-4">
                                    <span class="text-sm font-medium text-slate-700">Send queued copy to All Registered Admin Users</span>
                                </label>

                                <label class="flex items-center space-x-3 p-3 rounded-lg border border-slate-200 bg-slate-50/50 hover:bg-slate-50 cursor-pointer">
                                    <input type="checkbox" wire:model="send_acknowledgment_to_sender" class="rounded text-blue-600 focus:ring-blue-500 h-4 w-4">
                                    <span class="text-sm font-medium text-slate-700">Send automatic queued confirmation to Sender</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-end pt-2">
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 bg-blue-600 border border-transparent rounded-lg font-bold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-sm">
                                Save Mail Configuration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endif

        <!-- TAB 2: System Rules -->
        @if ($activeTab === 'system')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <h3 class="text-lg font-bold text-slate-800">Document Date Synchronization</h3>
                        </div>
                        <p class="text-sm text-slate-500 mt-1">
                            When activated, specifying a custom <strong>Published Date</strong> on document upload/edit will automatically force the document's <strong>Created Date</strong> and <strong>Last Updated Date</strong> to match that specified date.
                        </p>
                    </div>

                    <div class="flex items-center">
                        <label for="sync_document_dates" class="inline-flex items-center cursor-pointer">
                            <input id="sync_document_dates" type="checkbox" wire:model.live="sync_document_dates" class="sr-only peer">
                            <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-bold text-slate-800">
                                {{ $sync_document_dates ? 'Enabled' : 'Disabled' }}
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        @endif

        <!-- TAB 3: Subscribers Management -->
        @if ($activeTab === 'subscribers')
            <div class="space-y-6">
                <!-- Master Alert Switch Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                <h3 class="text-lg font-bold text-slate-800">Global Subscriber Broadcast Alerts</h3>
                            </div>
                            <p class="text-sm text-slate-500 mt-1">
                                Master toggle to enable or stop all automated email notifications sent to subscribers when new articles or official documents are published.
                            </p>
                        </div>

                        <div class="flex items-center">
                            <label for="send_subscriber_alerts" class="inline-flex items-center cursor-pointer">
                                <input id="send_subscriber_alerts" type="checkbox" wire:model.live="send_subscriber_alerts" class="sr-only peer">
                                <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-bold text-slate-800">
                                    {{ $send_subscriber_alerts ? 'Active (Sending)' : 'Paused (Stopped)' }}
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Subscribers List Card -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100">
                    <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800">Newsletter Subscribers List</h3>
                            <p class="text-sm text-slate-500 mt-1">Subscribed email addresses captured via the website footer newsletter form.</p>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">
                            {{ $subscribers->count() }} Total Subscribers
                        </span>
                    </div>
                    
                    <div class="p-0 overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">#</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Subscriber Email</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Subscribed Date</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse($subscribers as $index => $sub)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                            <span class="text-sm font-bold text-slate-900">{{ $sub->email }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button type="button" wire:click="toggleSubscriberStatus({{ $sub->id }})" class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full {{ $sub->is_active ? 'bg-emerald-100 text-emerald-800 hover:bg-emerald-200' : 'bg-amber-100 text-amber-800 hover:bg-amber-200' }} transition-colors cursor-pointer" title="Click to toggle status">
                                            {{ $sub->is_active ? 'Active' : 'Paused' }}
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                                        {{ $sub->created_at ? $sub->created_at->format('M d, Y \a\t h:i A') : 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button wire:click="deleteSubscriber({{ $sub->id }})" wire:confirm="Are you sure you want to remove this subscriber email?" class="text-red-600 hover:text-red-900 transition-colors font-semibold">
                                            Remove
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center text-slate-500 text-sm">
                                        No newsletter subscribers captured yet.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

        <!-- TAB 4: User Management -->
        @if ($activeTab === 'users')
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
        @endif

    </div>
</div>
