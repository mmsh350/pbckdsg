<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Welcome Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">Welcome back, {{ auth()->user()->name }}!</h1>
            <p class="mt-1 text-sm text-slate-500">Kaduna State Planning & Budget Commission - Executive Admin Panel</p>
        </div>

        <!-- Metrics Grid (5 Cards) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4 md:gap-5 mb-8">
            <!-- News Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 flex flex-col p-5">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-900">{{ number_format($stats['news']) }}</span>
                </div>
                <div class="mt-3">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">News Articles</p>
                    <a href="{{ route('admin.news.index') }}" class="mt-1 text-xs font-bold text-blue-600 hover:text-blue-700 inline-flex items-center gap-1" wire:navigate>Manage news &rarr;</a>
                </div>
            </div>

            <!-- Documents Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 flex flex-col p-5">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-emerald-50 text-emerald-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-900">{{ number_format($stats['documents']) }}</span>
                </div>
                <div class="mt-3">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Public Documents</p>
                    <a href="{{ route('admin.documents.index') }}" class="mt-1 text-xs font-bold text-emerald-600 hover:text-emerald-700 inline-flex items-center gap-1" wire:navigate>Manage files &rarr;</a>
                </div>
            </div>

            <!-- Total Downloads Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 flex flex-col p-5">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-purple-50 text-purple-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-900">{{ number_format($stats['downloads']) }}</span>
                </div>
                <div class="mt-3">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Downloads</p>
                    <span class="mt-1 text-xs font-medium text-slate-400">Citizen file downloads</span>
                </div>
            </div>

            <!-- Subscribers Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 flex flex-col p-5">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-indigo-50 text-indigo-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-900">{{ number_format($stats['subscribers']) }}</span>
                </div>
                <div class="mt-3">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Subscribers</p>
                    <a href="{{ route('admin.settings.index') }}" class="mt-1 text-xs font-bold text-indigo-600 hover:text-indigo-700 inline-flex items-center gap-1" wire:navigate>View subscribers &rarr;</a>
                </div>
            </div>

            <!-- Contact Messages Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-slate-100 flex flex-col p-5">
                <div class="flex items-center justify-between">
                    <div class="p-2.5 bg-amber-50 text-amber-600 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-2xl font-black text-slate-900">{{ number_format($stats['contacts']) }}</span>
                </div>
                <div class="mt-3">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Contact Messages</p>
                    <a href="{{ route('admin.settings.index') }}" class="mt-1 text-xs font-bold text-amber-600 hover:text-amber-700 inline-flex items-center gap-1" wire:navigate>Mail settings &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Middle Section: Publishing Chart & Recent Messages -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Chart Area (2 cols) -->
            <div class="lg:col-span-2 bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-100 flex flex-col">
                <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50 flex items-center justify-between">
                    <h3 class="text-base font-bold text-slate-800">Content Publishing Trends (Last 6 Months)</h3>
                    <span class="text-xs text-slate-500">News Articles Count</span>
                </div>
                <div class="p-6 flex-1 flex items-center justify-center">
                    <canvas id="newsChart" style="max-height: 280px; width: 100%;"></canvas>
                </div>
            </div>

            <!-- Recent Contact Messages Feed (1 col) -->
            <div class="bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-100 flex flex-col">
                <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50 flex items-center justify-between">
                    <h3 class="text-base font-bold text-slate-800">Recent Messages</h3>
                    <span class="text-xs text-slate-500">Contact Submissions</span>
                </div>
                <div class="divide-y divide-slate-100 flex-1 overflow-y-auto max-h-[320px]">
                    @forelse($recentContacts as $contact)
                        <div class="p-4 hover:bg-slate-50 transition-colors">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs font-bold text-slate-800 truncate">{{ $contact->name }}</span>
                                <span class="text-[10px] font-medium text-slate-400">{{ $contact->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-xs font-semibold text-blue-600 truncate mb-1">{{ $contact->subject }}</p>
                            <p class="text-xs text-slate-500 line-clamp-2">{{ Str::limit($contact->message, 80) }}</p>
                        </div>
                    @empty
                        <div class="p-8 text-center text-slate-400">
                            <svg class="w-8 h-8 mx-auto mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            <p class="text-xs font-medium">No contact messages received yet.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Bottom Section: Quick Actions -->
        <div class="bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-100 p-6">
            <h3 class="text-base font-bold text-slate-800 border-b border-slate-100 pb-3 mb-4">Quick Management Actions</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <a href="{{ route('admin.news.create') }}" wire:navigate class="flex items-center p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:border-blue-300 hover:bg-blue-50 transition-all group">
                        <div class="p-2.5 bg-blue-100 text-blue-600 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                        <div class="ml-3.5">
                            <p class="text-sm font-bold text-slate-800 group-hover:text-blue-700">Publish News Update</p>
                            <p class="text-xs text-slate-500">Create new press release</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.documents.create') }}" wire:navigate class="flex items-center p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:border-emerald-300 hover:bg-emerald-50 transition-all group">
                        <div class="p-2.5 bg-emerald-100 text-emerald-600 rounded-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        </div>
                        <div class="ml-3.5">
                            <p class="text-sm font-bold text-slate-800 group-hover:text-emerald-700">Upload Public Document</p>
                            <p class="text-xs text-slate-500">Add budget or report PDF</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.settings.index') }}" wire:navigate class="flex items-center p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:border-purple-300 hover:bg-purple-50 transition-all group">
                        <div class="p-2.5 bg-purple-100 text-purple-600 rounded-lg group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div class="ml-3.5">
                            <p class="text-sm font-bold text-slate-800 group-hover:text-purple-700">Executive Leadership</p>
                            <p class="text-xs text-slate-500">Update photos & bios</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.settings.index') }}" wire:navigate class="flex items-center p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:border-amber-300 hover:bg-amber-50 transition-all group">
                        <div class="p-2.5 bg-amber-100 text-amber-600 rounded-lg group-hover:bg-amber-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="ml-3.5">
                            <p class="text-sm font-bold text-slate-800 group-hover:text-amber-700">System Settings</p>
                            <p class="text-xs text-slate-500">Configure portal & mail links</p>
                        </div>
                    </a>
            </div>
        </div>

    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('livewire:navigated', function () {
            const ctx = document.getElementById('newsChart');
            if(ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: {!! json_encode($chartData['labels']) !!},
                        datasets: [{
                            label: 'News Articles Published',
                            data: {!! json_encode($chartData['data']) !!},
                            borderColor: '#0ea5e9',
                            backgroundColor: 'rgba(14, 165, 233, 0.1)',
                            borderWidth: 2,
                            fill: true,
                            tension: 0.3
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { display: false }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: { stepSize: 1 }
                            }
                        }
                    }
                });
            }
        });
    </script>
    @endpush
</div>
