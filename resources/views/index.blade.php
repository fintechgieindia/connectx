@php
/**
 * Homepage SEO Data
 * ─────────────────
 * Defines dynamic meta title, description, keywords, and OG image
 * consumed by resources/views/partials/seo.blade.php (included in layout/app.blade.php).
 */
$seo = [
    'title'       => 'Young Chanakya X — Global Creator Ecosystem by Young Chanakya',
    'description' => 'Young Chanakya X is a premium global creator ecosystem connecting influencers, podcasters, speakers, founders, and brands through collaborations, exclusive events, and creator lounges. Partner with the future of influence.',
    'keywords'    => 'Young Chanakya X, creator ecosystem, influencer network, brand partnerships, creator lounges, podcasts, roundtables, India creator network, digital creators, become a partner',
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
    "@graph": [
        {
            "@type": "WebSite",
            "@id": "https://connectx.youngchanakya.com/#website",
            "name": "Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/",
            "description": "Global creator ecosystem by Young Chanakya connecting influencers, podcasters, speakers, and brands.",
            "inLanguage": "en-IN",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://connectx.youngchanakya.com/connectors?q={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        },
        {
            "@type": "Organization",
            "@id": "https://connectx.youngchanakya.com/#organization",
            "name": "Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/",
            "logo": {
                "@type": "ImageObject",
                "url": "https://connectx.youngchanakya.com/images/logo/connectx.png",
                "width": 400,
                "height": 100
            },
            "image": "https://connectx.youngchanakya.com/images/assets/ogg.png",
            "description": "Young Chanakya X is a premium global creator ecosystem connecting influencers, podcasters, speakers, founders, and brands through collaborations, exclusive events, and creator lounges.",
            "foundingDate": "2024",
            "founder": {
                "@type": "Person",
                "name": "Young Chanakya",
                "jobTitle": "Founder & Visionary"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "youngchanakya.x@gmail.com",
                "contactType": "customer service",
                "availableLanguage": ["English", "Hindi"]
            },
            "sameAs": [
                "https://www.linkedin.com/company/connectx",
                "https://www.instagram.com/connectx",
                "https://twitter.com/connectx",
                "https://www.youtube.com/@connectx"
            ]
        }
    ]
}
@endverbatim
</script>
@endpush


@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}?v={{ time() }}">
<link rel="stylesheet" href="{{ asset('css/custom-header.css') }}">
<link rel="stylesheet" href="{{ asset('css/home-2.css') }}?v={{ time() }}">
@endpush



@section('content')


<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-slides">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <img src="{{ asset('images/media/index-page/index-banner-1.webp') }}" alt="Partner With the Future of Influence">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>Collaborate & Grow with Young Chanakya X</h1>
                <p class="hero-desc">Partner with us to leverage our global network or sponsor our initiatives, podcasts, and community events to maximize your brand reach.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="window.location.href='/become-a-partner'">Become a Partner </button>
                    <button class="btn-hero-outline" onclick="window.location.href='/become-a-sponsor'">Become a Sponsor</button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <img src="{{ asset('images/media/index-page/index-banner-2.webp') }}" alt="Empower Your Creator Journey">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>Share Your Journey &amp;<br><em>Become a Speaker</em></h1>
                <p class="hero-desc">Bring your personal story, business insights, or functional expertise to our signature stage and connect with a highly engaged audience.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="window.location.href='/share-your-story'">Share Your Story </button>
                    <button class="btn-hero-outline" onclick="window.location.href='/become-a-speaker'">YCX Talks</button>
                    <button class="btn-hero-secondary" onclick="window.location.href='/become-a-feature'">Feature on YCX Podcast </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        {{-- <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=1800&q=80" alt="High-Impact Brand Partnerships">
            <div class="hero-overlay"></div>
            <div class="hero-grain"></div>
            <div class="hero-content">
                <h1>Broadcast Your Voice<br><em>to the World</em></h1>
                <p class="hero-desc">Join us as a guest, record high-impact video podcast episodes, and broadcast your expertise to a global community.
                </p>
                <div class="hero-btns">
                    <button class="btn-hero-primary" onclick="window.location.href='/become-a-feature'">Get Featured On Podcast </button>
                    <button class="btn-hero-outline" onclick="document.getElementById('talks').scrollIntoView({behavior: 'smooth'})">Explore Talks</button>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Navigation Arrows -->
    <button class="hero-arrow prev-btn" aria-label="Previous Slide">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button class="hero-arrow next-btn" aria-label="Next Slide">
        <i class="bi bi-chevron-right"></i>
    </button>

    <div class="hero-scroll">
        <div class="scroll-line"></div>
        <span class="scroll-txt">Scroll to explore</span>
    </div>
    
    <div class="hero-dots">
        <div class="hdot on" data-i="0"></div>
        <div class="hdot" data-i="1"></div>
        <div class="hdot" data-i="2"></div>
    </div>
</section>


<!-- MARQUEE -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
        <div class="mq-item">Explore</div>
        <div class="mq-item">Exchange</div>
        <div class="mq-item">Express</div>
        <div class="mq-item">Experience</div>
        <div class="mq-item">Expand</div>
        <div class="mq-item">Excel</div>
    </div>
</div>

<!-- FOUNDER SECTION -->
<section class="about founder-section" id="founder" style="background-color: var(--clr-white); border-bottom: 1px solid rgba(0,0,0,0.05); padding: 100px 0;">
    <style>
        .founder-grid {
            display: grid;
            grid-template-columns: 1.35fr 1fr;
            gap: 60px;
            align-items: center;
        }
        @media (max-width: 991px) {
            .founder-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
    <div class="container">
        <div class="founder-grid">
            <div class="about-content rv-l" style="padding: 0;">
                <div class="eyebrow rv">Meet The Founder</div>
<h2 class="sec-title rv"
    style="font-size: clamp(24px, 2.8vw, 42px) !important;
           line-height: 1.15 !important;
           letter-spacing: -1px !important;
           max-width: 650px !important;
           width: 100% !important;
           white-space: normal !important;">
Shaping the Next Generation of Future Leaders</h2>                <p class="sec-desc rv" style="margin-bottom: 24px; font-size: 1.05rem;">The greatest empires weren’t built by followers—they were built by thinkers, strategists, and doers. At Young Chanakya X, our mission is to cultivate modern-day Chanakyas who lead with wisdom, adaptability, and impact.</p>
                
                <div class="rv" style="border-left: 3px solid var(--orange); padding-left: 20px; margin-bottom: 30px;">
                    <p style="font-size: 1.15rem; font-style: italic; font-weight: 500; color: #0c3a30; margin-bottom: 0; line-height: 1.6;">
                        "If you chase Saraswati (Knowledge), Lakshmi (Wealth) will chase you. <br> Knowledge is Power, Information is Wealth."
                    </p>
                </div>

                <p class="sec-desc rv" style="margin-bottom: 40px; font-size: 1.05rem;">I’ve always believed that success is not about where you start, but how you scale. And for that, you need the right ecosystem, the right people, and the right mindset. If you dare to dream and are learn to excel, you are in the right place.</p>
                
                <div class="rv">
                    <a href="https://www.linkedin.com/in/kishorekumarceo" target="_blank" class="btn-main" style="text-decoration: none;"><i class="bi bi-linkedin" style="margin-right: 8px;"></i>Connect with Our CEO</a>
                </div>
            </div>
            
            <div class="rv-r" style="border-radius: 24px; overflow: hidden; max-width: 480px; width: 100%; margin: 0 auto; box-shadow: 0 24px 48px rgba(12, 58, 48, 0.12); position: relative; aspect-ratio: 4/5;">
                <img src="{{ asset('images/media/founder.png') }}" alt="Kishorekumar Chandrasekeran" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                
                <!-- Gradient Overlay -->
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 50%; background: linear-gradient(to top, rgb(9 50 41 / 95%) 0%, rgba(12, 58, 48, 0.5) 60%, transparent 100%); pointer-events: none; z-index: 1;"></div>
                
                <!-- Text Overlay -->
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 40px 32px 20px 32px; z-index: 2;">
                    <strong style="display: block; color: #fff; font-size: clamp(1.5rem, 4vw, 2.1rem); line-height: 1.15; font-weight: 800; margin-bottom: 12px; text-shadow: 0 4px 12px rgba(0,0,0,0.5);">Kishorekumar Chandrasekeran</strong>
                    <span style="display: inline-block; background: var(--orange); color: #0c3a30; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; padding: 6px 16px; border-radius: 100px;">Founder | Serial Entrepreneur</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 
<!-- ABOUT -->
<section class="about" id="about">
    <div class="about-inner">
        <div class="about-img-side rv-l">

            <img src="/images/media/img_20.jpg" alt="About Young Chanakya X">


            <div class="about-img-overlay"></div>
            <!-- <div class="about-badge">
          <strong>10K+</strong>
          <span>Global Creators</span>
        </div> -->
        </div>
        <div class="about-content rv-r">
            <div class="eyebrow rv">About Young Chanakya X</div>
            <h2 class="sec-title">A Digital-First<br>Creator Ecosystem</h2>
            <p class="sec-desc">Young Chanakya X is designed to bring influencers, content creators, public
                voices,
                and storytellers into one global network — creating opportunities like never before.</p>
            <div class="about-pills">
                <div class="pill">Collaborate</div>
                <div class="pill">Build Visibility</div>
                <div class="pill">Speak on Podcasts</div>
                <div class="pill">Exclusive Events</div>
                <div class="pill">Share Your Stories</div>
                <div class="pill">Creator Lounges</div>
            </div>
            <button class="btn-main">Join Young Chanakya X →</button>
        </div>
    </div>
</section>
--}}
<style>
/* =============================================
   HOW CONNECTX WORKS — RESPONSIVE
   ============================================= */

.hcw-wrapper {
    background: #0c3a30;
    padding: 44px 75px 52px;
    font-family: var(--font-sans);
    overflow: hidden;
}

.hcw-wrapper .eyebrow {
    color: #ffd2b1 !important;
}

.hcw-wrapper .eyebrow::before {
    background: #ffd2b1 !important;
}

.hcw-wrapper .hcw-heading {
    color: #ffffff !important;
    font-size: clamp(24px, 2.8vw, 42px) !important;
    font-weight: 400 !important;
    margin: 0 0 24px;
    letter-spacing: -1px !important;
    line-height: 1.15 !important;
}

.hcw-wrapper .hcw-heading span {
    font-style: italic !important;
    font-weight: 400 !important;
    color: #ffd2b1 !important;
}

.hcw-relative {
    position: relative;
}

/* Connector lines — desktop only */
.hcw-line-bg,
.hcw-line-anim {
    position: absolute;
    top: 24px;
    left: 24px;
    width: 75%; /* Reaches exactly to the center of the 4th circle (75% across the 4-column grid) */
    height: 1px;
    border-radius: 2px;
}
.hcw-line-bg  { background: #1f5a45; z-index: 0; }
.hcw-line-anim {
    background: #ffd2b1;
    z-index: 1;
    transform-origin: left;
    transform: scaleX(0);
    animation: lineGrow 1.2s cubic-bezier(.4,0,.2,1) 0.2s forwards;
}

/* Steps grid */
.hcw-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
    position: relative;
    z-index: 2;
}

.hcw-step {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.hcw-wrapper .hcw-step-title {
    color: #ffffff !important;
    font-size: 20px !important;
    font-weight: 400 !important;
    margin: 0 0 8px;
    line-height: 1.35 !important;
}

.hcw-wrapper .hcw-step-desc {
    color: #ffffff !important;
    font-size: 12.5px !important;
    line-height: 1.65 !important;
    margin: 0;
}

/* ---- Tablet & Mobile: Vertical Timeline (Single Column) ---- */
@media (max-width: 767px) {
    .hcw-container {
        margin-top: 60px;
        margin-bottom: 60px;
    }
    .hcw-wrapper {
        padding: 36px 24px 44px;
        border-radius: 14px;
    }
    .hcw-heading {
        font-size: clamp(24px, 6vw, 36px);
        margin: 0 0 36px;
    }
    /* Position connector lines vertically through the centers of circles */
    .hcw-line-bg,
    .hcw-line-anim {
        display: block;
        position: absolute;
        left: 22px; /* Center of the 44px circle */
        top: 22px; /* Center of the first circle */
        bottom: 22px; /* Center of the last circle */
        right: auto;
        height: auto;
        width: 3px;
        border-radius: 2px;
        transform: translateX(-50%);
    }
    .hcw-line-bg {
        background: #1f5a45;
        z-index: 0;
    }
    .hcw-line-anim {
        background: #ffd2b1;
        z-index: 1;
        transform-origin: top;
        transform: translateX(-50%) scaleY(0);
        animation: lineGrowVertical 1.2s cubic-bezier(.4,0,.2,1) 0.2s forwards;
    }
    .hcw-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    .hcw-step {
        flex-direction: row;
        align-items: flex-start;
        gap: 20px;
    }
    .cx-circle {
        flex-shrink: 0;
        width: 44px;
        height: 44px;
        font-size: 18px;
        z-index: 2; /* Keep circle above the line */
    }
    .hcw-step-title {
        font-size: 15px;
        margin-bottom: 6px;
    }
    .hcw-step-desc {
        font-size: 12.5px;
    }
}

/* ---- Mobile: Smaller Vertical Timeline ---- */
@media (max-width: 480px) {
    .hcw-container {
        margin-top: 48px;
        margin-bottom: 48px;
    }
    .hcw-wrapper {
        padding: 28px 18px 36px;
        border-radius: 12px;
    }
    .hcw-heading {
        font-size: clamp(22px, 7vw, 30px);
        margin: 0 0 28px;
    }
    .hcw-line-bg,
    .hcw-line-anim {
        left: 20px; /* Center of 40px circle */
        top: 20px;
        bottom: 20px;
    }
    .hcw-grid {
        gap: 24px;
    }
    .hcw-step {
        gap: 16px;
    }
    .cx-circle {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    .hcw-step-title {
        font-size: 14px;
    }
    .hcw-step-desc {
        font-size: 12px;
    }
}
</style>

<h2 class="sr-only">How Young Chanakya X Works — 4 steps to create, access, connect, and grow.</h2>

<div class="mt-4 hcw-wrapper">
    <div class="container">
        <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Our Process</div>
        <p class="cx-heading hcw-heading" style="font-size: clamp(24px, 2.8vw, 42px) !important; font-weight: 400 !important; line-height: 1.15 !important; letter-spacing: -1px !important;">
            How <span style="font-weight: 400 !important;">Young Chanakya X</span> &nbsp;Works
        </p>
        <p class="sec-desc rv" style="color: rgba(255, 255, 255, 0.75) !important; max-width: 600px; margin-top: -12px; margin-bottom: 44px; line-height: 1.6; font-weight: 400 !important;">
            Follow these simple steps to join the Young Chanakya X network, access premium lounges, and launch high-impact collaborations.
        </p>
    
        <div class="hcw-relative">
    
            <div class="hcw-line-bg"></div>
            <div class="hcw-line-anim"></div>
    
            <div class="hcw-grid">
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c1">1</div>
                    <div class="cx-text cx-t1">
                        <p class="hcw-step-title">Create Your Profile</p>
                        <p class="hcw-step-desc">Create your creator profile and showcase your content within Young Chanakya X.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c2">2</div>
                    <div class="cx-text cx-t2">
                        <p class="hcw-step-title">Access Creator Spaces</p>
                        <p class="hcw-step-desc">Access creator lounges, networking spaces, podcasts, and exclusive experiences.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c3">3</div>
                    <div class="cx-text cx-t3">
                        <p class="hcw-step-title">Connect &amp; Collaborate</p>
                        <p class="hcw-step-desc">Connect with creators, influencers, brands, and communities worldwide.</p>
                    </div>
                </div>
    
                <div class="hcw-step">
                    <div class="cx-circle cx-c4">4</div>
                    <div class="cx-text cx-t4">
                        <p class="hcw-step-title">Grow Your Influence</p>
                        <p class="hcw-step-desc">Grow your visibility through collaborations, events, and creator opportunities.</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>


<section class="membership-section position-relative mt-50 lg-mt-80 mb-50 lg-mb-80" id="membership">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv">Get Involved</div>
        <h2 class="sec-title rv" style="color: #0c3a30;">Find Your Role in the Ecosystem</h2>
        <p class="sec-desc rv text-center" style="max-width: 600px; margin: 16px auto 0;">Choose how you want to engage with our community—whether by mentoring others, speaking on record, leading initiatives, or partnering with us.</p>
    </div>
    <div class="mem-grid">
      <div class="mem-card">
        <div>
          <div class="mem-role">Organizational</div>
          <h3>Become a Partner</h3>
          <p class="mem-desc">Collaborate through co-branded events, strategic integrations, and collaborative ecosystem initiatives.</p>
        </div>
        <a href="/become-a-partner" class="mem-action-link">
          <span class="btn-text">Become a Partner</span>
          <span class="round-btn"><i class="bi bi-arrow-up-right"></i></span>
        </a>
      </div>
      <div class="mem-card">
        <div>
          <div class="mem-role">Brand Supporter</div>
          <h3>Become a Sponsor</h3>
          <p class="mem-desc">Sponsor events, podcast seasons, and community programs to elevate your brand presence.</p>
        </div>
        <a href="/become-a-sponsor" class="mem-action-link">
          <span class="btn-text">Become a Sponsor</span>
          <span class="round-btn"><i class="bi bi-arrow-up-right"></i></span>
        </a>
      </div>
      <div class="mem-card">
        <div>
          <div class="mem-role">Platform Voice</div>
          <h3>Share Your Story</h3>
          <p class="mem-desc">Apply to share your personal journey, business ventures, or expertise as a guest application.</p>
        </div>
        <a href="/share-your-story" class="mem-action-link">
          <span class="btn-text">Share Your Story</span>
          <span class="round-btn"><i class="bi bi-arrow-up-right"></i></span>
        </a>
      </div>
      <div class="mem-card">
        <div>
          <div class="mem-role">Signature Stage</div>
          <h3>YCX Talks</h3>
          <p class="mem-desc">Share your expertise, practical insights, and ideas on our signature stage as a speaker.</p>
        </div>
        <a href="/become-a-speaker" class="mem-action-link">
          <span class="btn-text">Become a Speaker</span>
          <span class="round-btn"><i class="bi bi-arrow-up-right"></i></span>
        </a>
      </div>
      <div class="mem-card">
        <div>
          <div class="mem-role">Broadcast Guest</div>
          <h3>Get Featured On Podcast</h3>
          <p class="mem-desc">Pitch your topic, speak on record, and share functional expertise on our podcast episodes.</p>
        </div>
        <a href="/become-a-feature" class="mem-action-link">
          <span class="btn-text">Get Featured</span>
          <span class="round-btn"><i class="bi bi-arrow-up-right"></i></span>
        </a>
      </div>
      <div class="mem-card cta-card featured">
        <div class="cta-card-content">
          <div class="cta-icon">✨</div>
          <h3>Not sure where you fit?</h3>
          <p class="cta-desc">Reach out to our team directly and let's explore how we can work together.</p>
        </div>
        <a href="/contact" class="mem-cta-btn">Contact Us</a>
      </div>
    </div>
  </div>
</section>


<section class="container py-4">
  <div id="join-club">
    <div class="jc-photo">
      <img src="{{ asset('images/media/index-page/club.webp') }}" alt="Members collaborating at the YCX Club">
    </div>
    <div class="jc-content">
      <span class="eyebrow">Join Our Club</b></span>
      <h2 class="jc-heading">Become Part of a Community That Grows Together</h2>
      <p class="jc-desc">The Young Chanakya X Club is a space for students, creators, entrepreneurs, professionals, educators, and community builders to connect, collaborate, share experiences, and grow together.</p>
      <div class="jc-pills">
        <span class="jc-pill">Connect with like-minded peoples</span>
        <span class="jc-pill">Share ideas and experiences</span>
        <span class="jc-pill">Participate in exclusive events</span>
        <span class="jc-pill">Build meaningful professional relationships</span>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT YOUNG CHANAKYA X -->
{{-- <section class="about" id="about-ycx">
    <div class="about-inner">
        <div class="about-img-side rv-l">
            <img src="/images/media/about_platform_leaders.png" alt="About Young Chanakya X">
            <div class="about-img-overlay"></div>
        </div>
        <div class="about-content rv-r" >
            <div class="eyebrow rv">About Young Chanakya X</div>
            <h2 class="sec-title rv">A Digital-First Network for <br>Growth & Collaboration</h2>
            <p class="sec-desc rv" style="margin-bottom: 28px; font-size: 0.95rem; line-height: 1.6; color: #475569;">
                Young Chanakya X is a digital-first leadership and community platform connecting ambitious creators, founders, and leaders. We build a dynamic ecosystem where learning happens through people and opportunities are created through collaborative relationships.
            </p>

            <div class="about-keypoints-grid rv">
                <!-- 1. Inspiring Stories -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-bookmark-star"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Inspiring Stories</h4>
                    </div>
                </div>

                <!-- 2. Expert Talks -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-mic"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Expert Talks</h4>
                    </div>
                </div>

                <!-- 3. Meaningful Podcasts -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Meaningful Podcasts</h4>
                    </div>
                </div>

                <!-- 4. Professional Networking -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Professional Networking</h4>
                    </div>
                </div>

                <!-- 5. Leadership Insights -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-award"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Leadership Insights</h4>
                    </div>
                </div>

                <!-- 6. Community Initiatives -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-heart"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Community Initiatives</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
 <style>
    .about-keypoints-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px 24px;
        margin-top: 12px;
    }
    .keypoint-item {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    .keypoint-icon-box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: var(--orange);
        color: var(--primary);
        font-size: 1.2rem;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    #about-podcast .keypoint-icon-box {
        background: transparent;
        color: var(--orange-warm);
        width: auto;
        height: auto;
        font-size: 1.4rem;
    }
    .keypoint-text-box {
        display: flex;
        flex-direction: column;
    }
    .keypoint-title {
        font-size: 0.9rem;
        font-weight: 500 !important;
        color: var(--grey);
        margin: 0;
        line-height: 1.2;
        transition: color 0.3s ease;
    }
    @media (max-width: 576px) {
        .about-keypoints-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
    }
</style>

<!-- FEATURE IN YCX PODCAST -->
<section class="about py-5" id="about-podcast">
    <div class="about-inner">
        <div class="about-content rv-l">
            <div class="eyebrow rv">Broadcast Your Story & Brand</div>
            <h2 class="sec-title rv">Feature on YCX Podcast</h2>
            <p class="sec-desc rv mb-3">
                Get featured on the Young Chanakya X Podcast. Join high-impact video podcast episodes, share deep-dive conversations on entrepreneurship, creator economy, and leadership, and expand your digital presence.
            </p>
            <div class="about-keypoints-grid rv" style="grid-template-columns: 1fr; gap: 5px;">
                <!-- 1. Multi-Channel Distribution -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Reach thousands of listeners across YouTube, Spotify &amp; Apple Podcasts</h4>
                    </div>
                </div>

                <!-- 2. High-Production Quality -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Recorded in professional high-definition video &amp; studio audio</h4>
                    </div>
                </div>

                <!-- 3. Audience Engagement -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Share deep-dive insights on entrepreneurship, tech, &amp; leadership</h4>
                    </div>
                </div>

                <!-- 4. Strategic Positioning -->
                <div class="keypoint-item">
                    <div class="keypoint-icon-box">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="keypoint-text-box">
                        <h4 class="keypoint-title">Amplify your personal brand and authority globally</h4>
                    </div>
                </div>
            </div>
            <div class="pt-4 rv">
                <button class="btn-hero-secondary" onclick="window.location.href='/become-a-feature'">Feature on YCX Podcast</button>
            </div>
        </div>
        <div class="about-img-side rv-r">
            <img src="{{ asset('images/media/index-page/podcast-kishore.webp') }}" alt="Feature on YCX Podcast">
            <div class="about-img-overlay"></div>
        </div>
    </div>
</section>


<section class="community-sec py-5">
  <div class="engagement-grid container">
    <!-- Card 1 -->
    <div class="engagement-card">
      <div class="engagement-content">
        <div class="engagement-header">
          <h3>Become a Partner</h3>
          <a href="/become-a-partner" class="btn-hero-primary">Partner with Us</a>
        </div>
        <p>Join YCX as a partner and collaborate with a growing network of creators, speakers and communities to create impactful experiences and new opportunities.</p>
      </div>
      <div class="engagement-photo">
        <img src="{{ asset('images/media/index-page/partner.webp') }}" alt="Celebrate Campus Engagements">
      </div>
    </div>

    <!-- Card 2 -->
    <div class="engagement-card">
      <div class="engagement-content">
        <div class="engagement-header">
          <h3>Become a Sponsor</h3>
          <a href="/become-a-sponsor" class="btn-hero-primary">Join as Sponsor</a>
        </div>
        <p>Partner with YCX as a sponsor to connect your brand with inspiring conversations, influential voices, and a community that values innovation and collaboration.</p>
      </div>
      <div class="engagement-photo">
        <img src="{{ asset('images/media/index-page/sponsor.webp') }}" alt="Become a Sponsor">
      </div>
    </div>
  </div>
</section>


{{-- <!-- WHY YOUNG CHANAKYA X -->
<style>
    .why-ycx {
        padding: 120px 0;
        background: var(--primary-dark);
        color: var(--white);
        position: relative;
        overflow: hidden;
    }
    .why-ycx::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at center, rgba(255,210,177,0.03) 0%, transparent 70%);
        pointer-events: none;
    }
    .why-header {
        text-align: center;
        margin-bottom: 64px;
        position: relative;
        z-index: 2;
    }
    .why-header .eyebrow {
        color: var(--accent) !important;
    }
    .why-header .eyebrow::before {
        background: var(--accent) !important;
    }
    .why-heading {
        font-size: clamp(32px, 4vw, 48px);
        font-weight: 700;
        letter-spacing: -1px;
        margin-bottom: 24px;
        color: var(--white);
    }
    .why-heading em {
        color: var(--accent);
        font-style: italic;
    }
    .why-desc {
        font-size: 18px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.8);
        max-width: 680px;
        margin: 0 auto;
    }
    
    .why-grid-container {
        width: 100%;
        margin: 0 auto 64px;
        position: relative;
        z-index: 2;
        text-align: center;
    }
    
    .why-brings-text {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--accent);
        margin-bottom: 40px;
    }

    .why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .why-card {
        position: relative;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 20px;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-start;
        padding: 30px 24px;
        text-align: left;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .why-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 210, 177, 0.3);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .why-card-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        transition: transform 0.6s ease;
    }

    .why-card:hover .why-card-bg {
        transform: scale(1.05);
    }

    .why-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(7, 31, 26, 0.9) 0%, rgba(7, 31, 26, 0.2) 100%);
        z-index: 2;
        transition: background 0.4s ease;
    }
    
    .why-card:hover .why-card-overlay {
        background: linear-gradient(to top, rgba(7, 31, 26, 0.95) 0%, rgba(255, 210, 177, 0.1) 100%);
    }

    .why-title {
        position: relative;
        z-index: 3;
        font-size: 18px;
        font-weight: 700;
        color: var(--white);
        margin: 0;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .why-title i {
        color: var(--accent);
        font-size: 20px;
    }

    .why-footer {
        text-align: center;
        max-width: 700px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        padding-top: 40px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    
    .why-footer-text {
        font-size: 18px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.7);
    }
    .why-footer-text strong {
        color: var(--white);
        font-weight: 600;
    }

    @media (max-width: 991px) {
        .why-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .why-ycx {
            padding: 80px 0;
        }
    }
    
    @media (max-width: 767px) {
        .why-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .why-heading {
            font-size: 28px;
        }
        .why-desc {
            font-size: 16px;
        }
        .why-card {
            min-height: 160px;
            padding: 24px;
        }
    }
</style>

<section class="why-ycx" id="why-ycx">
    <div class="container">
        
        <div class="why-header">
            <div class="eyebrow rv">Purpose</div>
            <h2 class="why-heading rv">Why <em>Young Chanakya X?</em></h2>
            <p class="why-desc rv">
                The world has information everywhere, but meaningful connections are rare.
            </p>
        </div>

        <div class="why-grid-container">
            <div class="why-brings-text rv">Young Chanakya X brings together</div>
            
            <div class="why-grid">
                <div class="why-card rv" style="transition-delay: 0.0s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" alt="Leadership">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-flag"></i> Leadership</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.1s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=600&q=80" alt="Storytelling">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-chat-quote"></i> Storytelling</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.2s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=600&q=80" alt="Podcasts">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-mic"></i> Podcasts</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.3s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&q=80" alt="Community">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-people"></i> Community</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.4s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=80" alt="Networking">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-diagram-3"></i> Networking</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.5s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" alt="Mentorship">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-compass"></i> Mentorship</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.6s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Learning">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-lightbulb"></i> Learning</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.7s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1522071901873-411886a10004?w=600&q=80" alt="Collaboration">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-intersect"></i> Collaboration</h3>
                </div>
                <div class="why-card rv" style="transition-delay: 0.8s;">
                    <img class="why-card-bg" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80" alt="Events">
                    <div class="why-card-overlay"></div>
                    <h3 class="why-title"><i class="bi bi-calendar-event"></i> Events</h3>
                </div>
            </div>
        </div>

        <div class="why-footer rv" style="transition-delay: 0.4s;">
            <p class="why-footer-text">
                ...into one integrated ecosystem designed to support <strong>long-term personal and professional growth.</strong>
            </p>
        </div>

    </div>
</section> --}}

<!-- HOW CONNECTX WORKS -->

<style>
    @keyframes lineGrow {
        from {
            transform: scaleX(0);
        }

        to {
            transform: scaleX(1);
        }
    }

    @keyframes lineGrowVertical {
        from {
            transform: translateX(-50%) scaleY(0);
        }

        to {
            transform: translateX(-50%) scaleY(1);
        }
    }

    @keyframes circlePop {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        70% {
            transform: scale(1.18);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cx-heading {
        opacity: 0;
        animation: fadeUp 0.5s ease 0.05s forwards;
    }

    .cx-circle {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #ffd2b1;
        color: #0c3a30;
        font-size: 18px;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transform: scale(0);
        opacity: 0;
    }

    .cx-c1 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 0.35s forwards;
    }

    .cx-c2 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 0.75s forwards;
    }

    .cx-c3 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 1.15s forwards;
    }

    .cx-c4 {
        animation: circlePop 0.45s cubic-bezier(.34, 1.56, .64, 1) 1.55s forwards;
    }

    .cx-text {
        opacity: 0;
    }

    .cx-t1 {
        animation: fadeUp 0.5s ease 0.55s forwards;
    }

    .cx-t2 {
        animation: fadeUp 0.5s ease 0.95s forwards;
    }

    .cx-t3 {
        animation: fadeUp 0.5s ease 1.35s forwards;
    }

    .cx-t4 {
        animation: fadeUp 0.5s ease 1.75s forwards;
    }
</style>


<!-- EVENT LISTING -->
{{-- <section class="blog-section-two position-relative mt-70 lg-mt-80" id="events">
<div class="container">
    <div class="section-head">
        <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Event Listing</div>
        <h2 class="sec-title rv" style="font-size: clamp(34px, 4vw, 56px); font-weight: 700; line-height: 1.15;">Curated Events for Every Creator Journey</h2>
        <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-bottom: 0; margin-left: auto; margin-right: auto; line-height: 1.6;">Explore upcoming panels, awards gala ceremonies, regional conferences, and exclusive brand sponsorship opportunities.</p>
    </div>

    <div class="position-relative">
        <div class="row gx-xxl-5">
            @php
                $homeEvents = [
                    [
                        'category' => 'Speakers',
                        'title' => 'Founder Spotlight Series: Scaling Beyond Series A',
                        'desc' => 'Deconstructing startup milestones, market entry barriers, and scaling systems for high-growth ventures.',
                        'date' => 'JUL 18, 2026',
                        'location' => 'BENGALURU HUB',
                        'host' => 'Aditya Verma',
                        'role' => 'Venture Partner',
                        'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'category' => 'Roundtables',
                        'title' => 'Creator Connect Sessions: Multi-Platform Monetization',
                        'desc' => 'Unlocking premium brand sponsorships, media kit architectures, and co-branded content monetization loops.',
                        'date' => 'JUL 24, 2026',
                        'location' => 'EPISODE 42',
                        'host' => 'Rohan Sharma',
                        'role' => 'Growth Lead',
                        'img' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'category' => 'Roundtables',
                        'title' => 'Women in Leadership Circle: Directing Enterprise Operations',
                        'desc' => 'A collaborative forum for female business leaders, operational executives, and board candidates.',
                        'date' => 'AUG 02, 2026',
                        'location' => 'LEELA PALACE',
                        'host' => 'Meera Nair',
                        'role' => 'UI/UX Director',
                        'img' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'category' => 'Speakers',
                        'title' => 'Mentor Connect Program: Engineering & Architecture Scales',
                        'desc' => 'Direct technical mapping alongside elite system architects deploying robust enterprise configurations.',
                        'date' => 'AUG 12, 2026',
                        'location' => 'VIRTUAL SYMPOSIUM',
                        'host' => 'Siddharth Rao',
                        'role' => 'Full Stack Architect',
                        'img' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'category' => 'Podcasts',
                        'title' => 'Fireside Chats: Building Legacy Brand Narratives',
                        'desc' => 'An intimate, raw conversation with veteran operators detailing brand strategy, pivots, and positioning.',
                        'date' => 'AUG 29, 2026',
                        'location' => 'EPISODE 43',
                        'host' => 'Karan Malhotra',
                        'role' => 'Principal Architect',
                        'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&q=80&w=800'
                    ],
                    [
                        'category' => 'Speakers',
                        'title' => 'CEO Conversations: Navigating Cross-Border Ventures',
                        'desc' => 'Closed-door insights on international compliance, currency risk, and building global operating structures.',
                        'date' => 'SEP 05, 2026',
                        'location' => 'ITC GARDENIA',
                        'host' => 'Ananya Rao',
                        'role' => 'Managing Director',
                        'img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800'
                    ]
                ];
            @endphp

            @foreach($homeEvents as $event)
                @php
                    $dateParts = explode(' ', $event['date']);
                    $day = rtrim($dateParts[1], ',');
                    $month = $dateParts[0];
                    $formattedDate = $day . ' ' . $month;
                    $slug = \Illuminate\Support\Str::slug($event['title']);
                @endphp
                <div class="col-lg-4 col-md-6">
                    <article class="blog-meta-two mb-80 lg-mb-50 wow fadeInUp">
                        <figure class="post-img rounded-5 position-relative d-flex align-items-end m0"
                            style="background-image: url('{{ $event['img'] }}');">
                            <a href="{{ url('/event-details/' . $slug) }}" class="stretched-link rounded-5 date tran3s">{{ $formattedDate }}</a>
                        </figure>
                        <div class="post-data">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a href="{{ url('/event-details/' . $slug) }}" class="blog-title" style="width: 80%;">
                                    <h3 style="font-size: 1.2rem; font-weight: 600; line-height: 1.4; color: #0c3a30; margin-bottom: 0;">{{ $event['title'] }}</h3>
                                </a>
                                <a href="{{ url('/event-details/' . $slug) }}" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s" style="width: 45px; height: 45px; font-size: 18px; min-width: 45px;">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                                <p class="event-desc mt-2" style="font-size: 0.9rem; color: #475569; line-height: 1.5; margin-bottom: 12px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $event['desc'] }}
                            </p>
                            <div class="post-info text-uppercase fw-semibold tracking-wider opacity-75" style="font-size: 0.72rem; color: #ffd2b1; border-top: none; padding-top: 0; margin-top: 0;">
                                {{ $event['category'] }} • {{ $event['location'] }}
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach

        </div>
    </div>
</div>
</section> --}}
  
<!-- COMMUNITY & sponsor -->
{{-- <section class="community-sec" id="community">
    <div class="section-container">

        <div class="section-head">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Engage & Support</div>
            <h2 class="sec-title rv" style="font-size: clamp(34px, 4vw, 56px); font-weight: 700; line-height: 1.15;">Partner & sponsor</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-bottom: 0; margin-left: auto; margin-right: auto; line-height: 1.6;">Join hands with Young Chanakya X to build the premier ecosystem for C-suite leaders, creators, and innovators. Choose how you want to make an impact.</p>
        </div>

        <div class="community-grid">

            <!-- Card 1: Creator Community -->
            <article class="com-card creative-left rv" style="transition-delay:0s">
                <div class="card-meta">
                    <span class="card-num" style="font-size: 2.2rem; margin-bottom: 20px;"><i class="bi bi-people-fill"></i></span>
                    <h3>Become a Partner</h3>
                    <p style="margin-bottom: 0;">Collaborate on co-branded experiences, events, and strategic initiatives to drive mutual ecosystem growth and impact.</p>
                    <a href="/become-a-partner" class="com-card-btn">Become a Partner</a>
                </div>
                <div class="card-visual">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Creator">
                    </div>
                </div>
            </article>

            <!-- Card 2: sponsor Opportunities -->
            <article class="com-card creative-right rv" style="transition-delay:0.08s">
                <div class="card-meta">
                    <span class="card-num" style="font-size: 2.2rem; margin-bottom: 20px;"><i class="bi bi-briefcase-fill"></i></span>
                    <h3>Become a sponsor</h3>
                    <p style="margin-bottom: 0;">Elevate your brand presence by sponsoring our high-quality recording lounges, podcast seasons, and regional meetups.</p>
                    <a href="/become-a-sponsor" class="com-card-btn btn-orange">Become a sponsor</a>
                </div>
                <div class="card-visual">
                    <div class="image-wrapper">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=600&q=80" alt="sponsorship">
                    </div>
                </div>
            </article>

        </div>
    </div>
</section> --}}

<!-- WHO CAN PARTNER -->
<section class="partner-sec" id="partner">
    <div class="partner-head text-center">
        <div class="eyebrow rv" style="margin-bottom: 12px;">Who Can Join Us</div>
        <h2 class="sec-title rv" style="margin-bottom: 16px;">A Community for Everyone Who Wants to Grow</h2>
        <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px;">For people who value collaboration, learning, and building real connections that create long-term impact.</p>
    </div>
    <div class="partner-grid container">
        <div class="p-card rv" style="transition-delay:0s">
            <img src="{{ asset('images/media/index-page/students.webp') }}" alt="Students — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Students</div>
                <div class="p-desc">Connect with peers, build practical skills, and access leadership programs.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.07s">
            <img src="{{ asset('images/media/index-page/entrepreneurs.webp') }}" alt="Entrepreneurs — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Entrepreneurs</div>
                <div class="p-desc">Network with experts, share your vision, and scale your business ventures.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.14s">
            <img src="{{ asset('images/media/index-page/founder.webp') }}" alt="Startup Founders — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Startup Founders</div>
                <div class="p-desc">Pitch your ideas, collaborate with investors, and accelerate your growth.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.21s">
            <img src="{{ asset('images/media/index-page/business-leaders.webp') }}" alt="Business Leaders — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Business Leaders</div>
                <div class="p-desc">Guide the ecosystem, sponsor programs, and share executive insights.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.28s">
            <img src="{{ asset('images/media/index-page/creators-mentors.webp') }}" alt="Creators & Mentors — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Creators / Mentors</div>
                <div class="p-desc">Produce podcasts, write articles, and mentor the next generation.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.35s">
            <img src="{{ asset('images/media/index-page/influencers.webp') }}" alt="Influencers — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Influencers</div>
                <div class="p-desc">Amplify brand voice, reach active audiences, and host live sessions.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.42s">
            <img src="{{ asset('images/media/index-page/investors.webp') }}" alt="Investors — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Investors</div>
                <div class="p-desc">Discover vetted startups, back innovators, and shape market trends.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.49s">
            <img src="{{ asset('images/media/index-page/educators.webp') }}" alt="Educators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Educators</div>
                <div class="p-desc">Bridge academia with industry, design courses, and lead workshops.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.56s">
            <img src="{{ asset('images/media/index-page/community-builders.webp') }}" alt="Community Builders — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Community Builders</div>
                <div class="p-desc">Organize local meetups, run regional chapters, and grow active networks.</div>
            </div>
        </div>
        <div class="p-card rv" style="transition-delay:0.63s">
            <img src="{{ asset('images/media/index-page/innovators.webp') }}" alt="Innovators — Young Chanakya X Partner Category" loading="lazy">
            <div class="p-card-ov">
                <div class="p-name">Innovators</div>
                <div class="p-desc">Develop cutting-edge ideas, collaborate on tech, and build future frameworks.</div>
            </div>
        </div>
    </div>
</section>

<!-- WAYS TO GET INVOLVED -->
<section class="ways-to-involve-sec">
    <div class="container">
        <div class="section-head text-center" style="margin-bottom: 50px;">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Ways to Engage</div>
            <h2 class="sec-title rv" style="color: var(--primary-dark); font-size: clamp(34px, 4vw, 56px); font-weight: 700; line-height: 1.15;">Be Part of the Experience</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Explore a range of initiatives designed to connect you with industry leaders, ideas, and opportunities.</p>
        </div>
    </div>

    <div class="marquee-container" style="padding-bottom: 0;">
        <div class="marquee-track">
            @php
                $marqueeRow1 = [
                    'Founder Spotlight', 'CEO Conversations', 'Startup Stories', 'Community Podcasts', 
                    'Student Leadership Series', 'Women in Leadership', 'Creator Sessions'
                ];
                $marqueeRow2 = [
                    'Industry Roundtables', 'Campus Chapters', 'Mentor Connect', 'Innovation Talks', 
                    'Networking Meetups', 'Fireside Chats', 'Leadership Summit'
                ];
            @endphp
            @foreach($marqueeRow1 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
            @foreach($marqueeRow1 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
        </div>
    </div>
    
    <div class="marquee-container mt-5">
        <div class="marquee-track marquee-track-reverse">
            @foreach($marqueeRow2 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
            @foreach($marqueeRow2 as $item)
                <div class="marquee-chip">{{ $item }}</div>
            @endforeach
        </div>
    </div>
</section>

<!-- EXPERIENCES -->
<section class="cx-premium-viewport">
    <div class="cx-custom-cursor"></div>

    <div class="cx-wrapper">
        <div class="cx-editorial-header text-center">
            <div class="eyebrow rv" style="margin-bottom: 12px; font-size: 10px; font-weight: 700; letter-spacing: 3px;">Young Chanakya X Experiences</div>
            <h2 class="cx-main-heading" style="margin-bottom: 16px; font-size: clamp(34px, 4vw, 56px); font-weight: 700; line-height: 1.15;">Creator Spaces & Events</h2>
            <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px;">We provide professional recording studios, creative lounges, and city meetups to help you create content, meet people, and grow your audience.</p>
        </div>

        <div class="cx-viewport-grid">

            <div class="cx-premium-card cx-col-wide">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-1.webp') }}" alt="Podcasts" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">PODCASTS</span>
                    <h3 class="cx-premium-title">Conversations with founders, CEOs, creators, and innovators.</h3>
                    <p class="cx-premium-text">Real experiences. Practical lessons. Shared on record.</p>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-2.webp') }}" alt="Stories" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">STORIES</span>
                    <h3 class="cx-premium-title">Every journey matters.</h3>
                    <p class="cx-premium-text">Publish startup stories, career experiences, and personal transformations.</p>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-3.webp') }}" alt="Network" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">NETWORK</span>
                    <h3 class="cx-premium-title">Relationships across industries.</h3>
                    <p class="cx-premium-text">Students, professionals, investors, mentors — all in one space.</p>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-4.webp') }}" alt="Mentorship" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">MENTORSHIP</span>
                    <h3 class="cx-premium-title">The right conversation changes everything.</h3>
                    <p class="cx-premium-text">Connect with mentors who've navigated the path you're on.</p>
                </div>
            </div>

            <div class="cx-premium-card cx-col-square">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-5.webp') }}" alt="Live Events" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">LIVE EVENTS</span>
                    <h3 class="cx-premium-title">Where ideas become action.</h3>
                    <p class="cx-premium-text">Webinars, summits, roundtables, fireside chats, and meetups.</p>
                </div>
            </div>

            <div class="cx-premium-card cx-col-wide">
                <div class="cx-img-container">
                    <img src="{{ asset('images/media/index-page/img-6.webp') }}" alt="Collaborate" class="cx-surface-img">
                    <div class="cx-surface-overlay"></div>
                </div>
                <div class="cx-premium-body">
                    <span class="cx-premium-badge">COLLABORATE</span>
                    <h3 class="cx-premium-title">Build with people who share your vision.</h3>
                    <p class="cx-premium-text">Partnerships for startups, research, content, and innovation.</p>
                </div>
            </div>

        </div>
    </div>
</section>



@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var constellation = document.querySelector('.h2-xm__constellation');
        if (constellation) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        constellation.classList.add('go');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });
            observer.observe(constellation);
        }
    });
</script>
@endpush






@endsection
