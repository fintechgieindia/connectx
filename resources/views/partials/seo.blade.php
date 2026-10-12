<!--
    ============================================================
    SEO PARTIAL - resources/views/partials/seo.blade.php
    ============================================================
    Usage: include at the top of every page layout.
    Each page can pass a $seo[] array via php before extends.
    ============================================================
-->

@php
    // ── Site-wide defaults ──────────────────────────────────────
    $siteName    = 'Young Chanakya X';
    $prodBase    = 'https://connectx.youngchanakya.com';
    $defaultImg  = $prodBase . '/images/assets/ogg.png';

    // Merge page-specific overrides with defaults
    $seo = $seo ?? [];

    $title       = $seo['title']       ?? 'Young Chanakya X — Global Creator Ecosystem by Young Chanakya';
    $description = $seo['description'] ?? 'Young Chanakya X is a premium global creator ecosystem by Young Chanakya connecting influencers, podcasters, speakers, founders, and brands through collaborations, events, and exclusive experiences.';
    $keywords    = $seo['keywords']    ?? 'Young Chanakya X, Young Chanakya, creator ecosystem, influencer network, podcast, brand partnerships, creator lounges, digital creators, India';
    $ogType      = $seo['type']        ?? 'website';
    $robots      = $seo['robots']      ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
    $author      = $seo['author']      ?? 'Young Chanakya X';

    // ── Canonical URL: strictly production domain ────────────────
    if (!empty($seo['canonical'])) {
        $canonical = $seo['canonical'];
        // Ensure production domain is used even if an override forgot it
        if (str_starts_with($canonical, 'http://') || str_starts_with($canonical, 'https://')) {
            $parsedC = parse_url($canonical);
            if (isset($parsedC['host']) && in_array($parsedC['host'], ['localhost', '127.0.0.1'])) {
                $canonical = $prodBase . ($parsedC['path'] ?? '');
            }
        } elseif (str_starts_with($canonical, '/')) {
            $canonical = $prodBase . $canonical;
        }
    } else {
        $reqPath   = request()->getPathInfo();
        $cleanPath = ($reqPath === '/' || empty($reqPath)) ? '' : '/' . ltrim($reqPath, '/');
        $canonical = $prodBase . $cleanPath;
    }

    // ── Open Graph / Twitter Image: absolute production URL ─────
    $rawImg = $seo['image'] ?? $defaultImg;
    if (empty($rawImg)) {
        $ogImage = $defaultImg;
    } elseif (str_starts_with($rawImg, 'http://') || str_starts_with($rawImg, 'https://')) {
        $parsedI = parse_url($rawImg);
        if (isset($parsedI['host']) && in_array($parsedI['host'], ['localhost', '127.0.0.1'])) {
            $ogImage = $prodBase . ($parsedI['path'] ?? '');
        } else {
            $ogImage = $rawImg;
        }
    } else {
        $ogImage = $prodBase . '/' . ltrim($rawImg, '/');
    }
@endphp

{{-- ── Core Meta ──────────────────────────────────────────────── --}}
<title>{{ $title }}</title>
<meta name="description"    content="{{ $description }}">
@if(!empty($keywords))
<meta name="keywords"       content="{{ $keywords }}">
@endif
<meta name="author"         content="{{ $author }}">
<meta name="robots"         content="{{ $robots }}">
<meta name="language"       content="English">

{{-- ── Canonical URL ─────────────────────────────────────────── --}}
<link rel="canonical" href="{{ $canonical }}">

{{-- ── Open Graph (Facebook / LinkedIn / WhatsApp) ──────────── --}}
<meta property="og:site_name"   content="{{ $siteName }}">
<meta property="og:type"        content="{{ $ogType }}">
<meta property="og:url"         content="{{ $canonical }}">
<meta property="og:title"       content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image"       content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt"   content="{{ $title }}">
<meta property="og:locale"      content="en_IN">

{{-- ── Twitter Card ─────────────────────────────────────────── --}}
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:site"        content="@@YoungChanakyaX">
<meta name="twitter:creator"     content="@@YoungChanakya">
<meta name="twitter:title"       content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image"       content="{{ $ogImage }}">
<meta name="twitter:image:alt"   content="{{ $title }}">

{{-- ── Favicon & App Icons ───────────────────────────────────── --}}
<link rel="icon"             type="image/png" sizes="32x32"  href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="icon"             type="image/png" sizes="16x16"  href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="shortcut icon"    type="image/x-icon"             href="{{ asset('images/fav-icon/icon.png') }}">
<link rel="apple-touch-icon" sizes="180x180"                 href="{{ asset('images/fav-icon/icon.png') }}">
<meta name="theme-color"                    content="#1A4137">
<meta name="msapplication-TileColor"        content="#1A4137">
<meta name="msapplication-navbutton-color"  content="#1A4137">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-capable"   content="yes">
<meta name="apple-mobile-web-app-title"     content="{{ $siteName }}">

{{-- ── Mobile / Viewport ────────────────────────────────────── --}}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"              content="width=device-width, initial-scale=1.0">

