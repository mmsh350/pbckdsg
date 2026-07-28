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
    
    <style>
        /* Preloader Styles */
        #preloader {
            position: fixed;
            inset: 0;
            background: #021235;
            z-index: 99999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 1;
            visibility: visible;
            transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #preloader.preloader-hide {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .preloader-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            text-align: center;
        }

        .preloader-logo-wrapper {
            position: relative;
            width: 140px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            padding: 1.25rem;
            box-shadow: 0 0 35px rgba(255, 90, 31, 0.25), 0 0 70px rgba(4, 31, 86, 0.4);
            animation: pulseGlow 2s infinite ease-in-out;
        }

        .preloader-logo-wrapper img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .preloader-spinner {
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #FF5A1F;
            border-right-color: #0B3485;
            animation: spinRing 1.2s linear infinite;
        }

        .preloader-title {
            color: #FFFFFF;
            font-size: 0.8125rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin: 0;
            opacity: 0.9;
        }

        .preloader-bar-bg {
            width: 180px;
            height: 4px;
            background: rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .preloader-bar-fill {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #0B3485 0%, #FF5A1F 50%, #10B981 100%);
            border-radius: 10px;
            animation: loadProgress 1.5s infinite cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes spinRing {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes pulseGlow {
            0%, 100% { transform: scale(1); box-shadow: 0 0 25px rgba(255, 90, 31, 0.2); }
            50% { transform: scale(1.03); box-shadow: 0 0 45px rgba(255, 90, 31, 0.4); }
        }

        @keyframes loadProgress {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Remove all shadows from all buttons globally */
        button,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        .btn,
        .btn-orange-lg,
        .btn-blue,
        .btn-green,
        .btn-primary,
        .btn-secondary,
        .btn-outline,
        .nd-cta-btn,
        .nd-share-btn,
        .read-more-btn,
        .nav-btn,
        .page-link,
        .doc-download-btn,
        .filter-btn,
        .hero-grid-btn,
        [class*="btn"],
        [class*="button"] {
            box-shadow: none !important;
        }

        button:hover,
        button:focus,
        button:active,
        input[type="button"]:hover,
        input[type="submit"]:hover,
        .btn:hover,
        .btn:focus,
        .btn:active,
        [class*="btn"]:hover,
        [class*="btn"]:focus,
        [class*="btn"]:active,
        [class*="button"]:hover,
        [class*="button"]:focus,
        [class*="button"]:active {
            box-shadow: none !important;
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Page Preloader -->
    <div id="preloader" aria-label="Loading page">
        <div class="preloader-content">
            <div class="preloader-logo-wrapper">
                <div class="preloader-spinner"></div>
                <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Kaduna State Planning & Budget Commission Logo">
            </div>
            <div>
                <p class="preloader-title">Kaduna State Planning & Budget Commission</p>
            </div>
            <div class="preloader-bar-bg">
                <div class="preloader-bar-fill"></div>
            </div>
        </div>
    </div>

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

    <script>
        // Page Preloader Script
        (function() {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                function hidePreloader() {
                    preloader.classList.add('preloader-hide');
                }
                
                if (document.readyState === 'complete') {
                    setTimeout(hidePreloader, 400);
                } else {
                    window.addEventListener('load', () => {
                        setTimeout(hidePreloader, 400);
                    });
                    // Fallback to ensure page is accessible even if assets delay
                    setTimeout(hidePreloader, 2500);
                }
            }
        })();
    </script>
    @stack('scripts')
</body>
</html>
