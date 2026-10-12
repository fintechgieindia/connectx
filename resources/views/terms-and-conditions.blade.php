@php
/**
 * Terms and Conditions Page
 */
$seo = [
    'title'       => 'Terms & Conditions | Young Chanakya X',
    'description' => 'Review the Young Chanakya X Terms & Conditions to understand the rules, responsibilities, and guidelines for accessing and using our platform and services.',
    'keywords'    => 'Young Chanakya X terms, terms and conditions, website terms, user agreement, legal policy, platform guidelines, terms of service, YCX terms, website policies, user responsibilities',
    'image'       => 'https://connectx.youngchanakya.com/images/assets/seo-share.jpg',
    'type'        => 'website',
    'canonical'   => 'https://connectx.youngchanakya.com/terms-and-conditions',
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
          "name": "Terms and Conditions",
          "item": "https://connectx.youngchanakya.com/terms-and-conditions"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://connectx.youngchanakya.com/terms-and-conditions#webpage",
      "url": "https://connectx.youngchanakya.com/terms-and-conditions",
      "name": "Terms & Conditions | Young Chanakya X",
      "description": "Review the Young Chanakya X Terms & Conditions to understand the rules, responsibilities, and guidelines for accessing and using our platform and services.",
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
  .terms-container {
      padding: 80px 0 100px;
      background: #ffffff; /* Plain white body background */
  }
  .terms-content {
      margin: 0 auto;
      background: transparent;
      padding: 0;
  }
  .terms-content h2 {
      font-family: 'Fraunces', serif;
      font-size: 24px;
      font-weight: 600;
      color: var(--ink);
      margin-top: 40px;
      margin-bottom: 16px;
  }
  .terms-content p {
      font-size: 15px;
      color: var(--text-soft);
      line-height: 1.8;
      margin-bottom: 20px;
  }
  .terms-content ul {
      list-style: disc;
      padding-left: 20px;
      margin-bottom: 24px;
  }
  .terms-content li {
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
      .terms-container {
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
                    <li class="text-white" style="color: #ffd2b1 !important;">Terms & Conditions</li>
                </ul>

                <h1 class="text-glow-headline mb-4">Terms & Conditions</h1>
                <p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
                    Review the terms of service governing your relationship with Young Chanakya X.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Terms Content body -->
<div class="container py-5">
  <div class="wrap">
    <article class="terms-content">
      <span class="last-updated-badge">Last Updated: July 13, 2026</span>

      <p>Welcome to Young Chanakya X. By accessing or using our website, submitting applications, or participating in our programs, directory listings, sponsorships, partnerships, or speaking engagements, you agree to be bound by these Terms and Conditions. Please read them carefully.</p>

      <h2>1. Acceptance of Terms</h2>
      <p>By using this website, you certify that you have read and reviewed this Agreement and that you agree to comply with its terms. If you do not want to be bound by the terms of this Agreement, you are advised to leave the website accordingly. Young Chanakya X only grants use and access of this website, its products, and its services to those who have accepted its terms.</p>

      <h2>2. Intellectual Property</h2>
      <p>You agree that all materials, products, and services provided on this website are the property of Young Chanakya X, its affiliates, directors, officers, employees, agents, suppliers, or licensors including all copyrights, trade secrets, trademarks, patents, and other intellectual property. You also agree that you will not reproduce or redistribute the Young Chanakya X’s intellectual property in any way, including electronic, digital, or new trademark registrations.</p>
      <p>You grant Young Chanakya X a royalty-free and non-exclusive license to display, use, copy, transmit, and broadcast the content you upload and publish. For issues regarding intellectual property claims, you should contact the company in order to come to an agreement.</p>

      <h2>3. User Accounts & Submissions</h2>
      <p>As a user of this website, you may be asked to register with us or submit personal information. You are responsible for ensuring the accuracy of this information. When you submit applications for internships, directory listings, sponsorships, or speaking roles:</p>
      <ul>
        <li>You represent that all information provided is true, accurate, and complete.</li>
        <li>You acknowledge that submissions do not guarantee selection or approval for any program, directory listing, or sponsorship.</li>
        <li>We reserve the right to approve, reject, modify, or remove any directory listings or application details at our sole discretion.</li>
      </ul>

      <h2>4. Limitation on Liability</h2>
      <p>Young Chanakya X is not liable for any damages that may occur to you as a result of your misuse of our website. Young Chanakya X reserves the right to edit, modify, or change this Agreement at any time. We shall let our users know of these changes through website updates.</p>

      <h2>5. Governing Law</h2>
      <p>By visiting this website, you agree that the laws of India, without regard to principles of conflict laws, will govern these terms and conditions, or any dispute of any sort that might come between Young Chanakya X and you, or its business partners.</p>

      <h2>6. Contact Us</h2>
      <p>If you have any questions about these Terms & Conditions, please contact us at:</p>
      <p style="font-weight: 700; color: var(--ink);">Email: youngchanakya.x@gmail.com</p>
    </article>
  </div>
</div>
@endsection
