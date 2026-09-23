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
  <section class="relative pt-28 pb-16 lg:pt-36 lg:pb-24 border-b border-cream-edge">
    {{-- Ambient Background Glow --}}
    <div class="pointer-events-none absolute -top-20 -left-20 h-[520px] w-[520px] rounded-full bg-peach/25 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute top-1/2 -right-32 h-[600px] w-[600px] rounded-full bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8">
      <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-14 xl:gap-20">

        {{-- LEFT COLUMN: HERO HEADLINE & VALUE PROPOSITION --}}
        <div>
          
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
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">🎙️</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">Video Podcast Feature</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">🌟</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">National Spotlight</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">🤝</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">Founder Circle Meetups</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">🏛️</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">Campus Leadership Talks</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">💼</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">Internship Connect</span>
            </div>
            <div class="flex items-center gap-2 sm:gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-2 sm:p-3 shadow-xs">
              <span class="grid h-7 w-7 sm:h-8 sm:w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs sm:text-sm">🚀</span>
              <span class="text-[11px] sm:text-xs font-semibold leading-tight text-forest">Student Masterclasses</span>
            </div>
          </div>

        </div>

        {{-- RIGHT COLUMN: HERO FORM (Direct Access For Founders & Leaders) --}}
        <div id="founder-form">
          <div class="hero-glass-card rounded-2xl sm:rounded-[1.85rem] p-4 sm:p-7 lg:p-9">

            {{-- Card Header --}}
            <div class="pb-1">
              <div class="flex items-center justify-between">
                <span class="rounded-full bg-forest/10 px-3 py-1 text-[10.5px] sm:text-[11px] font-bold uppercase tracking-wider text-forest">
                  Executive Registration
                </span>
                <span class="text-xs font-medium text-forest/60">Takes 2 mins</span>
              </div>
              <h2 class="mt-3 text-xl sm:text-[1.75rem] font-bold leading-tight text-forest">
                Share Your Journey
              </h2>
              <p class="mt-1 text-xs sm:text-sm text-forest/70">
                Join The Education Business Room or bring YCX programs to your campus.
              </p>
            </div>

            {{-- 2-Step Segmented Navigation Cards (No Horizontal Line) --}}
            <div class="mt-4 sm:mt-5 grid grid-cols-2 gap-1.5 sm:gap-2 p-1 sm:p-1.5 rounded-2xl bg-cream-warm border border-cream-edge" aria-label="Registration Steps">
              {{-- Step 1 --}}
              <div data-indicator="1" class="flex items-center gap-2 sm:gap-2.5 py-2 sm:py-2.5 px-2.5 sm:px-3.5 rounded-xl bg-forest text-white shadow-sm border border-forest transition-all duration-300 cursor-pointer">
                <span data-bubble class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15 text-peach text-xs font-bold transition-all">
                  <i class="fa-solid fa-user text-[11px]"></i>
                </span>
                <div class="min-w-0 flex flex-col leading-tight">
                  <span data-tag class="text-[10px] font-bold uppercase tracking-wider text-peach">Step 01</span>
                  <span data-label class="text-xs font-bold text-white truncate">About You</span>
                </div>
              </div>

              {{-- Step 2 --}}
              <div data-indicator="2" class="flex items-center gap-2 sm:gap-2.5 py-2 sm:py-2.5 px-2.5 sm:px-3.5 rounded-xl bg-transparent text-forest/50 border border-transparent transition-all duration-300 cursor-default">
                <span data-bubble class="grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-cream-edge/70 text-forest/40 text-xs font-semibold transition-all">
                  <i class="fa-solid fa-building-columns text-[11px]"></i>
                </span>
                <div class="min-w-0 flex flex-col leading-tight">
                  <span data-tag class="text-[10px] font-semibold uppercase tracking-wider text-forest/40">Step 02</span>
                  <span data-label class="text-xs font-semibold text-forest/60 truncate">Your Campus</span>
                </div>
              </div>
            </div>

            {{-- FORM ELEMENT --}}
            <form id="founderRegForm" class="mt-4 sm:mt-5" novalidate>

              {{-- STEP 1: ABOUT THE FOUNDER / LEADER --}}
              <fieldset id="step1">
                <legend class="sr-only">About the Founder / Leader</legend>
                <div class="space-y-3.5 sm:space-y-4">
                  <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Your Full Name <span class="text-red-600">*</span></label>
                    <input id="name" name="name" type="text" required placeholder="e.g. Dr. Ramesh Chander"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Please enter your name.</p>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">
                    <div>
                      <label for="role" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Your Role <span class="text-red-600">*</span></label>
                      <select id="role" name="role" required
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
                        <option value="">Select Role</option>
                        <option value="School Founder / Owner">School Founder / Owner</option>
                        <option value="College Correspondent">College Correspondent</option>
                        <option value="College Chairperson">College Chairperson</option>
                        <option value="Principal / Director">Principal / Director</option>
                        <option value="Education Entrepreneur">Education Entrepreneur</option>
                        <option value="Trustee / Board Member">Trustee / Board Member</option>
                        <option value="Other">Other Executive</option>
                      </select>
                      <p class="error-msg">Select your designation.</p>
                    </div>

                    <div>
                      <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Phone / WhatsApp <span class="text-red-600">*</span></label>
                      <input id="phone" name="phone" type="tel" required placeholder="+91 98765 43210"
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                      <p class="error-msg">Enter a reachable phone number.</p>
                    </div>
                  </div>

                  <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Official / Personal Email <span class="text-red-600">*</span></label>
                    <input id="email" name="email" type="email" required placeholder="founder@institution.edu.in"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Enter a valid email address.</p>
                  </div>
                </div>

                <div class="mt-5 sm:mt-6 flex flex-col sm:flex-row items-center justify-between gap-3 pt-2">
                  <span class="text-[11px] text-forest/50 text-center sm:text-left">Confidential · Direct YCX Team Access</span>
                  <button type="button" id="nextBtn"
                    class="w-full sm:w-auto text-center rounded-full bg-forest px-6 sm:px-7 py-3 text-xs font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid shadow-sm">
                    Continue to Institution →
                  </button>
                </div>
              </fieldset>

              {{-- STEP 2: ABOUT THE INSTITUTION & PARTICIPATION --}}
              <fieldset id="step2" hidden>
                <legend class="sr-only">About Your Institution</legend>
                <div class="space-y-3.5 sm:space-y-4">
                  <div>
                    <label for="inst" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Institution / Group Name <span class="text-red-600">*</span></label>
                    <input id="inst" name="inst" type="text" required placeholder="e.g. Sri Krishna Educational Trust"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Enter your institution or group name.</p>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">
                    <div>
                      <label for="type" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Category <span class="text-red-600">*</span></label>
                      <select id="type" name="type" required
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
                        <option value="">Select Type</option>
                        <option value="School / Group of Schools">School / K-12 Group</option>
                        <option value="College / University">College / University</option>
                        <option value="Both School & College">Both School &amp; College</option>
                        <option value="Education Enterprise">EdTech / Education Co</option>
                      </select>
                      <p class="error-msg">Select institution type.</p>
                    </div>

                    <div>
                      <label for="city" class="block text-xs font-bold uppercase tracking-wider text-forest/85">City &amp; State <span class="text-red-600">*</span></label>
                      <input id="city" name="city" type="text" required placeholder="Coimbatore, TN"
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                      <p class="error-msg">Enter city and state.</p>
                    </div>
                  </div>

                  {{-- What would you like to explore? (Dropdown) --}}
                  <div>
                    <label for="interest" class="block text-xs font-bold uppercase tracking-wider text-forest/85">
                      What Would You Like to Explore? <span class="text-red-600">*</span>
                    </label>
                    <select id="interest" name="interest" required
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
                      <option value="">Select What You'd Like to Explore</option>
                      <option value="Podcast Feature">🎙️ Video Podcast Feature (The Education Business Room)</option>
                      <option value="Founder Panel">🗣️ Educational Leadership Panel Discussion</option>
                      <option value="Campus Leadership Talks">🏛️ Campus Leadership Talks &amp; Keynotes</option>
                      <option value="Student Masterclasses">💡 Student Masterclasses &amp; Workshops</option>
                      <option value="Closed-Door Meetups">🤝 Closed-Door Founder &amp; Correspondent Meetups</option>
                      <option value="Comprehensive Partnership">🌟 Comprehensive Institutional Partnership (All Programs)</option>
                    </select>
                    <p class="error-msg">Please select what you would like to explore.</p>
                  </div>

                  <div>
                    <label for="site" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Institution Website / LinkedIn <span class="font-normal text-forest/50">(Optional)</span></label>
                    <input id="site" name="site" type="url" placeholder="https://yourinstitution.edu.in"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-3.5 sm:px-4 py-2.5 sm:py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                  </div>
                </div>

                <div class="mt-5 sm:mt-6 flex items-center justify-between gap-3 pt-2">
                  <button type="button" id="backBtn" class="text-xs font-bold text-forest/70 underline underline-offset-4 hover:text-forest">
                    ← Back
                  </button>
                  <button type="submit"
                    class="rounded-full bg-forest px-6 sm:px-7 py-3 text-xs font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid shadow-sm">
                    Submit Profile →
                  </button>
                </div>
              </fieldset>

              {{-- SUCCESS STATE --}}
              <div id="formSuccessState" hidden class="py-8 text-center">
                <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-forest text-peach">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <h3 class="mt-4 text-2xl font-bold text-forest">Story Received</h3>
                <p class="mx-auto mt-2 max-w-sm text-xs leading-relaxed text-forest/75">
                  Thank you for connecting with <strong>The Education Business Room</strong>. Our curation team will review your profile and reach out within 2–3 working days to coordinate the conversation format.
                </p>
                <div class="mt-5">
                  <a href="#founder-story" class="text-xs font-bold text-forest underline underline-offset-4">
                    Explore the Founder Arc below ↓
                  </a>
                </div>
              </div>

              <p id="liveStatus" aria-live="polite" class="sr-only"></p>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ============================================================
       02. WHO IS THIS CONVERSATION FOR? (6 Education Leader Profiles)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-white border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto">
        <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          The Leadership Circle
        </span>
        <h2 class="mt-4 text-2xl sm:text-4xl lg:text-[2.75rem] font-black text-forest" style="letter-spacing:-1.2px;">
          Who Is This Conversation For?
        </h2>
        <p class="mt-3 sm:mt-4 text-forest/75 text-sm sm:text-[1.05rem] leading-relaxed">
          We invite leaders from across the education continuum who are carrying the responsibility of institutions and inspiring the next generation of builders.
        </p>
      </div>

      {{-- 6 Cards Grid with Evocative Imagery --}}
      <div class="mt-10 sm:mt-14 grid gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Profile 1 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80" 
                 alt="College Correspondent at university campus" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Higher Education</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">College Correspondents</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Preserving institutional values, building long-term vision, and navigating generational transitions with accountability.
            </p>
          </div>
        </article>

        {{-- Profile 2 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80" 
                 alt="College Chairperson leading campus strategy" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Institutional Governance</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">College Chairpersons</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Leading institutions through rapid educational change, campus expansion, and international accreditations.
            </p>
          </div>
        </article>

        {{-- Profile 3 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=700&q=80" 
                 alt="School Founder building a community school" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">K-12 &amp; School Foundations</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">School Founders &amp; Owners</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Turning early educational conviction into real campuses, overcoming early hurdles, and nurturing young minds.
            </p>
          </div>
        </article>

        {{-- Profile 4 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=700&q=80" 
                 alt="Principals and directors mentoring students" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Academic Leadership</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">Principals &amp; Directors</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Guiding teaching culture, modernizing curriculums, and striking the balance between academic rigour and well-being.
            </p>
          </div>
        </article>

        {{-- Profile 5 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80" 
                 alt="Education entrepreneurs building new models" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">EdTech &amp; Innovation</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">Education Entrepreneurs</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Pioneering sustainable business models, skill-first learning academies, and AI-enabled educational ecosystems.
            </p>
          </div>
        </article>

        {{-- Profile 6 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-44 sm:h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=700&q=80" 
                 alt="Executive roundtable of chancellors and board members" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-4 sm:p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Strategy &amp; Ecosystem</span>
            <h3 class="mt-1 text-lg sm:text-xl font-bold text-forest">Trustees &amp; Board Members</h3>
            <p class="mt-2 text-xs sm:text-sm leading-relaxed text-forest/70">
              Driving cross-institutional partnerships, industry linkages, capital allocation, and progressive campus transformation.
            </p>
          </div>
        </article>

      </div>

    </div>
  </section>

  {{-- ============================================================
       03. ABOUT THE EDUCATION BUSINESS ROOM (Why this platform exists)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-forest text-cream relative">
    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8">
      
      <div class="grid items-center gap-10 lg:grid-cols-12 lg:gap-16">
        
        <div class="lg:col-span-6">
          <span class="text-xs font-bold uppercase tracking-widest text-peach">
            Beyond the Institution · Behind the Journey
          </span>

          <h2 class="mt-4 text-2xl sm:text-4xl lg:text-[2.85rem] font-black leading-tight text-cream" style="letter-spacing:-1.2px;">
            The Untold Stories of the People Who Built the Campus.
          </h2>

          <p class="mt-4 sm:mt-6 text-[0.98rem] sm:text-[1.05rem] leading-relaxed text-cream/80">
            Every successful institution has an authentic story that rarely makes it to the admission brochure:
          </p>

          <p class="mt-3 sm:mt-4 text-[0.95rem] sm:text-[1.05rem] leading-relaxed text-cream/70">
            The initial spark. The sleepless nights. The regulatory gridlocks. The calculated risks. The financial tightropes. And the turning point when students finally walked through the gates.
          </p>

          <p class="mt-3 sm:mt-4 text-[0.95rem] sm:text-[1.05rem] leading-relaxed text-cream/70">
            <strong>The Education Business Room</strong> was created to bring these leadership journeys to the surface — unscripted, reflective, and deeply valuable for the entire education community.
          </p>

          {{-- 5 Core Focus Areas Pills --}}
          <div class="mt-7 sm:mt-8 flex flex-wrap gap-2 sm:gap-2.5">
            <span class="rounded-full border border-peach/30 bg-white/5 px-3 sm:px-4 py-1.5 text-[11px] sm:text-xs font-semibold text-peach">
              🎙️ Founder Conversations
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-3 sm:px-4 py-1.5 text-[11px] sm:text-xs font-semibold text-peach">
              🏛️ Institution Heritage
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-3 sm:px-4 py-1.5 text-[11px] sm:text-xs font-semibold text-peach">
              💡 Education Innovation
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-3 sm:px-4 py-1.5 text-[11px] sm:text-xs font-semibold text-peach">
              📊 Business of Education
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-3 sm:px-4 py-1.5 text-[11px] sm:text-xs font-semibold text-peach">
              🔮 Future of Learning &amp; AI
            </span>
          </div>
        </div>

        {{-- Right Side — Image Visual --}}
        <div class="lg:col-span-6">
          <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl group">
            <img src="{{ asset('images/assets/education-leaders-meeting.jpg') }}" alt="Education leaders in conversation" class="w-full h-[280px] sm:h-[420px] lg:h-[500px] object-cover transition duration-700 group-hover:scale-[1.03]" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
            {{-- Floating Quote Overlay --}}
            <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-8">
              <blockquote class="text-lg sm:text-2xl font-semibold italic leading-snug text-white" style="text-shadow:0 2px 12px rgba(0,0,0,0.3);">
                “Education is not just a system. It’s people, purpose, and possibility.”
              </blockquote>
              <div class="mt-3 sm:mt-4 flex items-center gap-3">
                <div class="h-8 w-8 sm:h-9 sm:w-9 rounded-full bg-peach grid place-items-center text-forest font-bold text-xs shadow-sm">YCX</div>
                <div>
                  <div class="text-xs sm:text-sm font-bold text-white">The Education Business Room</div>
                  <div class="text-[10.5px] sm:text-xs text-white/60">A Young Chanakya Executive Initiative</div>
                </div>
              </div>
            </div>
            {{-- Floating Top Badge --}}
            <div class="absolute top-4 right-4 sm:top-5 sm:right-5">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-white/15 backdrop-blur-md border border-white/20 px-3 py-1 sm:px-3.5 sm:py-1.5 text-[10.5px] sm:text-[11px] font-bold text-white shadow-sm">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Founder Conversations
              </span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       04. THE FOUNDER STORY — Horizontal Accordion
       ============================================================ --}}
  <section id="founder-story" class="relative overflow-hidden py-16 sm:py-24 px-3.5 sm:px-6 lg:px-8" style="background:#080f0c;">

    {{-- Ambient glows --}}
    <div class="pointer-events-none absolute -top-40 left-1/4 h-[500px] w-[500px] rounded-full blur-3xl" style="background:rgba(255,178,120,0.06);" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-20 right-1/4 h-[400px] w-[400px] rounded-full blur-3xl" style="background:rgba(12,58,48,0.15);" aria-hidden="true"></div>

    {{-- Section Header --}}
    <div class="text-center max-w-5xl mx-auto mb-10 sm:mb-16 relative z-10 px-2 sm:px-4">
      <span class="inline-block text-[0.75rem] sm:text-[0.8rem] font-bold tracking-[2px] uppercase px-4 sm:px-5 py-1.5 sm:py-2 rounded-full" style="background:#ffd2b1; color:#080f0c;">
        Your Journey Matters
      </span>
      <h2 class="mt-4 sm:mt-6 text-2xl sm:text-4xl lg:text-[2.85rem] xl:text-[3.25rem] font-extrabold leading-tight text-white" style="letter-spacing:-1.2px;">
        Your Story in Five Powerful Chapters
      </h2>
      <p class="mt-3 sm:mt-5 text-sm sm:text-lg leading-relaxed max-w-2xl mx-auto" style="color:rgba(255,210,177,0.85);">
        Every institution carries a story that goes far deeper than its prospectus. We help you tell it.
      </p>
    </div>

    {{-- Horizontal Accordion --}}
    <div class="story-accordion relative z-10">

      {{-- Panel 01 — The Beginning --}}
      <div class="story-panel active" style="--panel-img:url('{{ asset('images/assets/story-01-beginning.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Beginning</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-seedling mr-3 text-[#ffd2b1]"></i>The Beginning</h3>
          <p class="panel-text">Why did you start? What was the personal conviction that made you lay the first foundation stone?</p>
        </div>
      </div>

      {{-- Panel 02 — The Struggle --}}
      <div class="story-panel" style="--panel-img:url('{{ asset('images/assets/story-02-struggle.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Struggle</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-fire mr-3 text-[#ffd2b1]"></i>The Struggle</h3>
          <p class="panel-text">What almost broke the vision? The financial storms, regulatory walls, and sleepless nights that tested everything.</p>
        </div>
      </div>

      {{-- Panel 03 — The Turning Point --}}
      <div class="story-panel" style="--panel-img:url('{{ asset('images/assets/story-03-turning-point.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Turning Point</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-sun mr-3 text-[#ffd2b1]"></i>The Turning Point</h3>
          <p class="panel-text">What changed everything? The breakthrough moment when the institution crossed into public trust and recognition.</p>
        </div>
      </div>

      {{-- Panel 04 — The Lesson --}}
      <div class="story-panel" style="--panel-img:url('{{ asset('images/assets/story-04-lesson.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Lesson</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-compass mr-3 text-[#ffd2b1]"></i>The Lesson</h3>
          <p class="panel-text">What did the journey teach you? Hard-won principles that every aspiring education founder needs to hear.</p>
        </div>
      </div>

      {{-- Panel 05 — The Future --}}
      <div class="story-panel" style="--panel-img:url('{{ asset('images/assets/story-05-future.jpg') }}');">
        <div class="panel-overlay"></div>
        <span class="panel-vtitle">The Future</span>
        <div class="panel-detail">
          <h3 class="panel-heading"><i class="fa-solid fa-rocket mr-3 text-[#ffd2b1]"></i>The Future</h3>
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
        border-radius: 28px;
        overflow: hidden;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background: var(--panel-img) center/cover no-repeat;
        transition: flex 0.7s cubic-bezier(0.25, 1, 0.5, 1);
      }

      .panel-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(4,8,6,0.94) 0%, rgba(4,8,6,0.55) 45%, rgba(4,8,6,0.2) 100%);
        transition: background 0.5s ease;
      }

      .story-panel:hover .panel-overlay,
      .story-panel.active .panel-overlay {
        background: linear-gradient(to top, rgba(4,8,6,0.97) 0%, rgba(4,8,6,0.82) 45%, rgba(4,8,6,0.3) 100%);
      }

      .story-panel:hover,
      .story-panel.active {
        flex: 5;
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
        transition: opacity 0.3s ease, transform 0.3s ease;
        text-shadow: 0 2px 14px rgba(0,0,0,0.95), 0 0 20px rgba(0,0,0,0.9);
        pointer-events: none;
      }

      .story-panel:hover .panel-vtitle,
      .story-panel.active .panel-vtitle {
        opacity: 0;
        transform: translateY(8px);
      }

      .panel-detail {
        position: relative;
        z-index: 3;
        padding: 44px 40px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        transition-delay: 0s;
        min-width: 320px;
      }

      .story-panel:hover .panel-detail,
      .story-panel.active .panel-detail {
        opacity: 1;
        transform: translateY(0);
        transition-delay: 0.18s;
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
        font-weight: 500;
        color: #ffffff;
        line-height: 1.75;
        text-shadow: 0 2px 10px rgba(0,0,0,0.95);
        max-width: 700px;
      }

      /* ── Mobile: stack vertically ── */
      @media (max-width: 900px) {
        .story-accordion {
          flex-direction: column;
          height: auto;
          gap: 12px;
        }

        .story-panel {
          min-height: 140px;
          flex: none !important;
          border-radius: 20px;
        }

        .story-panel:hover,
        .story-panel.active {
          flex: none !important;
          min-height: 250px;
        }

        .panel-vtitle {
          writing-mode: horizontal-tb;
          bottom: 20px;
          top: auto;
          left: 20px;
          right: 20px;
          transform: none;
          text-align: left;
          font-size: 1.15rem;
        }

        .panel-detail {
          min-width: auto;
          padding: 20px;
        }

        .panel-heading {
          font-size: 1.35rem;
          margin-bottom: 8px;
        }

        .panel-text {
          font-size: 0.95rem;
          line-height: 1.55;
        }
      }
    </style>

  </section>

  {{-- ============================================================
       05. WHAT WE TALK ABOUT (Interactive Thematic Explorer)
       ============================================================ --}}
  <section id="what-we-talk-about" class="py-16 sm:py-20 lg:py-28 bg-cream-warm border-b border-cream-edge relative">
    <div class="thematic-explorer-wrap mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8">
      <div class="thematic-explorer-inner flex flex-col lg:flex-row gap-8 sm:gap-12 lg:gap-16 items-start">
        
        <!-- Left Side: Header, Description & Topic Buttons Grid (2 per line) -->
        <div class="thematic-left-col w-full lg:w-[52%] flex flex-col">
          <span class="inline-block text-[0.75rem] sm:text-[0.8rem] font-bold tracking-[2px] uppercase px-3.5 sm:px-4 py-1.5 rounded-full bg-forest/10 text-forest mb-3 sm:mb-4 self-start">
            Curated Discourse
          </span>
          <h2 class="text-2xl sm:text-4xl lg:text-[2.65rem] font-black leading-[1.15] text-forest mb-3 sm:mb-5" style="letter-spacing:-1.2px;">
            What We Talk About
          </h2>
          <p class="text-sm sm:text-lg text-forest/75 border-l-4 border-forest pl-3.5 sm:pl-5 leading-relaxed mb-5 sm:mb-7">
            Conversations anchored in the most decisive themes governing Indian and global education today. Explore the topics to learn more.
          </p>

          <!-- 6 Topics Grid: 2 per line on the Left side -->
          <div class="thematic-topics-grid grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3.5 w-full">
            <div role="button" tabindex="0" class="thematic-topic-btn active" data-topic="0">
              <span class="thematic-btn-icon"><i class="fa-solid fa-microphone"></i></span>
              <span class="thematic-btn-title">Founder Journeys &amp; Leadership</span>
            </div>
            <div role="button" tabindex="0" class="thematic-topic-btn" data-topic="1">
              <span class="thematic-btn-icon"><i class="fa-solid fa-microchip"></i></span>
              <span class="thematic-btn-title">AI, ERP &amp; Campus Tech</span>
            </div>
            <div role="button" tabindex="0" class="thematic-topic-btn" data-topic="2">
              <span class="thematic-btn-icon"><i class="fa-solid fa-rocket"></i></span>
              <span class="thematic-btn-title">The Future of Education</span>
            </div>
            <div role="button" tabindex="0" class="thematic-topic-btn" data-topic="3">
              <span class="thematic-btn-icon"><i class="fa-solid fa-chart-line"></i></span>
              <span class="thematic-btn-title">The Business of Education</span>
            </div>
            <div role="button" tabindex="0" class="thematic-topic-btn" data-topic="4">
              <span class="thematic-btn-icon"><i class="fa-solid fa-arrow-rotate-right"></i></span>
              <span class="thematic-btn-title">Transformation &amp; Turnarounds</span>
            </div>
            <div role="button" tabindex="0" class="thematic-topic-btn" data-topic="5">
              <span class="thematic-btn-icon"><i class="fa-solid fa-earth-americas"></i></span>
              <span class="thematic-btn-title">Social Impact &amp; Nation Building</span>
            </div>
          </div>
        </div>

        <!-- Right Side: Sticky Dynamic Preview Panel -->
        <div class="thematic-right-col w-full lg:w-[48%] lg:sticky lg:top-[110px]">
          <div class="thematic-preview-panel rounded-2xl sm:rounded-3xl bg-white border border-cream-edge p-4 sm:p-8 shadow-xl transition-all duration-300">
            <div class="thematic-preview-content" id="thematicPreviewContainer">
              <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Topic Preview" class="thematic-preview-image w-full h-[200px] sm:h-[340px] object-cover rounded-xl sm:rounded-2xl bg-cream-warm mb-4 sm:mb-6" id="thematicPrevImage">
              <div class="thematic-preview-text-content flex flex-col sm:flex-row gap-4 sm:gap-5 items-start">
                <div class="thematic-preview-icon-wrapper h-11 w-11 sm:h-14 sm:w-14 rounded-xl sm:rounded-2xl bg-forest/10 text-forest flex items-center justify-center text-xl sm:text-2xl shrink-0">
                  <i class="fa-solid fa-microphone" id="thematicPrevIcon"></i>
                </div>
                <div>
                  <h3 class="thematic-preview-title text-xl sm:text-2xl font-bold text-forest mb-1.5 sm:mb-2" id="thematicPrevTitle">Founder Journeys &amp; Leadership</h3>
                  <p class="thematic-preview-desc text-xs sm:text-base text-forest/75 leading-relaxed" id="thematicPrevDesc">Unfiltered conversations on personal resilience, team culture, governance, and institutional endurance.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .thematic-preview-content {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.35s ease, transform 0.35s ease;
      }
      .thematic-preview-content.fade {
        opacity: 0;
        transform: translateY(10px);
      }
      .thematic-topic-btn {
        background: #ffffff;
        border: 1.5px solid #e7ded2;
        border-radius: 16px;
        padding: 13px 15px;
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        text-align: left;
        transition: all 0.25s cubic-bezier(0.25, 1, 0.5, 1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
        width: 100%;
        min-height: 60px;
        user-select: none;
      }
      @media (min-width: 640px) {
        .thematic-topic-btn {
          padding: 16px 18px;
          min-height: 72px;
          gap: 13px;
        }
      }
      .thematic-topic-btn:hover {
        border-color: #0c3a30;
        background: rgba(12, 58, 48, 0.03);
        transform: translateY(-2px);
      }
      .thematic-topic-btn.active {
        border-color: #0c3a30;
        background: #0c3a30;
        box-shadow: 0 8px 20px -5px rgba(12, 58, 48, 0.26);
        transform: translateY(-2px);
      }
      .thematic-btn-icon {
        color: #14513f;
        font-size: 1.15rem;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(12, 58, 48, 0.06);
        text-align: center;
        transition: all 0.25s ease;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }
      .thematic-btn-icon i {
        font-family: "Font Awesome 6 Free" !important;
        font-weight: 900 !important;
        font-style: normal !important;
      }
      .thematic-topic-btn:hover .thematic-btn-icon {
        color: #0c3a30;
        background: rgba(12, 58, 48, 0.12);
        transform: scale(1.05);
      }
      .thematic-topic-btn.active .thematic-btn-icon {
        color: #ffd2b1;
        background: rgba(255, 255, 255, 0.15);
        transform: scale(1.05);
      }
      .thematic-btn-title {
        font-size: 0.94rem;
        font-weight: 700;
        color: #0c3a30;
        line-height: 1.32;
        transition: color 0.25s ease;
      }
      .thematic-topic-btn.active .thematic-btn-title {
        color: #ffffff;
      }
    </style>

    <script>
      (function initThematicExplorer() {
        const topicData = [
          {
            title: "Founder Journeys & Leadership",
            desc: "Unfiltered conversations on personal resilience, team culture, governance, and institutional endurance.",
            icon: "fa-solid fa-microphone",
            img: "https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          },
          {
            title: "AI, ERP & Campus Tech",
            desc: "Navigating digital transformation, adopting generative AI responsibly, and modernizing campus operations.",
            icon: "fa-solid fa-microchip",
            img: "https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          },
          {
            title: "The Future of Education",
            desc: "Shifting from rote academics to skill-first mastery, global curriculums, and entrepreneurial mindsets.",
            icon: "fa-solid fa-rocket",
            img: "https://images.pexels.com/photos/5212361/pexels-photo-5212361.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          },
          {
            title: "The Business of Education",
            desc: "Infrastructure financing, fee structures, regulatory compliance, faculty retention, and sustainable campus models.",
            icon: "fa-solid fa-chart-line",
            img: "https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          },
          {
            title: "Transformation & Turnarounds",
            desc: "How legacy schools and colleges adapt, rebrand, elevate placements, and regain regional eminence.",
            icon: "fa-solid fa-arrow-rotate-right",
            img: "https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          },
          {
            title: "Social Impact & Nation Building",
            desc: "Providing accessible, high-quality education in Tier 2/3 cities and creating upward mobility for first-generation learners.",
            icon: "fa-solid fa-earth-americas",
            img: "https://images.pexels.com/photos/3184654/pexels-photo-3184654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          }
        ];

        const buttons = document.querySelectorAll('.thematic-topic-btn');
        const container = document.getElementById('thematicPreviewContainer');
        const prevImg = document.getElementById('thematicPrevImage');
        const prevIcon = document.getElementById('thematicPrevIcon');
        const prevTitle = document.getElementById('thematicPrevTitle');
        const prevDesc = document.getElementById('thematicPrevDesc');

        if (!buttons.length || !container) return;

        let currentActive = 0;

        function updateTopic(index) {
          if (index === currentActive) return;

          buttons.forEach(b => b.classList.remove('active'));
          buttons[index].classList.add('active');
          currentActive = index;

          container.classList.add('fade');
          setTimeout(() => {
            const data = topicData[index];
            if (prevImg) prevImg.src = data.img;
            if (prevIcon) prevIcon.className = data.icon;
            if (prevTitle) prevTitle.textContent = data.title;
            if (prevDesc) prevDesc.textContent = data.desc;
            container.classList.remove('fade');
          }, 300);
        }

        buttons.forEach(button => {
          button.addEventListener('mouseenter', function () {
            const index = parseInt(this.getAttribute('data-topic'));
            updateTopic(index);
          });
          button.addEventListener('click', function () {
            const index = parseInt(this.getAttribute('data-topic'));
            updateTopic(index);
          });
        });
      })();
    </script>
  </section>

  {{-- ============================================================
       06. WHY JOIN THE CONVERSATION? (6 Value Propositions)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-white border-b border-cream-edge relative overflow-hidden">
    {{-- Ambient subtle glows --}}
    <div class="pointer-events-none absolute -top-40 right-1/4 h-[500px] w-[500px] rounded-full bg-peach/20 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-32 left-1/4 h-[400px] w-[400px] rounded-full bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8 relative z-10">

      <div class="text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center gap-2 rounded-full bg-peach/40 border border-forest/10 px-3.5 sm:px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-forest shadow-xs">
          <span class="h-1.5 w-1.5 rounded-full bg-forest"></span>
          Tangible Value
        </span>
        <h2 class="mt-4 text-2xl sm:text-3xl lg:text-[2.65rem] font-black text-forest" style="letter-spacing:-1.2px;">
          Why Be Part of the Conversation?
        </h2>
        <p class="mt-3 sm:mt-4 text-forest/75 text-sm sm:text-[1.05rem] leading-relaxed max-w-2xl mx-auto">
          Your story, your platform, your institutional legacy — magnified on the national stage.
        </p>
      </div>

      {{-- 6 Visual Media Cards Grid --}}
      <div class="mt-10 sm:mt-14 grid gap-5 sm:gap-7 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Card 1: Broadcast Recording --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=800&q=80" 
                 alt="Professional broadcast studio with microhpone and multi-camera setup" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Studio Broadcast
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M3 8a2 2 0 012-2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Professional Broadcast Recording
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                High-definition multi-camera video, studio audio, and cinematic post-production engineered for national distribution.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                4K Multi-Camera &amp; Studio Audio
              </span>
            </div>
          </div>
        </article>

        {{-- Card 2: Digital Presence --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=800&q=80" 
                 alt="Digital media syndication across streaming platforms" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Digital Reach
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Elevated Digital Presence
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                Featured across YouTube, Spotify, LinkedIn, and the YCX digital ecosystem — putting your leadership in front of decision-makers.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                YouTube, Spotify &amp; LinkedIn Syndication
              </span>
            </div>
          </div>
        </article>

        {{-- Card 3: Thought Leadership --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=800&q=80" 
                 alt="Keynote leadership stage and authoritative discourse" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Authority
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Authoritative Thought Leadership
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                Position yourself as a visionary voice in modern education — an authoritative national benchmark for institutions across India.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                National Benchmark Voice
              </span>
            </div>
          </div>
        </article>

        {{-- Card 4: Founder Network --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1528747045269-390fe33c19f2?auto=format&fit=crop&w=800&q=80" 
                 alt="Closed-door executive roundtable of educational founders" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Peer Network
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Closed-Door Founder Network
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                Exclusive private roundtables, conclaves, and strategic peer exchanges with founders and chairpersons of 120+ institutions.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                120+ Founders &amp; Chairpersons Circle
              </span>
            </div>
          </div>
        </article>

        {{-- Card 5: Institutional Storytelling --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80" 
                 alt="Historic university campus architecture and heritage" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Campus Trust
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Institutional Storytelling
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                Give parents, faculty, students, and alumni an authentic, compelling reason to trust your campus — far beyond any brochure.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Authentic Heritage &amp; Trust
              </span>
            </div>
          </div>
        </article>

        {{-- Card 6: Direct Student Programs --}}
        <article class="group flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-cream-edge bg-cream-card overflow-hidden shadow-xs hover:shadow-xl hover:border-forest/25 hover:-translate-y-1.5 transition-all duration-300">
          <div class="h-44 sm:h-52 w-full overflow-hidden relative bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" 
                 alt="Students collaborating and participating in masterclass workshops" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent"></div>
            <div class="absolute top-3.5 left-3.5 sm:top-4 sm:left-4">
              <span class="inline-flex items-center gap-1.5 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[10px] font-black uppercase tracking-widest text-peach border border-white/10">
                <span class="h-1.5 w-1.5 rounded-full bg-peach animate-pulse"></span>
                Student Success
              </span>
            </div>
            <div class="absolute bottom-3 right-3 sm:bottom-3.5 sm:right-4 h-8 w-8 sm:h-9 sm:w-9 rounded-xl bg-white/90 backdrop-blur-md grid place-items-center text-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
          </div>
          <div class="p-4 sm:p-7 flex flex-col flex-1 justify-between">
            <div>
              <h3 class="text-lg sm:text-xl font-bold text-forest leading-snug group-hover:text-forest-mid transition">
                Direct Student Programs
              </h3>
              <p class="mt-2 sm:mt-2.5 text-xs sm:text-sm leading-relaxed text-forest/70">
                Unlock YCX masterclasses, top industry speaker sessions, internship connects, and student campus ambassadors for your campus.
              </p>
            </div>
            <div class="mt-5 sm:mt-6 pt-3.5 sm:pt-4 border-t border-cream-edge flex items-center">
              <span class="inline-flex items-center gap-1.5 text-[11px] sm:text-xs font-semibold text-forest/80 bg-cream-warm border border-cream-edge px-3 py-1 rounded-full">
                <svg class="h-3.5 w-3.5 text-forest" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                Masterclasses &amp; Internship Connects
              </span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  {{-- ============================================================
       07. HOW THE CONVERSATION WORKS (Step-by-Step Roadmap)
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-cream border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8">

      <div class="text-center max-w-2xl mx-auto">
        <span class="rounded-full bg-forest/10 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          Simple &amp; Curated
        </span>
        <h2 class="mt-4 text-2xl sm:text-3xl lg:text-[2.6rem] font-black text-forest" style="letter-spacing:-1.2px;">
          How the Conversation Works
        </h2>
        <p class="mt-3 sm:mt-4 text-forest/75 text-sm sm:text-[1.05rem] leading-relaxed">
          A seamless process designed to respect your schedule and put your voice front and centre.
        </p>
      </div>

      {{-- Mobile/Tablet Vertical Connected Roadmap (< lg) --}}
      <div class="mt-10 sm:mt-14 lg:hidden relative">
        {{-- Continuous vertical spine line --}}
        <div class="absolute left-6 top-6 bottom-6 w-0.5 bg-gradient-to-b from-forest via-forest/40 to-forest/15 -translate-x-1/2" aria-hidden="true"></div>

        <ol class="space-y-4 sm:space-y-6 list-none p-0 m-0 relative">

          {{-- Step 01 --}}
          <li class="relative flex items-start gap-3 sm:gap-4 pl-1">
            <div class="relative z-10 flex h-11 w-11 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-2xl bg-forest text-peach shadow-md ring-4 ring-cream">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div class="flex-1 rounded-2xl border border-cream-edge bg-white p-4 sm:p-5 shadow-xs transition hover:border-forest/30">
              <div class="flex items-center justify-between gap-2">
                <span class="rounded-full bg-forest/10 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-forest">Step 01</span>
                <span class="text-[11px] font-semibold text-forest/40">~2 mins</span>
              </div>
              <h3 class="mt-1.5 text-base sm:text-lg font-bold text-forest leading-snug">Tell Us About You</h3>
              <p class="mt-1 text-xs sm:text-sm text-forest/70 leading-relaxed">
                Submit your profile via the form above in under two minutes.
              </p>
            </div>
          </li>

          {{-- Step 02 --}}
          <li class="relative flex items-start gap-3 sm:gap-4 pl-1">
            <div class="relative z-10 flex h-11 w-11 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-2xl bg-forest text-peach shadow-md ring-4 ring-cream">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
              </svg>
            </div>
            <div class="flex-1 rounded-2xl border border-cream-edge bg-white p-4 sm:p-5 shadow-xs transition hover:border-forest/30">
              <div class="flex items-center justify-between gap-2">
                <span class="rounded-full bg-forest/10 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-forest">Step 02</span>
                <span class="text-[11px] font-semibold text-forest/40">Review</span>
              </div>
              <h3 class="mt-1.5 text-base sm:text-lg font-bold text-forest leading-snug">Editorial Review</h3>
              <p class="mt-1 text-xs sm:text-sm text-forest/70 leading-relaxed">
                Our curation team reviews your journey and finds the ideal conversation angle.
              </p>
            </div>
          </li>

          {{-- Step 03 --}}
          <li class="relative flex items-start gap-3 sm:gap-4 pl-1">
            <div class="relative z-10 flex h-11 w-11 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-2xl bg-forest text-peach shadow-md ring-4 ring-cream">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div class="flex-1 rounded-2xl border border-cream-edge bg-white p-4 sm:p-5 shadow-xs transition hover:border-forest/30">
              <div class="flex items-center justify-between gap-2">
                <span class="rounded-full bg-forest/10 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-forest">Step 03</span>
                <span class="text-[11px] font-semibold text-forest/40">15 mins</span>
              </div>
              <h3 class="mt-1.5 text-base sm:text-lg font-bold text-forest leading-snug">We Connect</h3>
              <p class="mt-1 text-xs sm:text-sm text-forest/70 leading-relaxed">
                A 15-minute briefing call to align on talking points, themes, and recording dates.
              </p>
            </div>
          </li>

          {{-- Step 04 --}}
          <li class="relative flex items-start gap-3 sm:gap-4 pl-1">
            <div class="relative z-10 flex h-11 w-11 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-2xl bg-forest text-peach shadow-md ring-4 ring-cream">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
              </svg>
            </div>
            <div class="flex-1 rounded-2xl border border-cream-edge bg-white p-4 sm:p-5 shadow-xs transition hover:border-forest/30">
              <div class="flex items-center justify-between gap-2">
                <span class="rounded-full bg-forest/10 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-forest">Step 04</span>
                <span class="text-[11px] font-semibold text-forest/40">Studio / Campus</span>
              </div>
              <h3 class="mt-1.5 text-base sm:text-lg font-bold text-forest leading-snug">The Conversation</h3>
              <p class="mt-1 text-xs sm:text-sm text-forest/70 leading-relaxed">
                Record in-studio or on campus — a relaxed, candid dialogue on your own terms.
              </p>
            </div>
          </li>

          {{-- Step 05 --}}
          <li class="relative flex items-start gap-3 sm:gap-4 pl-1">
            <div class="relative z-10 flex h-11 w-11 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-2xl bg-forest text-peach shadow-md ring-4 ring-cream">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
              </svg>
            </div>
            <div class="flex-1 rounded-2xl border border-cream-edge bg-white p-4 sm:p-5 shadow-xs transition hover:border-forest/30">
              <div class="flex items-center justify-between gap-2">
                <span class="rounded-full bg-forest/10 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-forest">Step 05</span>
                <span class="text-[11px] font-semibold text-forest/40">National Launch</span>
              </div>
              <h3 class="mt-1.5 text-base sm:text-lg font-bold text-forest leading-snug">We Tell Your Story</h3>
              <p class="mt-1 text-xs sm:text-sm text-forest/70 leading-relaxed">
                Mastered, produced, and published across national media and the YCX creator network.
              </p>
            </div>
          </li>

        </ol>
      </div>

      {{-- Desktop Horizontal Pipeline (lg+) --}}
      <ol class="hidden lg:grid lg:grid-cols-5 gap-4 xl:gap-5 mt-16 list-none p-0 m-0">

        <li class="relative flex flex-col justify-between rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md hover:-translate-y-1">
          <div>
            <div class="flex items-center justify-between">
              <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest text-peach shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
              </div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 01</span>
            </div>
            <h3 class="mt-5 text-[15px] font-bold text-forest leading-snug">Tell Us About You</h3>
            <p class="mt-2 text-xs leading-relaxed text-forest/65">
              Submit your profile via the form above in under two minutes.
            </p>
          </div>
          <div class="mt-5 pt-3 border-t border-cream-edge/60 flex items-center justify-between text-[11px] font-semibold text-forest/40">
            <span>Stage 1</span>
            <span>→</span>
          </div>
        </li>

        <li class="relative flex flex-col justify-between rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md hover:-translate-y-1">
          <div>
            <div class="flex items-center justify-between">
              <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest text-peach shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
              </div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 02</span>
            </div>
            <h3 class="mt-5 text-[15px] font-bold text-forest leading-snug">Editorial Review</h3>
            <p class="mt-2 text-xs leading-relaxed text-forest/65">
              Our curation team reviews your journey and finds the ideal conversation angle.
            </p>
          </div>
          <div class="mt-5 pt-3 border-t border-cream-edge/60 flex items-center justify-between text-[11px] font-semibold text-forest/40">
            <span>Stage 2</span>
            <span>→</span>
          </div>
        </li>

        <li class="relative flex flex-col justify-between rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md hover:-translate-y-1">
          <div>
            <div class="flex items-center justify-between">
              <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest text-peach shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
              </div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 03</span>
            </div>
            <h3 class="mt-5 text-[15px] font-bold text-forest leading-snug">We Connect</h3>
            <p class="mt-2 text-xs leading-relaxed text-forest/65">
              A 15-minute briefing call to align on talking points, themes, and recording dates.
            </p>
          </div>
          <div class="mt-5 pt-3 border-t border-cream-edge/60 flex items-center justify-between text-[11px] font-semibold text-forest/40">
            <span>Stage 3</span>
            <span>→</span>
          </div>
        </li>

        <li class="relative flex flex-col justify-between rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md hover:-translate-y-1">
          <div>
            <div class="flex items-center justify-between">
              <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest text-peach shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                </svg>
              </div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 04</span>
            </div>
            <h3 class="mt-5 text-[15px] font-bold text-forest leading-snug">The Conversation</h3>
            <p class="mt-2 text-xs leading-relaxed text-forest/65">
              Record in-studio or on campus — a relaxed, candid dialogue on your own terms.
            </p>
          </div>
          <div class="mt-5 pt-3 border-t border-cream-edge/60 flex items-center justify-between text-[11px] font-semibold text-forest/40">
            <span>Stage 4</span>
            <span>→</span>
          </div>
        </li>

        <li class="relative flex flex-col justify-between rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md hover:-translate-y-1">
          <div>
            <div class="flex items-center justify-between">
              <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest text-peach shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                </svg>
              </div>
              <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 05</span>
            </div>
            <h3 class="mt-5 text-[15px] font-bold text-forest leading-snug">We Tell Your Story</h3>
            <p class="mt-2 text-xs leading-relaxed text-forest/65">
              Mastered, produced, and published across national media and the YCX creator network.
            </p>
          </div>
          <div class="mt-5 pt-3 border-t border-cream-edge/60 flex items-center justify-between text-[11px] font-semibold text-forest/40">
            <span>Stage 5</span>
            <span>✓</span>
          </div>
        </li>

      </ol>

    </div>
  </section>

  {{-- ============================================================
       08. SHARE YOUR STORY FINAL CTA BANNER
       ============================================================ --}}
  <section class="py-16 sm:py-20 lg:py-28 bg-gradient-to-b from-[#fbf8f4] via-[#f7f2ea] to-[#efe6d8] text-forest relative overflow-hidden border-t border-cream-edge">
    {{-- Soft Ambient Radial Rings --}}
    <div class="pointer-events-none absolute -bottom-32 -right-32 h-[480px] w-[480px] rounded-full border border-forest/10 bg-peach/25 blur-2xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -top-32 -left-32 h-[420px] w-[420px] rounded-full border border-forest/5 bg-forest/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-3.5 sm:px-6 lg:px-8 relative z-10 text-center">
      
      <span class="inline-flex items-center gap-2 rounded-full border border-forest/15 bg-white/80 backdrop-blur-sm px-3.5 sm:px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-forest shadow-xs">
        <span class="h-2 w-2 rounded-full bg-forest animate-pulse"></span>
        Educational Founder’s Series
      </span>

      <h2 class="mt-4 sm:mt-6 text-2xl sm:text-4xl lg:text-[3.25rem] font-black text-forest max-w-3xl mx-auto leading-tight" style="letter-spacing:-1.2px;">
        Because Better Schools Build a Brighter India.
      </h2>

      <p class="mt-3 sm:mt-5 text-sm sm:text-[1.1rem] leading-relaxed text-forest/75 max-w-2xl mx-auto font-normal">
        Your journey has inspired hundreds of students and faculty members. It's time to share that wisdom with the wider nation.
      </p>

      <div class="mt-7 sm:mt-10 flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
        <a href="#founder-form" 
           class="w-full sm:w-auto text-center rounded-full bg-forest px-7 sm:px-8 py-3.5 sm:py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid hover:text-white shadow-lg hover:shadow-xl hover:-translate-y-0.5">
          Share Your Story Now →
        </a>
        <a href="{{ url('/contact') }}" 
           class="w-full sm:w-auto text-center rounded-full border-2 border-forest/20 bg-white/70 px-7 sm:px-8 py-3.5 sm:py-4 text-xs sm:text-sm font-bold uppercase tracking-wider text-forest transition hover:border-forest hover:bg-white shadow-xs hover:-translate-y-0.5">
          Speak With Our Team
        </a>
      </div>

      <div class="mt-7 sm:mt-10 flex flex-wrap items-center justify-center gap-1.5 sm:gap-3 text-[11px] sm:text-xs font-semibold text-forest/70">
        <span class="rounded-full bg-white/80 border border-forest/10 px-2.5 sm:px-3.5 py-1 sm:py-1.5 shadow-xs">Education Leaders</span>
        <span class="text-forest/30">•</span>
        <span class="rounded-full bg-white/80 border border-forest/10 px-2.5 sm:px-3.5 py-1 sm:py-1.5 shadow-xs">Idea Exchange</span>
        <span class="text-forest/30">•</span>
        <span class="rounded-full bg-white/80 border border-forest/10 px-2.5 sm:px-3.5 py-1 sm:py-1.5 shadow-xs">Institutional Collaboration</span>
        <span class="text-forest/30">•</span>
        <span class="rounded-full bg-white/80 border border-forest/10 px-2.5 sm:px-3.5 py-1 sm:py-1.5 shadow-xs">Real Impact</span>
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
      s1 = document.getElementById('step1'),
      s2 = document.getElementById('step2'),
      done = document.getElementById('formSuccessState'),
      live = document.getElementById('liveStatus'),
      nextBtn = document.getElementById('nextBtn'),
      backBtn = document.getElementById('backBtn');

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

  function setStep(n) {
    s1.hidden = (n === 2);
    s2.hidden = (n === 1);

    document.querySelectorAll('[data-indicator]').forEach(function (card) {
      var step = parseInt(card.getAttribute('data-indicator'));
      var on = step === n;
      var completed = step < n;
      var bubble = card.querySelector('[data-bubble]');
      var tag = card.querySelector('[data-tag]');
      var label = card.querySelector('[data-label]');

      if (on) {
        card.className = 'flex items-center gap-2.5 py-2.5 px-3.5 rounded-xl bg-forest text-white shadow-sm border border-forest transition-all duration-300 cursor-default';
        if (bubble) {
          bubble.className = 'grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-white/15 text-peach text-xs font-bold transition-all';
          bubble.innerHTML = (step === 1) ? '<i class="fa-solid fa-user text-[11px]"></i>' : '<i class="fa-solid fa-building-columns text-[11px]"></i>';
        }
        if (tag) tag.className = 'text-[10px] font-bold uppercase tracking-wider text-peach';
        if (label) label.className = 'text-xs font-bold text-white truncate';
      } else if (completed) {
        card.className = 'flex items-center gap-2.5 py-2.5 px-3.5 rounded-xl bg-forest/10 text-forest border border-forest/20 transition-all duration-300 cursor-pointer hover:bg-forest/15';
        if (bubble) {
          bubble.className = 'grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-forest text-peach text-xs font-bold transition-all';
          bubble.innerHTML = '<i class="fa-solid fa-check text-[11px]"></i>';
        }
        if (tag) tag.className = 'text-[10px] font-bold uppercase tracking-wider text-forest/70';
        if (label) label.className = 'text-xs font-bold text-forest truncate';
      } else {
        card.className = 'flex items-center gap-2.5 py-2.5 px-3.5 rounded-xl bg-transparent text-forest/50 border border-transparent transition-all duration-300 cursor-default';
        if (bubble) {
          bubble.className = 'grid h-7 w-7 shrink-0 place-items-center rounded-lg bg-cream-edge/70 text-forest/40 text-xs font-semibold transition-all';
          bubble.innerHTML = '<i class="fa-solid fa-building-columns text-[11px]"></i>';
        }
        if (tag) tag.className = 'text-[10px] font-semibold uppercase tracking-wider text-forest/40';
        if (label) label.className = 'text-xs font-semibold text-forest/60 truncate';
      }
    });

    if (live) live.textContent = 'Step ' + n + ' of 2';
    var f = (n === 1 ? s1 : s2).querySelector('input, select');
    if (f) f.focus({ preventScroll: true });
  }

  // Allow clicking completed Step 1 card to go back
  document.querySelectorAll('[data-indicator]').forEach(function (card) {
    card.addEventListener('click', function () {
      var step = parseInt(card.getAttribute('data-indicator'));
      if (step === 1 && s1.hidden) {
        setStep(1);
      }
    });
  });

  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      var bad = validate(s1);
      if (bad) {
        bad.focus();
        if (live) live.textContent = 'Please fill out all required details.';
        return;
      }
      setStep(2);
    });
  }

  if (backBtn) {
    backBtn.addEventListener('click', function () {
      setStep(1);
    });
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
      var bad = validate(s2);

      if (bad) {
        bad.focus();
        if (live) live.textContent = 'Please complete all required fields.';
        return;
      }

      // UI submission state
      s1.hidden = true;
      s2.hidden = true;
      if (done) done.hidden = false;
      if (live) live.textContent = 'Story submitted successfully.';
    });
  }

  // Mobile touch interaction for Story Panels
  var storyPanels = document.querySelectorAll('.story-panel');
  if (storyPanels.length) {
    storyPanels.forEach(function (panel) {
      panel.addEventListener('click', function () {
        if (window.innerWidth <= 900) {
          var isAlreadyActive = panel.classList.contains('active');
          storyPanels.forEach(function (p) { p.classList.remove('active'); });
          if (!isAlreadyActive) {
            panel.classList.add('active');
          }
        }
      });
    });
  }
})();
</script>
@endpush
