@php
/**
 * Privacy Policy Page
 */
$seo = [
    'title'       => 'Privacy Policy | Young Chanakya X',
    'description' => 'Read the Young Chanakya X Privacy Policy to understand how we collect, use, store, and protect your personal information while using our platform and services.',
    'keywords'    => 'Young Chanakya X privacy policy, privacy policy, data protection, personal information, user privacy, data security, privacy practices, YCX privacy, website privacy, information policy',
    'image'       => 'https://connectx.youngchanakya.com/images/assets/seo-share.jpg',
    'type'        => 'website',
    'canonical'   => 'https://connectx.youngchanakya.com/privacy-policy',
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
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://connectx.youngchanakya.com"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Privacy Policy",
          "item": "https://connectx.youngchanakya.com/privacy-policy"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://connectx.youngchanakya.com/privacy-policy#webpage",
      "url": "https://connectx.youngchanakya.com/privacy-policy",
      "name": "Privacy Policy | Young Chanakya X",
      "description": "Read the Young Chanakya X Privacy Policy to understand how we collect, use, store, and protect your personal information.",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com"
      },
      "inLanguage": "en-IN"
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
      background: #0c3a30 !important;
  }
  .premium-hero-container {
      min-height: 50vh;
      background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.55) 0%, #090d16 100%), 
                        url('{{ asset("images/contact-banner-img.jpg") }}');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
  }
  .text-glow-headline {
      font-size: clamp(38px, 5.5vw, 64px);
      font-weight: 900;
      line-height: 1.2;
      padding-bottom: 15px;
      letter-spacing: -2px;
      background: linear-gradient(135deg, #ffffff 30%, #ffd2b1 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
  }
  .privacy-container {
      padding: 80px 0 100px;
      background: #ffffff; /* Plain white body background */
  }
  .privacy-content {
      margin: 0 auto;
      background: transparent;
      padding: 0; /* No card layout padding */
  }
  .privacy-content h2 {
      font-family: 'Fraunces', serif;
      font-size: 24px;
      font-weight: 600;
      color: var(--ink);
      margin-top: 40px;
      margin-bottom: 16px;
  }
  .privacy-content p {
      font-size: 15px;
      color: var(--text-soft);
      line-height: 1.8;
      margin-bottom: 20px;
  }
  .privacy-content ul {
      list-style: disc;
      padding-left: 20px;
      margin-bottom: 24px;
  }
  .privacy-content li {
      font-size: 15px;
      color: var(--text-soft);
      line-height: 1.8;
      margin-bottom: 8px;
  }
  .last-updated-badge {
      font-family: 'Space Mono', monospace;
      font-size: 12px;
      color: var(--peach-deep);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 20px;
      display: inline-block;
  }
  @media(max-width: 991px) {
      .premium-hero-container {
          min-height: 40vh;
          background-attachment: scroll;
      }
  }
  @media(max-width: 768px) {
      .privacy-container {
          padding: 50px 20px 70px;
      }
  }
</style>
@endpush

@section('content')
<!-- Hero Banner with Breadcrumbs -->
<div class="premium-hero-container d-flex align-items-center position-relative">
    <div class="container pt-150 pb-80">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-10">
                
                <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                    <li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                    <li class="text-white opacity-40">/</li>
                    <li class="text-white" style="color: #ffd2b1 !important;">Privacy Policy</li>
                </ul>

                <h1 class="text-glow-headline mb-4">Privacy Policy</h1>
                <p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
                    Learn how Young Chanakya X collects, uses, and protects your personal information.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Privacy Content body -->
<div class="container py-5">
  <div class="wrap">
    <article class="privacy-content">
      <span class="last-updated-badge">Last Updated: July 11, 2026</span>

      <p>Young Chanakya X ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, apply for directory listings, sponsorships, partnerships, speaker opportunities, or jobs/internships.</p>

      <h2>1. Information We Collect</h2>
      <p>We may collect information about you in a variety of ways. The information we may collect on the website includes:</p>
      <ul>
        <li><strong>Personal Data:</strong> Personally identifiable information, such as your name, email address, phone number, date of birth, educational background, professional details, and links to your social profiles (e.g., LinkedIn, portfolio), which you voluntarily provide to us when submitting forms.</li>
        <li><strong>Application Materials:</strong> Resumes, cover letters, portfolios, and emergency contact details submitted during job or internship applications.</li>
        <li><strong>Derivative Data:</strong> Information our servers automatically collect when you access the site, such as your IP address, browser type, operating system, access times, and the pages you have viewed directly before and after accessing the site.</li>
      </ul>

      <h2>2. Use of Your Information</h2>
      <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the website to:</p>
      <ul>
        <li>Process and evaluate applications for internships, jobs, directory listings, speaking roles, sponsorships, or partnerships.</li>
        <li>Send you administrative information, application updates, or marketing and promotional communications.</li>
        <li>Email you regarding your inquiries, contact requests, or RSVP confirmations.</li>
        <li>Deliver targeted advertising, newsletters, and other information regarding promotions and the site to you.</li>
        <li>Monitor and analyze usage and trends to improve your experience with the website.</li>
      </ul>

      <h2>3. Disclosure of Your Information</h2>
      <p>We do not sell, trade, or share your personal information with third parties for their promotional purposes. We may share information we have collected about you in certain situations, including:</p>
      <ul>
        <li><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others.</li>
        <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties that perform services for us or on our behalf, such as hosting, database management, and email delivery.</li>
      </ul>

      <h2>4. Security of Your Information</h2>
      <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>

      <h2>5. Contact Us</h2>
      <p>If you have questions or comments about this Privacy Policy, please contact us at:</p>
      <p style="font-weight: 700; color: var(--ink);">Email: youngchanakya.x@gmail.com</p>
    </article>
  </div>
</div>
@endsection
