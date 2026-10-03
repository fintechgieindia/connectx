@php
/**
 * About Page SEO Data
 */
$seo = [
    'title'       => 'About Us | Young Chanakya X',
    'description' => 'Learn about Young Chanakya X, a community connecting students, professionals, entrepreneurs, creators, and leaders through stories, knowledge, events, and collaboration.',
    'keywords'    => 'Young Chanakya X, about YCX, YCX community, professional network, knowledge community, networking platform, creator community, entrepreneur network, leadership community, community platform',
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
    "@type": "AboutPage",
    "@id": "https://connectx.youngchanakya.com/about#webpage",
    "url": "https://connectx.youngchanakya.com/about",
    "name": "About Us | Young Chanakya X",
    "description": "Learn about Young Chanakya X, a community connecting students, professionals, entrepreneurs, creators, and leaders through stories, knowledge, events, and collaboration.",
    "inLanguage": "en-IN",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website"
    },
    "about": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/",
        "founder": {
            "@type": "Person",
            "name": "Young Chanakya",
            "jobTitle": "Founder & Visionary",
            "worksFor": {
                "@type": "Organization",
                "name": "Young Chanakya X"
            }
        },
        "foundingDate": "2024",
        "description": "Young Chanakya X is built to bring creators together in a structured ecosystem where they can connect, collaborate, and be seen.",
        "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "minValue": 1
        }
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/home-2.css') }}?v={{ time() }}">
<style>
    .founder-title,
    .founder-section .founder-title {
        color: #ffffff !important;
    }
    #hdr:not(.scrolled) .hamburger span {
        background: #0c3a30 !important;
    }
    .com-card {
        border-radius: 24px !important;
    }
    .com-btn {
        display: inline-block;
        padding: 12px 28px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        border-radius: 50px;
        text-decoration: none;
        margin-top: 24px;
        align-self: flex-start;
        transition: all 0.3s ease;
        text-align: center;
    }
    .com-btn-green {
        background-color: #0c3a30;
        color: #ffd2b1;
        border: 1px solid #0c3a30;
    }
    .com-btn-green:hover {
        background-color: #ffd2b1;
        color: #0c3a30;
        border-color: #ffd2b1;
    }
    .com-btn-peach {
        background-color: #ffd2b1;
        color: #0c3a30;
        border: 1px solid #ffd2b1;
    }
    .com-btn-peach:hover {
        background-color: #0c3a30;
        color: #ffd2b1;
        border-color: #0c3a30;
    }
</style>
@endpush



@section('content')

<div class="about-hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">About Young Chanakya X</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">One Platform Endless Possibilities</h1>
                <p class="hero-copy">Young Chanakya X is a digital-first leadership and community platform where ambitious individuals come together to share stories, exchange knowledge, build meaningful relationships, and unlock real opportunities. We believe growth happens when people connect, learn, and collaborate through authentic experiences.</p>
              
                <div class="about-hero-buttons">
                    <a href="/become-a-sponsor" class="about-btn-1">Become a sponsor</a>
                    <a href="/become-a-partner" class="about-btn-2">Become a Partner</a>
                </div>


                {{-- <div class="hero-pill-row">
                    <span class="hero-pill">Creator Growth</span>
                    <span class="hero-pill">Podcast Visibility</span>
                    <span class="hero-pill">Brand Collaboration</span>
                </div> --}}
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">

<img class="hero-image"
     src="{{ asset('images/media/about/about-hero-banner.webp') }}"
     alt="Young Chanakya X premium experience">
     
                    <div class="hero-side-card d-none d-lg-block">
                        <h5>Signature Initiative</h5>
                        <p>A creator-first platform designed to connect public voices, podcasts, and community events with trusted partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="py-5 container" id="problem-solution">
  <div class="wrap ps-grid">
 
    <!-- THE PROBLEM -->
    <div class="ps-card problem">
      <span class="dots"></span>
      <h3>The Problem</h3>
      <p>Knowledge grows when people share it. Every journey, experience, and conversation has the power to inspire someone else, yet many voices never find the right platform.</p>
      <p class="highlight">That's the gap Young Chanakya X is building to solve.</p>
    </div>
 
    <!-- THE SOLUTION -->
    <div class="ps-card solution">
      <span class="dots"></span>
      <h3>The Solution</h3>
      <p>We're creating a space where creators, speakers, entrepreneurs, educators, professionals, and community builders come together to share experiences, inspire others, and grow together.</p>
      <div class="brand-badges">
        <span class="brand-badge b1"><span class="b-icon"><i class="bi bi-star-fill"></i></span>Stories</span>
        <span class="brand-badge b2"><span class="b-icon"><i class="bi bi-mic-fill"></i></span>YCX Talks</span>
        <span class="brand-badge b3"><span class="b-icon"><i class="bi bi-mic"></i></span>Podcast</span>
        <span class="brand-badge b4"><span class="b-icon"><i class="bi bi-people-fill"></i></span>Networking</span>
      </div>
    </div>
 
  </div>
</section>
 
<!-- FOUNDER STATEMENT -->
<section class="founder-section">
  <div class="bg-text">Young Chanakya X</div>
  <div class="founder-inner">
    <div class="section-label light">Founder Statement</div>
    <h2 class="founder-title text-white" style="color: #ffffff !important;">Why We Built This</h2>
    <span class="quote-mark">"</span>
    <p class="founder-quote">
      Young Chanakya X is built to bring creators together in a structured ecosystem where they can <em>connect, collaborate, and be seen.</em> Our focus is simple — create spaces for real conversations, enable meaningful collaborations, and help creators grow their influence through content and community.
    </p>

    
 <div class="founder-byline">
    <div class="byline-avatar">
        <img src="{{ asset('images/media/founder.png') }}" alt="Kishorekumar Chandrasekaran">
    </div>

    <div class="byline-text">
        <div class="name">Kishorekumar Chandrasekaran</div>
        <div class="role">Founder and CEO</div>
    </div>
</div>

  </div>
</section>


<div class="vm-section">
  <div class="vm-block vision-block">
    <div class="section-label dark">A Trusted Global Platform for Leadership & Growth</div>
    <h2 class="section-title dark">Our Vision</h2>
    <p class="body-text">To become the world’s most trusted platform for leadership, entrepreneurship, knowledge sharing, and professional collaboration by empowering individuals to learn from each other and create meaningful impact.</p>
    <ul class="check-list ps-0">
      <li>Build global trust in leadership and collaboration</li>
      <li>Empower individuals through peer-to-peer learning</li>
      <li>Strengthen entrepreneurship and innovation ecosystems</li>
      <li>Enable meaningful professional and industry connections</li>
      <li>Create long-term social and economic impact through knowledge sharing</li>
    </ul>
    {{-- <span class="vm-number">01</span> --}}
  </div>
  <div class="vm-block mission-block">
    <div class="section-label light">Connecting People, Knowledge & Opportunities</div>
    <h2 class="section-title light">Our Mission</h2>
    <p class="body-text">We are committed to building a dynamic ecosystem where ambitious individuals from diverse backgrounds come together to learn, share, and grow through authentic relationships and collaboration.</p>
    <ul class="check-list ps-0">
      <li>Connect ambitious people across industries and generations</li>
      <li>Create a trusted space for authentic conversations and storytelling</li>
      <li>Bridge education, entrepreneurship, technology, and industry</li>
      <li>Promote continuous learning through shared real-world experiences</li>
      <li>Enable collaborations that generate opportunities and long-term value</li>
    </ul>
    {{-- <span class="vm-number">02</span> --}}
  </div>
</div>

<!-- ECOSYSTEM SECTION -->
<section class="ecosystem-dark-section">
    <div class="container-fluid px-lg-5">
        <div class="ecosystem-card-container">
            
            <!-- Sparkle Star near center top -->
            <div class="ecosystem-sparkle-star d-none d-lg-block">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0L14.5 9.5L24 12L14.5 14.5L12 24L9.5 14.5L0 12L9.5 9.5L12 0Z" fill="#ffca95" opacity="0.6"/>
                </svg>
            </div>

            <div class="row align-items-center g-0">
                
                <!-- LEFT COLUMN -->
                <div class="col-lg-5 ecosystem-left-col">
                    <div class="ecosystem-left-content">
                        <h2 class="ecosystem-title">
                            Built for 
                            <span class="text-lime-highlight">Growth-Driven People</span>
                        </h2>
                        <p class="ecosystem-subtitle">
                            Young Chanakya X brings together ambitious creators, speakers, podcasters, and brand leaders into a structured ecosystem to share knowledge, collaborate, and scale influence.
                        </p>

                        <!-- SPEAKER VISUAL -->
                        <div class="ecosystem-speaker-visual">
                            <img src="{{ asset('images/media/about/about-img.webp') }}" alt="Young Chanakya X Speaker" class="ecosystem-speaker-img">
                        </div>

                    </div>
                </div>

                <!-- RIGHT COLUMN (Right Aligned List Items with Links) -->
                <div class="col-lg-7 ecosystem-right-col">
                    <div class="ecosystem-links-stack">
                        <a href="/share-your-story" class="ecosystem-link-row">
                            <span class="ecosystem-row-text">Share Your Story</span>
                            <span class="ecosystem-arrow-circle">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <a href="/become-a-speaker" class="ecosystem-link-row">
                            <span class="ecosystem-row-text">YCX Talks</span>
                            <span class="ecosystem-arrow-circle">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <a href="/become-a-feature" class="ecosystem-link-row">
                            <span class="ecosystem-row-text">Featured on YCX Podcast</span>
                            <span class="ecosystem-arrow-circle">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <a href="/become-a-partner" class="ecosystem-link-row">
                            <span class="ecosystem-row-text">Become a Partner</span>
                            <span class="ecosystem-arrow-circle">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <a href="/become-a-sponsor" class="ecosystem-link-row">
                            <span class="ecosystem-row-text">Become a Sponsor</span>
                            <span class="ecosystem-arrow-circle">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="block-feature-ten position-relative mt-80 lg-mt-80 pb-100 lg-pb-60">

    <div class="container">

        <!-- TITLE -->
        <div class="row">

            <div class="col-lg-8 mx-auto text-center wow fadeInUp" style="visibility: visible;">

                <div class="title-one mb-50 lg-mb-20 text-center">

                    <div class="upper-title">
                        Young Chanakya X
                    </div>

                    <h2>
                        Our Core Values
                    </h2>
                    
                    <p class="sec-desc rv mx-auto mt-3 px-xl-5" style="line-height: 1.6; max-width: 600px;">
                        Our core values define the principles that guide our choices, shape our community, and drive our vision to build a trusted global platform for leadership and growth.
                    </p>

                </div>

            </div>

        </div>


        <!-- VALUES -->
        <div class="values-grid position-relative">

            <div class="row gx-lg-4">

                <!-- VALUE 1 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-door-open"></i>

                        </div>

                        <h4 class="core-value-title">
                            Access Over Exclusivity
                        </h4>

                        <p class="core-value-desc">
                            We create access to meaningful opportunities, networks, and platforms.
                        </p>

                    </div>

                </div>


                <!-- VALUE 2 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-collection-play"></i>

                        </div>

                        <h4 class="core-value-title">
                            Content First
                        </h4>

                        <p class="core-value-desc">
                            Every interaction, event, and collaboration is designed to generate content and visibility.
                        </p>

                    </div>

                </div>


                <!-- VALUE 3 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-people"></i>

                        </div>

                        <h4 class="core-value-title">
                            Collaboration Over Competition
                        </h4>

                        <p class="core-value-desc">
                            Growth happens faster when creators work together.
                        </p>

                    </div>

                </div>


                <!-- VALUE 4 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" style="visibility: visible;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-chat-quote"></i>

                        </div>

                        <h4 class="core-value-title">
                            Real Conversations
                        </h4>

                        <p class="core-value-desc">
                            We value authentic discussions over scripted narratives.
                        </p>

                    </div>

                </div>


                <!-- VALUE 5 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-globe"></i>

                        </div>

                        <h4 class="core-value-title">
                            Global Mindset
                        </h4>

                        <p class="core-value-desc">
                            Young Chanakya X is built without geographic limitations.
                        </p>

                    </div>

                </div>


                <!-- VALUE 6 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">

                    <div class="core-value-card">

                        <div class="core-value-icon-wrapper">

                            <i class="bi bi-graph-up-arrow"></i>

                        </div>

                        <h4 class="core-value-title">
                            Consistent Growth
                        </h4>

                        <p class="core-value-desc">
                            Opportunities are not one-time — they are continuous.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- THE DNA OF CONNECTX -->
<section class="h2-section h2-section--white h2-xmeaning" id="what-x-means">
    <div class="container">

        {{-- Section Header --}}
        <div class="h2-section-header">
            <div class="h2-eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">The DNA of Young Chanakya X</div>
            <h2 class="h2-heading rv" style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">What Does "X" Mean?</h2>
            <p class="h2-desc h2-desc--center rv sec-desc" style="line-height: 1.6;">
                The letter X represents the point where ideas, people, opportunities, and experiences intersect — creating something greater than the sum of its parts.
            </p>
        </div>

        {{-- Constellation Layout --}}
        <div class="h2-xm__constellation rv">

            {{-- Central X Hub --}}
            <div class="h2-xm__hub">
                <div class="h2-xm__hub-ring h2-xm__hub-ring--1"></div>
                <div class="h2-xm__hub-ring h2-xm__hub-ring--2"></div>
                <div class="h2-xm__hub-ring h2-xm__hub-ring--3"></div>
                <div class="h2-xm__hub-letter">X</div>
                <div class="h2-xm__hub-tagline">Where Everything Intersects</div>
            </div>

            {{-- Connection Lines (SVG) — x2/y2 targets the center of each node's icon circle --}}
            <svg class="h2-xm__lines" viewBox="0 0 1200 900" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
                <defs>
                    <marker id="icon-dot-default" markerWidth="6" markerHeight="6" refX="3" refY="3" orient="auto">
                        <circle cx="3" cy="3" r="2.5" fill="rgba(12,58,48,0.25)"/>
                    </marker>
                    <marker id="icon-dot-hover" markerWidth="6" markerHeight="6" refX="3" refY="3" orient="auto">
                        <circle cx="3" cy="3" r="2.5" fill="rgba(255,210,177,0.9)"/>
                    </marker>
                </defs>
                {{-- explore: node top:40 left:100, icon center = (100+110, 40+34) = (210,74) scaled ~(221,78) --}}
                <line class="h2-xm__line h2-xm__line--explore"    x1="600" y1="450" x2="221" y2="78"  stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- exchange: node top:40 right:100 → left=820, icon center = (820+110, 74) = (930,74) scaled ~(979,78) --}}
                <line class="h2-xm__line h2-xm__line--exchange"   x1="600" y1="450" x2="979" y2="78"  stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- express: node top:380 left:20, icon center = (130, 414) scaled ~(135,436) --}}
                <line class="h2-xm__line h2-xm__line--express"    x1="600" y1="450" x2="135" y2="436" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- experience: node top:380 right:20 → left=900, icon center = (1010,414) scaled ~(1065,436) --}}
                <line class="h2-xm__line h2-xm__line--experience" x1="600" y1="450" x2="1065" y2="436" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- expand: node bottom:20 left:150, icon center = (260, ~754) scaled ~(274,734) --}}
                <line class="h2-xm__line h2-xm__line--expand"     x1="600" y1="450" x2="274" y2="734" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
                {{-- excel: node bottom:20 right:150 → left=770, icon center = (880,~754) scaled ~(926,734) --}}
                <line class="h2-xm__line h2-xm__line--excel"      x1="600" y1="450" x2="926" y2="734" stroke-dasharray="6 4" marker-end="url(#icon-dot-default)"/>
            </svg>

            {{-- Concept Nodes --}}
            <div class="h2-xm__node h2-xm__node--explore" data-concept="explore">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-compass"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">01</div>
                    <h3 class="h2-xm__node-title">Explore</h3>
                    <p class="h2-xm__node-desc">Discover inspiring people, innovative ideas, industries, startups, technologies, careers, and opportunities that broaden your perspective.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--exchange" data-concept="exchange">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-arrow-left-right"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">02</div>
                    <h3 class="h2-xm__node-title">Exchange</h3>
                    <p class="h2-xm__node-desc">Share knowledge, insights, experiences, and practical wisdom with a community that values learning and collaboration.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--express" data-concept="express">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-chat-quote"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">03</div>
                    <h3 class="h2-xm__node-title">Express</h3>
                    <p class="h2-xm__node-desc">Tell your story, communicate your ideas, showcase your expertise, and inspire others through authentic conversations.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--experience" data-concept="experience">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-calendar-event"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">04</div>
                    <h3 class="h2-xm__node-title">Experience</h3>
                    <p class="h2-xm__node-desc">Participate in podcasts, workshops, networking events, live sessions, and real-world interactions that create lasting learning.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--expand" data-concept="expand">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-diagram-3"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">05</div>
                    <h3 class="h2-xm__node-title">Expand</h3>
                    <p class="h2-xm__node-desc">Grow your professional network, discover partnerships, connect with mentors, and unlock new opportunities.</p>
                </div>
            </div>

            <div class="h2-xm__node h2-xm__node--excel" data-concept="excel">
                <div class="h2-xm__node-beacon"></div>
                <div class="h2-xm__node-icon"><i class="bi bi-graph-up-arrow"></i></div>
                <div class="h2-xm__node-content">
                    <div class="h2-xm__node-prefix">06</div>
                    <h3 class="h2-xm__node-title">Excel</h3>
                    <p class="h2-xm__node-desc">Continuously improve your skills, leadership, career, and business while contributing to a thriving ecosystem.</p>
                </div>
            </div>

        </div>{{-- /.h2-xm__constellation --}}

        {{-- Bottom Statement --}}
        <div class="h2-xm__bottom rv">
            <p class="h2-xm__statement">
                Every interaction within the ecosystem moves you through these six dimensions — creating a continuous cycle of <strong>growth, contribution, and impact.</strong>
            </p>
        </div>

    </div>
</section>



  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-bg-ring r1"></div>
    <div class="cta-bg-ring r2"></div>
    <div class="cta-bg-ring r3"></div>
    <div class="cta-inner">
      <div class="section-label light">Ready to Grow?</div>
      <h2 class="section-title light fw-normal" style="font-weight: 400 !important; letter-spacing: -1.2px !important; line-height: 1.2 !important;">Your Voice Deserves<br>a <span class="italic-accent fw-normal" style="font-style: normal !important; font-weight: 400 !important; letter-spacing: -1.2px !important;">Bigger Stage</span></h2>
      <p class="cta-tagline">If you are a creator, influencer, speaker, or community builder — Young Chanakya X is built for
        you.</p>
      <div class="cta-features">
        <span class="pill">Join the Ecosystem</span>
        <span class="pill">Access Creator Lounges</span>
        <span class="pill">Speak & Collaborate</span>
        <span class="pill">Build Beyond Platforms</span>
      </div>
<button 
    class="cta-btn" 
    style="background-color: #fff; color: #0c3a30;"
    onclick="window.location.href='/connectors'">
    Join Young Chanakya X
</button>
    </div>
  </section>


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const linkRows = document.querySelectorAll('.ecosystem-link-row');
    if (linkRows.length) {
        linkRows.forEach(item => {
            item.addEventListener('mouseenter', function() {
                linkRows.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }
});
</script>
@endpush

@endsection



