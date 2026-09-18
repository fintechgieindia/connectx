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

    <div class="mx-auto max-w-shell px-5 lg:px-8">
      <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-14 xl:gap-20">

        {{-- LEFT COLUMN: HERO HEADLINE & VALUE PROPOSITION --}}
        <div>
          
          {{-- Eyebrow with Podcast Live Wave --}}
          <div class="inline-flex items-center gap-3 rounded-full executive-badge px-4 py-2 text-xs font-bold uppercase tracking-wider text-forest">
            <span class="flex h-2.5 w-2.5 rounded-full bg-peach-deep animate-ping"></span>
            <span>The Education Business Room</span>
            <span class="text-forest/30">|</span>
            <div class="pod-wave">
              <span></span><span></span><span></span><span></span><span></span>
            </div>
            <span class="font-semibold text-forest/75 normal-case tracking-normal">Founder’s Series</span>
          </div>

          {{-- Main Hero Headline --}}
          <h1 class="mt-6 text-[2.4rem] font-black leading-[1.08] sm:text-5xl lg:text-[3.25rem] text-forest" style="letter-spacing:-2px;">
            Where India's Education
            <span class="block" style="color:#14513f;">Leaders Speak First.</span>
          </h1>

          {{-- Subtitle / Description --}}
          <p class="mt-6 text-[1.05rem] leading-relaxed text-forest/80 font-normal">
            <strong>The Education Business Room</strong> by Young Chanakya X is an exclusive platform for school founders, college correspondents, and institutional leaders — a space to share your real journey, exchange ideas with peers, and put your institution on the national map.
          </p>

          {{-- 6 Quick Highlights Inspired by the Graphic --}}
          <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 gap-3">
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">🎙️</span>
              <span class="text-xs font-semibold leading-tight text-forest">Video Podcast Feature</span>
            </div>
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">🌟</span>
              <span class="text-xs font-semibold leading-tight text-forest">National Spotlight</span>
            </div>
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">🤝</span>
              <span class="text-xs font-semibold leading-tight text-forest">Founder Circle Meetups</span>
            </div>
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">🏛️</span>
              <span class="text-xs font-semibold leading-tight text-forest">Campus Leadership Talks</span>
            </div>
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">💼</span>
              <span class="text-xs font-semibold leading-tight text-forest">Internship Connect</span>
            </div>
            <div class="flex items-center gap-2.5 rounded-xl border border-cream-edge bg-white/80 p-3 shadow-xs">
              <span class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-forest text-peach text-sm">🚀</span>
              <span class="text-xs font-semibold leading-tight text-forest">Student Masterclasses</span>
            </div>
          </div>

          {{-- Trust Footnote --}}
          <div class="mt-8 flex flex-wrap items-center gap-4 text-xs font-medium text-forest/70">
            <span class="inline-flex items-center gap-1.5 font-bold text-forest">
              <i class="bi bi-shield-check text-forest-mid text-sm"></i> Curated &amp; Closed-Door
            </span>
            <span>•</span>
            <span>No Cost to Participate</span>
            <span>•</span>
            <span>Broadcast-Quality Production</span>
          </div>

        </div>

        {{-- RIGHT COLUMN: HERO FORM (Direct Access For Founders & Leaders) --}}
        <div id="founder-form">
          <div class="hero-glass-card rounded-[1.85rem] p-6 sm:p-8 lg:p-9">

            {{-- Card Header --}}
            <div class="border-b border-cream-edge pb-5">
              <div class="flex items-center justify-between">
                <span class="rounded-full bg-forest/10 px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-forest">
                  Executive Registration
                </span>
                <span class="text-xs font-medium text-forest/60">Takes 2 mins</span>
              </div>
              <h2 class="mt-3 text-2xl sm:text-[1.75rem] font-bold leading-tight text-forest">
                Share Your Journey
              </h2>
              <p class="mt-1 text-xs sm:text-sm text-forest/70">
                Join The Education Business Room or bring YCX programs to your campus.
              </p>
            </div>

            {{-- 2-Step Progress Indicator --}}
            <div class="mt-5 border-b border-cream-edge pb-4">
              <ol class="flex items-center justify-between gap-3 list-none p-0 m-0" aria-label="Progress">
                <li class="flex items-center gap-2.5 flex-1" data-indicator="1">
                  <span data-bubble class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-forest text-xs font-bold text-peach">1</span>
                  <span class="text-xs font-semibold text-forest">About You</span>
                </li>
                <li class="h-px flex-1 bg-cream-edge"></li>
                <li class="flex items-center gap-2.5 flex-1 justify-end" data-indicator="2">
                  <span data-bubble class="grid h-7 w-7 shrink-0 place-items-center rounded-full border border-forest/25 text-xs font-semibold text-forest/50">2</span>
                  <span class="text-xs font-semibold text-forest/50">Your Campus</span>
                </li>
              </ol>
            </div>

            {{-- FORM ELEMENT --}}
            <form id="founderRegForm" class="mt-5" novalidate>

              {{-- STEP 1: ABOUT THE FOUNDER / LEADER --}}
              <fieldset id="step1">
                <legend class="sr-only">About the Founder / Leader</legend>
                <div class="space-y-4">
                  <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Your Full Name <span class="text-red-600">*</span></label>
                    <input id="name" name="name" type="text" required placeholder="e.g. Dr. Ramesh Chander"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Please enter your name.</p>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label for="role" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Your Role <span class="text-red-600">*</span></label>
                      <select id="role" name="role" required
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
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
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                      <p class="error-msg">Enter a reachable phone number.</p>
                    </div>
                  </div>

                  <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Official / Personal Email <span class="text-red-600">*</span></label>
                    <input id="email" name="email" type="email" required placeholder="founder@institution.edu.in"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Enter a valid email address.</p>
                  </div>
                </div>

                <div class="mt-6 flex items-center justify-between pt-2">
                  <span class="text-[11px] text-forest/50">Confidential · Direct YCX Team Access</span>
                  <button type="button" id="nextBtn"
                    class="rounded-full bg-forest px-7 py-3 text-xs font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid shadow-sm">
                    Continue to Institution →
                  </button>
                </div>
              </fieldset>

              {{-- STEP 2: ABOUT THE INSTITUTION & PARTICIPATION --}}
              <fieldset id="step2" hidden>
                <legend class="sr-only">About Your Institution</legend>
                <div class="space-y-4">
                  <div>
                    <label for="inst" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Institution / Group Name <span class="text-red-600">*</span></label>
                    <input id="inst" name="inst" type="text" required placeholder="e.g. Sri Krishna Educational Trust"
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                    <p class="error-msg">Enter your institution or group name.</p>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                      <label for="type" class="block text-xs font-bold uppercase tracking-wider text-forest/85">Category <span class="text-red-600">*</span></label>
                      <select id="type" name="type" required
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
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
                        class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                      <p class="error-msg">Enter city and state.</p>
                    </div>
                  </div>

                  {{-- What would you like to explore? (Dropdown) --}}
                  <div>
                    <label for="interest" class="block text-xs font-bold uppercase tracking-wider text-forest/85">
                      What Would You Like to Explore? <span class="text-red-600">*</span>
                    </label>
                    <select id="interest" name="interest" required
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest outline-none transition focus:border-forest focus:bg-white">
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
                      class="mt-1.5 w-full rounded-xl border border-cream-edge bg-cream/50 px-4 py-3 text-sm text-forest placeholder:text-forest/35 outline-none transition focus:border-forest focus:bg-white" />
                  </div>
                </div>

                <div class="mt-6 flex items-center justify-between pt-2">
                  <button type="button" id="backBtn" class="text-xs font-bold text-forest/70 underline underline-offset-4 hover:text-forest">
                    ← Back
                  </button>
                  <button type="submit"
                    class="rounded-full bg-forest px-7 py-3 text-xs font-bold uppercase tracking-wider text-peach transition hover:bg-forest-mid shadow-sm">
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
  <section class="py-20 lg:py-28 bg-white border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-5 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto">
        <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          The Leadership Circle
        </span>
        <h2 class="mt-4 text-3xl font-black sm:text-4xl lg:text-[2.75rem] text-forest" style="letter-spacing:-1.5px;">
          Who Is This Conversation For?
        </h2>
        <p class="mt-4 text-forest/75 text-[1.05rem] leading-relaxed">
          We invite leaders from across the education continuum who are carrying the responsibility of institutions and inspiring the next generation of builders.
        </p>
      </div>

      {{-- 6 Cards Grid with Evocative Imagery --}}
      <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Profile 1 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80" 
                 alt="College Correspondent at university campus" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Higher Education</span>
            <h3 class="mt-1 text-xl font-bold text-forest">College Correspondents</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
              Preserving institutional values, building long-term vision, and navigating generational transitions with accountability.
            </p>
          </div>
        </article>

        {{-- Profile 2 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80" 
                 alt="College Chairperson leading campus strategy" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Institutional Governance</span>
            <h3 class="mt-1 text-xl font-bold text-forest">College Chairpersons</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
              Leading institutions through rapid educational change, campus expansion, and international accreditations.
            </p>
          </div>
        </article>

        {{-- Profile 3 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=700&q=80" 
                 alt="School Founder building a community school" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">K-12 &amp; School Foundations</span>
            <h3 class="mt-1 text-xl font-bold text-forest">School Founders &amp; Owners</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
              Turning early educational conviction into real campuses, overcoming early hurdles, and nurturing young minds.
            </p>
          </div>
        </article>

        {{-- Profile 4 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=700&q=80" 
                 alt="Principals and directors mentoring students" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Academic Leadership</span>
            <h3 class="mt-1 text-xl font-bold text-forest">Principals &amp; Directors</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
              Guiding teaching culture, modernizing curriculums, and striking the balance between academic rigour and well-being.
            </p>
          </div>
        </article>

        {{-- Profile 5 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=700&q=80" 
                 alt="Education entrepreneurs building new models" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">EdTech &amp; Innovation</span>
            <h3 class="mt-1 text-xl font-bold text-forest">Education Entrepreneurs</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
              Pioneering sustainable business models, skill-first learning academies, and AI-enabled educational ecosystems.
            </p>
          </div>
        </article>

        {{-- Profile 6 --}}
        <article class="group overflow-hidden rounded-2xl border border-cream-edge bg-cream-card transition hover:border-forest/40 hover:shadow-lg">
          <div class="h-48 w-full overflow-hidden bg-cream-warm">
            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=700&q=80" 
                 alt="Executive roundtable of chancellors and board members" 
                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-6">
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/50">Strategy &amp; Ecosystem</span>
            <h3 class="mt-1 text-xl font-bold text-forest">Trustees &amp; Board Members</h3>
            <p class="mt-2 text-sm leading-relaxed text-forest/70">
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
  <section class="py-20 lg:py-28 bg-forest text-cream relative">
    <div class="mx-auto max-w-shell px-5 lg:px-8">
      
      <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-16">
        
        <div class="lg:col-span-6">
          <span class="text-xs font-bold uppercase tracking-widest text-peach">
            Beyond the Institution · Behind the Journey
          </span>

          <h2 class="mt-4 text-3xl font-black leading-tight sm:text-4xl lg:text-[2.85rem] text-cream" style="letter-spacing:-1.5px;">
            The Untold Stories of the People Who Built the Campus.
          </h2>

          <p class="mt-6 text-[1.05rem] leading-relaxed text-cream/80">
            Every successful institution has an authentic story that rarely makes it to the admission brochure:
          </p>

          <p class="mt-4 text-[1.05rem] leading-relaxed text-cream/70">
            The initial spark. The sleepless nights. The regulatory gridlocks. The calculated risks. The financial tightropes. And the turning point when students finally walked through the gates.
          </p>

          <p class="mt-4 text-[1.05rem] leading-relaxed text-cream/70">
            <strong>The Education Business Room</strong> was created to bring these leadership journeys to the surface — unscripted, reflective, and deeply valuable for the entire education community.
          </p>

          {{-- 5 Core Focus Areas Pills --}}
          <div class="mt-8 flex flex-wrap gap-2.5">
            <span class="rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-semibold text-peach">
              🎙️ Founder Conversations
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-semibold text-peach">
              🏛️ Institution Heritage
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-semibold text-peach">
              💡 Education Innovation
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-semibold text-peach">
              📊 Business of Education
            </span>
            <span class="rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-semibold text-peach">
              🔮 Future of Learning &amp; AI
            </span>
          </div>
        </div>

        {{-- Right Side Quote & Visual --}}
        <div class="lg:col-span-6">
          <div class="rounded-3xl border border-peach/20 bg-forest-deep/60 p-8 sm:p-12 relative overflow-hidden backdrop-blur-sm shadow-2xl">
            <div class="text-peach/20 text-6xl font-display leading-none select-none">“</div>
            <blockquote class="mt-2 text-2xl sm:text-3xl font-semibold italic leading-snug text-cream">
              Education is not just a system. It’s people, purpose, and possibility.
            </blockquote>
            <div class="mt-6 flex items-center gap-4 pt-6 border-t border-cream/15">
              <div class="h-10 w-10 rounded-full bg-peach flex items-center justify-center text-forest font-bold text-sm">
                YCX
              </div>
              <div>
                <div class="text-sm font-bold text-cream">The Education Business Room</div>
                <div class="text-xs text-cream/60">A Young Chanakya Executive Initiative</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       04. THE FOUNDER STORY (The 5-Stage Leadership Arc)
       ============================================================ --}}
  <section id="founder-story" class="py-20 lg:py-32 bg-forest overflow-hidden relative">

    {{-- Ambient radial glows --}}
    <div class="pointer-events-none absolute -top-32 left-1/4 h-[500px] w-[500px] rounded-full bg-peach/8 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-20 right-1/3 h-[400px] w-[400px] rounded-full bg-peach/5 blur-3xl" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-5 lg:px-8 relative z-10">

      {{-- Section Header --}}
      <div class="text-center max-w-2xl mx-auto">
        <span class="inline-flex items-center gap-2 rounded-full border border-peach/25 bg-white/5 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-peach">
          <span class="h-1.5 w-1.5 rounded-full bg-peach"></span>
          The Narrative Framework
        </span>
        <h2 class="mt-5 text-3xl font-black sm:text-4xl lg:text-[2.75rem] text-cream" style="letter-spacing:-1.5px;">
          The Founder Arc: Five Chapters That Define Your Legacy
        </h2>
        <p class="mt-4 text-cream/60 text-[1.05rem] leading-relaxed">
          Every institution carries a story that goes far deeper than its prospectus. We help you tell it.
        </p>
      </div>

      {{-- Large Arc Path SVG connector (desktop only) --}}
      <div class="hidden lg:block relative mt-20" aria-hidden="true">
        <svg class="absolute top-[88px] left-0 w-full overflow-visible" height="60" viewBox="0 0 1200 60" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60 30 C180 30 180 55 300 55 C420 55 420 5 540 5 C660 5 660 55 780 55 C900 55 900 5 1020 5 C1140 5 1140 30 1200 30"
                stroke="#ffd2b1" stroke-opacity="0.18" stroke-width="1.5" stroke-dasharray="6 4" fill="none"/>
        </svg>
      </div>

      {{-- 5 Phases --}}
      <div class="mt-16 lg:mt-0 grid gap-6 sm:grid-cols-2 lg:grid-cols-5 relative">

        {{-- Phase 01 — The Beginning --}}
        <div class="group flex flex-col rounded-3xl border border-peach/15 bg-forest-deep/60 backdrop-blur-sm overflow-hidden transition hover:border-peach/35 hover:bg-forest-mid/40 hover:-translate-y-2 duration-300 lg:mt-0">
          <div class="w-full h-44 overflow-hidden">
            <img src="{{ asset('images/assets/arc-01-beginning.jpg') }}" alt="The Beginning — the spark of conviction" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-7">
            <div class="flex items-center gap-2 mb-3">
              <span class="text-[10px] font-black uppercase tracking-widest text-peach/50">Phase</span>
              <span class="text-2xl font-black text-peach/30" style="letter-spacing:-1px;">01</span>
            </div>
            <h3 class="text-lg font-black text-cream" style="letter-spacing:-0.5px;">The Beginning</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream/55">
              Why did you start? What was the personal conviction that made you lay the first foundation stone?
            </p>
          </div>
        </div>

        {{-- Phase 02 — The Struggle --}}
        <div class="group flex flex-col rounded-3xl border border-peach/15 bg-forest-deep/60 backdrop-blur-sm overflow-hidden transition hover:border-peach/35 hover:bg-forest-mid/40 hover:-translate-y-2 duration-300 lg:mt-12">
          <div class="w-full h-44 overflow-hidden">
            <img src="{{ asset('images/assets/arc-02-struggle.jpg') }}" alt="The Struggle — storms and challenges" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-7">
            <div class="flex items-center gap-2 mb-3">
              <span class="text-[10px] font-black uppercase tracking-widest text-peach/50">Phase</span>
              <span class="text-2xl font-black text-peach/30" style="letter-spacing:-1px;">02</span>
            </div>
            <h3 class="text-lg font-black text-cream" style="letter-spacing:-0.5px;">The Struggle</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream/55">
              What almost broke the vision? The financial storms, regulatory walls, and sleepless nights that tested everything.
            </p>
          </div>
        </div>

        {{-- Phase 03 — The Turning Point --}}
        <div class="group flex flex-col rounded-3xl border border-peach/15 bg-forest-deep/60 backdrop-blur-sm overflow-hidden transition hover:border-peach/35 hover:bg-forest-mid/40 hover:-translate-y-2 duration-300 lg:-mt-4">
          <div class="w-full h-44 overflow-hidden">
            <img src="{{ asset('images/assets/arc-03-turning-point.jpg') }}" alt="The Turning Point — sunrise and breakthrough" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-7">
            <div class="flex items-center gap-2 mb-3">
              <span class="text-[10px] font-black uppercase tracking-widest text-peach/50">Phase</span>
              <span class="text-2xl font-black text-peach/30" style="letter-spacing:-1px;">03</span>
            </div>
            <h3 class="text-lg font-black text-cream" style="letter-spacing:-0.5px;">The Turning Point</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream/55">
              What changed everything? The breakthrough moment when the institution crossed into public trust and recognition.
            </p>
          </div>
        </div>

        {{-- Phase 04 — The Lesson --}}
        <div class="group flex flex-col rounded-3xl border border-peach/15 bg-forest-deep/60 backdrop-blur-sm overflow-hidden transition hover:border-peach/35 hover:bg-forest-mid/40 hover:-translate-y-2 duration-300 lg:mt-12">
          <div class="w-full h-44 overflow-hidden">
            <img src="{{ asset('images/assets/arc-04-lesson.jpg') }}" alt="The Lesson — compass and wisdom" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-7">
            <div class="flex items-center gap-2 mb-3">
              <span class="text-[10px] font-black uppercase tracking-widest text-peach/50">Phase</span>
              <span class="text-2xl font-black text-peach/30" style="letter-spacing:-1px;">04</span>
            </div>
            <h3 class="text-lg font-black text-cream" style="letter-spacing:-0.5px;">The Lesson</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream/55">
              What did the journey teach you? Hard-won principles that every aspiring education founder needs to hear.
            </p>
          </div>
        </div>

        {{-- Phase 05 — The Future --}}
        <div class="group flex flex-col rounded-3xl border border-peach/20 bg-peach/10 backdrop-blur-sm overflow-hidden transition hover:border-peach/45 hover:bg-peach/15 hover:-translate-y-2 duration-300 lg:mt-0">
          <div class="w-full h-44 overflow-hidden">
            <img src="{{ asset('images/assets/arc-05-future.jpg') }}" alt="The Future — rocket and ambition" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
          </div>
          <div class="p-7">
            <div class="flex items-center gap-2 mb-3">
              <span class="text-[10px] font-black uppercase tracking-widest text-peach/60">Phase</span>
              <span class="text-2xl font-black text-peach/45" style="letter-spacing:-1px;">05</span>
            </div>
            <h3 class="text-lg font-black text-cream" style="letter-spacing:-0.5px;">The Future</h3>
            <p class="mt-2 text-sm leading-relaxed text-cream/60">
              Where is education heading next? How you're positioning your institution and its students for an AI-native world.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       05. WHAT WE TALK ABOUT (Themes in Modern Education)
       ============================================================ --}}
  <section class="py-20 lg:py-28 bg-cream-warm border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-5 lg:px-8">
      
      <div class="max-w-2xl">
        <span class="text-xs font-bold uppercase tracking-widest text-forest-mid">
          Curated Discourse
        </span>
        <h2 class="mt-3 text-3xl font-black sm:text-4xl lg:text-[2.75rem] text-forest" style="letter-spacing:-1.5px;">
          What We Talk About
        </h2>
        <p class="mt-4 text-forest/75 text-[1.05rem] leading-relaxed">
          Conversations anchored in the most decisive themes governing Indian and global education today.
        </p>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Theme 1 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">Founder Journeys &amp; Leadership</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            Unfiltered conversations on personal resilience, team culture, governance, and institutional endurance.
          </p>
        </div>

        {{-- Theme 2 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">AI, ERP &amp; Campus Tech</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            Navigating digital transformation, adopting generative AI responsibly, and modernizing campus operations.
          </p>
        </div>

        {{-- Theme 3 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">The Future of Education</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            Shifting from rote academics to skill-first mastery, global curriculums, and entrepreneurial mindsets.
          </p>
        </div>

        {{-- Theme 4 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">The Business of Education</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            Infrastructure financing, fee structures, regulatory compliance, faculty retention, and sustainable campus models.
          </p>
        </div>

        {{-- Theme 5 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">Transformation &amp; Turnarounds</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            How legacy schools and colleges adapt, rebrand, elevate placements, and regain regional eminence.
          </p>
        </div>

        {{-- Theme 6 --}}
        <div class="rounded-2xl border border-cream-edge bg-white p-7 transition hover:border-forest hover:shadow-md">
          <div class="h-10 w-10 rounded-xl bg-forest/10 flex items-center justify-center text-forest">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="mt-5 text-xl font-bold text-forest">Social Impact &amp; Nation Building</h3>
          <p class="mt-2.5 text-sm leading-relaxed text-forest/70">
            Providing accessible, high-quality education in Tier 2/3 cities and creating upward mobility for first-generation learners.
          </p>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       06. WHY JOIN THE CONVERSATION? (6 Value Propositions)
       ============================================================ --}}
  <section class="py-20 lg:py-28 bg-white border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-5 lg:px-8">

      <div class="text-center max-w-3xl mx-auto">
        <span class="rounded-full bg-peach/40 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          Tangible Value
        </span>
        <h2 class="mt-4 text-[1.9rem] font-black sm:text-[2.2rem] lg:text-[2.6rem] text-forest whitespace-nowrap" style="letter-spacing:-1.5px;">
          Why Be Part of the Conversation?
        </h2>
        <p class="mt-4 text-forest/75 text-[1.05rem] leading-relaxed">
          Your story, your platform, your institutional legacy — all on the national stage.
        </p>
      </div>

      <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Card 1 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.07A1 1 0 0121 8.845v6.31a1 1 0 01-1.447.894L15 14M3 8a2 2 0 012-2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Professional Broadcast Recording</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              High-definition multi-camera video, studio audio, and cinematic post-production for national distribution.
            </p>
          </div>
        </div>

        {{-- Card 2 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Elevated Digital Presence</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              Featured across YouTube, Spotify, LinkedIn, and the YCX digital ecosystem — reaching the right audience.
            </p>
          </div>
        </div>

        {{-- Card 3 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Authoritative Thought Leadership</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              Position yourself as a visionary voice in modern education — a benchmark for institutions across India.
            </p>
          </div>
        </div>

        {{-- Card 4 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Closed-Door Founder Network</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              Exclusive private roundtables and conclaves with founders and chairpersons of 120+ institutions.
            </p>
          </div>
        </div>

        {{-- Card 5 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Institutional Storytelling</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              Give parents, faculty, and alumni an authentic, compelling reason to trust your campus — beyond the brochure.
            </p>
          </div>
        </div>

        {{-- Card 6 --}}
        <div class="flex items-start gap-4 rounded-2xl border border-cream-edge bg-cream p-6 transition hover:border-forest/30 hover:shadow-md">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-tight">Direct Student Programs</h3>
            <p class="mt-1.5 text-sm leading-relaxed text-forest/65">
              Unlock YCX masterclasses, industry speaker sessions, internship connects, and campus ambassadors for your students.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  {{-- ============================================================
       07. HOW THE CONVERSATION WORKS (Step-by-Step Roadmap)
       ============================================================ --}}
  <section class="py-20 lg:py-28 bg-cream border-b border-cream-edge">
    <div class="mx-auto max-w-shell px-5 lg:px-8">

      <div class="text-center max-w-2xl mx-auto">
        <span class="rounded-full bg-forest/10 px-3.5 py-1.5 text-xs font-bold uppercase tracking-wider text-forest">
          Simple &amp; Curated
        </span>
        <h2 class="mt-4 text-[1.9rem] font-black sm:text-[2.2rem] lg:text-[2.6rem] text-forest whitespace-nowrap" style="letter-spacing:-1.5px;">
          How the Conversation Works
        </h2>
        <p class="mt-4 text-forest/75 text-[1.05rem]">
          A seamless process designed to respect your schedule and put your voice front and centre.
        </p>
      </div>

      <ol class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-5 list-none p-0 m-0">

        <li class="relative flex flex-col gap-4 rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 01</span>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-snug">Tell Us About You</h3>
            <p class="mt-1.5 text-sm text-forest/65 leading-relaxed">
              Submit your profile via the form above in under two minutes.
            </p>
          </div>
        </li>

        <li class="relative flex flex-col gap-4 rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
              </svg>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 02</span>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-snug">Editorial Review</h3>
            <p class="mt-1.5 text-sm text-forest/65 leading-relaxed">
              Our curation team reviews your journey and finds the ideal conversation angle.
            </p>
          </div>
        </li>

        <li class="relative flex flex-col gap-4 rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 03</span>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-snug">We Connect</h3>
            <p class="mt-1.5 text-sm text-forest/65 leading-relaxed">
              A 15-minute briefing call to align on talking points, themes, and recording dates.
            </p>
          </div>
        </li>

        <li class="relative flex flex-col gap-4 rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
              </svg>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 04</span>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-snug">The Conversation</h3>
            <p class="mt-1.5 text-sm text-forest/65 leading-relaxed">
              Record in-studio or on campus — a relaxed, candid dialogue on your own terms.
            </p>
          </div>
        </li>

        <li class="relative flex flex-col gap-4 rounded-2xl border border-cream-edge bg-white p-6 shadow-xs transition hover:border-forest/30 hover:shadow-md">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-forest shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-peach" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
              </svg>
            </div>
            <span class="text-[11px] font-bold uppercase tracking-widest text-forest/40">Step 05</span>
          </div>
          <div>
            <h3 class="text-[15px] font-bold text-forest leading-snug">We Tell Your Story</h3>
            <p class="mt-1.5 text-sm text-forest/65 leading-relaxed">
              Mastered, produced, and published across national media and the YCX creator network.
            </p>
          </div>
        </li>

      </ol>

    </div>
  </section>

  {{-- ============================================================
       08. SHARE YOUR STORY FINAL CTA BANNER
       ============================================================ --}}
  <section class="py-20 lg:py-24 bg-forest text-cream relative overflow-hidden">
    {{-- Background Accent Ring --}}
    <div class="pointer-events-none absolute -bottom-32 -right-32 h-[450px] w-[450px] rounded-full border border-peach/15" aria-hidden="true"></div>

    <div class="mx-auto max-w-shell px-5 lg:px-8 relative z-10 text-center">
      
      <span class="inline-flex items-center gap-2 rounded-full border border-peach/30 bg-white/5 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-peach">
        <span class="h-2 w-2 rounded-full bg-peach animate-pulse"></span>
        Educational Founder’s Series
      </span>

      <h2 class="mt-6 text-3xl font-black sm:text-4xl lg:text-[3.25rem] text-cream max-w-3xl mx-auto leading-tight" style="letter-spacing:-2px;">
        Because Better Schools Build a Brighter India.
      </h2>

      <p class="mt-5 text-[1.1rem] leading-relaxed text-cream/75 max-w-2xl mx-auto font-normal">
        Your journey has inspired hundreds of students and faculty members. It's time to share that wisdom with the wider nation.
      </p>

      <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
        <a href="#founder-form" 
           class="rounded-full bg-peach px-8 py-4 text-sm font-bold uppercase tracking-wider text-forest transition hover:bg-white hover:text-forest shadow-lg">
          Share Your Story Now →
        </a>
        <a href="{{ url('/contact') }}" 
           class="rounded-full border border-cream/30 bg-transparent px-8 py-4 text-sm font-bold uppercase tracking-wider text-cream transition hover:border-cream hover:bg-white/10">
          Speak With Our Team
        </a>
      </div>

      <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-xs text-cream/60">
        <span>Education Leaders</span>
        <span>•</span>
        <span>Idea Exchange</span>
        <span>•</span>
        <span>Institutional Collaboration</span>
        <span>•</span>
        <span>Real Impact</span>
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

    document.querySelectorAll('[data-indicator]').forEach(function (li) {
      var on = li.getAttribute('data-indicator') === String(n);
      var bubble = li.querySelector('[data-bubble]');
      if (bubble) {
        bubble.className = on
          ? 'grid h-7 w-7 shrink-0 place-items-center rounded-full bg-forest text-xs font-bold text-peach'
          : 'grid h-7 w-7 shrink-0 place-items-center rounded-full border border-forest/25 text-xs font-semibold text-forest/50';
      }
      var label = li.querySelector('span:last-child');
      if (label) {
        label.className = on ? 'text-xs font-semibold text-forest' : 'text-xs font-semibold text-forest/50';
      }
    });

    if (live) live.textContent = 'Step ' + n + ' of 2';
    var f = (n === 1 ? s1 : s2).querySelector('input, select');
    if (f) f.focus({ preventScroll: true });
  }

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
})();
</script>
@endpush
