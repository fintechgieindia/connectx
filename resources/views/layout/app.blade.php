<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- ============================================================
         SEO PARTIAL — Dynamic title, description, OG, Twitter Card,
         canonical URL, favicon, robots. Overridden per-page via $seo[].
         ============================================================ --}}
    @include('partials.seo')

    {{-- ── Page-level structured data (JSON-LD) injected here ── --}}
    @stack('seo')

    {{-- ── Google Analytics GA4 (G-0JS1J2H2MQ) ─────────────── --}}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA_MEASUREMENT_ID', 'G-0JS1J2H2MQ') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GA_MEASUREMENT_ID', 'G-0JS1J2H2MQ') }}', {
            'anonymize_ip': true
        });
    </script>

    {{-- ── Google Fonts ──────────────────────────────────────── --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- ── Icon Libraries ────────────────────────────────────── --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- ── Core CSS ───────────────────────────────────────────── --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-header.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- Global typography loaded last to override page-specific CSS --}}
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">

    {{-- ── Page-level styles pushed by child views ───────────── --}}
    @stack('styles')

    {{-- ── Global overflow & layout fixes ───────────────────── --}}
    <style>
        html, body {
            overflow-x: clip !important;
            overflow-y: visible !important;
            max-width: 100%;
        }
        body > * {
            max-width: 100%;
        }
        /* Bootstrap .row negative margins can cause horizontal scroll — fix globally */
        .row {
            margin-right: 0;
            margin-left: 0;
        }
        /* Preserve Bootstrap grid gutters inside containers */
        .container > .row,
        .container-fluid > .row,
        .container-xl > .row,
        .container-xxl > .row {
            margin-right: calc(var(--bs-gutter-x, 1.5rem) * -.5);
            margin-left: calc(var(--bs-gutter-x, 1.5rem) * -.5);
        }
        /* ── Nav page-specific hamburger line color ─────────── */
        /* Pages with light/cream backgrounds override the white lines */
        #hdr:not(.scrolled) .ycx-hamburger span {
            background: #0c3a30;
        }
    </style>
</head>

<body>

    {{-- ── Navbar ─────────────────────────────────────────────── --}}
    @include('layout.navbar')

    {{-- ── Page Content ──────────────────────────────────────── --}}
    <main class="main" id="main-content" role="main">
        @yield('content')
    </main>

    {{-- ── Footer ─────────────────────────────────────────────── --}}
    @include('layout.footer')

    {{-- ── Vendor JS ──────────────────────────────────────────── --}}
    <script src="{{ asset('vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- WOW.js scroll animations -->
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <!-- Fancybox lightbox -->
    <script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <!-- Lazy load images -->
    <script src="{{ asset('vendor/jquery.lazy.min.js') }}"></script>
    <!-- Counter animation -->
    <script src="{{ asset('vendor/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>
    <!-- Form validation -->
    <script src="{{ asset('vendor/validator.js') }}"></script>

    {{-- ── Theme & Global Scripts ──────────────────────────── --}}
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/scroll-behavior.js') }}"></script>
    <script src="{{ asset('js/global-scripts.js') }}?v={{ time() }}"></script>

    {{-- ── Page-level scripts pushed by child views ─────────── --}}
    @stack('scripts')

</body>

</html>