@php
/**
 * Speaker Talk Page SEO Data
 */
$seo = [
    'title'       => 'Share Your Story | Young Chanakya X',
    'description' => 'Share your personal or professional journey with Young Chanakya X and inspire others through authentic stories, valuable lessons, and real-life experiences.',
    'keywords'    => 'share your story, inspiring stories, success stories, personal journey, entrepreneur stories, career stories, community stories, life lessons, Young Chanakya X, storytelling platform',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "@id": "https://connectx.youngchanakya.com/share-your-story#webpage",
    "url": "https://connectx.youngchanakya.com/share-your-story",
    "name": "Share Your Story | Young Chanakya X",
    "description": "Share your personal or professional journey with Young Chanakya X and inspire others through authentic stories, valuable lessons, and real-life experiences.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "about": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #2c323f !important;
        border: 1px solid rgba(255, 210, 177, 0.2) !important;
        color: #ffffff !important;
    }
    .iti__search-input {
        background-color: #1e222b !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    .iti__country {
        padding: 10px 12px !important;
    }
    .iti__country:hover, .iti__country.iti__highlight {
        background-color: rgba(255, 210, 177, 0.1) !important;
    }
    .iti__selected-dial-code {
        color: #ffffff !important;
        margin-left: 6px;
    }
    .iti__arrow {
        border-top-color: #ffffff !important;
    }
    .iti__arrow--up {
        border-bottom-color: #ffffff !important;
    }
</style>
@endpush

@section('content')

<style>
    /* CONNECTORS AUTHORITY DESIGN SYSTEM */
    .authority-hero-section {
        min-height: 85vh;
        background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.75) 0%, #090d16 100%),
            url('{{ asset("images/media/share-your-story/hero-banner.webp") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .trust-headline {
        font-size: clamp(36px, 5vw, 60px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
        background: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Trust Metric Counters Block */
    .trust-badge-pill {
        background: rgba(255, 210, 177, 0.1);
        border: 1px solid rgba(255, 210, 177, 0.2);
        color: #ffd2b1;
        padding: 6px 16px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .trust-metric-box {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 24px;
        transition: transform 0.3s ease;
    }

    .trust-metric-box:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 210, 177, 0.3);
    }

    /* ---- Authority Hero Section ---- */
    @media (max-width: 991px) {
        .authority-hero-section {
            min-height: 70vh;
            background-attachment: scroll;
        }
        .authority-hero-section .container {
            padding-top: 120px;
            padding-bottom: 60px;
        }
        .trust-headline {
            font-size: clamp(30px, 5vw, 48px);
            letter-spacing: -1.5px;
        }
        .authority-hero-section .col-xl-5 {
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
        .authority-hero-section {
            min-height: 60vh;
        }
        .authority-hero-section .container {
            padding-top: 100px;
            padding-bottom: 50px;
        }
        .trust-headline {
            font-size: clamp(26px, 7vw, 36px);
            letter-spacing: -1px;
            line-height: 1.15;
        }
        .authority-hero-section p.fs-5 {
            font-size: 15px !important;
        }
        .trust-metric-box {
            padding: 18px;
        }
        .trust-metric-box h4 {
            font-size: 1.8rem;
        }
        .trust-badge-pill {
            font-size: 0.7rem;
            padding: 5px 12px;
        }
    }

    @media (max-width: 480px) {
        .authority-hero-section {
            min-height: auto;
        }
        .authority-hero-section .container {
            padding-top: 90px;
            padding-bottom: 40px;
        }
        .trust-headline {
            font-size: 26px;
            letter-spacing: -0.5px;
        }
        .authority-hero-section .d-flex.flex-wrap {
            flex-direction: column;
            gap: 8px;
        }
    }

    /* Application Form Styles */
    .cx-input {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        padding: 14px 18px;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .cx-input:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #ffd2b1;
        box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15);
        color: #ffffff;
    }
    .cx-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }
    .form-select.cx-input {
        background-color: rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.7);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 16px 12px;
        appearance: none;
        -webkit-appearance: none;
    }
    .form-select.cx-input option {
        background: #090d16;
        color: #ffffff;
    }
    .application-submit-btn {
        background: linear-gradient(135deg, #ffffff 0%, #ffd2b1 100%);
        color: #0c3a30;
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .application-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 210, 177, 0.2);
        color: #0c3a30;
    }
    .cx-label {
        color: #ffd2b1;
        font-size: 0.8rem;
        letter-spacing: 1.5px;
        font-weight: 700;
        margin-bottom: 8px;
        display: block;
    }

    /* Additional Speaker Talk Sections Styles */
    html {
        scroll-behavior: smooth;
    }
    .st-section {
        padding: 90px 0;
    }
    .st-bg-white {
        background-color: #ffffff;
    }
    .st-bg-cream {
        background-color: #fffaf4;
    }
    .st-bg-soft-cream {
        background-color: #fffcf9;
    }
    .st-bg-grey-green {
        background-color: #f8f6f2;
    }

    /* Spacing between Why Stories Matter and Your Story, Your Impact */
    .why-stories-matter-sec {
        padding-bottom: 30px !important;
    }
    .your-story-impact-sec {
        padding-top: 40px !important;
    }
    @media (max-width: 991px) {
        .why-stories-matter-sec {
            padding-bottom: 20px !important;
        }
        .your-story-impact-sec {
            padding-top: 25px !important;
        }
    }
    @media (max-width: 767px) {
        .why-stories-matter-sec {
            padding-bottom: 15px !important;
        }
        .your-story-impact-sec {
            padding-top: 20px !important;
        }
    }

    .st-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 10px;
        font-weight: 700;
        color: #0c3a30;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
    .st-eyebrow::before {
        content: '';
        width: 28px;
        height: 2px;
        background: #ffd2b1;
        border-radius: 2px;
    }
    .st-heading {
        font-size: clamp(28px, 4vw, 44px);
        line-height: 1.2;
        letter-spacing: -1px;
        margin-bottom: 24px;
    }
    .st-subheading {
        color: #4d6459;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 720px;
    }
    
    /* Cards Style */
    .st-card {
        background: #fffaf4;
        border: 1px solid rgba(12, 58, 48, 0.08);
        border-radius: 20px;
        padding: 36px 30px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .st-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(12, 58, 48, 0.06);
        border-color: rgba(12, 58, 48, 0.2);
    }
    .st-card-icon {
        width: 44px;
        height: 44px;
        background-color: var(--orange);
        color: #0c3a30;
        font-size: 1.2rem;
        border-radius: 15px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        transition: all 0.3s ease;
    }
    .st-card-title {
        color: #0c3a30;
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 15px;
    }
    .st-card-text {
        color: #4d6459;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Timeline styling for How It Works */
    .st-timeline-item {
        position: relative;
        padding: 30px;
        background: #ffffff;
        border: 1px solid rgba(12, 58, 48, 0.06);
        border-radius: 20px;
        height: 100%;
        transition: all 0.3s ease;
    }
    .st-timeline-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 30px rgba(12, 58, 48, 0.05);
        border-color: rgba(255, 210, 177, 0.5);
    }
    .st-timeline-number {
        font-size: 2.5rem;
        font-weight: 900;
        color: rgba(255, 210, 177, 0.6);
        line-height: 1;
        margin-bottom: 15px;
        font-family: 'Fraunces', serif;
    }

    /* FAQ styling matching become-a-speaker page */
    .faq-section {
        padding: 100px 0;
        background: #ffffff !important;
    }
    .faq-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
    }
    @media (max-width: 768px) {
        .faq-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
    }
    .faq-item {
        border-bottom: 1px solid rgba(12, 58, 48, 0.14);
    }
    .faq-q {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        padding: 26px 0;
        cursor: pointer;
        font-family: 'Poppins', sans-serif !important;
        font-size: 18px;
        font-weight: 400;
        color: #0c3a30;
        text-align: left;
    }
    .faq-q span {
        font-weight: 400;
    }
    .faq-q .plus {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        border: 1.5px solid #0c3a30;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: #0c3a30;
        transition: transform 0.3s ease;
    }
    .faq-item.open .plus {
        transform: rotate(45deg);
    }
    .faq-a {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease-out, padding 0.35s ease;
    }
    .faq-item.open .faq-a {
        max-height: 250px;
        padding-bottom: 24px;
    }
    .faq-a p {
        margin: 0;
        font-size: 15px;
        line-height: 1.65;
        color: #4d6459;
    }
    
    /* Tick Icons without inline styles */
    .hero-tick-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        background-color: #ffd2b1;
        color: #090d16;
        flex-shrink: 0;
        border: 1px solid rgba(255,255,255,0.15);
        margin-right: 16px;
    }
    .hero-tick-icon i {
        font-size: 0.8rem;
        -webkit-text-stroke: 1px;
    }

    .lens-tick-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        width: 32px;
        height: 32px;
        background-color: var(--orange-deep);
        color: #ffffff;
        flex-shrink: 0;
        border: 1px solid rgba(255,255,255,0.15);
    }
    .lens-tick-icon i {
        font-size: 1rem;
        -webkit-text-stroke: 1px;
    }
    
#cta-banner {
    background:
        linear-gradient(
            180deg,
            rgb(8 40 33 / 73%) 0%,
            rgba(8, 40, 33, 0.55) 55%,
            rgba(8, 40, 33, 0.94) 100%
        ),
        url("{{ asset('images/media/share-your-story/your-story-matter-banner.webp') }}") no-repeat center center !important;
    background-size: cover !important;
    position: relative;
    overflow: hidden;
}
    #cta-banner h2 {
        color: #ffffff !important;
    }
    #cta-banner p {
        color: rgba(255, 255, 255, 0.85) !important;
    }
    #cta-banner .st-eyebrow {
        color: #ffd2b1 !important;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 16px;
        display: block;
    }
    #cta-banner .btn-peach {
        background-color: #ffd2b1 !important;
        color: #0c3a30 !important;
        padding: 14px 36px !important;
        font-weight: 700 !important;
        border-radius: 50px !important;
        font-size: 0.95rem !important;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
        display: inline-block;
        border: none !important;
    }
    #cta-banner .btn-peach:hover {
        background-color: #ffbe8e !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(255, 210, 177, 0.25) !important;
    }

    /* Image Wrapper Styles */
    .st-image-wrapper {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(12, 58, 48, 0.1);
        position: relative;
    }
    .st-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.6s ease;
    }
    .st-image-wrapper:hover img {
        transform: scale(1.05);
    }

    /* Custom Grid for Why Stories Matter (Community Section Look) */
    .st-stories-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    @media (max-width: 991px) {
        .st-stories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 575px) {
        .st-stories-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Checklist Style for What Makes a Great Story */
    .st-checklist {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px 40px;
    }
    .st-check-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        padding: 18px 0;
        border-bottom: 1px solid rgba(12, 58, 48, 0.08);
    }
    .st-check-mark {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        flex-shrink: 0;
        background: #ffd2b1;
        color: #0c3a30;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2px;
        font-weight: bold;
    }
    .st-check-item p {
        font-size: 15.5px;
        color: #4d6459;
        margin-bottom: 0;
    }
    .st-check-item p b {
        font-weight: 600;
        color: #0c3a30;
    }
    @media (max-width: 767px) {
        .st-checklist {
            grid-template-columns: 1fr;
            gap: 0;
        }
    }

    /* Featured Categories (Horizontal Scroll) from ycx.html.html */
    /* Featured Categories (Horizontal Scroll) from ycx.html.html */
    /* ================================================================
       JOURNEY SHOWCASE SECTION ("Every Journey Has Something to Teach")
       ================================================================ */
    #categories.journey-showcase-section {
        position: relative;
        padding: 100px 0 110px;
        background: radial-gradient(circle at 50% 0%, rgba(200, 116, 58, 0.1) 0%, transparent 60%), #07261f !important;
        overflow: hidden;
        color: #f0f5f3;
    }

    .journey-ambient-glow {
        position: absolute;
        top: -150px;
        left: 50%;
        transform: translateX(-50%);
        width: 700px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 210, 177, 0.12) 0%, transparent 70%);
        filter: blur(80px);
        pointer-events: none;
        z-index: 0;
    }

    .journey-ambient-glow-2 {
        position: absolute;
        bottom: -200px;
        right: -100px;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(12, 58, 48, 0.6) 0%, transparent 70%);
        filter: blur(100px);
        pointer-events: none;
        z-index: 0;
    }

    /* Section Header */
    .journey-header {
        max-width: 820px;
        margin-bottom: 40px;
        position: relative;
        z-index: 2;
    }

    .journey-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: 100px;
        background: rgba(255, 210, 177, 0.1);
        border: 1px solid rgba(255, 210, 177, 0.25);
        color: #ffd2b1;
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 16px;
        backdrop-filter: blur(10px);
    }

    .journey-eyebrow .pulse-pip {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #ffd2b1;
        box-shadow: 0 0 10px #ffd2b1;
        animation: journeyPulse 2s infinite ease-in-out;
    }

    @keyframes journeyPulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.4; transform: scale(0.8); }
    }

    .journey-title {
        font-family: 'Fraunces', 'Playfair Display', Georgia, serif;
        font-size: clamp(2rem, 4vw, 3.25rem);
        font-weight: 600;
        color: #ffffff !important;
        line-height: 1.2;
        letter-spacing: -0.02em;
        margin-bottom: 16px;
    }

    .journey-title-accent {
        color: #ffd2b1;
        background: linear-gradient(135deg, #ffd2b1 0%, #ffca95 50%, #c8743a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
    }

    .journey-subtitle {
        color: rgba(240, 245, 243, 0.8) !important;
        font-size: clamp(0.95rem, 1.2vw, 1.1rem);
        max-width: 680px;
        margin: 0 auto;
        line-height: 1.65;
        font-weight: 400;
    }

    /* Navigation Bar */
    .journey-nav-bar {
        position: relative;
        z-index: 2;
    }

    .journey-arrow-btn {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        backdrop-filter: blur(10px);
        outline: none;
    }

    .journey-arrow-btn:hover:not(:disabled) {
        background: #ffd2b1;
        color: #07261f;
        border-color: #ffd2b1;
        transform: scale(1.08);
        box-shadow: 0 6px 20px rgba(255, 210, 177, 0.3);
    }

    .journey-arrow-btn:disabled {
        opacity: 0.3;
        cursor: not-allowed;
    }

    /* Carousel Track */
    .journey-track {
        display: flex;
        gap: 22px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        padding: 16px 4px 28px;
        margin: 0 -4px;
        scrollbar-width: none;
        cursor: grab;
    }

    .journey-track.is-dragging {
        cursor: grabbing;
        user-select: none;
        scroll-snap-type: none;
        scroll-behavior: auto;
    }

    .journey-track::-webkit-scrollbar {
        display: none;
    }

    /* Cinematic Journey Card */
    .journey-card {
        flex: 0 0 320px;
        height: 420px;
        border-radius: 22px;
        position: relative;
        overflow: hidden;
        scroll-snap-align: start;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: #0c3a30;
        transition: transform 0.45s cubic-bezier(0.16, 1, 0.3, 1),
                    box-shadow 0.45s ease,
                    border-color 0.45s ease,
                    opacity 0.4s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 24px;
        box-shadow: 0 12px 32px -10px rgba(0, 0, 0, 0.5);
        text-decoration: none;
        color: #ffffff !important;
    }

    .journey-card.is-hidden {
        display: none !important;
    }

    .journey-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 210, 177, 0.45);
        box-shadow: 0 24px 50px -12px rgba(0, 0, 0, 0.7),
                    0 0 32px rgba(255, 210, 177, 0.16);
    }

    .journey-card-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1),
                    filter 0.5s ease;
        z-index: 0;
        filter: brightness(0.85);
    }

    .journey-card:hover .journey-card-bg {
        transform: scale(1.08);
        filter: brightness(0.96);
    }

    .journey-card-scrim {
        position: absolute;
        inset: 0;
        z-index: 1;
        background: linear-gradient(180deg, 
            rgba(7, 38, 31, 0.35) 0%, 
            rgba(7, 38, 31, 0.55) 45%, 
            rgba(6, 28, 23, 0.94) 80%, 
            rgba(6, 28, 23, 0.99) 100%);
        pointer-events: none;
        transition: opacity 0.4s ease;
    }

    .journey-card:hover .journey-card-scrim {
        background: linear-gradient(180deg, 
            rgba(7, 38, 31, 0.2) 0%, 
            rgba(7, 38, 31, 0.5) 40%, 
            rgba(6, 28, 23, 0.96) 80%, 
            rgba(6, 28, 23, 0.99) 100%);
    }

    /* Card Top Bar */
    .journey-card-top {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
    }

    .journey-card-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 6px 14px;
        border-radius: 100px;
        background: rgba(7, 38, 31, 0.78);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 210, 177, 0.35);
        color: #ffd2b1;
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
    }

    .journey-card-badge i {
        font-size: 13px;
        color: #ffd2b1;
    }

    /* Card Bottom Content */
    .journey-card-bottom {
        position: relative;
        z-index: 2;
        padding-top: 16px;
    }

    .journey-card-kicker {
        display: block;
        font-family: 'Manrope', sans-serif;
        font-size: 11px;
        font-weight: 800;
        color: #c8743a;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .journey-card-title {
        font-family: 'Fraunces', 'Playfair Display', Georgia, serif;
        font-size: 23px;
        font-weight: 700;
        color: #ffffff !important;
        line-height: 1.25;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .journey-card:hover .journey-card-title {
        color: #ffd2b1 !important;
    }

    .journey-card-desc {
        font-size: 13.5px;
        line-height: 1.55;
        color: rgba(240, 245, 243, 0.82) !important;
        margin-bottom: 0;
        font-weight: 400;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Pagination / Progress */
    .journey-pagination {
        position: relative;
        z-index: 2;
    }

    .journey-dots {
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .journey-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        padding: 0;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        outline: none;
    }

    .journey-dot:hover {
        background: rgba(255, 210, 177, 0.6);
        transform: scale(1.2);
    }

    .journey-dot.active {
        width: 24px;
        border-radius: 10px;
        background: #ffd2b1;
        box-shadow: 0 0 10px rgba(255, 210, 177, 0.5);
    }

    /* Mobile Responsive Tweaks */
    @media (max-width: 767px) {
        #categories.journey-showcase-section {
            padding: 70px 0 80px;
        }

        .journey-header {
            margin-bottom: 24px;
        }

        .journey-title {
            font-size: 26px;
        }

        .journey-track {
            padding: 10px 4px 20px;
            gap: 16px;
        }

        .journey-card {
            flex: 0 0 82vw;
            max-width: 310px;
            height: 390px;
            padding: 20px;
            border-radius: 20px;
        }

        .journey-card-title {
            font-size: 20px;
        }

        .journey-card-desc {
            font-size: 13px;
            -webkit-line-clamp: 3;
            margin-bottom: 0;
        }

        .journey-arrow-btn {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }
    }
</style>

<div class="authority-hero-section d-flex align-items-center position-relative">
    <div class="container pt-150 pb-100">
        <div class="row align-items-center g-5">
            
            <!-- Left Side Content -->
            <div class="col-lg-6">

                <div class="trust-badge-pill mb-4">
                    <i class="bi bi-mic-fill"></i> Share Your Story
                </div>

                <h1 class="trust-headline mb-4">Every Journey Has the Power to Inspire</h1>
                <p class="text-white fs-5 mb-4" style="max-width: 600px; line-height: 1.6;">
                    Every success, setback, lesson, and milestone has the potential to inspire others. Share your story with the Young Chanakya X community and help people learn through real experiences.</p>

                <ul class="style-none mt-4 text-white" style="list-style: none; padding: 0;">
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="hero-tick-icon">
                            <i class="bi bi-check-lg"></i>
                        </span>
                        Inspire through authentic experiences
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="hero-tick-icon">
                            <i class="bi bi-check-lg"></i>
                        </span>
                        Share lessons that create impact
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="hero-tick-icon">
                            <i class="bi bi-check-lg"></i>
                        </span>
                        Become part of the YCX community
                    </li>
                </ul>

            </div>

            <!-- Right Side Form Box -->
            <div class="col-lg-6">
                <div class="trust-metric-box">
                    <h4 class="text-white h5 mb-4" style="color: #ffd2b1 !important; border-bottom: 1px solid rgba(255, 210, 177, 0.15); padding-bottom: 15px;">
                        <i class="bi bi-patch-check-fill me-2"></i> Share Your Story Application
                    </h4>

                    <form id="speakerTalkForm" action="{{ route('story.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            {{-- Row 1: Full Name | Phone --}}
                            <div class="col-md-6">
                                <label class="cx-label">Full Name *</label>
                                <input type="text" class="form-control cx-input" name="full_name" placeholder="E.g. John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="cx-label">Phone Number *</label>
                                <input type="tel" class="form-control cx-input" name="phone" placeholder="E.g. 9876543210" required>
                            </div>

                            {{-- Row 2: Email --}}
                            <div class="col-12">
                                <label class="cx-label">Email ID *</label>
                                <input type="email" class="form-control cx-input" name="email" placeholder="john@company.com" required>
                            </div>

                            {{-- Row 3: Social Profile --}}
                            <div class="col-12">
                                <label class="cx-label">Social / LinkedIn Profile *</label>
                                <input type="url" class="form-control cx-input" name="social_url" placeholder="https://linkedin.com/in/..." required>
                            </div>

                            {{-- Row 4: Talk Title | Language --}}
                            <div class="col-md-7">
                                <label class="cx-label">Core Theme / Focus of Your Story *</label>
                                <input type="text" class="form-control cx-input" name="talk_title" placeholder="E.g. Overcoming Career Burnout & Building a Tech Startup" required>
                            </div>
                            <div class="col-md-5">
                                <label class="cx-label">Preferred Language *</label>
                                <input type="text" class="form-control cx-input" name="speaking_language" placeholder="E.g. English, Hindi" required>
                            </div>

                            {{-- Row 5: Summary --}}
                            <div class="col-12">
                                <label class="cx-label">Describe Your Journey, Lessons & Achievements *</label>
                                <textarea class="form-control cx-input" name="talk_summary" rows="3" placeholder="Tell us about your background, the key turning points/challenges, and the achievements you want to share..." required></textarea>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" id="storySubmitBtn" class="btn w-100 py-3 fw-bold text-uppercase application-submit-btn" style="letter-spacing: 1px; font-size: 0.85rem;">
                                    Submit Your Story <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- ABOUT STORY TALKS -->
<section class="st-section st-bg-white" id="great-story">
    <div class="container">
        <!-- Section Title & Description Center Aligned -->
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">What Makes a Great Story</div>
            <h2 class="st-heading" style="color: #0c3a30;">Stories That Create Meaningful Impact</h2>
            <p class="st-subheading mx-auto">The most memorable stories aren't about perfection—they're about honesty, learning, and growth.</p>
        </div>

        <div class="row g-5 align-items-stretch pt-4">
           
        <!-- Left Side Image -->
<div class="col-lg-6">
    <div class="st-image-wrapper" style="height: 100%; max-height: 500px; border-radius: 24px; overflow: hidden;">
        <img 
            src="{{ asset('images/media/share-your-story/What-Makes-a-Great-Story.webp') }}" 
            alt="What Makes a Great Story" 
            style="width: 100%; height: 100%; object-fit: cover;"
        >
    </div>
</div>

            <!-- Right Side 4 Cards -->
            <div class="col-lg-6">
                <div class="row g-4 h-100 align-content-between">
                    <div class="col-md-6">
                        <div class="st-card h-100">
                            <div class="st-card-icon">
                                <i class="bi bi-bookmark-heart-fill"></i>
                            </div>
                            <h3 class="st-card-title" style="font-size: 1.15rem;">Authentic Experiences</h3>
                            <p class="st-card-text" style="font-size: 0.88rem;">Share genuine moments from your personal or professional journey.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="st-card h-100">
                            <div class="st-card-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <h3 class="st-card-title" style="font-size: 1.15rem;">Valuable Lessons</h3>
                            <p class="st-card-text" style="font-size: 0.88rem;">Tell us what you learned and how it changed your perspective.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="st-card h-100">
                            <div class="st-card-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h3 class="st-card-title" style="font-size: 1.15rem;">Challenges & Growth</h3>
                            <p class="st-card-text" style="font-size: 0.88rem;">Every obstacle overcome can inspire someone else's journey.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="st-card h-100">
                            <div class="st-card-icon">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h3 class="st-card-title" style="font-size: 1.15rem;">Meaningful Takeaways</h3>
                            <p class="st-card-text" style="font-size: 0.88rem;">Share lessons and insights that others can apply in their own journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPLORE CONVERSATIONS / JOURNEY SHOWCASE -->
<section id="categories" class="journey-showcase-section">
    <div class="journey-ambient-glow" aria-hidden="true"></div>
    <div class="journey-ambient-glow-2" aria-hidden="true"></div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- Section Header -->
        <div class="journey-header text-center mx-auto">
            <div class="journey-eyebrow">
                <span class="pulse-pip"></span>
                <span>WHAT YOU CAN SHARE</span>
            </div>
            <h2 class="journey-title">
                Every Journey Has <span class="journey-title-accent">Something to Teach</span>
            </h2>
            <p class="journey-subtitle">
                Whether it's a breakthrough, a challenge, or a life-changing experience, we welcome stories that inspire learning, growth, and meaningful conversations.
            </p>
        </div>

        <!-- Carousel Showcase Wrapper -->
        <div class="journey-carousel-wrapper">
            <!-- Minimal Navigation Arrows (Right Aligned) -->
            <div class="journey-nav-bar d-flex justify-content-end align-items-center mb-3">
                <div class="journey-arrows d-flex gap-2">
                    <button type="button" class="journey-arrow-btn journey-prev-btn" id="journeyPrevBtn" aria-label="Previous story theme">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" class="journey-arrow-btn journey-next-btn" id="journeyNextBtn" aria-label="Next story theme">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- The Scrollable Track -->
            <div class="journey-track" id="journeyTrack">

                <!-- 01 Life Lessons -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/life-lessons.webp') }}" alt="Life Lessons" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-journals"></i> 01 • Life Lessons
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Personal Transformation</span>
                        <h3 class="journey-card-title">Life Lessons</h3>
                        <p class="journey-card-desc">Share personal transformations, philosophies, and guiding principles that shaped your worldview and decision making.</p>
                    </div>
                </article>

                <!-- 02 Failure & Comeback -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/comeback.webp') }}" alt="Failure &amp; Comeback" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-arrow-repeat"></i> 02 • Comeback
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Resilience &amp; Grit</span>
                        <h3 class="journey-card-title">Failure &amp; Comeback</h3>
                        <p class="journey-card-desc">Describe setbacks, turning points, and how you persevered through crisis to rebound stronger than ever.</p>
                    </div>
                </article>

                <!-- 03 Entrepreneur Journey -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/entrepreneur-journey.jpg') }}" alt="Entrepreneur Journey" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-briefcase-fill"></i> 03 • Entrepreneur
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Founders &amp; Builders</span>
                        <h3 class="journey-card-title">Entrepreneur Journey</h3>
                        <p class="journey-card-desc">Tell the candid story of how you started from scratch, bootstrapped, pivoted, and built an enduring business.</p>
                    </div>
                </article>

                <!-- 04 Startup Story -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/startup-story.webp') }}" alt="Startup Story" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-rocket-takeoff-fill"></i> 04 • Startup Story
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Innovation &amp; Scale</span>
                        <h3 class="journey-card-title">Startup Story</h3>
                        <p class="journey-card-desc">From ideation to MVP launch, product-market fit, and the pivotal hurdles of scaling up your vision.</p>
                    </div>
                </article>

                <!-- 05 Career Journey -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/career-journey.webp') }}" alt="Career Journey" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-person-badge-fill"></i> 05 • Career
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Pivots &amp; Growth</span>
                        <h3 class="journey-card-title">Career Journey</h3>
                        <p class="journey-card-desc">Highlight defining career transitions, breaking boundaries, finding mentorship, and lessons learned on the way.</p>
                    </div>
                </article>

                <!-- 06 Leadership Experience -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/leadership-experience.webp') }}" alt="Leadership Experience" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-award-fill"></i> 06 • Leadership
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Teams &amp; Vision</span>
                        <h3 class="journey-card-title">Leadership Experience</h3>
                        <p class="journey-card-desc">Insights on steering high-performance teams, fostering accountability, and leading with empathy through high stakes.</p>
                    </div>
                </article>

                <!-- 07 Business Lessons -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/business-lessons.webp') }}" alt="Business Lessons" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-graph-up-arrow"></i> 07 • Business
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Commercial Playbook</span>
                        <h3 class="journey-card-title">Business Lessons</h3>
                        <p class="journey-card-desc">Practical operational insights, unit economics, market expansion decisions, and avoiding critical pitfalls.</p>
                    </div>
                </article>

                <!-- 08 Personal Growth -->
                <article class="journey-card">
                    <img class="journey-card-bg" src="{{ asset('images/media/share-your-story/personal-growth.webp') }}" alt="Personal Growth" loading="lazy">
                    <div class="journey-card-scrim"></div>
                    <div class="journey-card-top">
                        <span class="journey-card-badge">
                            <i class="bi bi-heart-pulse-fill"></i> 08 • Growth
                        </span>
                    </div>
                    <div class="journey-card-bottom">
                        <span class="journey-card-kicker">Mindset &amp; Habits</span>
                        <h3 class="journey-card-title">Personal Growth</h3>
                        <p class="journey-card-desc">Transformative inner breakthroughs, daily discipline frameworks, and mental models that catalyzed self-mastery.</p>
                    </div>
                </article>

            </div>

            <!-- Minimal Dots Pagination (Centered) -->
            <div class="journey-pagination d-flex justify-content-center align-items-center mt-3 pt-2">
                <div class="journey-dots" id="journeyDots"></div>
            </div>
        </div>
    </div>
</section>

<!-- WHY STORIES MATTER -->
{{-- <section class="partner-sec st-section st-bg-soft-cream" id="stories-matter" style="padding-left: 32px; padding-right: 32px;">
    <div class="partner-head text-center mb-5">
        <div class="eyebrow rv" style="margin-bottom: 12px; color: #0c3a30 !important;">The Power of Narrative</div>
        <h2 class="sec-title rv" style="margin-bottom: 16px; color: #0c3a30 !important;">Why Stories Matter</h2>
        <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px; color: #4d6459;">Lessons aren't found in business summaries; they are forged in the moments of crisis, uncertainty, and breakthroughs.</p>
    </div>
    
    <div class="st-stories-grid">
        <!-- Card 1 -->
        <div class="p-card rv" style="transition-delay:0s">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Inspire Action — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">01</div>
                <div class="p-name">Inspire Action</div>
                <div class="p-desc">Your path could be the exact blueprint someone else needs to take their first step forward.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        
        <!-- Card 2 -->
        <div class="p-card rv" style="transition-delay:0.07s">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80" alt="Create Learning — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">02</div>
                <div class="p-name">Create Learning</div>
                <div class="p-desc">Experiences, especially the difficult ones, are the greatest teachers we can offer one another.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
        
        <!-- Card 3 -->
        <div class="p-card rv" style="transition-delay:0.14s">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" alt="Build Community — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">03</div>
                <div class="p-name">Build Community</div>
                <div class="p-desc">Honest conversations bridge the gap between strangers, turning shared challenges into collective strength.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 4 -->
        <div class="p-card rv" style="transition-delay:0.21s">
            <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&q=80" alt="Vocalize Experience — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">04</div>
                <div class="p-name">Vocalize Experience</div>
                <div class="p-desc">Documenting your hard-earned wisdom turns temporary challenges into a permanent legacy.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 5 -->
        <div class="p-card rv" style="transition-delay:0.28s">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="Expand Visibility — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">05</div>
                <div class="p-name">Expand Visibility</div>
                <div class="p-desc">Putting your journey in front of a global ecosystem attracts partners, investors, and talent.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>

        <!-- Card 6 -->
        <div class="p-card rv" style="transition-delay:0.35s">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80" alt="Foster Innovation — YCX Story" loading="lazy">
            <div class="p-card-ov">
                <div style="font-family: 'Manrope', sans-serif; font-size: 1.5rem; font-weight: 900; color: #ffd2b1; margin-bottom: 8px; line-height: 1;">06</div>
                <div class="p-name">Foster Innovation</div>
                <div class="p-desc">Uncovering operational failures forces the ecosystem to design smarter, faster, and better solutions.</div>
            </div>
            <div class="p-arrow">↗</div>
        </div>
    </div>
</section> --}}

<!-- EDITORIAL LENS (WHAT MAKES A GREAT STORY) -->
<section class="st-section st-bg-white why-stories-matter-sec">
    <div class="container">
        <div class="row align-items-stretch g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="st-eyebrow">WHY STORIES MATTER</div>
                <h2 class="st-heading" style="color: #0c3a30;">Every Story Adds Value to the Community</h2>
                <p class="mb-4 text-muted" style="font-size: 1.05rem; line-height: 1.7;">
                    Your journey can help others learn, build confidence, and discover new possibilities through authentic experiences.</p>
                <div class="d-flex gap-4 mb-4 align-items-start">
                    <span class="lens-tick-icon">
                        <i class="bi bi-check-lg"></i>
                    </span>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">Share Real Experiences</h4>
                        <p class="text-muted small mb-0">Help others learn through your authentic journey and experiences.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 mb-4 align-items-start">
                    <span class="lens-tick-icon">
                        <i class="bi bi-check-lg"></i>
                    </span>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">Preserve Valuable Lessons</h4>
                        <p class="text-muted small mb-0">Turn your experiences into lessons that continue to create value.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 mb-4 align-items-start">
                    <span class="lens-tick-icon">
                        <i class="bi bi-check-lg"></i>
                    </span>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">Strengthen the Community</h4>
                        <p class="text-muted small mb-0">Every story helps build a stronger and more connected community.</p>
                    </div>
                </div>
                <div class="d-flex gap-4 align-items-start">
                    <span class="lens-tick-icon">
                        <i class="bi bi-check-lg"></i>
                    </span>
                    <div>
                        <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 5px;">Encourage New Perspectives</h4>
                        <p class="text-muted small mb-0">Inspire fresh ideas through your unique experiences and viewpoints.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">

    <div class="st-image-wrapper" style="height: 100%; min-height: 400px; border-radius: 24px; overflow: hidden;">
    <img src="{{ asset('images/media/share-your-story/Why-stories-matter.webp') }}" alt="Why Stories Matter" style="width: 100%; height: 100%; object-fit: cover;">
</div>

            </div>
        </div>
    </div>
</section>

<!-- WHAT MAKES A GREAT STORY (CHECKLIST) -->
{{-- <section class="st-section st-bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">The Standard</div>
            <h2 class="st-heading">What Makes a Great Story?</h2>
            <p class="st-subheading mx-auto">Not every experience becomes a Story Talks feature. Here's what we look for.</p>
        </div>
        <div class="st-checklist">
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Authentic experience</b> — something that actually happened to you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Honest lessons</b> — no varnish over the hard parts.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Personal growth</b> — a visible before and after.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Challenges faced</b> — the friction is part of the story.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Positive impact</b> — on you, or on someone around you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Practical insights</b> — something a listener can actually use.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Respectful storytelling</b> — fair to everyone in the story, not just you.</p>
            </div>
            <div class="st-check-item">
                <div class="st-check-mark">✓</div>
                <p><b>Original content</b> — your words, your version, first-hand.</p>
            </div>
        </div>
    </div>
</section> --}}

<!-- STORIES WE'RE LOOKING FOR -->
{{-- <section class="st-section st-bg-grey-green">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">Curated Themes</div>
            <h2 class="st-heading">Stories We Are Looking For</h2>
            <p class="st-subheading mx-auto">We select narratives from a wide range of verticals, focusing on raw perspective and operational wisdom.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-bootstrap-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">The Grit Climb</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Bootstrapping journeys, scaling from zero, funding obstacles, and surviving initial cash-flow crunches.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-cpu-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Tech Frontiers</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Building complex systems, utilizing AI systems, handling tech debt, and pivoting software architectures.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Social Innovations</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Creating grassroot changes, educational shifts, micro-reforms, and high-impact non-profit constructs.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-buildings-fill"></i>
                    </div>
                    <h3 class="st-card-title" style="font-size: 1.15rem;">Corporate Pivots</h3>
                    <p class="st-card-text" style="font-size: 0.88rem;">Intrapreneurship, executing major digital shifts in legacy structures, and reforming internal policies.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- WHY GET FEATURED -->
<section class="st-section st-bg-white your-story-impact-sec">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">YOUR STORY, YOUR IMPACT</div>
            <h2 class="st-heading">Your Story Deserves to Be Shared</h2>
            <p class="st-subheading mx-auto">When you share your journey with Young Chanakya X, your experiences become a source of learning, inspiration, and encouragement for people from different backgrounds.</p>
        </div>
        <div class="row g-4 pt-4">
            <div class="col-md-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-camera-reels-fill"></i>
                    </div>
                    <h3 class="st-card-title">Published on YCX</h3>
                    <p class="st-card-text">Your story is featured on the Young Chanakya X platform for the community to discover.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="st-card-title">Inspire Others</h3>
                    <p class="st-card-text">Help others learn, grow, and gain confidence through your experiences and lessons</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <h3 class="st-card-title">Meaningful Connections</h3>
                    <p class="st-card-text">Open the door to conversations with people who relate to your journey and perspective.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-card">
                    <div class="st-card-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h3 class="st-card-title">Community Recognition</h3>
                    <p class="st-card-text">Become part of a community that grows through shared experiences and authentic stories.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
{{-- <section class="st-section st-bg-cream">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">The Journey</div>
            <h2 class="st-heading">From Submission to Stage</h2>
            <p class="st-subheading mx-auto">We've structured a simplified collaborative workflow to refine, capture, and distribute your talk.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">01</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Submit Proposal</h4>
                    <p class="text-muted small mb-0">Fill out the outline form at the top of this page with your background and proposed topic overview.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">02</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Editorial Review</h4>
                    <p class="text-muted small mb-0">Our curators evaluate the submission and set up a discovery call to alignment on the story arc.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">03</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Story Workshop</h4>
                    <p class="text-muted small mb-0">Coached editing sessions to shape slide outlines, talking structures, and delivery pacing.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="st-timeline-item">
                    <div class="st-timeline-number">04</div>
                    <h4 style="color: #0c3a30; font-weight: 700; font-size: 1.15rem; margin-bottom: 12px;">Record & Launch</h4>
                    <p class="text-muted small mb-0">Take the live stage or join our audio studio. We master the media and publish your talk globally.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<!-- SHARE YOUR STORY CTA -->
<section id="cta-banner" class="st-section">
    <div class="container text-center" style="max-width: 800px; margin: 0 auto; padding: 60px 20px;">
        <span class="st-eyebrow">— YOUR STORY MATTERS</span>
        <h2 style="font-family: 'Fraunces', serif; font-weight: 600; font-size: clamp(28px, 3.6vw, 42px); color: #ffffff; letter-spacing: -1px; line-height: 1.16; margin-bottom: 16px;">
            Turn Your Journey Into <br>Someone Else's Inspiration
        </h2>
        <p style="font-size: 15.5px; color: rgba(255, 255, 255, 0.85); line-height: 1.65; margin-bottom: 28px; max-width: 600px; margin-left: auto; margin-right: auto;">
            Whether you've overcome challenges, built something meaningful, or discovered valuable life lessons, your story deserves to be heard.
        </p>
        <a href="#speakerTalkForm" class="btn-peach">
            Share Your Story
        </a>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <div class="st-eyebrow">Questions, Answered</div>
            <h2 class="st-heading" style="color: #0c3a30;">Frequently Asked Questions</h2>
            <p class="st-subheading mx-auto">Find answers to key questions about sharing your story, the process, and what to expect.</p>
        </div>
        <div class="faq-grid">
            <div class="faq-col">
                <div class="faq-item">
                    <div class="faq-q"><span>Who should share their story on YCX?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Anyone with a journey to share—founders, professionals, creators, students, and community builders who have faced challenges, learned valuable lessons, or achieved meaningful goals.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>What kind of stories are you looking for?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>We look for authentic, unfiltered narratives about career pivots, overcoming business failures, leadership triumphs, lessons from building startups, and personal transformations.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>Is there any fee to submit or publish a story?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>No. Sharing your story with YCX is completely free. We cover all production and editorial resources.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>How long should my story proposal be?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Keep it concise. Focus on the core timeline, the main challenge you faced, and the key lessons you walked away with.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>What happens after I submit my proposal?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Our editorial curators will review your application. If it matches our upcoming publication schedule, we'll schedule a discovery call with you.</p></div>
                </div>
            </div>
            <div class="faq-col">
                <div class="faq-item">
                    <div class="faq-q"><span>Will I receive help preparing my story?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Yes! Our editorial and writing team works closely with you to structure your story, polish the details, and highlight the key takeaways.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>What format will my story be published in?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>We feature stories in written profiles, video podcast episodes, social media features, and occasionally on our live keynote stages.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>Can I submit a story on behalf of someone else?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Absolutely. You can submit details about another builder or leader's journey, and our team will reach out if there's a fit.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>How long does the review process take?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Our team reviews every proposal within 5–7 working days and will contact you directly if we're moving forward.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><span>Do I need to be a seasoned writer or public speaker?</span><span class="plus">+</span></div>
                    <div class="faq-a"><p>Not at all. We value raw experiences and authentic wisdom over professional speaking skills. Our curators help you find the best way to tell your story.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">Thanks for Sharing Your Journey!</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    We've successfully received your story. Thank you for contributing your experiences, lessons, and perspectives to the YCX community.
                </p>
                <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector('input[name="phone"]');
        var iti;
        if (phoneInput) {
            iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });
        }



        // ── Minimal Smooth Journey Carousel ──────────
        (function() {
            const track = document.getElementById('journeyTrack');
            const prevBtn = document.getElementById('journeyPrevBtn');
            const nextBtn = document.getElementById('journeyNextBtn');
            const dotsContainer = document.getElementById('journeyDots');
            const cards = Array.from(document.querySelectorAll('.journey-card'));

            if (!track || !cards.length) return;

            // 1. Generate Navigation Dots
            function renderDots() {
                if (!dotsContainer) return;
                dotsContainer.innerHTML = '';
                cards.forEach((card, idx) => {
                    const dot = document.createElement('button');
                    dot.type = 'button';
                    dot.className = 'journey-dot' + (idx === 0 ? ' active' : '');
                    dot.setAttribute('aria-label', 'Go to story ' + (idx + 1));
                    dot.addEventListener('click', () => scrollToIndex(idx));
                    dotsContainer.appendChild(dot);
                });
            }

            // 2. Scroll to Index
            function scrollToIndex(idx) {
                if (!cards[idx]) return;
                const card = cards[idx];
                const trackPadding = parseInt(window.getComputedStyle(track).paddingLeft) || 0;
                const targetLeft = card.offsetLeft - track.offsetLeft - trackPadding;
                track.scrollTo({ left: targetLeft, behavior: 'smooth' });
            }

            // 3. Stride Calculation (Card width + gap)
            function getStride() {
                if (!cards.length) return 340;
                const card = cards[0];
                const gap = parseInt(window.getComputedStyle(track).gap) || 20;
                return card.offsetWidth + gap;
            }

            // 4. Update Active Dot and Arrow States on Scroll
            function updateIndicators() {
                const scrollLeft = track.scrollLeft;
                const stride = getStride();
                let activeIdx = Math.round(scrollLeft / stride);
                activeIdx = Math.max(0, Math.min(activeIdx, cards.length - 1));

                if (dotsContainer) {
                    const dots = dotsContainer.querySelectorAll('.journey-dot');
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === activeIdx);
                    });
                }

                if (prevBtn) {
                    prevBtn.disabled = track.scrollLeft <= 5;
                }
                if (nextBtn) {
                    const maxScroll = track.scrollWidth - track.clientWidth - 5;
                    nextBtn.disabled = track.scrollLeft >= maxScroll;
                }
            }

            // 5. Arrow Click Handlers
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    track.scrollBy({ left: -getStride(), behavior: 'smooth' });
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    track.scrollBy({ left: getStride(), behavior: 'smooth' });
                });
            }

            // 6. Smooth Mouse Drag for Desktop
            let isDown = false;
            let startX = 0;
            let scrollLeftStart = 0;

            track.addEventListener('mousedown', (e) => {
                isDown = true;
                track.classList.add('is-dragging');
                startX = e.pageX - track.offsetLeft;
                scrollLeftStart = track.scrollLeft;
            });

            window.addEventListener('mouseup', () => {
                if (!isDown) return;
                isDown = false;
                track.classList.remove('is-dragging');
            });

            track.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 1.4;
                track.scrollLeft = scrollLeftStart - walk;
            });

            // Throttled scroll listener
            let scrollTimer;
            track.addEventListener('scroll', () => {
                if (scrollTimer) cancelAnimationFrame(scrollTimer);
                scrollTimer = requestAnimationFrame(updateIndicators);
            }, { passive: true });

            renderDots();
            updateIndicators();
        })();
    });

    /* ── AJAX Story Form Submit ───────────────────────── */
    (function() {
        const form = document.getElementById('speakerTalkForm');
        if (!form) return;

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn = document.getElementById('storySubmitBtn');
            btn.disabled = true;

            const formData = new FormData(form);
            try {
                const res = await fetch(form.action, {
                    method: 'POST',
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
                    body: formData
                });
                const data = await res.json();

                if (data.type === 'success') {
                    form.reset();
                    // Use the existing Bootstrap success modal
                    var successModalEl = document.getElementById('successModal');
                    if (successModalEl) {
                        new bootstrap.Modal(successModalEl).show();
                    }
                } else {
                    alert(data.message || 'Something went wrong. Please try again.');
                }
            } catch (err) {
                alert('Unable to submit. Please check your connection and try again.');
            }

            btn.disabled = false;
        });
    })();

    // FAQ Accordion logic
    document.querySelectorAll('.faq-item').forEach(function(item) {
        var q = item.querySelector('.faq-q');
        if (q) {
            q.addEventListener('click', function() {
                var isOpen = item.classList.contains('open');
                document.querySelectorAll('.faq-item').forEach(function(i) { i.classList.remove('open'); });
                if (!isOpen) {
                    item.classList.add('open');
                }
            });
        }
    });
</script>
<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px) scale(0.96); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
}
</style>
@endpush

@endsection
