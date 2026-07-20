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
            input[type="text"], input[type="email"], input[type="password"], textarea, select {
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
        <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden">
            <!-- Sidebar & Topbar (Navigation Component) -->
            <livewire:layout.navigation />

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col overflow-hidden">
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
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-50">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @stack('scripts')
    </body>
</html>
