<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-192x192.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-180x180.png') }}" />
        <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-270x270.png') }}" />

        <!-- Tailwind CDN with Custom Config -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        },
                        colors: {
                            brand: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                900: '#0c4a6e',
                            }
                        }
                    }
                }
            }
        </script>

        <!-- Elegant Global CSS Overrides -->
        <style>
            body {
                background-color: #f8fafc;
            }
            
            /* Premium Cards */
            .bg-white.shadow-sm.sm\:rounded-lg {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
                border-radius: 0.75rem;
                overflow: hidden;
            }

            /* Sleek Tables */
            table.divide-gray-200 {
                border-collapse: separate;
                border-spacing: 0;
                width: 100%;
            }
            th {
                background-color: #f8fafc !important;
                color: #475569 !important;
                font-weight: 600 !important;
                text-transform: uppercase;
                font-size: 0.75rem !important;
                letter-spacing: 0.05em;
                border-bottom: 1px solid #e2e8f0;
                border-top: 1px solid #e2e8f0;
                padding: 0.75rem 1.5rem !important;
            }
            td {
                padding: 1rem 1.5rem !important;
                color: #334155;
                font-size: 0.875rem;
                border-bottom: 1px solid #f1f5f9;
                vertical-align: middle;
            }
            tr:hover td {
                background-color: #f8fafc;
            }

            /* Beautiful Buttons */
            .bg-blue-600 {
                background-color: #0ea5e9 !important;
                border: 1px solid #0284c7 !important;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05) !important;
                border-radius: 0.5rem !important;
                transition: all 0.2s ease !important;
                color: white !important;
            }
            .bg-blue-600:hover {
                background-color: #0284c7 !important;
                box-shadow: 0 4px 6px -1px rgba(14, 165, 233, 0.2) !important;
            }

            /* Inputs */
            input[type="text"], input[type="email"], input[type="password"], input[type="date"], textarea, select {
                border-radius: 0.5rem !important;
                border: 1px solid #cbd5e1 !important;
                padding: 0.5rem 0.75rem;
                font-size: 0.875rem !important;
                box-shadow: 0 1px 2px rgba(0,0,0,0.02) inset !important;
                transition: all 0.2s ease !important;
            }
            input:focus, textarea:focus {
                border-color: #0ea5e9 !important;
                box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.2) !important;
                outline: none !important;
            }

            /* Headers */
            h2.font-semibold {
                color: #0f172a !important;
                font-size: 1.25rem !important;
                font-weight: 700 !important;
                letter-spacing: -0.01em;
            }
            
            /* Sidebar Custom Scrollbar */
            .sidebar-scroll::-webkit-scrollbar {
                width: 4px;
            }
            .sidebar-scroll::-webkit-scrollbar-track {
                background: transparent;
            }
            .sidebar-scroll::-webkit-scrollbar-thumb {
                background: #334155;
                border-radius: 4px;
            }
            .sidebar-scroll:hover::-webkit-scrollbar-thumb {
                background: #475569;
            }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-800 bg-slate-50">
        <!-- Global Action & Navigation Progress Bar & Floating Indicator -->
        <div x-data="{ isNavigating: false, isLoadingAction: false }"
             x-on:livewire:navigating.window="isNavigating = true"
             x-on:livewire:navigated.window="isNavigating = false"
             x-init="
                document.addEventListener('livewire:initialized', () => {
                    Livewire.hook('commit', ({ respond }) => {
                        isLoadingAction = true;
                        respond(() => {
                            isLoadingAction = false;
                        });
                    });
                });
                document.addEventListener('submit', () => {
                    isLoadingAction = true;
                    setTimeout(() => { isLoadingAction = false; }, 3000);
                });
             "
             class="relative z-[99999]">

            <!-- Top Gradient Progress Bar -->
            <div x-show="isNavigating || isLoadingAction"
                 x-transition:enter="transition-all ease-out duration-300"
                 x-transition:enter-start="w-0 opacity-0"
                 x-transition:enter-end="w-full opacity-100"
                 x-transition:leave="transition-all ease-in duration-300"
                 x-transition:leave-start="w-full opacity-100"
                 x-transition:leave-end="w-full opacity-0"
                 class="fixed top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-emerald-500 to-amber-500 animate-pulse pointer-events-none shadow-sm"
                 style="display: none;"></div>

            <!-- Floating Action Toast Spinner -->
            <div x-show="isLoadingAction"
                 x-transition:enter="transition ease-out duration-200 transform"
                 x-transition:enter-start="opacity-0 translate-y-2 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                 x-transition:leave="transition ease-in duration-150 transform"
                 x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                 x-transition:leave-end="opacity-0 translate-y-2 scale-95"
                 class="fixed bottom-6 right-6 flex items-center gap-3 px-4 py-3 bg-slate-900/95 backdrop-blur-md text-white rounded-xl shadow-2xl border border-slate-800 text-xs font-semibold pointer-events-none"
                 style="display: none;">
                <svg class="animate-spin h-4 w-4 text-emerald-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Processing action...</span>
            </div>
        </div>

        <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden w-full">
            <!-- Sidebar & Topbar (Navigation Component) -->
            <livewire:layout.navigation />

            <!-- Main Content Area -->
            <div class="flex-1 min-w-0 flex flex-col overflow-hidden">
                <!-- Page Heading (Topbar Extra Content) -->
                @if (isset($header))
                    <header class="bg-white border-b border-slate-200 sticky top-0 z-10 hidden lg:block">
                        <div class="py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                            <div>{{ $header }}</div>
                            <livewire:layout.topbar-menu />
                        </div>
                    </header>
                @endif

                <!-- Main Scrollable Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50 pt-16 lg:pt-0">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @stack('scripts')
    </body>
</html>
