@php
/**
 * Register Your Institution — The Education Business Room
 * Executive Landing Page for School & College Founders, Correspondents & Leaders
 */
$seo = [
    'title'       => 'The Education Business Room | Young Chanakya X',
    'description' => 'A premier executive podcast and leadership platform for school owners, college correspondents, chairpersons, and education founders to share their journeys and institutional stories.',
    'keywords'    => 'The Education Business Room, Young Chanakya X podcast, school owner podcast, college correspondent series, education leaders India, educational founders series, campus leadership, school founders stories',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
    'robots'      => 'index, follow',
];
$lightNav = true;
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "The Education Business Room | Young Chanakya X",
    "url": "https://connectx.youngchanakya.com/register-institution",
    "description": "A premier executive podcast and storytelling platform for school owners, college correspondents, chairpersons, and education entrepreneurs.",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    }
}
@endverbatim
</script>
@endpush

@push('styles')
{{-- Manrope is loaded globally via typography.css — no extra font import needed --}}

{{-- Tailwind CSS CDN + Theme Extension --}}
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          forest: { DEFAULT: '#0c3a30', deep: '#07241e', dark: '#051b16', mid: '#14513f', light: '#1c634f' },
          peach:  { DEFAULT: '#ffd2b1', deep: '#f0b489', pale: '#fff2e8', warm: '#ffe6d3' },
          cream:  { DEFAULT: '#fbf8f4', warm: '#f5eee5', card: '#ffffff', edge: '#e7ded2' }
        },
        fontFamily: {
          sans: ['Manrope', 'system-ui', 'sans-serif']
        },
        maxWidth: { shell: '84rem' }
      }
    }
  }
</script>

<style>
  html {
    scroll-behavior: smooth;
    scroll-padding-top: 96px;
  }
  body {
    background-color: #fbf8f4 !important;
    color: #0c3a30;
    -webkit-font-smoothing: antialiased;
  }

  /* All body, paragraph, and card descriptions strictly regular 400 */
  p,
  .profile-card-desc,
  .panel-text,
  .talk-card p,
  article p,
  section p,
  .roadmap-card p,
  .timeline-step p,
  .story-panel p {
    font-weight: 400 !important;
  }

  /* Fixed site navbar hamburger color on light cream background */
  #hdr:not(.scrolled) .ycx-hamburger span {
    background: #0c3a30 !important;
  }

  /* Form & Interactive Elements */
  .pill input:checked + span {
    background: #0c3a30 !important;
    color: #ffd2b1 !important;
    border-color: #0c3a30 !important;
    box-shadow: 0 4px 14px rgba(12, 58, 48, 0.18);
  }
  .field-error {
    border-color: #c43c1f !important;
    background-color: #fff6f4 !important;
  }
  .error-msg {
    display: none;
    color: #c43c1f;
    font-size: 0.76rem;
    font-weight: 600;
    margin-top: 0.35rem;
  }
  .field-error ~ .error-msg, .error-msg.show {
    display: block;
  }

  /* Become a Partner Form Style */
  .partner-form-box {
    background: #ffffff;
    padding: 38px 36px;
    border-radius: 22px;
    box-shadow: 0 15px 60px rgba(0, 0, 0, 0.08), 0 0 0 1px rgba(231, 222, 210, 0.8);
    position: relative;
  }
  @media (max-width: 576px) {
    .partner-form-box {
      padding: 24px 18px;
    }
  }

  .partner-form-box label {
    display: block;
    font-size: 13.5px;
    font-weight: 600;
    color: #0c3a30;
    margin-bottom: 7px;
  }

  .partner-form-box .form-control,
  .partner-form-box select {
    height: 52px;
    border-radius: 12px;
    border: 1px solid #e5e5e5;
    padding: 0 16px;
    font-size: 14.5px;
    color: #0c3a30;
    box-shadow: none;
    transition: all .25s ease;
    background: #ffffff;
    width: 100%;
    outline: none;
  }

  .partner-form-box .form-control:focus,
  .partner-form-box select:focus {
    border-color: #0c3a30;
    box-shadow: 0 0 0 3px rgba(12, 58, 48, 0.10);
    background: #ffffff;
  }

  .partner-form-box select {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%230c3a30' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 16px center;
    background-size: 14px 10px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding-right: 38px;
  }

  .partner-form-box select option {
    color: #0c3a30;
    background: #ffffff;
  }

  .partner-submit-btn {
    width: 100%;
    height: 52px;
    border: none;
    border-radius: 12px;
    background: #0c3a30;
    color: #ffd2b1;
    font-size: 15px;
    font-weight: 700;
    transition: all .3s ease;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 4px 14px rgba(12, 58, 48, 0.18);
  }

  .partner-submit-btn:hover {
    background: #14513f;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(12, 58, 48, 0.25);
  }

  /* Arc Timeline Step Connectors */
  .timeline-step::after {
    content: '';
    position: absolute;
    top: 50%;
    right: -24px;
    width: 24px;
    height: 2px;
    background: #e2d6c5;
  }
  @media (max-width: 1024px) {
    .timeline-step::after {
      display: none;
    }
  }

  /* Glow & Glass effects */
  .hero-glass-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 24px 60px -15px rgba(12, 58, 48, 0.18), 0 0 0 1px rgba(231, 222, 210, 0.9);
  }

  .executive-badge {
    background: linear-gradient(135deg, rgba(12, 58, 48, 0.06) 0%, rgba(255, 210, 177, 0.3) 100%);
    border: 1px solid rgba(12, 58, 48, 0.15);
  }

  .pod-wave {
    display: flex;
    align-items: center;
    gap: 3px;
    height: 18px;
  }
  .pod-wave span {
    width: 3px;
    background: #0c3a30;
    border-radius: 99px;
    animation: wavePulse 1.2s ease-in-out infinite alternate;
  }
  .pod-wave span:nth-child(1) { height: 8px; animation-delay: 0.1s; }
  .pod-wave span:nth-child(2) { height: 16px; animation-delay: 0.3s; }
  .pod-wave span:nth-child(3) { height: 10px; animation-delay: 0.15s; }
  .pod-wave span:nth-child(4) { height: 18px; animation-delay: 0.4s; }
  .pod-wave span:nth-child(5) { height: 6px; animation-delay: 0.25s; }

  @keyframes wavePulse {
    0% { transform: scaleY(0.4); }
    100% { transform: scaleY(1.1); }
  }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
    * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
  }

  /* Young Chanakya Style Arrow Navigation Buttons */
  .arrow-btn {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    border: 1.5px solid rgba(12, 58, 48, 0.45);
    background: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #0c3a30;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 2px 8px rgba(12, 58, 48, 0.06);
  }
  .arrow-btn:hover {
    background: #0c3a30;
    color: #ffd2b1;
    border-color: #0c3a30;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(12, 58, 48, 0.16);
  }
  .arrow-btn:active {
    transform: scale(0.94);
  }
  .arrow-btn.swiper-button-disabled {
    opacity: 0.3;
    cursor: not-allowed;
    pointer-events: none;
    transform: none !important;
  }

  /* What We Talk About Thematic Cards */
  .talk-card {
    background: #ffffff;
    border: 1px solid #e7ded2;
    border-radius: 1.25rem;
    overflow: hidden;
    transition: all 0.32s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: 0 2px 10px rgba(12, 58, 48, 0.04);
  }
  .talk-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 32px -10px rgba(12, 58, 48, 0.12);
    border-color: rgba(12, 58, 48, 0.3);
  }
  .talk-card-image {
    position: relative;
    width: 100%;
    height: 190px;
    overflow: hidden;
    background: #f5eee5;
    flex-shrink: 0;
  }
  .talk-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.55s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .talk-card:hover .talk-card-image img {
    transform: scale(1.05);
  }

  /* How It Works Sequential Revealing Animation */
  .roadmap-step {
    opacity: 0.28;
    transform: translateY(16px);
    transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .roadmap-step.active-step,
  .roadmap-step.revealed-step {
    opacity: 1;
    transform: translateY(0);
  }
  .roadmap-step .step-number-circle {
    background-color: rgba(255, 210, 177, 0.18) !important;
    color: #ffd2b1 !important;
    border: 4px solid #07241e !important;
    box-shadow: 0 0 0 1px rgba(255, 210, 177, 0.3);
    transition: all 0.45s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .roadmap-step.active-step .step-number-circle {
    background-color: #ffffff !important;
    color: #07241e !important;
    transform: scale(1.16);
    box-shadow: 0 0 0 4px #ffd2b1, 0 0 25px rgba(255, 210, 177, 0.9) !important;
  }
  .roadmap-step.revealed-step .step-number-circle {
    background-color: #ffd2b1 !important;
    color: #07241e !important;
    border: 4px solid #07241e !important;
    box-shadow: 0 0 0 2px rgba(255, 210, 177, 0.4);
  }
  .roadmap-track-fill {
    height: 100%;
    background: linear-gradient(90deg, #ffd2b1 0%, #ffffff 80%, #ffd2b1 100%);
    box-shadow: 0 0 14px 2px rgba(255, 210, 177, 0.9);
    border-radius: 99px;
    transition: width 0.5s cubic-bezier(0.25, 1, 0.5, 1);
    position: relative;
  }
  .roadmap-glow-head {
    position: absolute;
    right: -6px;
    top: 50%;
    transform: translateY(-50%);
    width: 13px;
    height: 13px;
    background: #ffffff;
    border: 2px solid #ffd2b1;
    border-radius: 50%;
    box-shadow: 0 0 14px 4px #ffd2b1, 0 0 24px rgba(255, 255, 255, 0.8);
    transition: opacity 0.3s ease;
  }
  .roadmap-card {
    border: 1px solid rgba(255, 255, 255, 0.14) !important;
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .roadmap-step.active-step .roadmap-card {
    border-color: rgba(255, 210, 177, 0.6) !important;
    background-color: rgba(255, 255, 255, 0.12) !important;
    box-shadow: 0 12px 30px -6px rgba(0, 0, 0, 0.4), 0 0 20px rgba(255, 210, 177, 0.2) !important;
    transform: translateY(-4px);
  }
  .roadmap-step.revealed-step .roadmap-card {
    border-color: rgba(255, 255, 255, 0.18) !important;
  }

  /* Masters' Union Style Vertical Marquee */
  .breather-marquee-container {
    position: relative;
    height: 580px;
    overflow: hidden;
    -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%);
    mask-image: linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%);
  }
  @media (max-width: 640px) {
    .breather-marquee-container {
      height: 440px;
    }
  }
  .breather-col-track {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    will-change: transform;
  }
  .breather-marquee-col-up {
    animation: marqueeScrollUp 34s linear infinite;
  }
  .breather-marquee-col-down {
    animation: marqueeScrollDown 38s linear infinite;
  }
  .breather-marquee-container:hover .breather-marquee-col-up,
  .breather-marquee-container:hover .breather-marquee-col-down {
    animation-play-state: paused;
  }
  @keyframes marqueeScrollUp {
    0% { transform: translateY(0); }
    100% { transform: translateY(-50%); }
  }
  @keyframes marqueeScrollDown {
    0% { transform: translateY(-50%); }
    100% { transform: translateY(0); }
  }

  /* Masters' Union Button with Dual Sliding Arrow (Theme Peach Color) */
  .btn-breather {
    display: inline-flex;
    align-items: center;
    gap: 0.85rem;
    padding: 0.85rem 1.85rem;
    border-radius: 9999px;
    background: #ffd2b1;
    color: #0c3a30;
    font-weight: 700;
    font-size: 0.94rem;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255, 210, 177, 0.35);
    text-decoration: none;
    cursor: pointer;
    border: 1px solid rgba(255, 210, 177, 0.5);
  }
  .btn-breather:hover {
    background: #ffffff;
    color: #0c3a30;
    transform: translateY(-2px);
    box-shadow: 0 8px 26px rgba(0, 0, 0, 0.35), 0 0 18px rgba(255, 210, 177, 0.5);
  }
  .btn-breather .arrow-wrap {
    position: relative;
    display: inline-flex;
    width: 16px;
    height: 16px;
    overflow: hidden;
  }
  .btn-breather .arrow-icon {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    font-size: 13px;
  }
  .btn-breather .arrow-icon-2 {
    transform: translate(-120%, -50%);
  }
  .btn-breather:hover .arrow-icon-1 {
    transform: translate(140%, -50%);
  }
  .btn-breather:hover .arrow-icon-2 {
    transform: translate(0, -50%);
  }

  /* Vertical Story Post Card */
  .breather-card {
    position: relative;
    border-radius: 1.25rem;
    overflow: hidden;
    height: 290px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 10px 24px -6px rgba(0, 0, 0, 0.5);
    background-color: #0d1726;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    flex-shrink: 0;
  }
  .breather-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .breather-card:hover {
    border-color: #f97316;
    box-shadow: 0 16px 36px -6px rgba(0, 0, 0, 0.6), 0 0 22px rgba(249, 115, 22, 0.35);
    transform: translateY(-3px) scale(1.02);
  }
  .breather-card:hover img {
    transform: scale(1.08);
  }
</style>
@endpush

@section('content')

<div class="bg-cream font-sans text-forest overflow-hidden">

  {{-- Accessible Skip Link --}}
  <a href="#founder-form" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:m-4 focus:rounded focus:bg-forest focus:px-4 focus:py-2 focus:text-peach">
    Skip to the Story Submission Form
  </a>

  {{-- ============================================================
       01. HERO + FORM (Form on the Right Side of Hero Banner)
       ============================================================ --}}
  <section class="relative pt-28 pb-16 lg:pt-36 lg:pb-24 border-b border-cream-edge overflow-hidden">
    {{-- Ambient Background Glow (Pushed Back) --}}
    <div class="pointer-events-none absolute -top-36 -left-36 h-[460px] w-[460px] rounded-full bg-peach/15 blur-[90px] -z-10 opacity-70" aria-hidden="true"></div>
    <div class="pointer-events-none absolute top-1/2 -right-32 h-[600px] w-[600px] rounded-full bg-forest/5 blur-3xl -z-10" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8 relative z-10">
      <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-14 xl:gap-20">

        {{-- LEFT COLUMN: HERO HEADLINE & VALUE PROPOSITION --}}
        <div class="relative z-10">
          
          {{-- Eyebrow with Podcast Live Wave --}}
          <div class="inline-flex flex-wrap items-center gap-2 sm:gap-3 rounded-2xl sm:rounded-full executive-badge px-3 sm:px-4 py-1.5 sm:py-2 text-[10.5px] sm:text-xs font-bold uppercase tracking-wider text-forest max-w-full">
            <span class="flex h-2 w-2 sm:h-2.5 sm:w-2.5 rounded-full bg-peach-deep animate-ping"></span>
            <span>The Education Business Room</span>
            <span class="text-forest/30 hidden xs:inline">|</span>
            <div class="pod-wave hidden xs:flex">
              <span></span><span></span><span></span><span></span><span></span>
            </div>
            <span class="font-semibold text-forest/75 normal-case tracking-normal hidden sm:inline">Founder’s Series</span>
          </div>

          {{-- Main Hero Headline --}}
          <h1 class="mt-5 sm:mt-6 text-[1.95rem] font-black leading-[1.12] sm:text-4xl lg:text-[3.25rem] text-forest" style="letter-spacing:-1.2px;">
            Where India's Education
            <span class="block" style="color:#14513f;">Leaders Speak First.</span>
          </h1>

          {{-- Subtitle / Description --}}
          <p class="mt-4 sm:mt-6 text-[0.98rem] sm:text-[1.05rem] leading-relaxed text-forest/80 font-normal">
            <strong>The Education Business Room</strong> by Young Chanakya X is an exclusive platform for school founders, college correspondents, and institutional leaders — a space to share your real journey, exchange ideas with peers, and put your institution on the national map.
          </p>

          {{-- 6 Quick Highlights Inspired by the Graphic --}}
          <div class="mt-7 sm:mt-8 grid grid-cols-2 sm:grid-cols-3 gap-2 sm:gap-3">
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-video"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">Video Podcast Feature</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-award"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">National Spotlight</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-handshake"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">Founder Circle Meetups</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-building-columns"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">Campus Leadership Talks</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-briefcase"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">Internship Connect</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs hover:border-forest/20 transition-colors">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-peach text-forest text-xs sm:text-sm shadow-xs">
                <i class="fa-solid fa-rocket"></i>
              </span>
              <span class="text-[11px] sm:text-xs font-normal leading-tight text-forest">Student Masterclasses</span>
            </div>
          </div>

        </div>

        {{-- RIGHT COLUMN: HERO FORM (Become a Partner Style 1-Page Form) --}}
        <div id="founder-form">
          <div class="partner-form-box" id="partner-form">

            {{-- Card Header --}}
            <div class="mb-5">
              <div class="flex items-center justify-between mb-2">
                <span class="rounded-full bg-forest/10 px-3.5 py-1 text-[11px] font-bold uppercase tracking-wider text-forest">
                  Executive Registration
                </span>
                <span class="text-xs text-forest/60 font-medium">1-Page Direct Access</span>
              </div>
              <h2 class="text-2xl sm:text-[1.75rem] font-bold text-forest leading-tight">
                Register Your Institution
              </h2>
              <p class="text-xs sm:text-sm text-forest/70 mt-1">
                Share your journey with <strong>The Education Business Room</strong>.
              </p>
            </div>

            {{-- INLINE ERROR CONTAINER --}}
            <div id="formErrorMessage" class="hidden mb-4 rounded-xl border border-red-200 bg-red-50 p-3.5 text-xs text-red-700 font-medium"></div>

            @if(session('error') || (isset($errors) && $errors->any()))
              <div class="mb-4 rounded-xl border border-red-200 bg-red-50 p-3.5 text-xs text-red-700 font-medium">
                <i class="fa-solid fa-triangle-exclamation me-1.5"></i>
                @if(session('error'))
                  {{ session('error') }}
                @else
                  {{ $errors->first() }}
                @endif
              </div>
            @endif

            {{-- 1-PAGE FORM (BECOME A PARTNER STYLE) --}}
            <form id="founderRegForm" action="{{ route('institution.submit') }}" method="POST" novalidate>
              @csrf

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">

                {{-- 1. Full Name --}}
                <div class="col-span-1">
                  <label for="name">Full Name <span class="text-red-600">*</span></label>
                  <input type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    class="form-control"
                    placeholder="Full Name" required>
                  <p class="error-msg">Please enter your name.</p>
                </div>

                {{-- 2. Designation --}}
                <div class="col-span-1">
                  <label for="designation">Designation <span class="text-red-600">*</span></label>
                  <input type="text"
                    id="designation"
                    name="designation"
                    value="{{ old('designation') }}"
                    class="form-control"
                    placeholder="e.g. Correspondent, Principal, Founder" required>
                  <p class="error-msg">Enter your designation.</p>
                </div>

                {{-- 3. Phone --}}
                <div class="col-span-1">
                  <label for="phone">Phone <span class="text-red-600">*</span></label>
                  <input type="tel"
                    id="phone"
                    name="phone"
                    value="{{ old('phone') }}"
                    class="form-control"
                    placeholder="E.g. +91 98765 43210" required>
                  <p class="error-msg">Enter a reachable phone number.</p>
                </div>

                {{-- 4. Email --}}
                <div class="col-span-1">
                  <label for="email">Email <span class="text-red-600">*</span></label>
                  <input type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="form-control"
                    placeholder="name@institution.edu.in" required>
                  <p class="error-msg">Enter a valid email address.</p>
                </div>

                {{-- 5. Institution / Group Name --}}
                <div class="col-span-1">
                  <label for="institution_name">Institution/Group Name <span class="text-red-600">*</span></label>
                  <input type="text"
                    id="institution_name"
                    name="institution_name"
                    value="{{ old('institution_name') }}"
                    class="form-control"
                    placeholder="Institution / Group Name" required>
                  <p class="error-msg">Enter your institution or group name.</p>
                </div>

                {{-- 6. Category --}}
                <div class="col-span-1">
                  <label for="institution_type">Category <span class="text-red-600">*</span></label>
                  <select id="institution_type" name="institution_type" class="form-control" required>
                    <option value="" disabled {{ old('institution_type') ? '' : 'selected' }}>Select Category</option>
                    @foreach([
                      'School / K-12 Group',
                      'College / University',
                      'Both School & College',
                      'Education Enterprise'
                    ] as $cat)
                      <option value="{{ $cat }}" {{ old('institution_type') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                  </select>
                  <p class="error-msg">Please select a category.</p>
                </div>

                {{-- 7. Website URL (optional) --}}
                <div class="col-span-1 sm:col-span-2">
                  <label for="website">Website URL <span class="text-forest/45 font-normal text-xs">(optional)</span></label>
                  <input type="url"
                    id="website"
                    name="website"
                    value="{{ old('website') }}"
                    class="form-control"
                    placeholder="https://yourinstitution.edu.in">
                </div>

                {{-- Submit Button --}}
                <div class="col-span-1 sm:col-span-2 mt-2">
                  <button type="submit" id="submitBtn" class="partner-submit-btn">
                    <span id="submitBtnText">Register Your Institution</span>
                    <span id="submitBtnSpinner" class="hidden"><i class="fa-solid fa-circle-notch fa-spin me-1.5"></i> Submitting...</span>
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                  </button>
                  <p class="text-[11.5px] text-center text-forest/50 mt-2.5">
                    Confidential · Direct Young Chanakya X Executive Access
                  </p>
                </div>

              </div>
            </form>

            {{-- SUCCESS STATE --}}
            <div id="formSuccessState" @if(!session('success')) hidden @endif class="py-8 text-center">
              <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-forest text-peach">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <h3 class="mt-4 text-2xl font-bold text-forest">Registration Received</h3>
              <p class="mx-auto mt-2 max-w-sm text-xs leading-relaxed text-forest/75">
                Thank you for connecting with <strong>The Education Business Room</strong>. Our curation team will review your profile and reach out within 2–3 working days to coordinate the conversation format.
              </p>
              <div class="mt-5">
                <a href="#untold-stories" class="text-xs font-bold text-forest underline underline-offset-4">
                  Explore the Leadership Stories below ↓
                </a>
              </div>
            </div>

            <p id="liveStatus" aria-live="polite" class="sr-only"></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ============================================================
       02. WHO IS THIS CONVERSATION FOR? (6 Education Leader Profiles)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-white border-b border-cream-edge overflow-hidden">
    <style>
      .profile-card {
        position: relative;
        border-radius: 1rem;
        overflow: hidden;
        height: 290px;
        cursor: default;
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 4px 20px rgba(12, 58, 48, 0.08);
        width: 100%;
      }
      @media (min-width: 640px) {
        .profile-card {
          height: 350px;
          border-radius: 1.15rem;
        }
      }
      @media (min-width: 1024px) {
        .profile-card {
          height: 420px;
          border-radius: 1.25rem;
        }
      }
      .profile-card:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 20px 40px rgba(12, 58, 48, 0.18);
        z-index: 2;
      }
      .profile-card img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .profile-card:hover img {
        transform: scale(1.07);
      }
      .profile-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(7, 24, 20, 0.94) 0%, rgba(7, 24, 20, 0.58) 50%, rgba(7, 24, 20, 0.08) 100%);
        transition: background 0.4s ease;
      }
      .profile-card:hover .profile-card-overlay {
        background: linear-gradient(to top, rgba(12, 58, 48, 0.97) 0%, rgba(12, 58, 48, 0.65) 55%, rgba(12, 58, 48, 0.10) 100%);
      }
      .profile-card-accent {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #ffd2b1, #f0b489);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
      }
      .profile-card:hover .profile-card-accent {
        transform: scaleX(1);
      }
      .profile-card-body {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 0.85rem 0.65rem;
        z-index: 2;
      }
      @media (min-width: 640px) {
        .profile-card-body {
          padding: 1rem 0.75rem;
        }
      }
      @media (min-width: 1024px) {
        .profile-card-body {
          padding: 1.15rem 0.65rem;
        }
      }
      @media (min-width: 1280px) {
        .profile-card-body {
          padding: 1.25rem 0.85rem;
        }
      }
      .profile-card-title {
        font-size: 0.80rem;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.25;
        margin-bottom: 0.25rem;
        letter-spacing: -0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @media (min-width: 640px) {
        .profile-card-title {
          font-size: 0.88rem;
          margin-bottom: 0.3rem;
        }
      }
      @media (min-width: 1024px) {
        .profile-card-title {
          font-size: 0.80rem;
          margin-bottom: 0.35rem;
          letter-spacing: -0.25px;
        }
      }
      @media (min-width: 1280px) {
        .profile-card-title {
          font-size: 0.86rem;
        }
      }
      @media (min-width: 1440px) {
        .profile-card-title {
          font-size: 0.92rem;
        }
      }
      .profile-card-desc {
        font-size: 0.68rem;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.82);
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }
      @media (min-width: 640px) {
        .profile-card-desc {
          font-size: 0.7rem;
        }
      }
      @media (min-width: 1024px) {
        .profile-card-desc {
          font-size: 0.72rem;
          line-height: 1.45;
        }
      }
    </style>
    <div class="mx-auto max-w-[1440px] px-3.5 sm:px-6 lg:px-6 xl:px-8">
      
      <div class="text-center max-w-2xl mx-auto">
        <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          The Leadership Circle
        </span>
        <h2 class="mt-4 text-2xl sm:text-4xl lg:text-[2.75rem] font-black text-forest" style="letter-spacing:-1.2px;">
          Who Is This Conversation For?
        </h2>
        <p class="mt-3 sm:mt-4 text-forest/75 text-sm sm:text-[1.05rem] leading-relaxed">
          For leaders shaping institutions and inspiring the next generation.
        </p>
      </div>

      {{-- 6 Vertical Image Cards — 2 per row on mobile, 6 in one row on desktop --}}
      <div class="mt-8 sm:mt-12 lg:mt-14 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-3.5 lg:gap-4 items-stretch">

        {{-- Card 1: College Correspondents --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80"
               alt="College Correspondents" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="College Correspondents">College Correspondents</h3>
            <p class="profile-card-desc">Preserving core values and generational legacy.</p>
          </div>
        </article>

        {{-- Card 2: College Chairpersons --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80"
               alt="College Chairpersons" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="College Chairpersons">College Chairpersons</h3>
            <p class="profile-card-desc">Steering campus vision and strategic growth.</p>
          </div>
        </article>

        {{-- Card 3: School Founders & Owners --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=700&q=80"
               alt="School Founders & Owners" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="School Founders & Owners">School Founders &amp; Owners</h3>
            <p class="profile-card-desc">Building enduring campuses with conviction.</p>
          </div>
        </article>

        {{-- Card 4: Principals & Directors --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=700&q=80"
               alt="Principals & Directors" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="Principals & Directors">Principals &amp; Directors</h3>
            <p class="profile-card-desc">Fostering teaching culture and student success.</p>
          </div>
        </article>

        {{-- Card 5: Education Entrepreneurs --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80"
               alt="Education Entrepreneurs" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="Education Entrepreneurs">Education Entrepreneurs</h3>
            <p class="profile-card-desc">Pioneering modern skill-first models.</p>
          </div>
        </article>

        {{-- Card 6: Trustees & Board Members --}}
        <article class="profile-card group">
          <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=700&q=80"
               alt="Trustees & Board Members" loading="lazy" />
          <div class="profile-card-overlay"></div>
          <div class="profile-card-accent"></div>
          <div class="profile-card-body">
            <h3 class="profile-card-title" title="Trustees & Board Members">Trustees &amp; Board Members</h3>
            <p class="profile-card-desc">Guiding governance and strategic capital.</p>
          </div>
        </article>

      </div>

    </div>
  </section>

  {{-- ============================================================
       03. THE UNTOLD STORIES OF THE PEOPLE WHO BUILT THE CAMPUS
       ============================================================ --}}
  <section id="untold-stories" class="py-16 sm:py-20 lg:py-24 text-white relative overflow-hidden border-t border-b border-white/5"
           style="background: #09101a; background: linear-gradient(175deg, #0d1522 0%, #09101a 50%, #050a10 100%);">
    {{-- Soft Ambient Glows Matching Deep Slate Midnight Theme --}}
    <div class="pointer-events-none absolute -top-32 right-1/4 h-[550px] w-[550px] rounded-full bg-cyan-950/20 blur-3xl opacity-60" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 left-1/4 h-[450px] w-[450px] rounded-full bg-blue-950/25 blur-3xl opacity-60" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8 relative z-10">
      
      <div class="grid items-center gap-10 lg:grid-cols-12 lg:gap-14">
        
        {{-- Left Side: Narrative & Animated CTA (Masters' Union Style) --}}
        <div class="lg:col-span-5">

          <h2 class="text-2xl sm:text-4xl lg:text-[2.65rem] xl:text-[3rem] font-black leading-[1.15] text-white" style="letter-spacing:-1.2px;">
            The Untold Stories of <br class="hidden sm:inline" />
            the People Who <br />
            <span class="italic font-serif font-normal" style="color: #ffd2b1;">Built the</span>
            <span class="italic font-serif font-normal" style="color: #6ee7b7;">Campus.</span>
          </h2>

          <p class="mt-4 text-[0.95rem] sm:text-[1.02rem] leading-relaxed text-slate-300">
            Every great campus begins with an authentic story of risk, resilience, and turning points. We bring these foundational journeys to light — unscripted, reflective, and deeply valuable for the education community.
          </p>

          {{-- 4 Core Focus Areas with Brand Favicon Chips --}}
          <div class="mt-7 flex flex-wrap gap-2.5">
            {{-- 01. Founder Conversations --}}
            <div class="inline-flex items-center gap-2.5 px-3.5 py-2 rounded-xl border border-white/10 bg-white/[0.05] hover:border-white/20 hover:bg-white/[0.08] transition-all duration-300 group shadow-xs cursor-default">
              <span class="w-6 h-6 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition-all duration-300">
                <img src="{{ asset('images/fav-icon/icon.png') }}" class="w-3.5 h-3.5 object-contain" alt="YCX" />
              </span>
              <span class="text-xs sm:text-[13px] font-normal text-slate-200 group-hover:text-white">Founder Conversations</span>
            </div>

            {{-- 02. Campus Heritage --}}
            <div class="inline-flex items-center gap-2.5 px-3.5 py-2 rounded-xl border border-white/10 bg-white/[0.05] hover:border-white/20 hover:bg-white/[0.08] transition-all duration-300 group shadow-xs cursor-default">
              <span class="w-6 h-6 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition-all duration-300">
                <img src="{{ asset('images/fav-icon/icon.png') }}" class="w-3.5 h-3.5 object-contain" alt="YCX" />
              </span>
              <span class="text-xs sm:text-[13px] font-normal text-slate-200 group-hover:text-white">Campus Heritage</span>
            </div>

            {{-- 03. Education Innovation --}}
            <div class="inline-flex items-center gap-2.5 px-3.5 py-2 rounded-xl border border-white/10 bg-white/[0.05] hover:border-white/20 hover:bg-white/[0.08] transition-all duration-300 group shadow-xs cursor-default">
              <span class="w-6 h-6 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition-all duration-300">
                <img src="{{ asset('images/fav-icon/icon.png') }}" class="w-3.5 h-3.5 object-contain" alt="YCX" />
              </span>
              <span class="text-xs sm:text-[13px] font-normal text-slate-200 group-hover:text-white">Education Innovation</span>
            </div>

            {{-- 04. Business of Education --}}
            <div class="inline-flex items-center gap-2.5 px-3.5 py-2 rounded-xl border border-white/10 bg-white/[0.05] hover:border-white/20 hover:bg-white/[0.08] transition-all duration-300 group shadow-xs cursor-default">
              <span class="w-6 h-6 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center shrink-0 group-hover:scale-110 transition-all duration-300">
                <img src="{{ asset('images/fav-icon/icon.png') }}" class="w-3.5 h-3.5 object-contain" alt="YCX" />
              </span>
              <span class="text-xs sm:text-[13px] font-normal text-slate-200 group-hover:text-white">Business of Education</span>
            </div>
          </div>

          {{-- Masters' Union Style Pill Button with Animated Dual-Arrow --}}
          <div class="mt-8">
            <a href="#founder-form" class="btn-breather">
              <span>Register Your Campus Story</span>
              <span class="arrow-wrap">
                <i class="fa-solid fa-arrow-right arrow-icon arrow-icon-1"></i>
                <i class="fa-solid fa-arrow-right arrow-icon arrow-icon-2"></i>
              </span>
            </a>
          </div>
        </div>

        {{-- Right Side: Dual-Column Infinite Vertical Marquee (Masters' Union Style) --}}
        <div class="lg:col-span-7">
          <div class="breather-marquee-container">
            <div class="grid grid-cols-2 gap-3.5 sm:gap-4 lg:gap-5 h-full">

              {{-- Column 1: Scrolls Upwards --}}
              <div class="breather-col-track breather-marquee-col-up">
                
                {{-- Set 1 --}}
                <div class="breather-card group">
                  <img src="{{ asset('images/assets/education-leaders-meeting.jpg') }}" alt="Founding Chancellor dialogue" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/media/index-page/founder.webp') }}" alt="Campus Architect & Trustee" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/media/share-your-story/entrepreneur-journey.jpg') }}" alt="Vice Chancellor leadership" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/assets/story-01-beginning.jpg') }}" alt="Campus Blueprint & Genesis" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/media/index-page/educators.webp') }}" alt="Dean of Innovation" loading="lazy" />
                </div>

                {{-- Cloned Set for Seamless Infinite Loop --}}
                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/assets/education-leaders-meeting.jpg') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/media/index-page/founder.webp') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/media/share-your-story/entrepreneur-journey.jpg') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/assets/story-01-beginning.jpg') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/media/index-page/educators.webp') }}" alt="" loading="lazy" />
                </div>

              </div>

              {{-- Column 2: Scrolls Downwards --}}
              <div class="breather-col-track breather-marquee-col-down">
                
                {{-- Set 1 --}}
                <div class="breather-card group">
                  <img src="{{ asset('images/assets/story-04-lesson.jpg') }}" alt="Campus Heritage Architecture" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/media/share-your-story/leadership-experience.webp') }}" alt="Executive President dialogue" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/assets/story-03-turning-point.jpg') }}" alt="The Breakthrough Milestone" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/media/index-page/business-leaders.webp') }}" alt="Founding Mentor" loading="lazy" />
                </div>

                <div class="breather-card group">
                  <img src="{{ asset('images/assets/story-05-future.jpg') }}" alt="Convocation & Legacy" loading="lazy" />
                </div>

                {{-- Cloned Set for Seamless Infinite Loop --}}
                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/assets/story-04-lesson.jpg') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/media/share-your-story/leadership-experience.webp') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/assets/story-03-turning-point.jpg') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/media/index-page/business-leaders.webp') }}" alt="" loading="lazy" />
                </div>

                <div class="breather-card group" aria-hidden="true">
                  <img src="{{ asset('images/assets/story-05-future.jpg') }}" alt="" loading="lazy" />
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       04. THE FOUNDER STORY — Horizontal Accordion
       ============================================================ --}}
  <section id="founder-story" class="relative overflow-hidden py-16 sm:py-24 px-3.5 sm:px-6 lg:px-8 bg-white border-t border-b border-[#f4eae2]">

    {{-- Subtle Indian Saffron Ambient Aura --}}
    <div class="pointer-events-none absolute -top-28 left-1/2 -translate-x-1/2 h-[420px] w-[680px] rounded-full blur-3xl opacity-30" style="background: radial-gradient(circle, rgba(249, 115, 22, 0.22) 0%, rgba(254, 215, 170, 0.1) 50%, transparent 70%);" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-20 right-10 h-[360px] w-[420px] rounded-full blur-3xl opacity-20" style="background: radial-gradient(circle, rgba(234, 88, 12, 0.16) 0%, transparent 70%);" aria-hidden="true"></div>

    {{-- Section Header --}}
    <div class="text-center max-w-5xl mx-auto mb-10 sm:mb-16 relative z-10 px-2 sm:px-4">
      <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest inline-block">
        Your Journey Matters
      </span>
      <h2 class="mt-4 sm:mt-6 text-2xl sm:text-4xl lg:text-[2.85rem] xl:text-[3.25rem] font-extrabold leading-tight text-forest" style="letter-spacing:-1.2px;">
        Your Story in Five Powerful Chapters
      </h2>
      <p class="mt-3 sm:mt-5 text-sm sm:text-lg leading-relaxed max-w-2xl mx-auto text-forest/75 font-normal">
        Every institution carries a story that goes far deeper than its prospectus. We help you tell it.
      </p>
    </div>

    {{-- Horizontal Accordion --}}
    <div class="story-accordion relative z-10">

      {{-- Panel 01 — The Beginning --}}
      <div class="story-panel" role="button" tabindex="0" aria-expanded="false" aria-label="Chapter 1: The Beginning" style="--panel-img:url('{{ asset('images/assets/story-01-beginning.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Beginning</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-seedling mr-3 text-[#ff9e58]"></i>The Beginning</h3>
          <p class="panel-text">Why did you start? What was the personal conviction that made you lay the first foundation stone?</p>
        </div>
      </div>

      {{-- Panel 02 — The Struggle --}}
      <div class="story-panel" role="button" tabindex="0" aria-expanded="false" aria-label="Chapter 2: The Struggle" style="--panel-img:url('{{ asset('images/assets/story-02-struggle.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Struggle</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-fire mr-3 text-[#ff9e58]"></i>The Struggle</h3>
          <p class="panel-text">What almost broke the vision? The financial storms, regulatory walls, and sleepless nights that tested everything.</p>
        </div>
      </div>

      {{-- Panel 03 — The Turning Point --}}
      <div class="story-panel" role="button" tabindex="0" aria-expanded="false" aria-label="Chapter 3: The Turning Point" style="--panel-img:url('{{ asset('images/assets/story-03-turning-point.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Turning Point</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-sun mr-3 text-[#ff9e58]"></i>The Turning Point</h3>
          <p class="panel-text">What changed everything? The breakthrough moment when the institution crossed into public trust and recognition.</p>
        </div>
      </div>

      {{-- Panel 04 — The Lesson --}}
      <div class="story-panel" role="button" tabindex="0" aria-expanded="false" aria-label="Chapter 4: The Lesson" style="--panel-img:url('{{ asset('images/assets/story-04-lesson.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Lesson</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-compass mr-3 text-[#ff9e58]"></i>The Lesson</h3>
          <p class="panel-text">What did the journey teach you? Hard-won principles that every aspiring education founder needs to hear.</p>
        </div>
      </div>

      {{-- Panel 05 — The Future --}}
      <div class="story-panel" role="button" tabindex="0" aria-expanded="false" aria-label="Chapter 5: The Future" style="--panel-img:url('{{ asset('images/assets/story-05-future.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Future</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-rocket mr-3 text-[#ff9e58]"></i>The Future</h3>
          <p class="panel-text">Where is education heading next? How you're positioning your institution and its students for an AI-native world.</p>
        </div>
      </div>

    </div>

    <style>
      /* ── Horizontal Story Accordion ── */
      .story-accordion {
        display: flex;
        width: 100%;
        max-width: 1400px;
        height: 560px;
        gap: 14px;
        margin: 0 auto;
      }

      .story-panel {
        position: relative;
        flex: 1;
        min-width: 0;
        border-radius: 28px;
        overflow: hidden;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background: var(--panel-img) center/cover no-repeat;
        transition: flex 0.65s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s ease, border-color 0.4s ease;
        outline: none;
        box-shadow: 0 12px 30px -8px rgba(12, 58, 48, 0.12), 0 4px 12px -2px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(230, 215, 200, 0.5);
      }

      .story-panel:focus-visible {
        box-shadow: 0 0 0 3px rgba(232, 98, 29, 0.4);
      }

      .panel-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(8,16,12,0.94) 0%, rgba(8,16,12,0.58) 45%, rgba(8,16,12,0.18) 100%);
        transition: background 0.45s ease;
      }

      /* Inactive panel hover aesthetic */
      .story-panel:not(:hover) .panel-overlay {
        background: linear-gradient(to top, rgba(8,16,12,0.88) 0%, rgba(8,16,12,0.48) 45%, rgba(8,16,12,0.12) 100%);
      }

      .panel-vtitle {
        position: absolute;
        bottom: 34px;
        left: 0;
        right: 0;
        margin: 0 auto;
        padding: 0 16px;
        text-align: center;
        font-size: clamp(1.1rem, 1.25vw, 1.35rem);
        font-weight: 800;
        letter-spacing: 0.5px;
        line-height: 1.3;
        color: #ffffff;
        writing-mode: horizontal-tb;
        text-orientation: mixed;
        z-index: 3;
        transition: opacity 0.3s ease, transform 0.3s ease, color 0.3s ease;
        text-shadow: 0 2px 14px rgba(0,0,0,0.95), 0 0 20px rgba(0,0,0,0.9);
        pointer-events: none;
      }

      .panel-detail {
        position: relative;
        z-index: 3;
        padding: 44px 40px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.4s cubic-bezier(0.25, 1, 0.5, 1), transform 0.45s cubic-bezier(0.25, 1, 0.5, 1);
        transition-delay: 0s;
        min-width: 320px;
        pointer-events: none;
      }

      .panel-heading {
        font-size: 2.15rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        text-shadow: 0 2px 12px rgba(0,0,0,0.9);
      }

      .panel-text {
        font-size: 1.2rem;
        font-weight: 400;
        color: #ffffff;
        line-height: 1.75;
        text-shadow: 0 2px 10px rgba(0,0,0,0.95);
        max-width: 700px;
      }

      /* ── Desktop: Expand and show description ONLY on hover ── */
      @media (min-width: 901px) {
        .story-panel {
          flex: 1;
        }

        .story-panel .panel-vtitle {
          opacity: 1;
          transform: translateY(0);
        }

        .story-panel .panel-detail {
          opacity: 0;
          transform: translateY(20px);
          pointer-events: none;
        }

        /* Description text is hidden until hovered */
        .story-panel .panel-text {
          opacity: 0;
          transform: translateY(10px);
          transition: opacity 0.35s ease 0.12s, transform 0.35s ease 0.12s;
        }

        /* By default (when accordion is not hovered), first card is showcase-expanded */
        .story-accordion:not(:hover) .story-panel:first-child {
          flex: 5;
          border-color: rgba(232, 98, 29, 0.45);
          box-shadow: 0 22px 48px -10px rgba(12, 58, 48, 0.28);
        }

        .story-accordion:not(:hover) .story-panel:first-child .panel-overlay {
          background: linear-gradient(to top, rgba(8,16,12,0.97) 0%, rgba(8,16,12,0.82) 45%, rgba(8,16,12,0.25) 100%);
        }

        .story-accordion:not(:hover) .story-panel:first-child .panel-vtitle {
          opacity: 0 !important;
          visibility: hidden !important;
          pointer-events: none !important;
          transform: translateY(8px) !important;
        }

        .story-accordion:not(:hover) .story-panel:first-child .panel-detail {
          opacity: 1 !important;
          transform: translateY(0) !important;
          pointer-events: auto !important;
        }

        .story-accordion:not(:hover) .story-panel:first-child .panel-text {
          opacity: 1 !important;
          transform: translateY(0) !important;
          color: rgba(255, 255, 255, 0.95) !important;
        }

        /* Hover: expands any hovered panel to flex 5 and shows description */
        .story-panel:hover,
        .story-panel:focus-visible {
          flex: 5;
          border-color: rgba(232, 98, 29, 0.45);
          box-shadow: 0 22px 48px -10px rgba(12, 58, 48, 0.28);
          cursor: pointer;
        }

        .story-panel:hover .panel-overlay,
        .story-panel:focus-visible .panel-overlay {
          background: linear-gradient(to top, rgba(8,16,12,0.97) 0%, rgba(8,16,12,0.82) 45%, rgba(8,16,12,0.25) 100%);
        }

        .story-panel:hover .panel-vtitle,
        .story-panel:focus-visible .panel-vtitle {
          opacity: 0 !important;
          visibility: hidden !important;
          pointer-events: none !important;
          transform: translateY(8px) !important;
        }

        .story-panel:hover .panel-detail,
        .story-panel:focus-visible .panel-detail {
          opacity: 1 !important;
          transform: translateY(0) !important;
          pointer-events: auto !important;
          transition-delay: 0.12s;
        }

        .story-panel:hover .panel-text,
        .story-panel:focus-visible .panel-text {
          opacity: 1 !important;
          transform: translateY(0) !important;
          color: rgba(255, 255, 255, 0.95) !important;
        }

        .story-accordion:hover .story-panel:not(:hover) {
          flex: 1;
        }
      }

      /* ── Mobile: stack vertically and show full title + description for all cards ── */
      @media (max-width: 900px) {
        .story-accordion {
          flex-direction: column;
          height: auto;
          gap: 18px;
        }

        .story-panel {
          min-height: 360px;
          flex: none !important;
          border-radius: 22px;
          background-position: center center;
          cursor: default;
          box-shadow: 0 10px 26px -6px rgba(12, 58, 48, 0.14);
          border: 1px solid rgba(230, 215, 200, 0.5);
        }

        @media (min-width: 500px) {
          .story-panel {
            min-height: 400px;
          }
        }

        .story-panel .panel-overlay {
          background: linear-gradient(to top, rgba(4,8,6,0.96) 0%, rgba(4,8,6,0.85) 45%, rgba(4,8,6,0.3) 75%, rgba(4,8,6,0.05) 100%) !important;
        }

        .panel-vtitle {
          display: none !important;
        }

        .panel-detail {
          min-width: auto;
          padding: 24px 20px;
          opacity: 1 !important;
          transform: none !important;
          pointer-events: auto !important;
        }

        .panel-heading {
          font-size: 1.35rem;
          margin-bottom: 8px;
        }

        .panel-text {
          font-size: 0.95rem;
          line-height: 1.55;
          opacity: 1 !important;
          transform: none !important;
        }
      }
    </style>

  </section>

  {{-- ============================================================
       05. WHAT WE TALK ABOUT (Thematic Executive Discourse)
       ============================================================ --}}
  <section id="what-we-talk-about" class="py-16 sm:py-24 lg:py-28 bg-[#fbf8f3] border-b border-cream-edge relative overflow-hidden">
    {{-- Soft Ambient Aura --}}
    <div class="pointer-events-none absolute -top-32 right-10 h-[420px] w-[500px] rounded-full bg-peach/20 blur-3xl opacity-60" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 left-10 h-[380px] w-[450px] rounded-full bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8 relative z-10">

      {{-- Section Header: Title & Description on Left, Pill Badge on Right --}}
      <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-10 sm:mb-14">
        <div class="max-w-2xl">
          <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest inline-block shadow-2xs">
            Curated Discourse
          </span>
          <h2 class="mt-4 text-2xl sm:text-4xl lg:text-[2.75rem] font-black text-forest leading-tight" style="letter-spacing:-1.2px;">
            What We Talk About
          </h2>
          <p class="mt-3 text-sm sm:text-base text-forest/75 leading-relaxed font-normal">
            Conversations anchored in decisive themes governing modern Indian and global education. Real challenges, strategic decisions, and leadership conviction.
          </p>
        </div>

      </div>

      {{-- 6 Thematic Cards (Clean, Easy-to-Scan Grid) --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">

        {{-- Card 01: Founder Journeys & Leadership --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="Founder Journeys & Leadership" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              Founder Journeys &amp; Leadership
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              Real stories of conviction, governance, and building institutions that endure.
            </p>
          </div>
        </article>

        {{-- Card 02: AI, ERP & Campus Tech --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="AI, ERP & Campus Tech" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              AI, ERP &amp; Campus Tech
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              How campuses adopt AI, modernize ERP systems, and build smarter learning environments.
            </p>
          </div>
        </article>

        {{-- Card 03: The Future of Education --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/3184328/pexels-photo-3184328.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="The Future of Education" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              The Future of Education
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              From rote learning to skill-first, globally relevant education models.
            </p>
          </div>
        </article>

        {{-- Card 04: The Business of Education --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="The Business of Education" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              The Business of Education
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              Fee structures, faculty retention, and the economics of scaling campuses.
            </p>
          </div>
        </article>

        {{-- Card 05: Transformation & Turnarounds --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="Transformation & Turnarounds" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              Transformation &amp; Turnarounds
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              Legacy institutions adapting, rebranding, and reclaiming relevance.
            </p>
          </div>
        </article>

        {{-- Card 06: Social Impact & Nation Building --}}
        <article class="talk-card group">
          <div class="talk-card-image">
            <img src="https://images.pexels.com/photos/3184654/pexels-photo-3184654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                 alt="Social Impact & Nation Building" 
                 loading="lazy" />
          </div>
          <div class="p-5 sm:p-6 flex flex-col flex-1">
            <h3 class="text-base sm:text-lg font-bold text-forest leading-snug line-clamp-2 group-hover:text-forest-mid transition-colors">
              Social Impact &amp; Nation Building
            </h3>
            <p class="mt-2 text-xs sm:text-[13px] text-forest/75 leading-relaxed">
              Quality education reaching Tier 2/3 cities and first-generation learners.
            </p>
          </div>
        </article>

      </div>

    </div>
  </section>

  {{-- ============================================================
       06. WHY JOIN THE CONVERSATION? (6 Value Propositions)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-24 border-b border-[#e8ded2] relative overflow-hidden"
           style="background: #faf6f0;">
    {{-- Ambient subtle glows --}}
    <div class="pointer-events-none absolute -top-40 right-1/4 h-[500px] w-[500px] rounded-full bg-peach/20 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 left-1/4 h-[400px] w-[400px] rounded-full bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto px-4 sm:px-6 lg:px-8 relative z-10" style="max-width:1400px;">

      @php
      $topCards = [
        [
          'title' => 'Professional Broadcast Recording',
          'desc'  => 'Studio-grade 4K multi-camera filming and cinematic post-production.',
          'image' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=900&q=80',
          'alt'   => 'Professional broadcast recording studio'
        ],
        [
          'title' => 'Elevated Digital Presence',
          'desc'  => 'Distribution across YouTube, Spotify, LinkedIn, and the YCX network.',
          'image' => 'https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=900&q=80',
          'alt'   => 'Digital presence and multi-platform distribution'
        ],
      ];

      $bottomCards = [
        [
          'title' => 'Authoritative Thought Leadership',
          'desc'  => 'Positioning your leadership as a trusted national benchmark.',
          'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80',
          'alt'   => 'Authoritative thought leadership on national stage'
        ],
        [
          'title' => 'Closed-Door Founder Network',
          'desc'  => 'Exclusive peer roundtables with chairpersons of 120+ institutions.',
          'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80',
          'alt'   => 'Closed-door roundtables and founder network'
        ],
        [
          'title' => 'Institutional Storytelling',
          'desc'  => 'Inspiring genuine trust and heritage among parents, students, and alumni.',
          'image' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80',
          'alt'   => 'Historic campus heritage and institutional storytelling'
        ],
        [
          'title' => 'Direct Student Programs',
          'desc'  => 'Masterclasses, industry speakers, and student ambassador connects.',
          'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80',
          'alt'   => 'Direct student masterclasses and campus programs'
        ],
      ];
      @endphp

      {{-- Row 1: Left content (1 col) + 2 Cards (2 cols) on desktop --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-4.5 xl:gap-5 items-stretch">
        
        {{-- Left Content Block --}}
        <div class="flex flex-col justify-center pr-0 lg:pr-6 py-1 sm:py-2 col-span-1 md:col-span-2 lg:col-span-1">
          <div>
            <span class="inline-flex items-center gap-2 rounded-full px-3.5 py-1.5 text-[11px] font-bold uppercase tracking-wider mb-3 sm:mb-3.5 border border-forest/15 shadow-xs"
                  style="background: rgba(255, 210, 177, 0.5); color: #0c3a30;">
              <span class="h-1.5 w-1.5 rounded-full bg-forest"></span>
              Tangible Value
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-[40px] xl:text-[42px] font-black text-forest leading-[1.12] mb-2.5 sm:mb-3"
                style="letter-spacing:-1px;">
              Why Be Part of the <span style="color:#c8743a;">Conversation?</span>
            </h2>
            <p class="text-sm sm:text-[15px] leading-relaxed text-forest/75 max-w-md">
              Your story, your platform, your institutional legacy — magnified on the national stage. We invite visionary leaders to elevate their campus journey.
            </p>
          </div>

          <div class="mt-4 sm:mt-5">
            <a href="#founder-form"
               class="inline-flex items-center gap-2.5 rounded-full px-5 sm:px-6 py-2.5 sm:py-3 text-xs sm:text-sm font-bold text-white transition-all duration-300 shadow-sm hover:shadow-lg hover:gap-3.5 group"
               style="background: #0c3a30;">
              <span>Explore the community</span>
              <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
          </div>
        </div>

        {{-- Top Row 2 Cards --}}
        @foreach($topCards as $card)
        <article class="group bg-white rounded-2xl sm:rounded-[22px] overflow-hidden border border-[#e8ded2] shadow-xs hover:shadow-xl hover:-translate-y-1 hover:border-forest/30 transition-all duration-300 flex flex-col">
          <div class="h-44 sm:h-48 lg:h-50 w-full overflow-hidden relative bg-[#f2ece2]">
            <img src="{{ $card['image'] }}" 
                 alt="{{ $card['alt'] }}" 
                 class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" 
                 loading="lazy" />
          </div>
          <div class="pt-3.5 pb-4 px-4 sm:pt-4 sm:pb-4.5 sm:px-5 flex flex-col flex-1 justify-start bg-white">
            <h3 class="text-[16px] sm:text-[17px] font-bold text-forest leading-snug group-hover:text-[#c8743a] transition-colors mb-1 sm:mb-1.5">
              {{ $card['title'] }}
            </h3>
            <p class="text-xs sm:text-[13px] leading-relaxed text-forest/70">
              {{ $card['desc'] }}
            </p>
          </div>
        </article>
        @endforeach

      </div>

      {{-- Row 2: 4 Cards on desktop --}}
      <div class="mt-4 sm:mt-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5 lg:gap-4 xl:gap-4.5">
        @foreach($bottomCards as $card)
        <article class="group bg-white rounded-2xl sm:rounded-[22px] overflow-hidden border border-[#e8ded2] shadow-xs hover:shadow-xl hover:-translate-y-1 hover:border-forest/30 transition-all duration-300 flex flex-col">
          <div class="h-36 sm:h-40 lg:h-44 w-full overflow-hidden relative bg-[#f2ece2]">
            <img src="{{ $card['image'] }}" 
                 alt="{{ $card['alt'] }}" 
                 class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" 
                 loading="lazy" />
          </div>
          <div class="pt-3.5 pb-4 px-4 sm:pt-4 sm:pb-4.5 sm:px-5 flex flex-col flex-1 justify-start bg-white">
            <h3 class="text-[16px] sm:text-[17px] font-bold text-forest leading-snug group-hover:text-[#c8743a] transition-colors mb-1 sm:mb-1.5">
              {{ $card['title'] }}
            </h3>
            <p class="text-xs sm:text-[13px] leading-relaxed text-forest/70">
              {{ $card['desc'] }}
            </p>
          </div>
        </article>
        @endforeach
      </div>

    </div>
  </section>

  {{-- ============================================================
  {{-- ============================================================
  {{-- ============================================================
       07. HOW THE CONVERSATION WORKS — Light Theme: Forest Green, Peach & White
       ============================================================ --}}
  <section id="how-it-works" class="relative overflow-hidden border-y border-[#e8ded2]"
           style="background: linear-gradient(180deg, #fbf8f4 0%, #f7f2ea 50%, #f4ede2 100%);">

    {{-- Subtle luxury ambient radial glows --}}
    <div class="pointer-events-none absolute inset-0" aria-hidden="true"
         style="background-image: radial-gradient(circle at 15% 15%, rgba(255,210,177,0.35) 0%, transparent 45%), radial-gradient(circle at 85% 85%, rgba(12,58,48,0.06) 0%, transparent 45%);"></div>

    <div class="relative z-10 mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-14 lg:py-16" style="max-width:1400px;">

      {{-- ── Header ── --}}
      <div class="text-center mb-8 sm:mb-10">
        <span class="inline-flex items-center gap-2 rounded-full px-3.5 py-1 text-xs font-bold uppercase tracking-wider mb-2.5 bg-white/90 border border-forest/15 text-forest shadow-xs">
          <span class="h-2 w-2 rounded-full bg-[#c8743a] animate-pulse"></span>
          The Production Journey
        </span>
        <h2 class="text-3xl sm:text-4xl lg:text-[2.65rem] font-black leading-tight mb-2 text-forest"
            style="letter-spacing:-1.2px;">
          How the <span style="color:#c8743a;">Conversation</span> Works
        </h2>
        <p class="text-sm sm:text-[15px] max-w-xl mx-auto leading-relaxed"
           style="color:rgba(12, 58, 48, 0.72);">
          Zero rehearsed scripts, zero gotcha questions — total respect for your schedule and your story.
        </p>
      </div>

      {{-- Step Data Array strictly in theme colours: rgb(12, 58, 48), #ffd2b1 & white --}}
      @php
      $lightSteps = [
        [
          'num'         => '01',
          'ring'        => 'linear-gradient(135deg, rgb(12, 58, 48) 0%, #ffd2b1 50%, #ffffff 100%)',
          'inner_bg'    => 'rgb(12, 58, 48)',
          'inner_border'=> '1px solid rgba(255,210,177,0.3)',
          'step_color'  => '#ffd2b1',
          'num_color'   => '#ffffff',
          'glow'        => 'rgba(12, 58, 48, 0.25)',
          'icon'        => 'fa-feather-pointed',
          'ic'          => 'rgb(12, 58, 48)',
          'ibg'         => 'rgba(12, 58, 48, 0.08)',
          'iborder'     => 'rgba(12, 58, 48, 0.20)',
          'title'       => 'Profile Discovery',
          'body'        => 'Share your foundational milestones and campus journey.'
        ],
        [
          'num'         => '02',
          'ring'        => 'linear-gradient(135deg, #ffd2b1 0%, #ffffff 50%, rgb(12, 58, 48) 100%)',
          'inner_bg'    => '#ffffff',
          'inner_border'=> '1px solid rgba(12, 58, 48, 0.12)',
          'step_color'  => '#c8743a',
          'num_color'   => 'rgb(12, 58, 48)',
          'glow'        => 'rgba(200, 116, 58, 0.25)',
          'icon'        => 'fa-compass-drafting',
          'ic'          => '#c8743a',
          'ibg'         => 'rgba(255, 210, 177, 0.35)',
          'iborder'     => 'rgba(200, 116, 58, 0.35)',
          'title'       => 'Narrative Blueprint',
          'body'        => 'Our editorial team curates your bespoke conversational themes.'
        ],
        [
          'num'         => '03',
          'ring'        => 'linear-gradient(135deg, rgb(12, 58, 48) 0%, #ffd2b1 50%, #ffffff 100%)',
          'inner_bg'    => 'rgb(12, 58, 48)',
          'inner_border'=> '1px solid rgba(255,210,177,0.3)',
          'step_color'  => '#ffd2b1',
          'num_color'   => '#ffffff',
          'glow'        => 'rgba(12, 58, 48, 0.25)',
          'icon'        => 'fa-headset',
          'ic'          => 'rgb(12, 58, 48)',
          'ibg'         => 'rgba(12, 58, 48, 0.08)',
          'iborder'     => 'rgba(12, 58, 48, 0.20)',
          'title'       => 'Host Alignment',
          'body'        => 'Private briefing to align core themes and recording flow.'
        ],
        [
          'num'         => '04',
          'ring'        => 'linear-gradient(135deg, #ffd2b1 0%, #ffffff 50%, rgb(12, 58, 48) 100%)',
          'inner_bg'    => '#ffffff',
          'inner_border'=> '1px solid rgba(12, 58, 48, 0.12)',
          'step_color'  => '#c8743a',
          'num_color'   => 'rgb(12, 58, 48)',
          'glow'        => 'rgba(200, 116, 58, 0.25)',
          'icon'        => 'fa-microphone-lines',
          'ic'          => '#c8743a',
          'ibg'         => 'rgba(255, 210, 177, 0.35)',
          'iborder'     => 'rgba(200, 116, 58, 0.35)',
          'title'       => 'The Conversation',
          'body'        => 'Relaxed, unscripted dialogue filmed on campus or in studio.'
        ],
        [
          'num'         => '05',
          'ring'        => 'linear-gradient(135deg, rgb(12, 58, 48) 0%, #ffd2b1 50%, #ffffff 100%)',
          'inner_bg'    => 'rgb(12, 58, 48)',
          'inner_border'=> '1px solid rgba(255,210,177,0.3)',
          'step_color'  => '#ffd2b1',
          'num_color'   => '#ffffff',
          'glow'        => 'rgba(12, 58, 48, 0.25)',
          'icon'        => 'fa-tower-broadcast',
          'ic'          => 'rgb(12, 58, 48)',
          'ibg'         => 'rgba(12, 58, 48, 0.08)',
          'iborder'     => 'rgba(12, 58, 48, 0.20)',
          'title'       => 'National Premiere',
          'body'        => 'Episodes and spotlight reels published across all platforms.'
        ],
      ];
      @endphp

      {{-- ═══════════════════════════════
           DESKTOP: Full Horizontal Row
           Each circle & its content card aligned straight in the middle
           ═══════════════════════════════ --}}
      <div class="hidden lg:block relative">

        {{-- Connecting line straight through the center of all 5 circles (82px circle -> center 41px) --}}
        <div class="absolute top-[41px] left-[10%] right-[10%] h-[2.5px] -translate-y-1/2 z-0 rounded-full pointer-events-none"
             style="background: linear-gradient(90deg, rgb(12, 58, 48) 0%, #ffd2b1 25%, rgb(12, 58, 48) 50%, #ffd2b1 75%, rgb(12, 58, 48) 100%);
                    box-shadow: 0 2px 8px rgba(12, 58, 48, 0.15);"></div>

        <div class="grid grid-cols-5 gap-3 lg:gap-3.5 xl:gap-4 relative z-10 items-stretch">
          @foreach($lightSteps as $i => $step)
          <div class="hiw-step-col flex flex-col items-center text-center opacity-0 group"
               style="transform:translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; transition-delay:{{ $i * 120 }}ms;">
            
            {{-- Theme Circle: Reduced padding & sleeker number --}}
            <div class="relative flex items-center justify-center rounded-full mb-4 flex-shrink-0 transition-transform duration-300 group-hover:scale-105"
                 style="width:82px; height:82px; background:#ffffff;">
              <div class="absolute inset-0 rounded-full"
                   style="margin:-3px; background:{{ $step['ring'] }}; border-radius:9999px; box-shadow:0 6px 16px -2px {{ $step['glow'] }};"></div>
              <div class="absolute inset-0 rounded-full z-10 flex flex-col items-center justify-center"
                   style="background:{{ $step['inner_bg'] }}; margin:2.5px; border-radius:9999px; border:{{ $step['inner_border'] }};">
                <span class="text-[8.5px] font-bold uppercase tracking-widest leading-none mb-0.5" style="color:{{ $step['step_color'] }};">STEP</span>
                <span class="text-[21px] sm:text-[22px] font-black leading-none" style="color:{{ $step['num_color'] }};">{{ $step['num'] }}</span>
              </div>
            </div>

            {{-- Content Card: Straight in the middle directly aligned to the circle --}}
            <div class="w-full bg-white/95 rounded-2xl p-3.5 sm:p-4 xl:p-4.5 border border-[#e8ded2] shadow-xs hover:shadow-lg hover:-translate-y-1 hover:border-forest/40 transition-all duration-300 flex flex-col items-center text-center flex-1">
              <span class="h-8 w-8 rounded-lg inline-grid place-items-center mb-2 flex-shrink-0 shadow-xs"
                    style="background:{{ $step['ibg'] }}; border:1.5px solid {{ $step['iborder'] }}; color:{{ $step['ic'] }};">
                <i class="fa-solid {{ $step['icon'] }} text-sm"></i>
              </span>
              <div class="w-full flex items-center justify-center mb-1.5">
                <h3 class="text-[13.5px] sm:text-[14px] xl:text-[15px] font-bold text-forest leading-snug tracking-tight whitespace-nowrap text-center">
                  {{ $step['title'] }}
                </h3>
              </div>
              <p class="text-[11.5px] sm:text-[12px] xl:text-[12.5px] leading-relaxed text-forest/75 flex-1 flex items-center justify-center text-center">
                {{ $step['body'] }}
              </p>
            </div>

          </div>
          @endforeach
        </div>

      </div>{{-- end desktop --}}


      {{-- ═══════════════════════════════
           MOBILE: Vertical stack
           ═══════════════════════════════ --}}
      <div class="lg:hidden space-y-3">

        @foreach($lightSteps as $i => $step)
        <div class="hiw-mob-step bg-white/95 rounded-2xl p-3.5 sm:p-4 border border-[#e8ded2] shadow-xs flex items-start gap-3.5 opacity-0"
             style="transform:translateX(-20px); transition: opacity 0.55s ease, transform 0.55s ease; transition-delay:{{ $i * 120 }}ms;">
          
          {{-- Circle --}}
          <div class="relative flex-shrink-0 flex items-center justify-center rounded-full"
               style="width:56px; height:56px; background:#ffffff;">
            <div class="absolute inset-0 rounded-full"
                 style="margin:-2.5px; background:{{ $step['ring'] }}; border-radius:9999px; box-shadow:0 3px 10px {{ $step['glow'] }};"></div>
            <div class="absolute inset-0 rounded-full z-10 flex flex-col items-center justify-center"
                 style="background:{{ $step['inner_bg'] }}; margin:2px; border-radius:9999px; border:{{ $step['inner_border'] }};">
              <span class="text-[7.5px] font-bold uppercase tracking-widest leading-none mb-0.5" style="color:{{ $step['step_color'] }};">STEP</span>
              <span class="text-base font-black leading-none" style="color:{{ $step['num_color'] }};">{{ $step['num'] }}</span>
            </div>
          </div>

          {{-- Content --}}
          <div class="flex-1 pt-0.5">
            <div class="flex items-center gap-2 mb-1">
              <span class="h-5.5 w-5.5 rounded-md inline-grid place-items-center text-[10px] flex-shrink-0"
                    style="width:22px; height:22px; background:{{ $step['ibg'] }}; border:1.5px solid {{ $step['iborder'] }}; color:{{ $step['ic'] }};">
                <i class="fa-solid {{ $step['icon'] }}"></i>
              </span>
              <h3 class="text-[14px] sm:text-[15px] font-bold text-forest leading-tight tracking-tight whitespace-nowrap">{{ $step['title'] }}</h3>
            </div>
            <p class="text-[12px] sm:text-[12.5px] leading-relaxed text-forest/75">{{ $step['body'] }}</p>
          </div>

        </div>
        @endforeach

      </div>{{-- end mobile --}}

    </div>{{-- end container --}}

    {{-- Scroll-reveal script --}}
    <script>
    (function () {
      function hiwReveal() {
        var vH = window.innerHeight;
        var selectors = [
          '#how-it-works .hiw-step-col',
          '#how-it-works .hiw-mob-step'
        ];
        selectors.forEach(function(sel) {
          document.querySelectorAll(sel).forEach(function(el) {
            if (el.classList.contains('opacity-0')) {
              var rect = el.getBoundingClientRect();
              if (rect.top < vH * 0.9) {
                el.classList.remove('opacity-0');
                el.style.transform = 'translateY(0) translateX(0)';
              }
            }
          });
        });
      }
      window.addEventListener('scroll', hiwReveal, { passive: true });
      setTimeout(hiwReveal, 200);
    }());
    </script>

  </section>

  {{-- ============================================================
       08. SHARE YOUR STORY FINAL CTA BANNER
       ============================================================ --}}
  <section class="py-14 sm:py-20 lg:py-28 bg-gradient-to-b from-[#fbf8f4] via-[#f7f2ea] to-[#efe6d8] text-forest relative overflow-hidden border-t border-cream-edge">
    {{-- Soft Ambient Radial Rings --}}
    <div class="pointer-events-none absolute -bottom-32 -right-32 h-[480px] w-[480px] rounded-full border border-forest/10 bg-peach/25 blur-2xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -top-32 -left-32 h-[420px] w-[420px] rounded-full border border-forest/5 bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-4 sm:px-6 lg:px-8 relative z-10 text-center">
      
      <span class="inline-flex items-center gap-2 rounded-full border border-forest/15 bg-white/90 backdrop-blur-sm px-3.5 sm:px-4 py-1.5 text-[11px] sm:text-xs font-bold uppercase tracking-wider text-forest shadow-xs">
        <span class="h-2 w-2 rounded-full bg-[#c8743a] animate-pulse"></span>
        Educational Founder’s Series
      </span>

      <h2 class="mt-4 sm:mt-6 text-[25px] sm:text-4xl lg:text-[3.25rem] font-black text-forest max-w-3xl mx-auto leading-[1.2] sm:leading-tight" style="letter-spacing:-1.2px;">
        Because Better Schools Build a <span style="color:#c8743a;">Brighter India.</span>
      </h2>

      <p class="mt-3.5 sm:mt-5 text-sm sm:text-base lg:text-[1.1rem] leading-relaxed text-forest/75 max-w-2xl mx-auto font-normal px-1 sm:px-0">
        Your journey has inspired hundreds of students and faculty members. It's time to share that wisdom with the wider nation.
      </p>

      <div class="mt-7 sm:mt-10 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 max-w-xs sm:max-w-none mx-auto w-full">
        <a href="#founder-form" 
           class="w-full sm:w-auto text-center rounded-full bg-forest px-6 sm:px-8 py-3.5 sm:py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid hover:text-white shadow-lg hover:shadow-xl hover:-translate-y-0.5 inline-flex items-center justify-center gap-2">
          <span>Share Your Story Now</span>
          <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>
        <a href="{{ url('/contact') }}" 
           class="w-full sm:w-auto text-center rounded-full border-2 border-forest/20 bg-white/80 px-6 sm:px-8 py-3.5 sm:py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-forest transition hover:border-forest hover:bg-white shadow-xs hover:-translate-y-0.5 inline-flex items-center justify-center">
          Speak With Our Team
        </a>
      </div>

    </div>
  </section>

</div>

@endsection

@push('scripts')
<script>
(function () {
  'use strict';

  var form = document.getElementById('founderRegForm'),
      done = document.getElementById('formSuccessState'),
      live = document.getElementById('liveStatus');

  function mark(f, bad) {
    f.classList.toggle('field-error', bad);
    f.setAttribute('aria-invalid', bad ? 'true' : 'false');
  }

  function validate(scope) {
    var first = null;
    scope.querySelectorAll('input[required], select[required], input[type="url"], input[type="email"]').forEach(function (f) {
      var ok = f.value.trim() === '' ? !f.hasAttribute('required') : f.checkValidity();
      mark(f, !ok);
      if (!ok && !first) first = f;
    });
    return first;
  }

  if (form) {
    var clearHandler = function (e) {
      if (e.target.classList.contains('field-error') && e.target.checkValidity()) {
        mark(e.target, false);
      }
    };
    form.addEventListener('input', clearHandler);
    form.addEventListener('change', clearHandler);

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var bad = validate(form);

      if (bad) {
        bad.focus();
        if (live) live.textContent = 'Please complete all required fields.';
        return;
      }

      var submitBtn = document.getElementById('submitBtn');
      var submitBtnText = document.getElementById('submitBtnText');
      var submitBtnSpinner = document.getElementById('submitBtnSpinner');
      var errorMsg = document.getElementById('formErrorMessage');

      if (errorMsg) {
        errorMsg.classList.add('hidden');
        errorMsg.textContent = '';
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        if (submitBtnText) submitBtnText.classList.add('hidden');
        if (submitBtnSpinner) submitBtnSpinner.classList.remove('hidden');
      }

      var formData = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        }
      })
      .then(function (res) {
        return res.json().then(function (data) {
          return { ok: res.ok, status: res.status, data: data };
        }).catch(function () {
          return { ok: res.ok, status: res.status, data: {} };
        });
      })
      .then(function (result) {
        if (result.ok && (result.data.success || result.data.message)) {
          form.hidden = true;
          if (done) done.hidden = false;
          if (live) live.textContent = 'Registration submitted successfully.';

          var founderForm = document.getElementById('founder-form');
          if (founderForm) {
            founderForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        } else {
          var err = 'Unable to submit registration. Please try again.';
          if (result.data && result.data.errors) {
            var firstErrKey = Object.keys(result.data.errors)[0];
            err = result.data.errors[firstErrKey][0] || err;
          } else if (result.data && result.data.message) {
            err = result.data.message;
          }
          if (errorMsg) {
            errorMsg.textContent = err;
            errorMsg.classList.remove('hidden');
            errorMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
          } else {
            alert(err);
          }
          if (submitBtn) {
            submitBtn.disabled = false;
            if (submitBtnText) submitBtnText.classList.remove('hidden');
            if (submitBtnSpinner) submitBtnSpinner.classList.add('hidden');
          }
        }
      })
      .catch(function (error) {
        console.error('Submission error:', error);
        if (errorMsg) {
          errorMsg.textContent = 'A network or server error occurred. Please check your connection and try again.';
          errorMsg.classList.remove('hidden');
        } else {
          alert('A network or server error occurred. Please try again.');
        }
        if (submitBtn) {
          submitBtn.disabled = false;
          if (submitBtnText) submitBtnText.classList.remove('hidden');
          if (submitBtnSpinner) submitBtnSpinner.classList.add('hidden');
        }
      });
    });
  }
})();
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // How The Conversation Works: Sequential Revealing Animation
  (function initHowItWorksAnimation() {
    var section = document.getElementById('how-it-works');
    var lineFill = document.getElementById('roadmapLineFill');
    var glowHead = document.getElementById('roadmapGlowHead');
    var steps = [
      document.getElementById('roadmapStep1'),
      document.getElementById('roadmapStep2'),
      document.getElementById('roadmapStep3'),
      document.getElementById('roadmapStep4'),
      document.getElementById('roadmapStep5')
    ];

    if (!section || !steps[0]) return;

    var hasAnimated = false;
    var linePercentages = [0, 25, 50, 75, 100];

    function activateStep(index) {
      steps.forEach(function (step, i) {
        if (!step) return;
        if (i < index) {
          step.classList.add('revealed-step');
          step.classList.remove('active-step');
        } else if (i === index) {
          step.classList.add('revealed-step', 'active-step');
        } else {
          // not yet reached
        }
      });
      if (lineFill) {
        lineFill.style.width = linePercentages[index] + '%';
      }
    }

    function runSequentialReveal() {
      if (hasAnimated) return;
      hasAnimated = true;

      // Step 1 reveals immediately
      activateStep(0);

      // Travel to Step 2
      setTimeout(function () {
        if (lineFill) lineFill.style.width = '25%';
      }, 400);

      setTimeout(function () {
        activateStep(1);
      }, 850);

      // Travel to Step 3
      setTimeout(function () {
        if (lineFill) lineFill.style.width = '50%';
      }, 1300);

      setTimeout(function () {
        activateStep(2);
      }, 1750);

      // Travel to Step 4
      setTimeout(function () {
        if (lineFill) lineFill.style.width = '75%';
      }, 2200);

      setTimeout(function () {
        activateStep(3);
      }, 2650);

      // Travel to Step 5
      setTimeout(function () {
        if (lineFill) lineFill.style.width = '100%';
      }, 3100);

      setTimeout(function () {
        activateStep(4);
      }, 3550);

      // Finish: All revealed cleanly
      setTimeout(function () {
        steps.forEach(function (step) {
          if (step) {
            step.classList.add('revealed-step');
            step.classList.remove('active-step');
          }
        });
        if (glowHead) {
          glowHead.style.opacity = '0.7';
        }
      }, 4200);
    }

    // Interactive hover / tap to highlight step
    steps.forEach(function (step, index) {
      if (!step) return;
      step.addEventListener('mouseenter', function () {
        if (!hasAnimated) return;
        activateStep(index);
      });
      step.addEventListener('click', function () {
        activateStep(index);
      });
    });

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            runSequentialReveal();
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.2,
        rootMargin: '0px 0px -40px 0px'
      });
      observer.observe(section);
    } else {
      // Fallback
      setTimeout(runSequentialReveal, 600);
    }
  })();
});
</script>
@endpush
