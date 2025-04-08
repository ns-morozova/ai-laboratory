<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AI Laboratory') }}{{ isset($title) ? ' - ' . $title : '' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- High-end luxury font combination: Cormorant Garamond (elegant serif), Playfair Display (serif) + Montserrat (sans) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Meta description -->
    <meta name="description"
        content="{{ $description ?? 'Custom software development and digital solutions for forward-thinking companies.' }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        :root {
            --font-display: 'Playfair Display', serif;
            --font-sans: 'Montserrat', sans-serif;
            --font-elegant: 'Cormorant Garamond', serif;
            --tracking-tight: -0.02em;
            --tracking-normal: 0;
            --tracking-wide: 0.025em;
        }

        /* Font sizing */
        html {
            font-size: 16px;
            line-height: 1.5;
        }

        @media (min-width: 768px) {
            html {
                font-size: 17px;
            }
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-display {
            font-family: var(--font-display);
            letter-spacing: var(--tracking-tight);
            font-weight: 500;
            line-height: 1.25;
        }

        .font-elegant,
        .font-cormorant {
            font-family: var(--font-elegant);
            letter-spacing: var(--tracking-tight);
        }

        .font-sans,
        body {
            font-family: var(--font-sans);
            letter-spacing: var(--tracking-normal);
            font-size: 1.075rem;
            line-height: 1.6;
        }

        /* Background animation */
        @keyframes softPulse {

            0%,
            100% {
                opacity: 0.7;
                filter: blur(10px);
            }

            50% {
                opacity: 1;
                filter: blur(15px);
            }
        }

        .pulse-dot {
            animation: softPulse 8s infinite ease-in-out;
        }

        .pulse-dot:nth-child(2n) {
            animation-delay: 2s;
        }

        .pulse-dot:nth-child(3n) {
            animation-delay: 4s;
        }
    </style>

    @stack('styles')
</head>

<body class="min-h-screen antialiased flex flex-col">
    
    <x-header />

    <main class="relative flex-grow px-4 md:px-8">
        {{ $slot }}
    </main>

    <x-footer />

    @stack('scripts')
</body>

</html>