@php
/**
 * YCX Masterclasses Page SEO Data
 */
$seo = [
    'title'       => 'YCX Masterclasses — Young Chanakya X',
    'description' => 'Your first step to building a career or startup — learn from India\'s sharpest young achievers in live, action-packed sessions.',
    'keywords'    => 'masterclass, YCX masterclass, career, startup, learn online, Young Chanakya X',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/ycx-masterclass.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}?v={{ time() }}">
@endpush

@section('content')
<div class="mc-page-wrapper">
  <!-- HERO -->
  <section class="hero-sec">
    <div class="wrap">
      <h1>Young Chanakya X's Exclusive<br><span class="accent">Masterclasses</span></h1>
      <p class="lead">Build practical skills through expert-led masterclasses designed for students, professionals, creators, entrepreneurs, and lifelong learners.</p>
      <div class="hero-check-row">
        <div class="mc-check">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <path d="M20 6L9 17l-5-5"/>
          </svg>
          <span>Live expert-led sessions</span>
        </div>
        <div class="mc-check">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <path d="M20 6L9 17l-5-5"/>
          </svg>
          <span>Practical learning</span>
        </div>
        <div class="mc-check">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <path d="M20 6L9 17l-5-5"/>
          </svg>
          <span>Real-world case studies</span>
        </div>
      </div>
     
    <div class="mentor-carousel-container">
    <div class="mentor-carousel-track">
        <img src="{{ asset('images/media/master-classes/card-1.jpeg') }}" alt="Masterclass Card 1">
        <img src="{{ asset('images/media/master-classes/card-2.jpeg') }}" alt="Masterclass Card 2">
        <img src="{{ asset('images/media/master-classes/card-3.jpeg') }}" alt="Masterclass Card 3">
        <img src="{{ asset('images/media/master-classes/card-4.jpeg') }}" alt="Masterclass Card 4">
        <img src="{{ asset('images/media/master-classes/card-5.jpeg') }}" alt="Masterclass Card 5">
        <img src="{{ asset('images/media/master-classes/card-6.jpeg') }}" alt="Masterclass Card 6">
        <img src="{{ asset('images/media/master-classes/card-7.webp') }}" alt="Masterclass Card 7">
        <img src="{{ asset('images/media/master-classes/card-8.webp') }}" alt="Masterclass Card 8">
        <img src="{{ asset('images/media/master-classes/card-9.webp') }}" alt="Masterclass Card 9">
        <img src="{{ asset('images/media/master-classes/card-10.webp') }}" alt="Masterclass Card 10">

        <!-- Duplicated for Infinite Loop -->
        <img src="{{ asset('images/media/master-classes/card-1.jpeg') }}" alt="Masterclass Card 1">
        <img src="{{ asset('images/media/master-classes/card-2.jpeg') }}" alt="Masterclass Card 2">
        <img src="{{ asset('images/media/master-classes/card-3.jpeg') }}" alt="Masterclass Card 3">
        <img src="{{ asset('images/media/master-classes/card-4.jpeg') }}" alt="Masterclass Card 4">
        <img src="{{ asset('images/media/master-classes/card-5.jpeg') }}" alt="Masterclass Card 5">
        <img src="{{ asset('images/media/master-classes/card-6.jpeg') }}" alt="Masterclass Card 6">
        <img src="{{ asset('images/media/master-classes/card-7.webp') }}" alt="Masterclass Card 7">
        <img src="{{ asset('images/media/master-classes/card-8.webp') }}" alt="Masterclass Card 8">
        <img src="{{ asset('images/media/master-classes/card-9.webp') }}" alt="Masterclass Card 9">
        <img src="{{ asset('images/media/master-classes/card-10.webp') }}" alt="Masterclass Card 10">
    </div>
</div>

    </div>
  </section>

  <!-- EXPERIENCE SECTION -->
  <section class="experience-sec py-5">
    <div class="wrap">
      <div class="exp-layout">
        <!-- Left Column: Title & Info -->
        <div class="exp-left">
          <span class="eyebrow">WHY YCX MASTERCLASSES</span>
          <h2>The YCX Masterclass Experience</h2>
          <p>YCX Masterclasses combine practical learning, expert insights, and interactive experiences to help you build skills that make a difference in your personal and professional journey.</p>
        </div>

        <!-- Right Column: Grid of Cards -->
        <div class="exp-right">
          <div class="exp-grid">
            <!-- Card 1 -->
            <div class="exp-card tint-green">
              <div class="exp-card-content">
                <h4>Learn From Experts</h4>
                <p>Gain insights from professionals with real industry experience.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="35" r="14" fill="currentColor" fill-opacity="0.25"/>
                <path d="M25 75 C25 60 35 55 50 55 C65 55 75 60 75 75" fill="currentColor" fill-opacity="0.1"/>
                <path d="M72 20 L75 27 L82 30 L75 33 L72 40 L69 33 L62 30 L69 27 Z" fill="currentColor"/>
              </svg>
            </div>

            <!-- Card 2 -->
            <div class="exp-card tint-blue">
              <div class="exp-card-content">
                <h4>Practical Learning</h4>
                <p>Learn skills and ideas you can apply with confidence.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <circle cx="45" cy="55" r="28" fill="currentColor" fill-opacity="0.05"/>
                <circle cx="45" cy="55" r="18" fill="currentColor" fill-opacity="0.1"/>
                <circle cx="45" cy="55" r="8" fill="currentColor" fill-opacity="0.2"/>
                <path d="M78 22 L51 49" stroke-width="3"/>
                <path d="M66 22 H78 V34" stroke-width="2"></path>
                <circle cx="45" cy="55" r="2.5" fill="currentColor"/>
              </svg>
            </div>

            <!-- Card 3 -->
            <div class="exp-card tint-teal">
              <div class="exp-card-content">
                <h4>Interactive Sessions</h4>
                <p>Ask questions, participate, and learn through discussion.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 50 C20 38 32 30 48 30 C64 30 76 38 76 50 C76 56 72 61 65 65 L68 76 L56 70 C53 70 51 70 48 70 C32 70 20 62 20 50 Z" fill="currentColor" fill-opacity="0.15"/>
                <circle cx="38" cy="50" r="3" fill="currentColor"/>
                <circle cx="48" cy="50" r="3" fill="currentColor"/>
                <circle cx="58" cy="50" r="3" fill="currentColor"/>
                <path d="M52 28 C52 24 60 20 70 20 C80 20 88 24 88 28 C88 32 84 35 78 37 L80 43 L73 40 C72 40 71 40 70 40 C60 40 52 35 52 28 Z" fill="currentColor" fill-opacity="0.25" opacity="0.6"/>
              </svg>
            </div>

            <!-- Card 4 -->
            <div class="exp-card tint-purple">
              <div class="exp-card-content">
                <h4>Industry-Relevant Topics</h4>
                <p>Explore subjects aligned with today's evolving industries.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <rect x="25" y="45" width="18" height="35" rx="2" fill="currentColor" fill-opacity="0.1"/>
                <circle cx="34" cy="53" r="1.5" fill="currentColor"/>
                <circle cx="34" cy="63" r="1.5" fill="currentColor"/>
                <circle cx="34" cy="73" r="1.5" fill="currentColor"/>
                <rect x="47" y="30" width="22" height="50" rx="2" fill="currentColor" fill-opacity="0.2"/>
                <rect x="53" y="38" width="4" height="6" fill="currentColor"/>
                <rect x="61" y="38" width="4" height="6" fill="currentColor"/>
                <rect x="53" y="50" width="4" height="6" fill="currentColor"/>
                <rect x="61" y="50" width="4" height="6" fill="currentColor"/>
                <!-- Upward trend arrow -->
                <path d="M15 75 L40 55 L60 63 L85 35 M73 35 H85 V47" stroke-width="3" stroke="currentColor"/>
              </svg>
            </div>

            <!-- Card 5 -->
            <div class="exp-card tint-orange">
              <div class="exp-card-content">
                <h4>Community Learning</h4>
                <p>Connect, share ideas, and grow with like-minded learners.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="38" r="10" fill="currentColor" fill-opacity="0.25"/>
                <path d="M32 72 C32 60 40 54 50 54 C60 54 68 60 68 72" fill="currentColor" fill-opacity="0.1"/>
                <circle cx="30" cy="48" r="8" fill="currentColor" fill-opacity="0.15"/>
                <path d="M16 76 C16 66 22 62 30 62 C33 62 36 63 38 65" fill="currentColor" fill-opacity="0.05"/>
                <circle cx="70" cy="48" r="8" fill="currentColor" fill-opacity="0.15"/>
                <path d="M62 65 C64 63 67 62 70 62 C78 62 84 66 84 76" fill="currentColor" fill-opacity="0.05"/>
              </svg>
            </div>

            <!-- Card 6 -->
            <div class="exp-card tint-yellow">
              <div class="exp-card-content">
                <h4>Personalized Growth</h4>
                <p>Build confidence and skills with guidance made for your growth.</p>
              </div>
              <svg class="exp-card-graphic" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 75 L50 35 Q50 25 65 25" stroke-width="3"/>
                <path d="M50 55 Q35 50 38 40 Q48 45 50 55 Z" fill="currentColor" fill-opacity="0.2"/>
                <path d="M50 45 Q65 40 62 30 Q52 35 50 45 Z" fill="currentColor" fill-opacity="0.3"/>
                <path d="M38 75 L62 75 L58 90 L42 90 Z" fill="currentColor" fill-opacity="0.1"/>
                <line x1="34" y1="75" x2="66" y2="75" stroke-width="3"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CORE MASTERCLASS -->
  <section class="py-5" id="core">
    <div class="wrap">
      <div class="sec-head">
        <h2>Featured Masterclass</h2>
        <p>Master the fundamentals of building your career or startup.</p>
      </div>
      <div class="mc-grid">
        <div class="mc-card">
          <div class="mc-banner" style="--banner-color:#E6EFE4; --banner-bg-dark:#8EAC81;">
            <div class="mc-banner-content">
              <h3>Startup Launchpad Masterclass</h3>
            </div>
            <div class="mc-banner-img-wrap">
              <img src="{{ asset('images/masterclass.png') }}" alt="Mentor portrait">
            </div>
          </div>
          <div class="mc-body">
            <div class="mc-mentor-row">
              <div><div class="m-label">Mentor</div><div class="m-name">Kishorekumar Chandrasekaran</div></div>
            </div>
            <div class="mc-learn-label">What you'll learn</div>
            <div class="mc-checks">
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Validate your startup idea in a week</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Build a lean MVP without writing code</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Pitch your idea with real confidence</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Avoid the top 5 first-time founder mistakes</span></div>
            </div>
            <div class="mc-btn-row">
              <span class="mc-btn outline" style="width: auto; padding: 10px 24px; cursor: default; border-color: var(--primary); color: var(--primary); flex: 0 0 auto;">Coming Soon</span>
            </div>
          </div>
        </div>

        <div class="mc-card">
          <div class="mc-banner" style="--banner-color:#ECEAF8; --banner-bg-dark:#A9A4D9;">
            <div class="mc-banner-content">
              <h3>Personal Branding Masterclass</h3>
            </div>
            <div class="mc-banner-img-wrap">
              <img src="{{ asset('images/masterclass.png') }}" alt="Mentor portrait">
            </div>
          </div>
          <div class="mc-body">
            <div class="mc-mentor-row">
              <div><div class="m-label">Mentor</div><div class="m-name">Kishorekumar Chandrasekaran</div></div>
            </div>
            <div class="mc-learn-label">What you'll learn</div>
            <div class="mc-checks">
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Define your niche and unique voice</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Build a content system that compounds</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Turn followers into real opportunities</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Craft a bio and profile that converts</span></div>
            </div>
            <div class="mc-btn-row" style="margin-top: 24px; display: flex; justify-content: flex-start;">
              <span class="mc-btn outline" style="width: auto; padding: 10px 24px; cursor: default; border-color: var(--primary); color: var(--primary); flex: 0 0 auto;">Coming Soon</span>
            </div>
          </div>
        </div>

        <div class="mc-card">
          <div class="mc-banner" style="--banner-color:#F8ECE4; --banner-bg-dark:#E4B59D;">
            <div class="mc-banner-content">
              <h3>Content Creator Masterclass</h3>
            </div>
            <div class="mc-banner-img-wrap">
              <img src="{{ asset('images/masterclass.png') }}" alt="Mentor portrait">
            </div>
          </div>
          <div class="mc-body">
            <div class="mc-mentor-row">
              <div><div class="m-label">Mentor</div><div class="m-name">Kishorekumar Chandrasekaran</div></div>
            </div>
            <div class="mc-learn-label">What you'll learn</div>
            <div class="mc-checks">
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Script hooks that stop the scroll</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Batch-produce a month of content in a day</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Grow on Reels and YouTube Shorts</span></div>
              <div class="mc-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg><span>Turn views into paid brand deals</span></div>
            </div>
            <div class="mc-btn-row" style="margin-top: 24px; display: flex; justify-content: flex-start;">
              <span class="mc-btn outline" style="width: auto; padding: 10px 24px; cursor: default; border-color: var(--primary); color: var(--primary); flex: 0 0 auto;">Coming Soon</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section id="cta-banner" class="career-cta-bg">
    <div class="wrap" style="text-align: center;">
      <span class="kicker">Get Notified</span>
      <h2>Be the First to <br>Join Our Masterclasses</h2>
      <p>
        We're preparing a series of expert-led learning experiences. Join the waitlist and get notified when registrations open.
      </p>

      <a href="https://wa.me/918667205661?text=Hi%2C%20I%20am%20interested%20in%20YCX%20Masterclasses.%20Please%20notify%20me%20when%20registrations%20open" class="btn-orange" target="_blank">Get Early Access</a>
   
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title" style="font-weight: 400; color: var(--primary);">Frequently Asked Questions</h2>
        <p class="sec-desc" style="font-size: 16px; color: var(--grey); margin-top: 12px; line-height: 1.6;">Find answers to common questions about the application process, program details, and expectations.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>How will I get the link to attend the masterclass?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You'll receive your individual session link on the email address and WhatsApp number you register with, along with reminders before the masterclass. Please don't share the link — only one person can join per link.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What is the difficulty level of the concepts taught in the class?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Every masterclass starts from first principles and builds up — no prior experience is assumed, and mentors keep things practical rather than theoretical.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>In which language will the masterclass be conducted?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>All masterclasses are conducted in simple, spoken English.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Will I get a recording of the masterclass?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, lifetime access to the masterclass video recording will be provided to all registered participants within 24 hours of the live session.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is there any certificate provided upon completion?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, a digital Certificate of Completion signed by the mentor and Young Chanakya X will be issued to your registered email address.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>Are there any prerequisites or software requirements?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Just one — Zoom should be installed on your device, and you should be logged in with the email address you registered with.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Where should I seek assistance before/after registering?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Email us anytime at youngchanakya.x@gmail.com from your registered email ID and our team will help you right away.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I change my batch or slot after registering?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, you can request a slot change up to 4 hours before the session starts by contacting our support team via email or WhatsApp.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is this masterclass live or pre-recorded?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>All our featured masterclasses are 100% live and interactive, allowing you to ask questions and discuss concepts directly with the mentor.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What if I register but am unable to attend the session?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Don't worry! If you miss the live session, you will still receive the complete recording, templates, and certificate.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script>
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.faq-item');
      const answer = item.querySelector('.faq-a');
      const isOpen = item.classList.contains('open');
      if (isOpen) {
        item.classList.remove('open');
        answer.style.maxHeight = null;
      } else {
        item.closest('.faq-grid').querySelectorAll('.faq-item.open').forEach(el => {
          el.classList.remove('open');
          el.querySelector('.faq-a').style.maxHeight = null;
        });
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 20 + 'px';
      }
    });
  });
</script>
@endpush

