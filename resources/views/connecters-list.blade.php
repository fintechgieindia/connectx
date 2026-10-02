@php
/**
 * Connecters Directory Page SEO Data
 */
$seo = [
    'title'       => 'Connectors Directory | Young Chanakya X',
    'description' => 'Explore the Young Chanakya X Connectors Directory to discover professionals, founders, creators, mentors, educators, and community members across diverse industries.',
    'keywords'    => 'connectors directory, YCX connectors, business directory, mentors, creators, founders, entrepreneurs, professionals, community directory, Young Chanakya X',
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
    "@type": "CollectionPage",
    "@id": "https://connectx.youngchanakya.com/connectors#webpage",
    "url": "https://connectx.youngchanakya.com/connectors",
    "name": "Connectors Directory | Young Chanakya X",
    "description": "Explore the Young Chanakya X Connectors Directory to discover professionals, founders, creators, mentors, educators, and community members across diverse industries.",
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
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<style>
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #2c323f !important;
        border: 1px solid rgba(255, 210, 177, 0.2) !important;
        color: #ffffff !important;
    }
    .iti__search-input {
        background-color: #1e222b !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    .iti__country {
        padding: 10px 12px !important;
    }
    .iti__country:hover, .iti__country.iti__highlight {
        background-color: rgba(255, 210, 177, 0.1) !important;
    }
    .iti__selected-dial-code {
        color: #ffffff !important;
        margin-left: 6px;
    }
    .iti__arrow {
        border-top-color: #ffffff !important;
    }
    .iti__arrow--up {
        border-bottom-color: #ffffff !important;
    }
</style>
@endpush

@section('content')

<style>
    /* CONNECTORS AUTHORITY DESIGN SYSTEM */
    .authority-hero-section {
        min-height: 80vh;
        background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.7) 0%, #090d16 100%),
            url('{{ asset("images/media/connecter/connecter-list-herobanner.webp") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .trust-headline {
        font-size: clamp(36px, 5vw, 64px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
        background: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Trust Metric Counters Block */
    .trust-badge-pill {
        background: rgba(255, 210, 177, 0.1);
        border: 1px solid rgba(255, 210, 177, 0.2);
        color: #ffd2b1;
        padding: 6px 16px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .trust-metric-box {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 24px;
        transition: transform 0.3s ease;
    }

    .trust-metric-box:hover {
        transform: translateY(-4px);
        border-color: rgba(255, 210, 177, 0.3);
    }

    .sticky-sidebar-menu {
        position: sticky;
        top: 40px;
        z-index: 10;
    }

    /* ==========================================
       CONNECTORS LIST — MOBILE RESPONSIVE
       Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
       ========================================== */

    /* ---- Authority Hero Section ---- */
    @media (max-width: 991px) {
        .authority-hero-section {
            min-height: 70vh;
            background-attachment: scroll;
        }
        .authority-hero-section .container {
            padding-top: 120px;
            padding-bottom: 60px;
        }
        .trust-headline {
            font-size: clamp(30px, 5vw, 48px);
            letter-spacing: -1.5px;
        }
        .authority-hero-section .col-xl-5 {
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
        .authority-hero-section {
            min-height: 60vh;
        }
        .authority-hero-section .container {
            padding-top: 100px;
            padding-bottom: 50px;
        }
        .trust-headline {
            font-size: clamp(26px, 7vw, 36px);
            letter-spacing: -1px;
            line-height: 1.15;
        }
        .authority-hero-section p.fs-5 {
            font-size: 15px !important;
        }
        .trust-metric-box {
            padding: 18px;
        }
        .trust-metric-box h4 {
            font-size: 1.8rem;
        }
        .trust-badge-pill {
            font-size: 0.7rem;
            padding: 5px 12px;
        }
    }

    @media (max-width: 480px) {
        .authority-hero-section {
            min-height: auto;
        }
        .authority-hero-section .container {
            padding-top: 90px;
            padding-bottom: 40px;
        }
        .trust-headline {
            font-size: 26px;
            letter-spacing: -0.5px;
        }
        .authority-hero-section .d-flex.flex-wrap {
            flex-direction: column;
            gap: 8px;
        }
    }

    /* ---- Sidebar + Content Layout ---- */
    @media (max-width: 991px) {
        .showcase-content-wrapper .col-lg-4 {
            /* Show sidebar as horizontal scrollable nav on tablet */
            width: 100% !important;
            max-width: 100% !important;
        }
        .sticky-sidebar-menu {
            position: static !important;
            top: auto !important;
        }
        #v-pills-tab {
            flex-direction: row !important;
            overflow-x: auto;
            gap: 8px;
            padding-bottom: 12px;
            flex-wrap: nowrap !important;
        }
        
        /* Modern, minimal green scrollbar for mobile tabs */
        #v-pills-tab::-webkit-scrollbar {
            height: 4px;
        }
        #v-pills-tab::-webkit-scrollbar-track {
            background: rgba(12, 58, 48, 0.05);
            border-radius: 4px;
        }
        #v-pills-tab::-webkit-scrollbar-thumb {
            background: rgba(12, 58, 48, 0.4);
            border-radius: 4px;
        }
        #v-pills-tab::-webkit-scrollbar-thumb:hover {
            background: rgba(12, 58, 48, 0.7);
        }
        .sidebar-anchor-link {
            white-space: nowrap;
            padding: 12px 18px !important;
            font-size: 0.78rem !important;
        }
        .sidebar-anchor-link.active {
            padding-left: 18px !important;
        }
    }

    @media (max-width: 767px) {
        .showcase-content-wrapper.py-5 {
            padding-top: 25px !important;
            padding-bottom: 25px !important;
        }
        .showcase-content-wrapper .container.py-5 {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }
        .network-cluster-card {
            padding: 20px 16px !important;
            border-radius: 20px !important;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05) !important;
            border: 1px solid rgba(12, 58, 48, 0.08) !important;
        }
        .network-cluster-card .d-flex.align-items-start {
            gap: 12px !important;
            margin-bottom: 16px !important;
        }
        .network-cluster-card h2.h4 {
            font-size: 1.1rem !important;
            line-height: 1.3 !important;
        }
        .network-cluster-card p.text-muted {
            font-size: 0.82rem !important;
            line-height: 1.4 !important;
        }
        .panel-hero-image {
            height: 160px !important;
            border-radius: 14px !important;
            margin-bottom: 16px !important;
        }
        .connector-node-pill {
            padding: 8px 14px !important;
            font-size: 0.8rem !important;
            border-radius: 50px !important;
        }
        .cluster-title-icon {
            width: 42px !important;
            height: 42px !important;
            min-width: 42px !important;
            font-size: 1.15rem !important;
            border-radius: 12px !important;
            flex-shrink: 0 !important;
        }
    }

    @media (max-width: 480px) {
        .network-cluster-card {
            padding: 16px 12px !important;
            border-radius: 16px !important;
        }
        .panel-hero-image {
            height: 140px !important;
            border-radius: 12px !important;
            margin-bottom: 14px !important;
        }
        .network-cluster-card .d-flex.align-items-start {
            gap: 10px !important;
            margin-bottom: 14px !important;
        }
        .cluster-title-icon {
            width: 38px !important;
            height: 38px !important;
            min-width: 38px !important;
            font-size: 1rem !important;
            border-radius: 10px !important;
            flex-shrink: 0 !important;
        }
        .connector-node-pill {
            padding: 7px 12px !important;
            font-size: 0.76rem !important;
        }
        .sidebar-anchor-link {
            padding: 10px 14px !important;
            font-size: 0.72rem !important;
        }
        .network-cluster-card h2.h4 {
            font-size: 1rem !important;
        }
    }
</style>


<div class="authority-hero-section d-flex align-items-center position-relative">
    <div class="container pt-150 pb-100">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">

                <div class="trust-badge-pill mb-4">
                    <i class="bi bi-shield-check-fill"></i> Institutional Ecosystem Directory
                </div>

                <h1 class="trust-headline mb-4">The Verified Nexus of Leadership</h1>
                <p class="text-white fs-5 mb-4" style="max-width: 600px; line-height: 1.6;">
                    Young Chanakya X orchestrates premium structural access to vetted visionaries, enterprise owners, and specialized policy framework architects globally.
                </p>

                <ul class="style-none mt-4 text-white" style="list-style: none; padding: 0;">
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Strategic Entrepreneurial Guidance & Growth Support
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Networking with Industry Experts & Global Leaders
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 0.95rem; line-height: 1.4;">
                        <span class="d-inline-flex align-items-center justify-content-center rounded-circle me-3" style="width: 24px; height: 24px; background-color: #ffd2b1; color: #090d16; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.15);">
                            <i class="bi bi-check-lg" style="font-size: 0.8rem; -webkit-text-stroke: 1px;"></i>
                        </span>
                        Access to attend premium startup & leadership events
                    </li>
                </ul>

            </div>

            <div class="col-lg-6">
                <div class="trust-metric-box">
                    <h4 class="text-white h5 mb-4" style="color: #ffd2b1 !important; border-bottom: 1px solid rgba(255, 210, 177, 0.15); padding-bottom: 15px;">
                        <i class="bi bi-person-lines-fill me-2"></i> Join the Directory
                    </h4>


                    @if (session('error') || $errors->any())
                        <div class="alert alert-danger mb-4" style="font-weight: 500;">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> 
                            @if (session('error'))
                                {{ session('error') }}
                            @else
                                Please correct the errors in the form below.
                            @endif
                        </div>
                    @endif

                    <form action="{{ route('connecters.apply') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="cx-label">Full Name *</label>
                                <input type="text" class="form-control cx-input" name="full_name" value="{{ old('full_name') }}" placeholder="E.g. John Doe" required>
                                @error('full_name')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="cx-label">Phone Number *</label>
                                <input type="tel" class="form-control cx-input" name="phone" value="{{ old('phone') }}" placeholder="E.g. +91 98765 43210" required>
                                @error('phone')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="cx-label">Email ID *</label>
                                <input type="email" class="form-control cx-input" name="email" value="{{ old('email') }}" placeholder="john@company.com" required>
                                @error('email')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="cx-label">Social Media URL *</label>
                                <input type="url" class="form-control cx-input" name="linkedin" value="{{ old('linkedin') }}" placeholder="https://linkedin.com/in/..." required>
                                @error('linkedin')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="cx-label">Current Designation *</label>
                                <input type="text" class="form-control cx-input" name="designation" value="{{ old('designation') }}" placeholder="E.g. Founder & CEO" required>
                                @error('designation')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="cx-label">Field of Expertise *</label>
                                <input type="text" class="form-control cx-input" name="expertise" value="{{ old('expertise') }}" placeholder="E.g. Tech, Finance, Marketing" required>
                                @error('expertise')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="cx-label">Describe Yourself *</label>
                                <textarea class="form-control cx-input" name="bio" rows="3" placeholder="Briefly describe your market impact, achievements, or ecosystem contribution..." required>{{ old('bio') }}</textarea>
                                @error('bio')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn w-100 py-3 fw-bold text-uppercase application-submit-btn" style="letter-spacing: 1px; font-size: 0.85rem;">
                                    Submit Application <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
            </div>
        </div>



        </div>
    </div>
</div>


<!-- second section -->
<div class="showcase-content-wrapper py-5" style="background-color: #f8f6f2;">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-4">
                <div class="sticky-sidebar-menu">
                    <div class="mb-4 ps-3">
                        <span class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem; letter-spacing: 1.5px;">Ecosystem Verticals</span>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="sidebar-anchor-link active text-start border-0 w-100" id="v-pills-biz-tab" data-bs-toggle="pill" data-bs-target="#v-pills-biz" type="button" role="tab" aria-controls="v-pills-biz" aria-selected="true">
                            Business & Growth <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-tech-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tech" type="button" role="tab" aria-controls="v-pills-tech" aria-selected="false">
                            Innovation & Tech <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-fin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fin" type="button" role="tab" aria-controls="v-pills-fin" aria-selected="false">
                            Finance & Policy <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-creative-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creative" type="button" role="tab" aria-controls="v-pills-creative" aria-selected="false">
                            Creative & Media <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="sidebar-anchor-link text-start border-0 w-100" id="v-pills-impact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-impact" type="button" role="tab" aria-controls="v-pills-impact" aria-selected="false">
                            Social & Academic <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-biz" role="tabpanel" aria-labelledby="v-pills-biz-tab">
                        <div class="network-cluster-card">

<div class="panel-hero-image mb-4 overflow-hidden"
     style="height: 200px;
            background:
            linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.5)),
            url('{{ asset('images/media/connecter/img-1.webp') }}') center/cover;">
</div>
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-building-gear"></i></div>
                                <div>
                                    <!-- <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment</span> -->
                                    <h3 class="m-0 text-dark" style="font-weight: 400; margin-bottom: 6px !important;">Business & Entrepreneurship</h3>
                                    <p class="text-muted small m-0">Scale engines, industrial innovators, enterprise owners, and market strategists managing global expansions.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                @php $biz = ['Startup Founders', 'Women Entrepreneurs', 'Business Strategists', 'Family Business Owners', 'MSME Leaders', 'Franchisors & Consultants', 'D2C Brand Founders', 'Retail & E-commerce Leaders', 'Export-Import Specialists', 'Industrialists', 'Manufacturing Innovators', 'FMCG Leaders', 'Corporate CXOs', 'Billionaires', 'Business Coaches', 'Entrepreneurs in Residence']; @endphp
                                @foreach($biz as $index => $item)
                                <a href="javascript:void(0)" class="connector-node-pill">{{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab">
                        <div class="network-cluster-card">


                        <div class="panel-hero-image mb-4 overflow-hidden"
     style="height: 200px;
            background:
            linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.5)),
            url('{{ asset('images/media/connecter/img-2.webp') }}') center/cover;">
</div>
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-cpu"></i></div>
                                <div>
                                    <!-- <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment</span> -->
                                    <h3 class="m-0 text-dark" style="font-weight: 400; margin-bottom: 6px !important;">Innovation & Technology</h3>
                                    <p class="text-muted small m-0">Architects designing structural software architectures, AI data systems, and complex engineering frameworks.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                @php $tech = ['Technology Innovators', 'AI & Data Science Experts', 'Cybersecurity Specialists', 'Blockchain & Web3 Founders', 'FinTech Founders', 'SaaS Entrepreneurs', 'HealthTech Innovators', 'EdTech Founders', 'AgriTech Leaders', 'DeepTech Researchers', 'Product Managers', 'Robotics & Automation Experts', 'IoT Innovators']; @endphp
                                @foreach($tech as $index => $item)
                                <a href="javascript:void(0)" class="connector-node-pill">{{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-fin" role="tabpanel" aria-labelledby="v-pills-fin-tab">
                        <div class="network-cluster-card">


                      <div class="panel-hero-image mb-4 overflow-hidden"
     style="height: 200px;
            background:
            linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.5)),
            url('{{ asset('images/media/connecter/img-3.webp') }}') center/cover;">
</div>
              
              
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                <div>
                                    <!-- <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 03</span> -->
                                    <h3 class="m-0 text-dark" style="font-weight: 400; margin-bottom: 6px !important;">Finance, Investment & Policy</h3>
                                    <p class="text-muted small m-0">Venture vehicles, allocation managers, structural legal compliance advisors, and system regulators.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                @php $fin = ['Investors & Venture Capitalists', 'Angel Investors', 'Wealth Managers', 'Chartered Accountants', 'Taxation Experts', 'Stock Market Architects', 'Banking Leaders', 'Corporate Lawyers', 'Policy Makers & Bureaucrats', 'Government Advisors', 'Legal & Compliance Specialists']; @endphp
                                @foreach($fin as $index => $item)
                                <a href="javascript:void(0)" class="connector-node-pill">{{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-creative" role="tabpanel" aria-labelledby="v-pills-creative-tab">
                        <div class="network-cluster-card">


                   <div class="panel-hero-image mb-4 overflow-hidden"
     style="height: 200px;
            background:
            linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.5)),
            url('{{ asset('images/media/connecter/img-4.webp') }}') center/cover;">
</div>
         

                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-bezier2"></i></div>
                                <div>
                                    <!-- <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 04</span> -->
                                    <h3 class="m-0 text-dark" style="font-weight: 400; margin-bottom: 6px !important;">Creative, Media & Marketing</h3>
                                    <p class="text-muted small m-0">Architects of message distribution pipelines, enterprise brand strategists, and functional design thinkers.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                @php $media = ['Marketing Gurus', 'Branding Experts', 'PR & Communications Specialists', 'Content Creators & Influencers', 'Authors & Business Writers', 'Design Thinkers & UX Experts', 'Advertising Leaders', 'Podcast Hosts & Storytellers', 'Trend Analysts & Futurists', 'Community Builders']; @endphp
                                @foreach($media as $index => $item)
                                <a href="javascript:void(0)" class="connector-node-pill">{{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-impact" role="tabpanel" aria-labelledby="v-pills-impact-tab">
                        <div class="network-cluster-card">

                 <div class="panel-hero-image mb-4 overflow-hidden"
     style="height: 200px;
            background:
            linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.5)),
            url('{{ asset('images/media/connecter/img-5.webp') }}') center/cover;">
</div>
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="cluster-title-icon"><i class="bi bi-globe"></i></div>
                                <div>
                                    <!-- <span class="text-uppercase fw-bold text-muted small tracking-wide">Segment 05</span> -->
                                    <h3 class="m-0 text-dark" style="font-weight: 400; margin-bottom: 6px !important;">Social Impact & Academic Research</h3>
                                    <p class="text-muted small m-0">Sustainability operators, research scholars, global academic authorities, and structural change mentors.</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                @php $social = ['Social Entrepreneurs', 'Sustainability Champions', 'Philanthropists', 'Impact Investors', 'Non-Profit Leaders', 'CSR Heads', 'Academic Experts & Educators', 'Professors & Scholars', 'Researchers & Innovators', 'Global Education Advisors']; @endphp
                                @foreach($social as $index => $item)
                                <a href="javascript:void(0)" class="connector-node-pill">{{ $item }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* STICKY CONFIGURATION WITH BOOTSTRAP TABS */
    .sticky-sidebar-menu {
        position: sticky;
        top: 100px;
        z-index: 10;
    }

    .sidebar-anchor-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 24px;
        color: #64748b;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border-radius: 14px;
        margin-bottom: 10px;
        background: #ffffff;
        border: 1px solid #e2e8f0 !important;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .sidebar-anchor-link:hover {
        background: #f8f6f2;
        color: #0c3a30;
        padding-left: 28px;
    }

    .sidebar-anchor-link.active {
        background: #0c3a30 !important;
        color: #ffd2b1 !important;
        border-color: #0c3a30 !important;
        padding-left: 32px;
        box-shadow: 0 10px 25px -5px rgba(12, 58, 48, 0.15);
    }

    /* Content Layout Elements */
    .network-cluster-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 32px;
        padding: 40px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    }

    .cluster-title-icon {
        width: 56px;
        height: 56px;
        background: linear-gradient(135deg, #ffffff 0%, #fff4ec 100%);
        color: #0c3a30;
        border: 1px solid rgba(255, 210, 177, 0.5);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .panel-hero-image {
        box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.4);
        background-blend-mode: multiply;
        transition: transform 0.6s ease;
        border-radius: 10px;
    }

    .network-cluster-card:hover .panel-hero-image {
        transform: scale(1.01);
    }

    /* Interactive List Badges */
    .connector-node-pill {
        background: linear-gradient(135deg, #ffffff 0%, #fff4ec 100%);
        border: 1px solid rgb(209 209 209 / 50%);
        border-radius: 100px;
        padding: 12px 22px;
        font-size: 0.88rem;
        font-weight: 600;
        color: #0c3a30;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
        cursor: pointer;
    }

    .connector-node-pill:hover,
    .connector-node-pill.active {
        transform: translateY(-3px);
        background: #0c3a30 !important;
        color: #ffd2b1 !important;
        border-color: #0c3a30 !important;
        box-shadow: 0 10px 20px -5px rgba(12, 58, 48, 0.25);
    }

    .node-index {
        font-size: 0.7rem;
        opacity: 0.5;
        background: rgba(0, 0, 0, 0.05);
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .connector-node-pill:hover .node-index {
        background: rgba(255, 255, 255, 0.15);
        opacity: 1;
    }

    /* Application Form Styles */
    .cx-input {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #ffffff;
        padding: 14px 18px;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .cx-input:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #ffd2b1;
        box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15);
        color: #ffffff;
    }
    .cx-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }
    .form-select.cx-input {
        background-color: rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.7);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 16px 12px;
        appearance: none;
        -webkit-appearance: none;
    }
    .form-select.cx-input option {
        background: #090d16;
        color: #ffffff;
    }
    .application-submit-btn {
        background: linear-gradient(135deg, #ffffff 0%, #ffd2b1 100%);
        color: #0c3a30;
        border: none;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    .application-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(255, 210, 177, 0.2);
        color: #0c3a30;
    }
    .cx-label {
        color: #ffd2b1;
        font-size: 0.8rem;
        letter-spacing: 1.5px;
        font-weight: 700;
        margin-bottom: 10px;
        display: block;
    }
    @media (max-width: 767px) {
        .application-section {
            padding-top: 60px !important;
            padding-bottom: 60px !important;
        }
        .application-section h2.trust-headline {
            font-size: 28px;
        }
    }
</style>

@if (session('success'))
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">Thank You for Connecting!</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    We've successfully received your details. We look forward to helping you build meaningful professional connections and explore new opportunities within the YCX community.
                </p>
                <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successModalElement = document.getElementById('successModal');
        if (successModalElement) {
            var myModal = new bootstrap.Modal(successModalElement);
            myModal.show();
        }
    });
</script>
@endpush
@endif

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector('input[name="phone"]');
        if (phoneInput) {
            var iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });

            // On submit, update phone input value with the full international number
            var form = phoneInput.closest('form');
            if (form) {
                form.addEventListener('submit', function() {
                    phoneInput.value = iti.getNumber();
                });
            }
        }

        // Connector node pills active state toggle
        var nodePills = document.querySelectorAll('.connector-node-pill');
        nodePills.forEach(function(pill) {
            pill.addEventListener('click', function(e) {
                e.preventDefault();
                pill.classList.toggle('active');
            });
        });
    });
</script>

@endsection
