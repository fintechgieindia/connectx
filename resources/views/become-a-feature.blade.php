@php
/**
 * Become a Guest / Feature Page SEO Data
 */
$seo = [
    'title'       => 'Featured on YCX Podcast — Guest Application | Young Chanakya X',
    'description' => 'Share your journey, insights, and experiences on the Young Chanakya X Podcast. Connect with an engaged community through authentic conversations and inspiring stories.',
    'keywords'    => 'YCX podcast, get featured on podcast, podcast guest, business podcast, entrepreneur podcast, creator podcast, leadership podcast, storytelling podcast, Young Chanakya X podcast, podcast interview',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
    'canonical'   => 'https://connectx.youngchanakya.com/become-a-feature',
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
            "@type": "WebPage",
            "@id": "https://connectx.youngchanakya.com/become-a-feature#webpage",
            "url": "https://connectx.youngchanakya.com/become-a-feature",
            "name": "Featured on YCX Podcast — Guest Application | Young Chanakya X",
            "description": "Share your journey, insights, and experiences on the Young Chanakya X Podcast. Connect with an engaged community through authentic conversations and inspiring stories.",
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
            "@type": "BreadcrumbList",
            "@id": "https://connectx.youngchanakya.com/become-a-feature#breadcrumb",
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
                    "name": "Featured on YCX Podcast",
                    "item": "https://connectx.youngchanakya.com/become-a-feature"
                }
            ]
        }
    ]
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/become-a-feature.css') }}?v={{ time() }}">
@endpush

@section('content')
<div class="become-a-feature-body">  <!-- ============ 1. HERO + FORM ============ -->
  <div class="authority-hero-section d-flex align-items-center position-relative" id="apply">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="trust-badge-pill">
            <i class="bi bi-mic"></i> YCX Podcast
          </div>

          <h1 class="trust-headline">Get Featured On <br>Our Podcast</h1>
          <p class="hero-description">
            Discover inspiring conversations with founders, entrepreneurs, professionals, creators, educators, and changemakers as they share their journeys, experiences, and lessons that inspire growth.
          </p>

          <ul class="checklist-connector">
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Share your journey with a growing community
            </li>
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Inspire others through authentic conversations
            </li>
            <li>
              <span class="icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Build meaningful connections beyond the episode
            </li>
          </ul>
        </div>

        <div class="col-lg-6">
          <div class="trust-metric-box">
            <h4>
              <i class="bi bi-person-lines-fill me-2"></i> Apply to be a guest
            </h4>

            <form action="{{ route('feature-guest.apply') }}" method="POST" id="featureGuestForm">
              @csrf
              <!-- 1st row: Full Name | Phone Number -->
              <div class="two-col mb-3">
                <div>
                  <label class="cx-label">Full Name *</label>
                  <input type="text" class="form-control cx-input" name="full_name" placeholder="E.g. Ananya Rao" required>
                </div>
                <div>
                  <label class="cx-label">Phone Number *</label>
                  <input type="tel" class="form-control cx-input" id="feature-phone" name="phone" placeholder="E.g. 98765 43210" required>
                </div>
              </div>
              
              <!-- 2nd row: Email -->
              <div class="mb-3">
                <label class="cx-label">Email Address *</label>
                <input type="email" class="form-control cx-input" name="email" placeholder="example@gmail.com" required>
              </div>

              <!-- 3rd row: Company Name | Designation -->
              <div class="two-col mb-3">
                <div>
                  <label class="cx-label">Company Name *</label>
                  <input type="text" class="form-control cx-input" name="company_name" placeholder="E.g. Company name" required>
                </div>
                <div>
                  <label class="cx-label">Designation / Job Title *</label>
                  <input type="text" class="form-control cx-input" name="designation" placeholder="E.g. Founder" required>
                </div>
              </div>

              <!-- 4th row: Social Media Profile -->
              <div class="mb-3">
                <label class="cx-label">Social Media Profile *</label>
                <input type="url" class="form-control cx-input" name="social_media_url" placeholder="https://linkedin.com/in/yourname" required>
              </div>

              <!-- 5th row: Topic description -->
              <div class="mb-4">
                <label class="cx-label">What would you want to talk about on air?</label>
                <textarea class="form-control cx-input" name="topic" rows="3" placeholder="A transformation you led, a hard call you made, a belief you'd defend..."></textarea>
              </div>
              <button type="submit" class="application-submit-btn">Submit Application <i class="bi bi-arrow-right ms-2"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== SUCCESS MODAL (Bootstrap) ========== -->
  <div class="modal fade" id="featureSuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background:linear-gradient(135deg,#fffcf9 0%,#ffeada 100%);border:1px solid rgba(12,58,48,.15);border-radius:20px;">
        <div class="modal-body text-center p-5">
          <div class="mb-4"><i class="bi bi-check-circle-fill" style="font-size:4rem;color:#0c3a30;"></i></div>
          <h3 class="fw-bold mb-3" style="font-size:1.5rem;line-height:1.3;color:#0c3a30;">Thanks for Sharing Your Story!</h3>
          <p class="mb-4" style="line-height:1.6;font-size:0.95rem;color:#687588;">Your submission has been received successfully. We're excited to learn more about your journey and will reach out with the next steps.</p>
          <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration:none;background-color:#0c3a30;color:#fff;border-radius:12px;border:none;transition:all 0.3s ease;">
            Continue Exploring
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ 2. WHO WE WORK WITH ============ -->
  <section class="connectx-how-works-section-wrapper pt-70 lg-pt-80 pb-70 lg-pb-80">
    <div class="container">
      <div class="text-center mb-70">
        <div class="eyebrow rv">Why Get Featured</div>
        <h2 class="sec-title">Every Conversation Has the Power to Inspire</h2>
        <p class="sec-desc">Share your experiences and insights through meaningful conversations that inspire <br>learning, growth, and real connections.</p>
      </div>

      <div class="row g-0 how-works-section-cards-container">
        <div class="col-lg-4 col-md-6 hw-grid-border-end-md hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">01</span>
              <h4 class="how-works-h4">Authentic Conversations</h4>
            </div>
            <p class="how-works-p-desc">
              We focus on honest, meaningful conversations that reflect your real experiences, ideas, and unique perspective rather than scripted interviews.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-lg hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">02</span>
              <h4 class="how-works-h4">Real-World Experiences</h4>
            </div>
            <p class="how-works-p-desc">
             Share practical lessons, challenges, and achievements that can inspire others and help them navigate their own journeys.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-bottom-md">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">03</span>
              <h4 class="how-works-h4">Diverse Perspectives</h4>
            </div>
            <p class="how-works-p-desc">
              Every background, profession, and experience brings fresh ideas that enrich conversations and create valuable learning opportunities.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-md hw-grid-border-bottom-sm">
          <div class="how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">04</span>
              <h4 class="how-works-h4">Community Learning</h4>
            </div>
            <p class="how-works-p-desc">
              Your experiences become a source of knowledge that helps individuals make informed decisions and grow with confidence.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hw-grid-border-end-lg">
          <div class="how-works-section-card how-works-bg-light">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">05</span>
              <h4 class="how-works-h4">Meaningful Dialogue</h4>
            </div>
            <p class="how-works-p-desc">
              Engage in thoughtful discussions that encourage curiosity, spark new ideas, and create lasting conversations within the community.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="connectx-premium-card how-works-section-card how-works-bg-tint">
            <div class="how-works-header-flex-row">
              <span class="how-works-badge-num">06</span>
              <h4 class="how-works-h4">Lasting Inspiration</h4>
            </div>
            <p class="how-works-p-desc">
              Your story continues to educate and motivate people long after the episode is published across our platforms.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ Why Get Featured ============ -->
  {{-- <section class="section-pad">
    <div class="container">
      <div class="sec-head">
        <span class="eyebrow">Why get featured</span>
        <h2>Your experience, turned into reach</h2>
        <p>A 45-minute conversation becomes a body of proof: something a candidate, a peer, or your own board can point to and say — this person has actually done it.</p>
      </div>
      <div class="why-grid">
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 2L14.5 8.5L21 9.5L16.5 14L17.8 20.8L12 17.5L6.2 20.8L7.5 14L3 9.5L9.5 8.5L12 2Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
          </div>
          <h3>Authority beyond your org chart</h3>
          <p>Your point of view reaches people who'll never sit in a meeting with you — future hires, peers, your own leadership team.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M4 20c1.2-4 4-6 8-6s6.8 2 8 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>An audience already listening</h3>
          <p>CHROs, CPOs and People leaders tune in specifically for operating detail — not a general business audience.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 9h8M8 13h8M8 17h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>One session, a library of content</h3>
          <p>Your episode becomes clips, quote cards and a written spotlight — content you can reuse across your own channels.</p>
        </div>
        <div class="why-card">
          <div class="icn">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 3v6M12 15v6M3 12h6M15 12h6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
          </div>
          <h3>A growing bench of peers</h3>
          <p>Guests get introduced to each other. It's turned into hiring conversations, advisory seats and genuine friendships.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- ============ 3. WHO CAN JOIN US ============ -->
  <section class="partner-sec" id="partner">
    <div class="partner-head text-center">
      <div class="eyebrow rv">Who Can Join Us</div>
      <h2 class="sec-title rv">Every Journey Deserves to Be Heard</h2>
      <p class="sec-desc rv mx-auto">We welcome individuals from diverse backgrounds who have experiences, ideas, or insights that can inspire and educate others.</p>
    </div>
    <div class="partner-grid">
      <div class="p-card rv" style="transition-delay:0s">

<img src="{{ asset('images/media/podcast/creators.webp') }}" alt="Creators" loading="lazy">

        <div class="p-card-ov">
          <div class="p-name">Creators</div>
          <div class="p-desc">Produce engaging content, tell impactful stories, and share your vision on our podcast platform.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.07s">
      
      <img src="{{ asset('images/media/podcast/women-leaders.webp') }}" alt="Women Leaders" loading="lazy">
      
      <div class="p-card-ov">
          <div class="p-name">Women Leaders</div>
          <div class="p-desc">Empower others by sharing your leadership journey, key strategies, and industry insights.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.14s">

        <img src="{{ asset('images/media/podcast/entrepreneurs.webp') }}" alt="Entrepreneurs" loading="lazy">
        
        <div class="p-card-ov">
          <div class="p-name">Entrepreneurs</div>
          <div class="p-desc">Share your business venture stories, operational frameworks, and scale-up strategies.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.21s">
        <img src="{{ asset('images/media/podcast/startup-founders.webp') }}" alt="Startup Founders" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Startup Founders</div>
          <div class="p-desc">Discuss market innovation, venture building lessons, and raising capital.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.28s">
        <img src="{{ asset('images/media/podcast/professionals.webp') }}" alt="Professionals" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Professionals</div>
          <div class="p-desc">Explain your functional expertise, corporate milestones, and career growth hacks.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.35s">
      
      <img src="{{ asset('images/media/podcast/educators.webp') }}" alt="Educators" loading="lazy">
        <div class="p-card-ov">
          <div class="p-name">Educators</div>
          <div class="p-desc">Bridge theory with practical implementation, detailing the future of teaching and learning.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.42s">
      
      <img src="{{ asset('images/media/podcast/public-speakers.webp') }}" alt="Public Speakers" loading="lazy">
       
      <div class="p-card-ov">
          <div class="p-name">Public Speakers</div>
          <div class="p-desc">Bring your stage presence and talk about the ideas that can challenge and shape opinions.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.49s">
       
      <img src="{{ asset('images/media/podcast/innovators.webp') }}" alt="Innovators" loading="lazy">
     
      <div class="p-card-ov">
          <div class="p-name">Innovators</div>
          <div class="p-desc">Explain emerging technology, digital frameworks, and cutting-edge solutions.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.56s">
      
      <img src="{{ asset('images/media/podcast/community-leaders.webp') }}" alt="Community Leaders" loading="lazy">
     
      <div class="p-card-ov">
          <div class="p-name">Community Leaders</div>
          <div class="p-desc">Discuss strategies for cultivating active, supportive, and highly engaged communities.</div>
        </div>
      </div>
      <div class="p-card rv" style="transition-delay:0.63s">
      
      <img src="{{ asset('images/media/podcast/social-leaders.webp') }}" alt="Social Impact Leaders" loading="lazy">
     
      <div class="p-card-ov">
          <div class="p-name">Social Impact Leaders</div>
          <div class="p-desc">Inspire change by speaking on sustainability, community development, and societal progress.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 4. WHAT WE COVER ============ -->
  <section class="cover-section-new py-5">
    <div class="container">
      <div class="cover-grid-new">
        <!-- LEFT COLUMN -->
        <div class="cover-left">
          <span class="eyebrow">What We Cover</span>
          <h2 class="sec-title">Share Your Journey and <br>Inspire Others</h2>
          <p class="sec-desc">We feature conversations focused on growth, innovation, and leadership in today's digital and business landscape.</p>
          <ul class="cover-points-new">
            <li>
              <span class="point-icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Propose custom discussion topics that highlight your expertise and stories
            </li>
            <li>
              <span class="point-icon-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Share actionable advice, lessons learned, and building frameworks
            </li>
          </ul>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="cover-right">
          <div class="vertical-marquee-container">
            <div class="vertical-marquee-track">
              <!-- Double entries to enable seamless loop vertical scroll -->
              <div class="marquee-item">How to scale startups and sustain rapid growth</div>
              <div class="marquee-item">Empowering women to lead in modern industries</div>
              <div class="marquee-item">Building engaged communities across digital ecosystems</div>
              <div class="marquee-item">How content creators turn stories into movements</div>
              <div class="marquee-item">Reimagining EdTech and the future of learning</div>
              <div class="marquee-item">Navigating emerging technology and digital trends</div>
              <div class="marquee-item">Driving social impact and community development</div>
              <div class="marquee-item">The startup fundraising and venture building journey</div>

              <div class="marquee-item">How to scale startups and sustain rapid growth</div>
              <div class="marquee-item">Empowering women to lead in modern industries</div>
              <div class="marquee-item">Building engaged communities across digital ecosystems</div>
              <div class="marquee-item">How content creators turn stories into movements</div>
              <div class="marquee-item">Reimagining EdTech and the future of learning</div>
              <div class="marquee-item">Navigating emerging technology and digital trends</div>
              <div class="marquee-item">Driving social impact and community development</div>
              <div class="marquee-item">The startup fundraising and venture building journey</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 5. WHAT YOU GET ============ -->
  <section class="section-pad bg-white-sec">
    <div class="container">
      <!-- 2-column header layout -->
      <div class="row align-items-end mb-5">
        <div class="col-lg-6">
          <span class="eyebrow">What You Gain Beyond the Conversation</span>
          <h2 class="sec-title love-header-title mb-0">Why You'll Love it</h2>
        </div>
        <div class="col-lg-6">
          <p class="love-header-desc">Getting featured on the YCX Podcast helps you expand your reach, strengthen your personal brand, and build meaningful connections that continue beyond the episode.</p>
        </div>
      </div>

      <div class="row align-items-stretch g-4 mb-4 mt-5">
        <!-- 1st Row: Column 1 - Image -->
        <div class="col-lg-6">
          <div class="h-100 rounded-4 overflow-hidden">
            <img src="{{ asset('images/media/podcast/why-you-love-it.webp') }}" class="get-image-box" alt="Podcast recording setup">
          </div>
        </div>
        <!-- 1st Row: Column 2 - Card 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-mic"></i>
            </div>
            <h3>Professional Podcast Feature</h3>
            <p>Get featured on a professionally produced podcast that showcases your story authentically.</p>
          </div>
        </div>
        <!-- 1st Row: Column 3 - Card 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>Digital Visibility</h3>
            <p>Reach a wider, diverse audience across YCX's digital channels.</p>
          </div>
        </div>
      </div>

      <!-- 2nd Row: 4 Cards -->
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <h3>Personal Brand Growth</h3>
            <p>Build your professional presence by sharing your unique expertise.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-share"></i>
            </div>
            <h3>Shareable Content</h3>
            <p>Get ready-to-share social clips and media assets for your channels.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-people"></i>
            </div>
            <h3>Valuable Connections</h3>
            <p>Connect with founders, creators, and mentors in the YCX ecosystem.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="get-card">
            <div class="get-card-icon-wrap">
              <i class="bi bi-infinity"></i>
            </div>
            <h3>Evergreen Presence</h3>
            <p>Your insights remain accessible online, creating long-term value.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 6. THOUGHT LEADERSHIP ============ -->
  <section class="thought-leadership-section">
    <div class="thought-leadership-container">
      <div class="thought-header">
        <h2 class="thought-title">Voices of Our Community</h2>
        <p class="thought-desc">Explore inspiring conversations and deep insights from creators, founders, and leaders featured on the YCX Podcast.</p>
      </div>

      <div class="video-grid">
        <div class="video-card">
          <div class="video-thumbnail">
            <img src="{{ asset('images/media/podcast/building-communities.webp') }}" alt="Building Communities That Scale">
            <div class="play-btn-overlay">
              <i class="bi bi-play-fill"></i>
            </div>
          </div>
          <h3 class="video-card-title">Building Communities That Scale</h3>
          <div class="video-card-divider"></div>
          <p class="video-card-subtext">Ananya Rao — Community Builder &amp; Creator, on the YCX Podcast</p>
        </div>

        <div class="video-card">
          <div class="video-thumbnail">
            <img src="{{ asset('images/media/podcast/digital-entrepreneurship.webp') }}" alt="The Future of Digital Entrepreneurship">
            <div class="play-btn-overlay">
              <i class="bi bi-play-fill"></i>
            </div>
          </div>
          <h3 class="video-card-title">The Future of Digital Entrepreneurship</h3>
          <div class="video-card-divider"></div>
          <p class="video-card-subtext">Marcus Webb — Tech Innovator &amp; Founder, on the YCX Podcast</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 7. HOW IT WORKS ============ -->
  {{-- <section class="steps section-pad">
    <div class="container">
      <div class="sec-head">
        <span class="eyebrow">How it works</span>
        <h2>From application to air, in four steps</h2>
      </div>
      <div class="steps-grid">
        <div class="step">
          <div class="step-no">01</div>
          <h3>Apply</h3>
          <p>Tell us about your experience and the angle you'd bring. Takes about 2 minutes.</p>
        </div>
        <div class="step">
          <div class="step-no">02</div>
          <h3>Screening call</h3>
          <p>A quick 15-minute call with our producer to shape the episode around your story.</p>
        </div>
        <div class="step">
          <div class="step-no">03</div>
          <h3>Record</h3>
          <p>A 40–50 minute conversation, video or audio, remote or in-studio — whatever suits you.</p>
        </div>
        <div class="step">
          <div class="step-no">04</div>
          <h3>Go live</h3>
          <p>Your episode launches across platforms, with clips and a spotlight page of your own.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- ============ 8. WHY PARTNER WITH US ============ -->
  <div class="text-feature-five position-relative mt-40 lg-mt-80 pb-50">
    <div class="container">
      <div class="bg-wrapper connectx-partner-bg">
        <div class="row">
          <!-- CONTENT SIDE -->
          <div class="col-lg-6 ms-auto d-flex flex-column order-lg-last">
            <div class="text-wrapper pt-60 pb-60 lg-pb-40 ps-3 ps-xxl-5 pe-3 pe-xxl-5">
              <div class="eyebrow rv">READY TO SHARE YOUR STORY?</div>
              <h2 class="sec-title rv">Become the Next <br>Featured Guest</h2>
              <p class="sec-desc rv">
                Every conversation has the potential to inspire, educate, and create opportunities. Apply today and let your journey reach people who can learn from it.
              </p>
              <ul class="style-none connectx-partner-list">
                <li>Professionally hosted podcast conversations</li>
                <li>Reach a growing community across industries</li>
                <li>Share your story with lasting impact</li>
                <li>Build meaningful professional connections</li>
              </ul>
            </div>
          </div>
          <!-- IMAGE SIDE -->
          <div class="col-lg-6 d-flex order-lg-first">
            <div class="media-wrapper w-100 d-flex align-items-center justify-content-center position-relative">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============ 9. FAQ ============ -->
  <section class="faq-section pb-5" id="faq">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently asked questions</h2>
        <p class="sec-desc">Everything you need to know about preparation, recording, and distribution process.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>Who can apply to be featured?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Anyone with valuable experiences, insights, or stories that can inspire and educate others.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is there any fee to participate?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>No. Being featured on the YCX Podcast is completely free for selected guests.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>How long does a podcast episode last?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Most conversations range between 30 and 60 minutes.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is the podcast recorded online or in person?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Depending on the guest and event, episodes may be recorded online or at a physical location.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I suggest the discussion topics?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes. We encourage guests to propose topics that reflect their expertise and experiences.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>Will my podcast be promoted?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes. Selected episodes are promoted across YCX's website, social media, and digital channels.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I feature my organization or startup?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes. You're welcome to share your journey, mission, and the work you're building as part of the conversation.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What languages can I speak in?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You can apply in your preferred language, subject to our recording and audience requirements.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I participate more than once?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Absolutely. You're welcome to return with new stories, milestones, or insights in the future.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>How will I know if I'm selected?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Our team reviews every application and contacts shortlisted guests with the next steps for recording.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var phoneInput = document.querySelector('.become-a-feature-body input[name="phone"]');
    if (phoneInput) {
      var iti = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
      });

      var form = phoneInput.closest('form');
      if (form) {
        form.addEventListener('submit', function() {
          phoneInput.value = iti.getNumber();
        });
      }
    }

    document.querySelectorAll('.become-a-feature-body .faq-item').forEach(item => {
      item.querySelector('.faq-q').addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.become-a-feature-body .faq-item').forEach(i => i.classList.remove('open'));
        if(!isOpen) item.classList.add('open');
      });
    });

    // AJAX Form Submission
    const featureForm = document.getElementById('featureGuestForm');
    if (featureForm) {
      featureForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        const btn = featureForm.querySelector('button[type="submit"]');
        btn.disabled = true;

        const formData = new FormData(featureForm);

        try {
          const response = await fetch(featureForm.action, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' },
            body: formData
          });
          const data = await response.json();
          if (data.type === 'success') {
            featureForm.reset();
            new bootstrap.Modal(document.getElementById('featureSuccessModal')).show();
          } else {
            btn.disabled = false;
            alert(data.message || 'Something went wrong. Please try again.');
          }
        } catch(err) {
          btn.disabled = false;
          alert('Unable to submit. Please check your connection and try again.');
        }
      });
    }
  });
</script>
<style>
@keyframes featurePopIn {
  from { opacity:0; transform:translateY(24px) scale(.96); }
  to   { opacity:1; transform:translateY(0) scale(1); }
}
</style>
@endpush
