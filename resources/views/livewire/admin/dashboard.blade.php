<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Welcome Message -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">Welcome back, {{ auth()->user()->name }}!</h1>
            <p class="mt-1 text-sm text-slate-500">Here's what's happening with your platform today.</p>
        </div>

        <!-- Metrics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- News Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 p-3 bg-blue-50 text-blue-600 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20"></path></svg>
                    </div>
                    <div class="ml-4 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-slate-500 truncate">Total News Posts</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-bold text-slate-900">{{ $stats['news'] }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-4 text-sm">
                    <a href="{{ route('admin.news.index') }}" class="font-medium text-blue-600 hover:text-blue-500" wire:navigate>View all news &rarr;</a>
                </div>
            </div>

            <!-- Documents Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 p-3 bg-emerald-50 text-emerald-600 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <div class="ml-4 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-slate-500 truncate">Total Documents</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-bold text-slate-900">{{ $stats['documents'] }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-4 text-sm">
                    <a href="{{ route('admin.documents.index') }}" class="font-medium text-blue-600 hover:text-blue-500" wire:navigate>Manage documents &rarr;</a>
                </div>
            </div>



            <!-- Sliders Metric -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 p-3 bg-amber-50 text-amber-600 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="ml-4 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-slate-500 truncate">Hero Sliders</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-bold text-slate-900">{{ $stats['sliders'] }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-4 text-sm">
                    <a href="{{ route('admin.sliders.index') }}" class="font-medium text-blue-600 hover:text-blue-500" wire:navigate>Manage sliders &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Content Overview & Quick Links -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Chart Area -->
            <div class="lg:col-span-2 bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-100 flex flex-col">
                <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50">
                    <h3 class="text-lg font-bold text-slate-800">Content Overview (Last 6 Months)</h3>
                </div>
                <div class="p-6 flex-1 flex items-center justify-center">
                    <canvas id="newsChart" style="max-height: 300px; width: 100%;"></canvas>
                </div>
            </div>

            <!-- Enhanced Quick Links -->
            <div class="bg-white shadow-sm sm:rounded-xl overflow-hidden border border-slate-100 flex flex-col">
                <div class="border-b border-slate-100 px-6 py-4 bg-slate-50/50">
                    <h3 class="text-lg font-bold text-slate-800">Quick Links</h3>
                </div>
                <div class="p-5 flex-1 flex flex-col space-y-4">
                    <a href="{{ route('admin.news.create') }}" wire:navigate class="flex items-center p-3 rounded-lg border border-slate-100 bg-white hover:border-blue-300 hover:bg-blue-50 transition-all group shadow-sm">
                        <div class="flex-shrink-0 p-2 bg-blue-100 text-blue-600 rounded-md group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-blue-700">Write News Article</p>
                            <p class="text-xs text-slate-500">Publish a new update</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.documents.create') }}" wire:navigate class="flex items-center p-3 rounded-lg border border-slate-100 bg-white hover:border-emerald-300 hover:bg-emerald-50 transition-all group shadow-sm">
                        <div class="flex-shrink-0 p-2 bg-emerald-100 text-emerald-600 rounded-md group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-emerald-700">Upload Document</p>
                            <p class="text-xs text-slate-500">Add a new resource file</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.sliders.create') }}" wire:navigate class="flex items-center p-3 rounded-lg border border-slate-100 bg-white hover:border-amber-300 hover:bg-amber-50 transition-all group shadow-sm">
                        <div class="flex-shrink-0 p-2 bg-amber-100 text-amber-600 rounded-md group-hover:bg-amber-600 group-hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-amber-700">Add Hero Slider</p>
                            <p class="text-xs text-slate-500">Update homepage banner</p>
                        </div>
                    </a>
                </div>
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
