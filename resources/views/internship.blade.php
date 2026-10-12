@php
/**
 * Internships Page
 */
$seo = [
    'title'       => 'Internship Programs & Opportunities | Young Chanakya X',
    'description' => 'Start your career with a Young Chanakya X internship. Gain hands-on experience, learn from real projects, and grow with an innovative community.',
    'keywords'    => 'YCX internship, internships, student internship, internship program, learning experience, career development, community internship, Young Chanakya X internship, students, training',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
    'canonical'   => 'https://connectx.youngchanakya.com/internship',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "CollectionPage",
            "@id": "https://connectx.youngchanakya.com/internship#webpage",
            "url": "https://connectx.youngchanakya.com/internship",
            "name": "Internship Programs & Opportunities | Young Chanakya X",
            "description": "Start your career with a Young Chanakya X internship. Gain hands-on experience, learn from real projects, and grow with an innovative community.",
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
        },
        {
            "@type": "FAQPage",
            "@id": "https://connectx.youngchanakya.com/internship#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What's the duration of the internship?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Most internships run 3 to 6 months, with some flexibility around your academic schedule."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I need prior experience?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No — we look for curiosity and initiative more than a polished resume. Some tracks, like Tech, expect basic fundamentals."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Will I get a certificate?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes — every intern who completes the program receives a certificate and a letter of recommendation."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can this convert into a full-time role?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It can, if there's a strong mutual fit and an open role at the time you finish."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I do this while still studying?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes — most of our interns are current students. We'll work with your schedule wherever we can."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is there an application deadline?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Each cohort has a fixed application window — applications are reviewed on a rolling basis within that cycle."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is every track fully remote?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It varies by track — some, like Community, work best hybrid, and others are fully flexible. We'll clarify this on your intro call."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What tools should I be familiar with?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It depends on your track — we'll share a short list relevant to your role before you start, so nothing catches you off guard."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I apply for more than one track?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "We'd recommend applying for the one you're most excited about — but let us know in your application if you're open to more than one."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who do I contact if I have more questions?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Reach out through the application form and mention your question — our team responds to every message personally."
                    }
                }
            ]
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://connectx.youngchanakya.com/internship#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://connectx.youngchanakya.com/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Internships",
                    "item": "https://connectx.youngchanakya.com/internship"
                }
            ]
        }
    ]
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/career.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #ffffff !important;
  }
</style>
@endpush

@section('content')
<div class="career-body">

  <!-- HERO -->
  <section class="hero">
    <img src="{{ asset('images/media/internship/internship-herobanner.webp') }}" alt="Interns collaborating around a laptop">
    <div class="hero-inner">
      <span class="kicker" style="color:var(--peach);">
        <span style="display:inline-block;width:16px;height:1.5px;background:var(--peach);"></span>
        Internships at YCX
      </span>
      <h1>Learn by Doing the Work That Actually Goes Out</h1>
      <p class="lead">Kick-start your career by working on real projects, collaborating with experienced professionals, and gaining practical skills that prepare you for the future.</p>
      <a href="#listing" class="hero-cta" id="heroApplyBtn">Apply for Internship
      </a>
    </div>
    <div class="hero-chips row">
      <div class="chip col-3"><span class="mono">Duration</span><span class="val">3–6 Months</span></div>
      <div class="chip col-3"><span class="mono">On Completion</span><span class="val">Certificate</span></div>
      <div class="chip col-3"><span class="mono">Guidance</span><span class="val">1:1 Mentorship</span></div>
    </div>
  </section>
  
  <!-- INTERNSHIP LISTING -->
  <section id="listing">
    <div class="wrap">
      <div class="sec-head text-center mx-auto" style="max-width: 600px; margin-bottom: 56px;">
        <span class="kicker" style="justify-content: center;">Open Internship Tracks</span>
        <h2>Pick the Track That Fits You Best</h2>
        <p>Tap a track to see details and apply.</p>
      </div>
      <div id="listingRows">
        @forelse($jobs as $index => $job)
          <a href="{{ route('internships.detail', $job->slug) }}" class="listing-row">
            <div class="listing-main">
              <span class="listing-tag mb-3">{{ $job->department }}</span>
              <h4>{{ $job->title }}</h4>
              <p>{{ $job->tagline }}</p>
            </div>
            <span class="listing-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </span>
          </a>
        @empty
          <div class="text-center w-100 py-5">
            <h4 style="color: var(--text-soft); font-family: 'Fraunces', serif;">No Open Internship Tracks at This Moment</h4>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- WHY INTERN AT YCX -->
  <section id="why-intern">
    <div class="wrap">
      <div class="why-intro">
        <span class="kicker">More Than an Internship</span>
        <h2>Learn Beyond the Classroom</h2>
        <p>You'll work on meaningful projects, collaborate with talented teams, and gain hands-on experience that builds confidence and prepares you for your career.</p>
      </div>
      <div class="why-cards">
        <div class="why-card">
          <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
          <h3>Real Projects</h3>
          <p>Work on live projects that create real value and make an impact.</p>
        </div>
        <div class="why-card">
          <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4z"/></svg></div>
          <h3>Learn by Doing</h3>
          <p>Develop practical skills through hands-on tasks and guided learning.</p>
        </div>
        <div class="why-card">
          <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 10-16 0"/></svg></div>
          <h3>Mentorship</h3>
          <p>Learn from experienced professionals who support your growth throughout your internship.</p>
        </div>
        <div class="why-card">
          <div class="why-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5"/></svg></div>
          <h3>Build Your Portfolio</h3>
          <p>Create work you're proud to showcase in your academic and professional journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT YOU GAIN -->
  <section id="gain">
    <div class="wrap gain-split">
      <div class="gain-visual">
        <div class="gain-photo-main">
          <img src="{{ asset('images/media/internship/learning-journey.webp') }}" alt="Young professionals collaborating and smiling">
        </div>
      </div>
      <div class="gain-content">
        <span class="kicker">YOUR LEARNING JOURNEY</span>
        <h2>What You'll Walk Away With</h2>
        <p class="gain-intro">Every internship is designed to help you grow personally and professionally through practical learning and real-world experience.</p>
        <div class="gain-items">
          <div class="gain-item">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #0c3a30; flex-shrink: 0; margin-top: 4px;">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
            </span>
            <div><h4>Practical Experience</h4><p>Work on live, high-impact projects that build your core functional capabilities.</p></div>
          </div>
          <div class="gain-item">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #0c3a30; flex-shrink: 0; margin-top: 4px;">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
            </span>
            <div><h4>Industry Exposure</h4><p>Collaborate directly with cross-functional teams and understand real-world workflows.</p></div>
          </div>
          <div class="gain-item">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #0c3a30; flex-shrink: 0; margin-top: 4px;">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
            </span>
            <div><h4>Mentorship &amp; Guidance</h4><p>Receive personal feedback and support from experienced leaders and mentors.</p></div>
          </div>
          <div class="gain-item">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #0c3a30; flex-shrink: 0; margin-top: 4px;">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
            </span>
            <div><h4>Professional Network</h4><p>Connect with builders, founders, and talented peers in the YCX community.</p></div>
          </div>
          <div class="gain-item">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #0c3a30; flex-shrink: 0; margin-top: 4px;">
                <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
            </span>
            <div><h4>Recommendation &amp; Certificate</h4><p>Earn an official certificate of completion and a strong letter of recommendation.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO CAN APPLY (Brand Presence section style from Sponsor Page) -->
  <section class="fancy-banner-seven connectx-brand-section">
    <div class="bg-wrapper border-40 position-relative z-1 overflow-hidden pt-120 pb-120 lg-pt-80 lg-pb-80" style="max-width: 100% !important; width: 100% !important;">
      <div class="container-fluid position-relative px-4 px-lg-5" style="z-index:2; max-width: 1700px; margin: 0 auto;">
        <div class="row align-items-center gy-5">
          <!-- LEFT CONTENT -->
          <div class="col-lg-7">
            <div>
              <div class="brand-tag">Eligibility</div>
              <h2 class="brand-heading">
                Who Can Apply<br>
                <span>Join YCX Internships</span>
              </h2>
              <p class="brand-desc">
                We look at these criteria loosely — genuine interest and curiosity matter more than ticking every single box.
              </p>
            </div>
            <a href="#listing" class="btn-brand-explore">
              View Open Internships
            </a>
          </div>

          <!-- RIGHT LIST -->
          <div class="col-lg-5 ms-auto">
            <ul class="style-none connectx-points">
              <li>Currently pursuing a degree, or recently graduated</li>
              <li>A genuine interest in the track you're applying for</li>
              <li>Able to commit consistent hours through the internship period</li>
              <li>Comfortable receiving feedback and iterating quickly</li>
              <li>No prior professional experience required — curiosity matters more</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA (Centered, Image Removed) -->
  <section id="cta-banner">
    <div class="wrap" style="text-align: center;">
      <span class="eyebrow" style="justify-content: center;">Ready to Start Your Journey</span>
      <h2 class="mb-3 sec-title">
        Take the First Step Toward Your Future
      </h2>
      <p style="font-size: 15.5px; color: var(--text-soft); line-height: 1.65; margin-bottom: 28px; max-width: 600px; margin-left: auto; margin-right: auto;">
        Join Young Chanakya X as an intern, gain real-world experience, build valuable skills, and become part of a community that believes in learning through doing. 
      </p>
      <a href="#listing" class="btn-lg" id="ctaApplyBtn" style="text-decoration: none;">Apply for Internship
      </a>
    </div>
  </section>

  <!-- FAQ (Accordion design from become-a-speaker) -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently Asked Questions</h2>
        <p class="sec-desc" style="font-size: 16px; color: var(--text-soft); margin-top: 12px; line-height: 1.6;">Find answers to common questions about the application process, program details, and expectations.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>What's the duration of the internship?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Most internships run 3 to 6 months, with some flexibility around your academic schedule.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Do I need prior experience?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>No — we look for curiosity and initiative more than a polished resume. Some tracks, like Tech, expect basic fundamentals.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Will I get a certificate?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes — every intern who completes the program receives a certificate and a letter of recommendation.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can this convert into a full-time role?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>It can, if there's a strong mutual fit and an open role at the time you finish.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I do this while still studying?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes — most of our interns are current students. We'll work with your schedule wherever we can.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>Is there an application deadline?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Each cohort has a fixed application window — applications are reviewed on a rolling basis within that cycle.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is every track fully remote?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>It varies by track — some, like Community, work best hybrid, and others are fully flexible. We'll clarify this on your intro call.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What tools should I be familiar with?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>It depends on your track — we'll share a short list relevant to your role before you start, so nothing catches you off guard.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I apply for more than one track?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We'd recommend applying for the one you're most excited about — but let us know in your application if you're open to more than one.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who do I contact if I have more questions?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Reach out through the application form and mention your question — our team responds to every message personally.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // FAQ Accordion logic
    document.querySelectorAll('.faq-item').forEach(item => {
      const q = item.querySelector('.faq-q');
      if (q) {
        q.addEventListener('click', () => {
          const isOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
          if (!isOpen) {
            item.classList.add('open');
          }
        });
      }
    });
  });
</script>
@endpush
