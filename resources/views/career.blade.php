@php
/**
 * Careers / Internships Page SEO Data
 */
$isInternship = $isInternship ?? false;
$seo = [
    'title'       => $isInternship ? 'Internship | Young Chanakya X' : 'Careers | Young Chanakya X',
    'description' => $isInternship 
        ? 'Start your career with a Young Chanakya X internship. Gain hands-on experience, learn from real projects, and grow with an innovative community.' 
        : 'Explore career opportunities at Young Chanakya X and build your future with a team passionate about community, innovation, learning, and meaningful impact.',
    'keywords'    => $isInternship 
        ? 'YCX internship, internships, student internship, internship program, learning experience, career development, community internship, Young Chanakya X internship, students, training' 
        : 'YCX careers, jobs at Young Chanakya X, career opportunities, community jobs, startup careers, creative jobs, digital careers, join YCX, careers, hiring',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/career.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #0c3a30 !important;
  }
</style>
@endpush

@section('content')
<div class="career-body">

  <!-- OVERVIEW / HERO -->
  <section id="overview" class="about-hero" style="padding-top: 150px;">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <div class="eyebrow" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">
            {{ $isInternship ? 'Internships at YCX' : 'Careers at YCX' }}
          </div>
          <h1 style="font-family: 'Fraunces', serif; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; color: #0c3a30; margin-bottom: 20px;">
            {{ $isInternship ? 'Start Your Journey with Young Chanakya X' : 'Build Your Future with Young Chanakya X' }}
          </h1>
          <p class="hero-copy" style="font-size: 16px; color: var(--text-soft); line-height: 1.6; max-width: 600px;">
            {{ $isInternship 
              ? 'Get real-world experience, build hands-on skills, and make meaningful contributions. Join our team as an intern and work on projects that matter.' 
              : 'Join a passionate team that\'s building a community where stories, knowledge, and people come together. Help us empower the next generation of creators.' }}
          </p>
          
          <div class="">
            <a href="#roles" class="btn-orange">
              {{ $isInternship ? 'View Open Internships' : 'View Open Roles' }}
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-visual">
            <img class="hero-image" src="{{ asset('images/media/career/career-hero-banner.jpg') }}" alt="Team collaborating at Young Chanakya X creative media studio" loading="eager">
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- OPEN ROLES -->
  <section class="py-5" id="roles">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Open Opportunities</span>
        <h2>{{ $isInternship ? 'Available Internships' : 'Where We Need You Right Now' }}</h2>
        <p>Explore our currently open positions and find where your skills can make the greatest impact.<br> Tap any role below to see the full brief and apply.</p>
      </div>
      <div class="roles-tiles" id="rolesGrid">
        @forelse($jobs as $job)
          <a href="{{ route($job->category == 'internship' ? 'internships.detail' : 'careers.detail', $job->slug) }}" class="role-tile" style="text-decoration: none; display: block;">
            <div class="role-tile-tags mb-3">
              <span class="listing-tag" style="margin-top: 0;">{{ $job->department }}</span>
              <span>{{ ucfirst($job->work_mode) }}</span>
              @if($job->experience)
                <span>{{ $job->experience }}</span>
              @endif
              @if($job->duration)
                <span>{{ $job->duration }}</span>
              @endif
            </div>
            <div class="role-tile-top">
              <h3>{{ $job->title }}</h3>
              <span class="arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
            </div>
            <p class="blurb">{{ $job->tagline }}</p>
          </a>
        @empty
          <div class="text-center w-100 py-5">
            <h4 style="color: var(--text-soft);">No open opportunities at this moment. Check back soon!</h4>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- CULTURE / LIFE AT YCX (Styled like index Who Can Join Us section) -->
  <section class="partner-sec" id="culture">
    <div class="wrap">
      <div class="partner-head text-center">
        <span class="eyebrow rv" style="margin-bottom: 12px;">Life at YCX</span>
        <h2 class="sec-title rv" style="margin-bottom: 16px; font-family: 'Fraunces', serif;">What It's Actually Like Working Here</h2>
        <p class="sec-desc rv mx-auto" style="margin-bottom: 0; line-height: 1.6; max-width: 600px;">We create an environment where ideas are valued, people support one another, and every contribution helps shape a stronger community.</p>
      </div>
      <div class="partner-grid mt-5">
        <div class="p-card rv">
<img src="{{ asset('images/media/career/Learn Everyday.jpeg') }}" alt="Learn Everyday">
          <div class="p-card-ov">
            <div class="p-name">Learn Every Day</div>
            <div class="p-desc">Expand your knowledge by working on real projects and exploring new ideas alongside passionate teammates.</div>
          </div>
        </div>
        <div class="p-card rv">
<img src="{{ asset('images/media/career/Collaborate with Purpose.jpeg') }}" alt="Collaborate with Purpose">
          <div class="p-card-ov">
            <div class="p-name">Collaborate with Purpose</div>
            <div class="p-desc">Work with people who value teamwork, open communication, and shared success.</div>
          </div>
        </div>
        <div class="p-card rv">
<img src="{{ asset('images/media/career/Share Your Ideas.jpeg') }}" alt="Share Your Ideas">
          <div class="p-card-ov">
            <div class="p-name">Share Your Ideas</div>
            <div class="p-desc">Bring fresh perspectives to the table and help shape experiences that inspire our community.</div>
          </div>
        </div>
        <div class="p-card rv">
<img src="{{ asset('images/media/career/Take on New Challenges.jpeg') }}" alt="Take on New Challenges">
          <div class="p-card-ov">
            <div class="p-name">Take on New Challenges</div>
            <div class="p-desc">Build confidence by solving real problems, developing new skills, and growing through hands-on experience.</div>
          </div>
        </div>
        <div class="p-card rv">
<img src="{{ asset('images/media/career/Celebrate Together.jpeg') }}" alt="Celebrate Together">          <div class="p-card-ov">
            <div class="p-name">Celebrate Together</div>
            <div class="p-desc">From project milestones to community achievements, we celebrate every success as one team.</div>
          </div>
        </div>
        <div class="p-arrow">↗</div>
      </div>
    </div>
  </section>

  <!-- PERKS & BENEFITS -->
  <section class="py-5" id="perks">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Perks & Benefits</span>
        <h2>Why You'll Love Working Here</h2>
        <p>We believe great work happens when people feel supported, inspired, and empowered to grow. That's why we offer benefits that encourage learning, collaboration, well-being, and career development.</p>
      </div>
      <div class="perks-table">
        <div class="perk-row">
          <span class="pn">01</span>
          <h4>Continuous Learning</h4>
          <p>Access opportunities to build new skills through real-world experiences and ongoing learning.</p>
        </div>
        <div class="perk-row">
          <span class="pn">02</span>
          <h4>Flexible Work Culture</h4>
          <p>Work in an environment built on trust, responsibility, and flexibility.</p>
        </div>
        <div class="perk-row">
          <span class="pn">03</span>
          <h4>Professional Development</h4>
          <p>Take on meaningful opportunities that help you strengthen your skills and advance your career.</p>
        </div>
        <div class="perk-row">
          <span class="pn">04</span>
          <h4>Collaborative Team</h4>
          <p>Be part of a supportive team that values respect, creativity, and shared success.</p>
        </div>
        <div class="perk-row">
          <span class="pn">05</span>
          <h4>Recognition & Rewards</h4>
          <p>We celebrate your contributions and recognize the impact you make.</p>
        </div>
        <div class="perk-row">
          <span class="pn">06</span>
          <h4>Networking Opportunities</h4>
          <p>Connect with creators, entrepreneurs, professionals, and industry experts through our growing community.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- PROCESS / HIRING PROCESS (Horizontal Timeline & Badges) -->
  <section id="process">
    <div class="wrap">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Your Journey Starts Here</span>
        <h2>A Simple & Transparent Hiring Process</h2>
        <p>Our hiring process is designed to help us get to know you beyond your resume. We value passion, curiosity, and a willingness to learn as much as experience.</p>
      </div>
      <div class="timeline">
        <div class="t-step">
          <span class="tn">Step 01</span>
          <h3>Apply</h3>
          <p>Submit your application and tell us about your skills, experience, and interests.</p>
        </div>
        <div class="t-step">
          <span class="tn">Step 02</span>
          <h3>Profile Review</h3>
          <p>Our team reviews your application to understand your background and potential.</p>
        </div>
        <div class="t-step">
          <span class="tn">Step 03</span>
          <h3>Interview</h3>
          <p>Meet with our team to discuss your experience, aspirations, and how you can contribute to YCX.</p>
        </div>
        <div class="t-step">
          <span class="tn">Step 04</span>
          <h3>Skill Assessment</h3>
          <p>For selected roles, you may complete a practical task that reflects the responsibilities of the position.</p>
        </div>
        <div class="t-step">
          <span class="tn">Step 05</span>
          <h3>Welcome to YCX</h3>
          <p>Once selected, we'll guide you through onboarding and help you begin your journey with Young Chanakya X.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER (Using Internship CTA Class & Style) -->
  <section id="cta-banner" class="career-cta-bg">
    <div class="wrap" style="text-align: center; max-width: 800px; margin: 0 auto; padding: 60px 20px;">
      <span class="kicker">Don't See The Right Role?</span>
      <h2 style="font-family: 'Fraunces', serif; font-weight: 600; font-size: clamp(28px, 3.6vw, 42px); color: var(--ink); letter-spacing: -1px; line-height: 1.16; margin-bottom: 16px;">
        We're Always Meeting People Worth Keeping in Mind
      </h2>
      <p style="font-size: 15.5px; color: var(--text-soft); line-height: 1.65; margin-bottom: 28px; max-width: 600px; margin-left: auto; margin-right: auto;">
        Even if there isn't a role that matches your skills today, we'd still love to hear from you. Share your profile, and we'll reach out when a suitable opportunity becomes available.
      </p>
      <a href="mailto:youngchanakya.x@gmail.com?subject=General Career Application - Young Chanakya X" class="btn-orange" id="ctaApplyBtn" style="text-decoration: none;">
        Tell Us About Yourself
      </a>
    </div>
  </section>

  <!-- FAQ SECTION (10 FAQs using Internship UI design) -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions & Answers</span>
        <h2 class="sec-title">Frequently Asked Questions</h2>
        <p class="sec-desc" style="font-size: 16px; color: var(--text-soft); margin-top: 12px; line-height: 1.6;">Find answers to common questions about working at Young Chanakya X, our culture, and application process.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>What is the hiring process like at Young Chanakya X?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Our process typically includes application review, an introductory conversation, a role-specific skill or task assessment, and a final alignment discussion with the team.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Are career opportunities at YCX remote or on-site?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We offer remote, hybrid, and on-site roles depending on the nature of the position and team requirements. Details are specified on each job listing.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I apply for multiple open positions?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, you may apply for more than one position if your experience aligns. We recommend highlighting your primary area of expertise in your application.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What qualities does YCX look for in candidates?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We look for high ownership, initiative, adaptability, curiosity, strong execution capabilities, and a passion for creating impactful work.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>How long does it take to get a response after applying?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Our talent team reviews applications on a rolling basis. You will typically receive an update within 1 to 2 weeks after submitting your application.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>Does YCX offer career growth and learning opportunities?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Absolutely. We encourage continuous learning, cross-functional collaboration, leadership growth, and ownership of key initiatives from day one.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What benefits and work culture can I expect?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We foster a collaborative, fast-paced environment with flexible work arrangements, mentorship, performance recognition, and meaningful project ownership.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Are there entry-level or junior positions available?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes, we welcome emerging talent across technical, creative, community, and business functions alongside experienced professionals.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What happens if there are no open roles matching my profile?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You can submit your details via our general interest form above. Our team regularly reaches out to candidate talent pools as new opportunities open up.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who can I contact for questions regarding my application status?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You can reach out directly to our hiring team at youngchanakya.x@gmail.com with your application name and role details.</p></div>
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
    document.querySelectorAll('.career-body .faq-item').forEach(item => {
      const q = item.querySelector('.faq-q');
      if (q) {
        q.addEventListener('click', () => {
          const isOpen = item.classList.contains('open');
          document.querySelectorAll('.career-body .faq-item').forEach(i => i.classList.remove('open'));
          if (!isOpen) {
            item.classList.add('open');
          }
        });
      }
    });
  });
</script>
@endpush
