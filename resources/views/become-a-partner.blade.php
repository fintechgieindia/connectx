@php
/**
 * Become a Partner Page SEO Data
 */
$seo = [
    'title'       => 'Become a Partner | Young Chanakya X',
    'description' => 'Partner with Young Chanakya X to co-create events, knowledge initiatives, community programs, and strategic collaborations that drive meaningful impact.',
    'keywords'    => 'become a partner, YCX partnerships, community partnerships, brand collaboration, knowledge partnership, event partnership, media partnership, technology partner, ecosystem partnership, Young Chanakya X',
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
    "@type": "Service",
    "name": "Become a Partner | Young Chanakya X",
    "url": "https://connectx.youngchanakya.com/become-a-partner",
    "description": "Partner with Young Chanakya X to co-create events, knowledge initiatives, community programs, and strategic collaborations that drive meaningful impact.",
    "provider": {
        "@type": "Organization",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    },
    "serviceType": "Creator Ecosystem Partnership",
    "areaServed": {
        "@type": "Country",
        "name": "India"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Partnership Types",
        "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Content Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Brand Collaborations"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Media Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Community Partnerships"}},
            {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Event Partnerships"}}
        ]
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<style>
    .iti {
        width: 100%;
        display: block;
    }
    .iti__country-list {
        background-color: #ffffff !important;
        border: 1px solid #cccccc !important;
        color: #333333 !important;
    }
    .iti__search-input {
        background-color: #ffffff !important;
        color: #333333 !important;
        border: 1px solid #cccccc !important;
    }
    .iti__country {
        padding: 8px 10px !important;
    }
    .iti__country:hover, .iti__country.iti__highlight {
        background-color: #f1ede4 !important;
    }
    .iti__selected-dial-code {
        color: #333333 !important;
    }
</style>
@endpush

@section('content')

<style>
#hdr:not(.scrolled) .hamburger span {
    background: #0c3a30 !important;
}

.partner-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
}

.partner-form-box .form-control::placeholder {
    color: #888888 !important;
}

/* ==========================================
   BECOME A PARTNER — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Hero / Contact Section ---- */
@media (max-width: 991px) {
    .partner-contact-section {
        padding: 120px 0 70px;
    }
    .partner-content {
        text-align: center;
        padding-right: 0;
        margin-bottom: 36px;
    }
    .partner-tag {
        margin-left: auto;
        margin-right: auto;
    }
}

@media (max-width: 767px) {
    .partner-contact-section {
        padding: 100px 0 60px;
    }
    .partner-content h1 {
        font-size: 32px;
    }
    .partner-content p {
        font-size: 15px;
    }
    .partner-form-box {
        padding: 28px 20px;
    }
}

@media (max-width: 480px) {
    .partner-contact-section {
        padding: 90px 0 40px;
    }
    .partner-content h1 {
        font-size: 28px;
    }
    .partner-form-box {
        padding: 22px 16px;
    }
    .partner-submit-btn {
        font-size: 15px;
        height: 52px;
    }
}

/* ---- Who We Work With (How Works) Section ---- */
@media (max-width: 991px) {
    .how-work-main-heading {
        font-size: 2rem !important;
    }
    .how-works-section-wrapper {
        padding-top: 60px;
    }
    .mb-70 {
        margin-bottom: 40px;
    }
}

@media (max-width: 767px) {
    .how-work-main-heading {
        font-size: 1.7rem !important;
    }
    .how-works-section-card {
        padding: 2rem 1.25rem !important;
    }
}

@media (max-width: 480px) {
    .how-work-main-heading {
        font-size: 1.5rem !important;
    }
    .how-works-h4 {
        font-size: 1.1rem !important;
    }
}

/* ---- Why Partner Section (text-feature-five) ---- */
@media (max-width: 991px) {
    .text-feature-five {
        margin-top: 80px !important;
    }
    .connectx-partner-bg .text-wrapper {
        padding-top: 40px !important;
        padding-bottom: 40px !important;
    }
    .connectx-partner-bg .media-wrapper {
        min-height: 280px;
    }
    .connectx-partner-list li {
        font-size: 15px;
    }
}

@media (max-width: 767px) {
    .text-feature-five {
        margin-top: 60px !important;
    }
    .connectx-partner-bg .col-lg-6.order-lg-first {
        order: 2 !important;
    }
    .connectx-partner-bg .col-lg-6.order-lg-last {
        order: 1 !important;
    }
    .connectx-partner-bg .text-wrapper {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
    .title-one h2.text-dark {
        font-size: 26px;
    }
}

@media (max-width: 480px) {
    .title-one h2.text-dark {
        font-size: 22px;
    }
    .connectx-partner-list li {
        font-size: 14px;
    }
}

/* ---- Partnership Opportunities Cards ---- */
@media (max-width: 991px) {
    .connectx-partnership-section.pt-120 {
        padding-top: 70px;
    }
    .connectx-partnership-section.pb-120 {
        padding-bottom: 70px;
    }
    .connectx-card {
        padding: 30px !important;
    }
}

@media (max-width: 767px) {
    .connectx-card {
        padding: 24px 20px !important;
    }
    .connectx-partnership-section .main-title {
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .connectx-card {
        padding: 20px 16px !important;
    }
    .connectx-card h4 {
        font-size: 18px;
    }
    .connectx-partnership-section .main-title {
        font-size: 24px;
    }
}

/* ---- Expanding Across Industries Section ---- */
@media (max-width: 991px) {
    .connectx-expand-section {
        padding-top: 70px;
        padding-bottom: 70px;
    }
    .connectx-expand-section .col-lg-6.order-lg-last {
        order: 1;
    }
    .connectx-expand-section .col-lg-6.col-md-8 {
        order: 2;
    }
    .connectx-expand-section .ps-xl-5 {
        padding-left: 0 !important;
    }
    .connectx-expand-section .title-three h2 {
        font-size: 28px;
    }
    .connectx-expand-section .media-wrapper {
        margin-top: 30px;
    }
}

@media (max-width: 767px) {
    .connectx-expand-section {
        padding: 0 16px;
    }
    .connectx-expand-section .title-three h2 {
        font-size: 24px;
    }
    .connectx-expand-section .text-lg {
        font-size: 15px;
    }
    .connectx-expand-section .media-wrapper img {
        border-radius: 16px;
        width: 100%;
        height: auto;
    }
}

@media (max-width: 480px) {
    .connectx-expand-section .title-three h2 {
        font-size: 21px;
    }
    .connectx-expand-points li {
        font-size: 14px !important;
        padding-left: 42px !important;
    }
}

/* ---- Checklist Style (Speaker page matching layout) ---- */
.checklist-style {
    padding: 0;
    margin: 25px 0 0 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
    list-style: none;
}

/* ---- Expanding Section Professional Adjustments ---- */
.connectx-expand-pro-img {
    border-radius: 20px;
    box-shadow: 0 24px 50px rgba(12, 58, 48, 0.08);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.connectx-expand-pro-img:hover {
    transform: translateY(-5px);
    box-shadow: 0 32px 60px rgba(12, 58, 48, 0.12);
}

.connectx-expand-section .title-three h2 {
    font-size: clamp(32px, 3.5vw, 44px);
    font-weight: 800;
    color: #0c3a30;
    line-height: 1.2;
    letter-spacing: -1px;
}

.connectx-expand-section .text-lg {
    font-size: 17px;
    color: #54615a;
    line-height: 1.7;
}

/* Override the list sizes for a more sleek look */
.connectx-expand-points li {
    font-size: 16px !important;
    line-height: 1.6em !important;
    padding-left: 42px !important;
    margin-bottom: 14px !important;
    color: #10221c !important;
    font-weight: 500;
}

.connectx-expand-points li:before {
    width: 26px !important;
    height: 26px !important;
    font-size: 11px !important;
    top: 0 !important;
}

.checklist-style li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 500;
    color: #10221c;
}

.checklist-style .check-icon {
    width: 24px;
    height: 24px;
    background: #0c3a30;
    color: #ffffff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
    flex-shrink: 0;
}

@media (max-width: 991px) {
    .checklist-style {
        display: inline-flex;
        text-align: left;
        align-items: flex-start;
        margin: 25px auto 0 auto;
    }
}

@media (max-width: 767px) {
    .checklist-style li {
        font-size: 15px;
    }
}

/* ---- Technology Partner Section ---- */
.tech-partner-section {
    padding: 80px 0;
    position: relative;
    background: linear-gradient(135deg, #fff2e6 0%, #ffffff 50%, #e8f5e9 100%);
    overflow: hidden;
}
.tech-partner-card {
    position: relative;
    background: linear-gradient(135deg, #0c3a30 0%, #082821 60%, #090d16 100%);
    border: 1px solid rgba(255, 210, 177, 0.25);
    border-radius: 32px;
    padding: 60px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(12, 58, 48, 0.2);
}
.tech-partner-card .tp-glow-1 {
    position: absolute;
    top: -40%;
    left: -10%;
    width: 450px;
    height: 450px;
    background: radial-gradient(circle, rgba(255, 210, 177, 0.18) 0%, rgba(0, 0, 0, 0) 70%);
    pointer-events: none;
}
.tech-partner-card .tp-glow-2 {
    position: absolute;
    bottom: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(12, 58, 48, 0.5) 0%, rgba(0, 0, 0, 0) 70%);
    pointer-events: none;
}
.tech-partner-inner {
    display: grid;
    grid-template-columns: 1.25fr 0.75fr;
    align-items: center;
    gap: 50px;
    position: relative;
    z-index: 2;
}
.tech-partner-inner .tp-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 210, 177, 0.12);
    border: 1px solid rgba(255, 210, 177, 0.25);
    color: #ffd2b1;
    padding: 7px 18px;
    border-radius: 50px;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 22px;
    backdrop-filter: blur(8px);
}
.tech-partner-inner .tp-content h2 {
    font-size: clamp(34px, 4vw, 48px);
    font-weight: 900;
    color: #ffffff;
    margin: 0 0 16px;
    line-height: 1.15;
    letter-spacing: -0.8px;
}
.tech-partner-inner .tp-content h2 .tp-highlight {
    background: linear-gradient(135deg, #ffffff 30%, #ffd2b1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.tech-partner-inner .tp-content p {
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.82);
    margin-bottom: 28px;
    max-width: 600px;
}
.tech-partner-inner .tp-feature-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.tech-partner-inner .tp-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.82rem;
    font-weight: 700;
    color: #ffffff;
    background: rgba(255, 255, 255, 0.08);
    padding: 8px 16px;
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.14);
    backdrop-filter: blur(6px);
    transition: all 0.3s ease;
}
.tech-partner-inner .tp-pill i {
    color: #ffd2b1;
}
.tech-partner-inner .tp-pill:hover {
    background: rgba(255, 210, 177, 0.2);
    border-color: rgba(255, 210, 177, 0.4);
    transform: translateY(-2px);
}
.tech-partner-inner .tp-logo-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.tech-partner-inner .tp-logo-card {
    width: 100%;
    max-width: 340px;
    background: #ffffff;
    border-radius: 24px;
    padding: 24px 28px;
    box-shadow: 0 20px 45px rgba(12, 58, 48, 0.08);
    border: 1px solid rgba(12, 58, 48, 0.06);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    text-decoration: none;
}
.tech-partner-inner .tp-card-header {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    margin-bottom: 12px;
}
.tech-partner-inner .tp-verified-tag {
    font-size: 0.72rem;
    font-weight: 800;
    color: #0c3a30;
    background: rgba(12, 58, 48, 0.08);
    padding: 4px 12px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    letter-spacing: 0.5px;
}
.tech-partner-inner .tp-logo-wrapper {
    padding: 16px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.tech-partner-inner .tp-logo-wrapper img {
    max-height: 80px;
    width: auto;
    transition: transform 0.4s ease;
}
.tech-partner-inner .tp-card-footer {
    width: 100%;
    margin-top: 14px;
    padding-top: 12px;
    border-top: 1px solid rgba(12, 58, 48, 0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.82rem;
    font-weight: 700;
    color: #0c3a30;
    transition: color 0.3s ease;
}
.tech-partner-inner .tp-card-footer i {
    background: #ffca95;
    color: #0c3a30;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}
.tech-partner-inner .tp-logo-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 30px 60px rgba(12, 58, 48, 0.12), 0 10px 25px rgba(0, 0, 0, 0.08);
}
.tech-partner-inner .tp-logo-card:hover .tp-logo-wrapper img {
    transform: scale(1.05);
}
@media (max-width: 991px) {
    .tech-partner-card {
        padding: 40px 30px;
    }
    .tech-partner-inner {
        grid-template-columns: 1fr;
        gap: 36px;
    }
    .tech-partner-inner .tp-logo-container {
        justify-content: center;
    }
}
@media (max-width: 576px) {
    .tech-partner-card {
        padding: 30px 20px;
        border-radius: 24px;
    }
    .tech-partner-inner .tp-content h2 {
        font-size: 28px;
    }
    .tech-partner-inner .tp-content p {
        font-size: 14.5px;
    }
    .tech-partner-inner .tp-feature-pills {
        justify-content: center;
    }
    .tech-partner-inner .tp-content {
        text-align: center;
    }
}

/* ---- 4-column partnership grid ---- */
.tier-grid-four {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}
@media (max-width: 991px) {
    .tier-grid-four {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 767px) {
    .tier-grid-four {
        grid-template-columns: 1fr;
    }
}
</style>

<style>
    .about-hero .eyebrow.rv { color: #0c3a30 !important; font-weight: 700; font-family: 'DM Mono', monospace; font-size: 13px; }
    .about-hero .eyebrow.rv::before { background: #d4936a !important; width: 42px; height: 2px; }
</style>
<div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Let's Build a Stronger Ecosystem Together</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Become a Partner</h1>
                <p class="hero-copy">Partner with Young Chanakya X to create meaningful experiences, connect communities, and build initiatives that inspire learning, collaboration, and long-term impact.</p>
              
                <ul class="checklist-style mb-4">
                    <li><span class="check-icon">✓</span>Co-create impactful community initiatives</li>
                    <li><span class="check-icon">✓</span>Reach a diverse and engaged audience</li>
                    <li><span class="check-icon">✓</span>Build long-term strategic collaborations</li>
                </ul>

                <div class="about-hero-buttons">
                    <a href="#partnership-opportunities" class="about-btn-2">View Partnership Opportunities</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="partner-form-box" id="partner-form">

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

                    <form action="{{ route('partner.apply') }}" method="POST">
                        @csrf

                        <div class="row">

                            {{-- 1st Row: Full Name & Phone Number with Country Selection --}}
                            <div class="col-md-6 mb-3">
                                <label for="partner-name">Full Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-name"
                                    class="form-control"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Full Name" required>
                                @error('name')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-phone">Phone / WhatsApp Number <span class="text-danger">*</span></label>
                                <input type="tel"
                                    id="partner-phone"
                                    class="form-control"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="E.g. +91 9876543210" required>
                                @error('phone')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- 2nd Row: Email Address --}}
                            <div class="col-12 mb-3">
                                <label for="partner-email">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                    id="partner-email"
                                    class="form-control"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email Address" required>
                                @error('email')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- 3rd Row: Organization / Company Name & Designation / Role --}}
                            <div class="col-md-6 mb-3">
                                <label for="partner-company">Organization / Company Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-company"
                                    class="form-control"
                                    name="company"
                                    value="{{ old('company') }}"
                                    placeholder="Organization / Company Name" required>
                                @error('company')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-designation">Designation / Role <span class="text-danger">*</span></label>
                                <input type="text"
                                    id="partner-designation"
                                    class="form-control"
                                    name="designation"
                                    value="{{ old('designation') }}"
                                    placeholder="Designation / Role" required>
                                @error('designation')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- 4th Row: Social Media Profile & Website URL --}}
                            <div class="col-md-6 mb-3">
                                <label for="partner-linkedin">Social Media Profile <span class="text-danger">*</span></label>
                                <input type="url"
                                    id="partner-linkedin"
                                    class="form-control"
                                    name="linkedin"
                                    value="{{ old('linkedin') }}"
                                    placeholder="Social Media Profile" required>
                                @error('linkedin')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="partner-website">Website URL (Optional)</label>
                                <input type="url"
                                    id="partner-website"
                                    class="form-control"
                                    name="website"
                                    value="{{ old('website') }}"
                                    placeholder="Website URL">
                                @error('website')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- 5th Row: Partnership Type --}}
                            <div class="col-12 mb-4">
                                <label for="partner-type">Partnership Type <span class="text-danger">*</span></label>
                                <select class="form-control"
                                    id="partner-type"
                                    name="partnership_type" required>

                                    <option value="" disabled {{ old('partnership_type') ? '' : 'selected' }}>
                                        Select Partnership Type
                                    </option>

                                    @foreach(['Brand Collaborations', 'Media Partnerships', 'Community Partnerships', 'Knowledge Partnerships', 'Event Partnerships', 'Ecosystem Partnerships'] as $type)
                                        <option value="{{ $type }}" {{ old('partnership_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach

                                </select>
                                @error('partnership_type')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="partner-submit-btn">
                                    Submit
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================= 
   TECHNOLOGY PARTNER SECTION 
   ========================= -->
<section class="tech-partner-section">
    <div class="container">
        <div class="tech-partner-card">
            <!-- Ambient Glowing Lighting Effects -->
            <div class="tp-glow tp-glow-1"></div>
            <div class="tp-glow tp-glow-2"></div>
            
            <div class="tech-partner-inner">
                <div class="tp-content">
                    <div class="tp-badge">
                        <i class="bi bi-cpu-fill me-1"></i> Technology Partner
                    </div>
                    <h2>Powered by <span class="tp-highlight">WeGeni</span></h2>
                    <p>Young Chanakya X is proudly powered by WeGeni, delivering the technology, infrastructure, and digital innovation that enable a seamless community experience.</p>
                    
                </div>

                <div class="tp-logo-container">
                    <a href="https://wegeni.com" target="_blank" rel="noopener noreferrer" class="tp-logo-card">
                        <div class="tp-card-header">
                            <span class="tp-verified-tag"><i class="bi bi-patch-check-fill"></i> Official Partner</span>
                        </div>
                        <div class="tp-logo-wrapper">
                            <img src="{{ asset('images/logo/wegeni-logo.svg') }}" alt="WeGeni - Technology Partner">
                        </div>
                        <div class="tp-card-footer">
                            <span>Explore WeGeni Solutions</span>
                            <i class="bi bi-arrow-up-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================
CONNECTX PARTNERSHIP OPPORTUNITIES
========================= -->

<style>
  /* TIERS UI FROM SPONSOR PAGE */
  .tiers-section { max-width: 1600px; margin: 0 auto; padding: 100px 2vw; }
  .tiers-header { text-align: center; margin-bottom: 56px; }
  .tiers-header .section-title { max-width: 600px; margin: 0 auto 16px; }
  .tiers-header .section-sub { margin: 0 auto; text-align: center; }

  .tier-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
  .tier-grid + .tier-grid { margin-top: 24px; }

  .tier-card { border: 1.5px solid rgba(12,58,48,0.12); border-radius: 20px; padding: 36px 30px; transition: all 0.25s; position: relative; display: flex; flex-direction: column; }
  .tier-card:hover { border-color: #0c3a30; transform: translateY(-3px); box-shadow: 0 24px 60px rgba(12,58,48,0.12); }
  .tier-card.featured { background: #0c3a30; color: #fdf9f5; border-color: #0c3a30; }
  .tier-badge {
    position: absolute; top: -14px; right: 28px; background: #ffd2b1; color: #0c3a30;
    border-radius: 100px; padding: 6px 16px; font-size: 12px; font-weight: 700;
  }
  .tier-name { font-family: 'DM Mono', monospace; font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; color: #2e7d62; margin-bottom: 10px; }
  .tier-card.featured .tier-name { color: #ffd2b1; }
  .tier-title { font-family: 'Playfair Display', Georgia, serif; font-size: 24px; font-weight: 400; color: #0c3a30; margin-bottom: 6px; }
  .tier-card.featured .tier-title { color: #fdf9f5; }
  .tier-tagline { font-size: 13px; color: #5a5a5a; margin-bottom: 22px; line-height: 1.5; }
  .tier-card.featured .tier-tagline { color: rgba(253,249,245,0.7); }
  .tier-list { list-style: none; margin-bottom: 26px; flex-grow: 1; padding: 0; }
  .tier-list li {
    font-size: 13.5px; color: #5a5a5a; padding: 7px 0; border-bottom: 1px solid rgba(12,58,48,0.12);
    display: flex; align-items: flex-start; gap: 9px; line-height: 1.5;
  }
  .tier-card.featured .tier-list li { color: rgba(253,249,245,0.8); border-color: rgba(255,255,255,0.12); }
  .tier-list li:last-child { border-bottom: none; }
  .tier-list li::before { content: '✓'; color: #2e7d62; font-weight: 700; flex-shrink: 0; }
  .tier-card.featured .tier-list li::before { color: #ffd2b1; }
  .tier-list.collapsed li:nth-child(n+4) { display: none; }
  .tier-toggle {
    background: none; border: none; color: #2e7d62; font-size: 13px; font-weight: 600;
    cursor: pointer; padding: 0 0 22px; text-align: left; text-decoration: underline;
  }
  .tier-card.featured .tier-toggle { color: #ffd2b1; }
  
  .tier-btn-primary {
    background: #0c3a30; color: #ffd2b1; padding: 14px 32px; border-radius: 100px;
    font-size: 15px; font-weight: 600; text-decoration: none; display: inline-block; transition: background 0.2s, transform 0.2s;
    border: none; cursor: pointer;
  }
  .tier-btn-primary:hover { background: #1a5c48; transform: translateY(-1px); color: #ffd2b1; }
  .tier-btn-outline {
    background: #ffca95; color: #0c3a30; padding: 14px 32px; border-radius: 100px; border: none;
    font-size: 15px; font-weight: 500; text-decoration: none; display: inline-block; transition: all 0.2s;
  }
  .tier-btn-outline:hover { background: #0c3a30; color: #ffd2b1; }

  @media(max-width: 767px){
      .tier-grid { grid-template-columns: 1fr; }
  }
</style>

<section class="tiers-section position-relative pt-4 pb-30" id="partnership-opportunities">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv" style="color: #0c3a30; font-size: 10px; font-weight: 700; letter-spacing: 3px;">Young Chanakya X</div>
        <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 400; line-height: 1.15;">Partnership Opportunities</h2>
        <p class="sec-desc rv mx-auto" style="margin-top: 16px; max-width: 600px; line-height: 1.6;">Explore our dynamic partnership levels tailored for visibility, networking, and creative collaboration.</p>
    </div>

    <div class="tier-grid">
      <!-- Brand Collaborations -->
      <div class="tier-card">
        <div class="tier-name">BRAND COLLABORATIONS</div>
        <div class="tier-title">Brand Collaboration</div>
        <div class="tier-tagline">Partner with YCX to create authentic brand experiences that connect with our growing community.</div>
        <ul class="tier-list collapsed">
          <li>Brand awareness initiatives</li>
          <li>Co-branded campaigns</li>
          <li>Community activations</li>
          <li>Product & service showcases</li>
          <li>Event branding opportunities</li>
          <li>Audience engagement programs</li>
          <li>Long-term brand collaborations</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Brand Partner</a>
      </div>
      
      <!-- Media Partnerships -->
      <div class="tier-card">
        <div class="tier-name">MEDIA PARTNERSHIPS</div>
        <div class="tier-title">Media Partnership</div>
        <div class="tier-tagline">Work with us to amplify inspiring stories, community initiatives, and meaningful conversations.</div>
        <ul class="tier-list collapsed">
          <li>Event media coverage</li>
          <li>Podcast & interview features</li>
          <li>Community stories</li>
          <li>Content collaborations</li>
          <li>Digital promotion</li>
          <li>Cross-platform visibility</li>
          <li>Exclusive media opportunities</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Media Partner</a>
      </div>

      <!-- Community Partnerships -->
      <div class="tier-card">
        <div class="tier-name">COMMUNITY PARTNERSHIPS</div>
        <div class="tier-title">Community Partnership</div>
        <div class="tier-tagline">Collaborate with YCX to strengthen communities through networking, learning, and shared experiences.</div>
        <ul class="tier-list collapsed">
          <li>Community initiatives</li>
          <li>Networking meetups</li>
          <li>Cross-community collaborations</li>
          <li>Member engagement</li>
          <li>Regional community programs</li>
          <li>Community outreach</li>
          <li>Shared growth opportunities</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Community Partner</a>
      </div>
      
      <!-- Knowledge Partnerships -->
      <div class="tier-card">
        <div class="tier-name">KNOWLEDGE PARTNERSHIPS</div>
        <div class="tier-title">Knowledge Partnership</div>
        <div class="tier-tagline">Share expertise through educational experiences that help people learn, grow, and innovate.</div>
        <ul class="tier-list collapsed">
          <li>Expert sessions</li>
          <li>Workshops & masterclasses</li>
          <li>Panel discussions</li>
          <li>Leadership talks</li>
          <li>Learning resources</li>
          <li>Educational programs</li>
          <li>Knowledge-sharing initiatives</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a Knowledge Partner</a>
      </div>

      <!-- Event Partnerships -->
      <div class="tier-card">
        <div class="tier-name">EVENT PARTNERSHIPS</div>
        <div class="tier-title">Event Partnership</div>
        <div class="tier-tagline">Co-create engaging events that bring together professionals, founders, students, and creators.</div>
        <ul class="tier-list collapsed">
          <li>Networking events</li>
          <li>YCX Talks</li>
          <li>Community meetups</li>
          <li>Leadership summits</li>
          <li>Workshops</li>
          <li>Roundtable discussions</li>
          <li>Campus events</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become an Event Partner</a>
      </div>

      <!-- Ecosystem Partnerships -->
      <div class="tier-card">
        <div class="tier-name">Ecosystem Partnerships</div>
        <div class="tier-title">Ecosystem Partnership</div>
        <div class="tier-tagline">Work together to strengthen the entrepreneurial, professional, and innovation ecosystem through long-term collaborations.</div>
        <ul class="tier-list collapsed">
          <li>Strategic collaborations</li>
          <li>Cross-community initiatives</li>
          <li>Shared programs</li>
          <li>Joint events</li>
          <li>Industry engagement</li>
          <li>Knowledge exchange</li>
          <li>Long-term partnerships</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#partner-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become an Ecosystem Partner</a>
      </div>
    </div>
  </div>
</section>

<script>
function toggleTier(btn) {
  const list = btn.previousElementSibling;
  if (list.classList.contains('collapsed')) {
    list.classList.remove('collapsed');
    btn.textContent = 'Show fewer benefits';
  } else {
    list.classList.add('collapsed');
    btn.textContent = 'Show all benefits';
  }
}
</script>


<!-- Image Carousel Section -->
@include('partials.image-carousel')

<!-- =========================
   WHY PARTNER WITH YCX SECTION 
   ========================= -->
<section class="connectx-how-works-section-wrapper pt-70 lg-pt-80 pb-70 lg-pb-80">
    <div class="container">

        <div class="text-center mb-70">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">WHY PARTNER WITH YCX</div>
            <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Partnerships That Create Lasting Value</h2>
            <p class="sec-desc rv mx-auto" style="margin-top: 16px; max-width: 600px; line-height: 1.6;">By partnering with Young Chanakya X, you become part of an ecosystem focused on learning, innovation, and meaningful connections.</p>
        </div>

        <div class="row g-0 how-works-section-cards-container">

            <div class="col-md-4 hw-grid-border-end-md hw-grid-border-bottom-md">
                <div class="how-works-section-card how-works-bg-light">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">01</span>
                        <h4 class="how-works-h4">Grow Together</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Build long-term relationships that benefit both your organization and the community.
                    </p>
                </div>
            </div>

            <div class="col-md-4 hw-grid-border-end-lg hw-grid-border-bottom-md">
                <div class="how-works-section-card how-works-bg-tint">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">02</span>
                        <h4 class="how-works-h4">Expand Your Reach</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Connect with students, professionals, founders, creators, and educators.
                    </p>
                </div>
            </div>

            <div class="col-md-4 hw-grid-border-bottom-md">
                <div class="how-works-section-card how-works-bg-light">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">03</span>
                        <h4 class="how-works-h4">Co-Create Experiences</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Collaborate on events, programs, workshops, and community initiatives.
                    </p>
                </div>
            </div>

            <div class="col-md-4 hw-grid-border-end-md hw-grid-border-bottom-sm">
                <div class="how-works-section-card how-works-bg-tint">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">04</span>
                        <h4 class="how-works-h4">Share Knowledge</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Bring your expertise to a community that values continuous learning.
                    </p>
                </div>
            </div>

            <div class="col-md-4 hw-grid-border-end-lg">
                <div class="how-works-section-card how-works-bg-light">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">05</span>
                        <h4 class="how-works-h4">Strengthen Your Network</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Build meaningful relationships with industry leaders and ecosystem partners.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="connectx-premium-card how-works-section-card how-works-bg-tint">
                    <div class="how-works-header-flex-row">
                        <span class="how-works-badge-num">06</span>
                        <h4 class="how-works-h4">Create Positive Impact</h4>
                    </div>
                    <p class="how-works-p-desc">
                        Support initiatives that encourage growth, innovation, and collaboration.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================
   CTA SECTION
   ========================= -->
<!-- <section class="connectx-expand-section pt-30 pb-50" style="background-color: #0c3a30;">
    <div class="container py-5">
        <div class="row align-items-center gy-5">

            <div class="col-lg-6 order-lg-last wow fadeInRight">
                <div class="px-lg-4" style="margin-top: -30px;">
                    <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px; color: #ffd2b1;">Creating Value Through Collaboration</div>
                    <h2 class="sec-title rv" style="color: #ffffff; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15; margin-bottom: 25px;">What We Can Build Together</h2>

                    <p class="sec-desc rv" style="margin-bottom: 35px; color: rgba(255, 255, 255, 0.8);">
                        Together, we can develop experiences that benefit communities, organizations, and future leaders.
                    </p>

                    <style>
                        .connectx-expand-points.theme-dark li {
                            color: #ffffff !important;
                        }
                        .connectx-expand-points.theme-dark li::before {
                            background: rgba(255, 210, 177, 0.15) !important;
                            color: #ffd2b1 !important;
                            border: 1px solid rgba(255, 210, 177, 0.3) !important;
                        }
                    </style>
                    <ul class="style-none connectx-expand-points theme-dark">
                        <li>Launch initiatives that bring people together</li>
                        <li>Create opportunities for professional connections</li>
                        <li>Develop programs that inspire future leaders</li>
                        <li>Host expert sessions, workshops, and panel discussions</li>
                        <li>Collaborate on community-driven awareness initiatives</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-10 m-auto wow fadeInLeft">
                <div class="media-wrapper px-lg-4">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=900&q=80"
                        alt="Global business collaboration"
                        class="lazy-img w-100 connectx-expand-pro-img" style="border-radius: 20px;">
                </div>
            </div>

        </div>
    </div>
</section> -->

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
                    We're excited about the opportunity to partner together and build impactful collaborations.
                </p>
                <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successModalElement = document.getElementById('successModal');
        if (successModalElement) {
            var myModal = new bootstrap.Modal(successModalElement);
            myModal.show();
        }
    });
</script>
@endif

@push('scripts')
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

            var form = phoneInput.closest('form');
            if (form) {
                form.addEventListener('submit', function() {
                    phoneInput.value = iti.getNumber();
                });
            }
        }
    });
</script>
@endpush

@endsection
