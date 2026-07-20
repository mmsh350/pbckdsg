<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-192x192.png') }}" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-180x180.png') }}" />
        <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/cropped-KDSG-pbc_favicon-270x270.png') }}" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-slate-50">
        {{ $slot }}
    </body>
</html>
