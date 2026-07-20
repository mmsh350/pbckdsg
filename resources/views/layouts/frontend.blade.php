<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Planning & Budget Commission')</title>
    <meta name="description" content="A world class and dynamic Planning and Budget Agency">
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-270x270.png') }}" />
    @stack('styles')
</head>
<body>

    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script src="{{ asset('assets/js/utilities.js') }}"></script>
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="scroll-to-top" aria-label="Scroll to top">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6"/>
        </svg>
    </button>
    <script src="{{ asset('assets/js/navigation.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/counters.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
