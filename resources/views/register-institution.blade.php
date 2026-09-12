@php
/**
 * Register Your Institution Page SEO Data
 */
$seo = [
    'title'       => 'Register Your Institution | Young Chanakya X',
    'description' => 'Register your school or college with Young Chanakya X to bring leadership programs, events, masterclasses, and community initiatives to your students.',
    'keywords'    => 'register institution YCX, school registration, college registration, Young Chanakya X school partnership, campus leadership program, YCX college collaboration, student leadership initiative, institution partnership',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
    'robots'      => 'index, follow',
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Register Your Institution | Young Chanakya X",
    "url": "https://connectx.youngchanakya.com/register-institution",
    "description": "Register your school or college with Young Chanakya X to bring leadership programs, events, masterclasses, and community initiatives to your students.",
    "isPartOf": {
        "@type": "WebSite",
        "@id": "https://connectx.youngchanakya.com/#website",
        "name": "Young Chanakya X",
        "url": "https://connectx.youngchanakya.com/"
    }
}
@endverbatim
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<style>
    /* intl-tel-input overrides — matching partner/sponsor pages */
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
/* ============================================================
   REGISTER INSTITUTION PAGE — STYLES
   Mirrors become-a-partner / become-a-sponsor UI conventions
   ============================================================ */

#hdr:not(.scrolled) .hamburger span {
    background: #ffffff !important;
}

/* ── Hero Section ──────────────────────────────────────────── */
.institution-hero {
    padding-top: 180px;
    padding-bottom: 90px;
    background-image: linear-gradient(180deg, rgba(8, 28, 23, 0.84) 0%, rgba(6, 20, 16, 0.94) 100%),
        url('{{ asset("images/media/institution/hero-banner.webp") }}');
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    position: relative;
    overflow: hidden;
    color: #ffffff;
}

.institution-hero::before {
    content: "";
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 190, 142, 0.08) 0%, transparent 70%);
    top: -150px;
    right: -100px;
    pointer-events: none;
}

/* ── Eyebrow Badge Pill ─────────────────────────────────────── */
.institution-hero .hero-badge-pill {
    background: rgba(255, 210, 177, 0.12);
    border: 1px solid rgba(255, 210, 177, 0.28);
    color: #ffd2b1;
    padding: 7px 18px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 22px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

/* ── Left content ──────────────────────────────────────────── */
.institution-hero h1 {
    font-size: clamp(34px, 4.2vw, 56px);
    font-weight: 900;
    line-height: 1.18;
    letter-spacing: -1.8px;
    background: linear-gradient(135deg, #ffffff 25%, #ffbe8e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 22px;
    padding-bottom: 0.08em;
}

.institution-hero .hero-copy {
    font-size: 16.5px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.88);
    margin-bottom: 30px;
    max-width: 520px;
}

/* Checklist matching authority / speaker page pattern */
.inst-checklist {
    padding: 0;
    margin: 0 0 32px 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
    list-style: none;
}
.inst-checklist li {
    display: flex;
    align-items: center;
    gap: 13px;
    font-size: 15px;
    line-height: 1.5;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.95);
}
.inst-checklist .check-icon {
    width: 28px;
    height: 28px;
    background: rgba(255, 210, 177, 0.15);
    border: 1px solid rgba(255, 210, 177, 0.35);
    color: #ffbe8e;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: bold;
    flex-shrink: 0;
}

/* Hero CTA Button */
.inst-hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #ffd2b1;
    color: #0c3a30;
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    border: none;
}
.inst-hero-btn:hover {
    background: #ffffff;
    color: #0c3a30;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.35);
}

.institution-hero .about-hero-buttons {
    display: flex;
    gap: 14px;
}

/* ── Form Box ──────────────────────────────────────────────── */
.institution-form-box {
    background: #ffffff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.15);
    position: relative;
}

.institution-form-box .form-title {
    font-size: 20px;
    font-weight: 800;
    color: #0c3a30;
    margin-bottom: 6px;
}

.institution-form-box .form-subtitle {
    font-size: 14px;
    color: #777;
    margin-bottom: 28px;
    line-height: 1.5;
}

/* Section dividers inside form */
.inst-form-section-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #0c3a30;
    background: #f1ede4;
    border-radius: 6px;
    padding: 6px 12px;
    margin: 20px 0 18px;
    display: block;
}

/* Inputs — matching partner/sponsor form inputs exactly */
.institution-form-box .form-control,
.institution-form-box select.form-control {
    height: 58px;
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 0 18px;
    font-size: 15px;
    color: #000000;
    box-shadow: none;
    transition: all 0.3s ease;
    background: #ffffff;
    appearance: none;
    -webkit-appearance: none;
}

.institution-form-box textarea.form-control {
    height: 120px;
    padding-top: 14px;
    resize: vertical;
}

.institution-form-box .form-control::placeholder {
    color: #888888 !important;
}

.institution-form-box .form-control:focus,
.institution-form-box select.form-control:focus {
    border-color: #0c3a30;
    box-shadow: 0 0 0 3px rgba(12, 58, 48, 0.12);
    outline: none;
}

/* Select arrow */
.select-wrapper {
    position: relative;
}
.select-wrapper::after {
    content: "\f282";
    font-family: "bootstrap-icons";
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #555;
    pointer-events: none;
    font-size: 13px;
}

/* Labels */
.institution-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
}

/* Checkbox group */
.inst-checkbox-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.inst-checkbox-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 12px 14px;
    border: 1.5px solid #e5e5e5;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.25s ease;
    background: #fafafa;
}

.inst-checkbox-item:hover {
    border-color: #0c3a30;
    background: #f0f7f4;
}

.inst-checkbox-item input[type="checkbox"] {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    accent-color: #0c3a30;
    margin-top: 1px;
    cursor: pointer;
}

.inst-checkbox-item.checked {
    border-color: #0c3a30;
    background: #f0f7f4;
}

.inst-checkbox-item span {
    font-size: 13.5px;
    font-weight: 500;
    color: #1a1a1a;
    line-height: 1.4;
}

/* Submit button */
.inst-submit-btn {
    width: 100%;
    height: 58px;
    border: none;
    border-radius: 12px;
    background: #0c3a30;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.inst-submit-btn:hover {
    background: #071f1a;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(12, 58, 48, 0.2);
}

.inst-submit-btn i {
    font-size: 18px;
}

/* ── Multi-Step Wizard Styles ──────────────────────────────── */
.inst-wizard-progress {
    margin-bottom: 26px;
    padding-bottom: 18px;
    border-bottom: 1px solid #f0ece1;
}

.inst-steps-bar {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    position: relative;
    padding: 0 4px;
}

.inst-steps-track {
    position: absolute;
    top: 19px;
    left: 45px;
    right: 45px;
    height: 3px;
    background: #e9e5dc;
    z-index: 1;
    border-radius: 2px;
}

.inst-progress-fill {
    height: 100%;
    background: #0c3a30;
    border-radius: 2px;
    transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    width: 0%;
}

.inst-step-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    z-index: 2;
    text-decoration: none;
    cursor: default;
    background: transparent;
    border: none;
    padding: 0;
    width: 76px;
    text-align: center;
}

.inst-step-item.clickable {
    cursor: pointer;
}

.inst-step-circle {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #ffffff;
    border: 2px solid #dcd7cb;
    color: #7a7a7a;
    font-size: 14px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.inst-step-circle .inst-step-check {
    display: none;
    font-size: 16px;
    font-weight: bold;
}

.inst-step-item.active .inst-step-circle {
    background: #0c3a30;
    border-color: #0c3a30;
    color: #ffffff;
    box-shadow: 0 0 0 5px rgba(12, 58, 48, 0.15);
    transform: scale(1.05);
}

.inst-step-item.completed .inst-step-circle {
    background: #0c3a30;
    border-color: #0c3a30;
    color: #ffffff;
}

.inst-step-item.completed .inst-step-circle .inst-step-num {
    display: none;
}

.inst-step-item.completed .inst-step-circle .inst-step-check {
    display: inline-block;
}

.inst-step-label {
    font-size: 12px;
    font-weight: 600;
    color: #7a7a7a;
    margin-top: 8px;
    line-height: 1.3;
    transition: color 0.3s ease;
    white-space: nowrap;
}

.inst-step-item.active .inst-step-label {
    color: #0c3a30;
    font-weight: 700;
}

.inst-step-item.completed .inst-step-label {
    color: #0c3a30;
}

.inst-step-counter-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f1ede4;
    color: #0c3a30;
    font-size: 12px;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 20px;
    letter-spacing: 0.3px;
}

/* Wizard Step Containers */
.inst-form-step {
    display: none;
}

.inst-form-step.active {
    display: block;
    animation: instStepFadeIn 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes instStepFadeIn {
    from {
        opacity: 0;
        transform: translateY(12px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Wizard Navigation Buttons */
.inst-wizard-nav {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 24px;
}

.inst-wizard-nav .inst-submit-btn {
    width: auto;
    margin-bottom: 0;
}

.inst-next-btn {
    height: 58px;
    border: none;
    border-radius: 12px;
    background: #0c3a30;
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.3px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 0 24px;
}

.inst-next-btn:hover {
    background: #071f1a;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(12, 58, 48, 0.2);
}

.inst-prev-btn {
    height: 58px;
    border: 1.5px solid #dcd7cb;
    border-radius: 12px;
    background: #f8f6f2;
    color: #0c3a30;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 0 24px;
    flex-shrink: 0;
}

.inst-prev-btn:hover {
    background: #ece7dc;
    border-color: #0c3a30;
    transform: translateY(-2px);
}

@media (max-width: 575px) {
    .inst-step-label {
        display: none;
    }
    .inst-step-item {
        width: 38px;
    }
    .inst-steps-track {
        left: 28px;
        right: 28px;
    }
    .inst-prev-btn {
        padding: 0 16px;
        font-size: 14px;
        height: 52px;
    }
    .inst-next-btn {
        font-size: 15px;
        height: 52px;
        padding: 0 16px;
    }
}

/* ── Benefits Section ──────────────────────────────────────── */
.inst-benefits-section {
    padding: 100px 0;
    background: #ffffff;
}

.inst-benefit-card {
    background: #f8f6f2;
    border-radius: 16px;
    padding: 32px 28px;
    height: 100%;
    border: 1px solid #ececec;
    transition: all 0.3s ease;
}

.inst-benefit-card:hover {
    border-color: #0c3a30;
    transform: translateY(-4px);
    box-shadow: 0 20px 45px rgba(12, 58, 48, 0.1);
}

.inst-benefit-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: #0c3a30;
    color: #ffffff;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.inst-benefit-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0c3a30;
    margin-bottom: 10px;
}

.inst-benefit-card p {
    font-size: 14px;
    line-height: 1.75;
    color: #666;
    margin: 0;
}

/* ── CTA Banner ────────────────────────────────────────────── */
.inst-cta-banner {
    background: linear-gradient(135deg, #0c3a30 0%, #082821 100%);
    padding: 80px 0;
}

/* ── Responsive ────────────────────────────────────────────── */
@media (max-width: 991px) {
    .institution-hero {
        background-attachment: scroll;
        padding-top: 140px;
        padding-bottom: 60px;
    }
    .institution-hero h1 {
        font-size: 36px;
    }
    .institution-hero .hero-content {
        text-align: center;
        margin-bottom: 40px;
    }
    .institution-hero .hero-badge-pill {
        margin-left: auto;
        margin-right: auto;
    }
    .institution-hero .hero-copy {
        margin-left: auto;
        margin-right: auto;
    }
    .inst-checklist {
        display: inline-flex;
        flex-direction: column;
        text-align: left;
        margin-left: auto;
        margin-right: auto;
    }
    .institution-hero .about-hero-buttons {
        justify-content: center;
    }
    .inst-benefits-section {
        padding: 70px 0;
    }
}

@media (max-width: 767px) {
    .institution-hero {
        padding-top: 110px;
        padding-bottom: 50px;
    }
    .institution-hero h1 {
        font-size: 30px;
        letter-spacing: -0.5px;
    }
    .institution-form-box {
        padding: 28px 20px;
    }
    .inst-checkbox-group {
        grid-template-columns: 1fr;
    }
    .inst-benefits-section {
        padding: 60px 0;
    }
}

@media (max-width: 480px) {
    .institution-hero {
        padding-top: 95px;
        padding-bottom: 40px;
    }
    .institution-hero h1 {
        font-size: 26px;
    }
    .institution-form-box {
        padding: 22px 16px;
    }
    .inst-submit-btn {
        font-size: 15px;
        height: 52px;
    }
}

/* ── The Education Business Room Section ───────────────────── */
.edu-business-room-section {
    padding: 110px 0;
    background: #f8f6f2;
    position: relative;
    border-top: 1px solid #eae5d9;
    border-bottom: 1px solid #eae5d9;
    overflow: hidden;
}

.edu-business-room-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(#dcd6c8 1px, transparent 1px);
    background-size: 28px 28px;
    opacity: 0.6;
    pointer-events: none;
}

.edu-room-header {
    max-width: 820px;
    margin: 0 auto 60px;
    text-align: center;
    position: relative;
    z-index: 2;
}

.edu-room-header .eyebrow-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #0c3a30;
    color: #ffd2b1;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 7px 18px;
    border-radius: 50px;
    margin-bottom: 18px;
}

.edu-room-header h2 {
    font-size: clamp(32px, 4.5vw, 52px);
    font-weight: 900;
    color: #0c3a30;
    line-height: 1.15;
    letter-spacing: -1.5px;
    margin-bottom: 16px;
}

.edu-room-header p {
    font-size: 16.5px;
    color: #54615a;
    line-height: 1.75;
    margin: 0;
}

/* Pillar Card */
.edu-pillar-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1.5px solid #ece7dc;
    padding: 32px 28px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.35s cubic-bezier(0.2, 0.8, 0.2, 1);
    position: relative;
    box-shadow: 0 8px 24px rgba(12, 58, 48, 0.04);
}

.edu-pillar-card:hover {
    transform: translateY(-6px);
    border-color: #0c3a30;
    box-shadow: 0 20px 45px rgba(12, 58, 48, 0.12);
}

.edu-pillar-card-top {
    margin-bottom: 22px;
}

.edu-pillar-badge-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 18px;
}

.edu-pillar-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #0c3a30;
    color: #ffd2b1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    box-shadow: 0 6px 16px rgba(12, 58, 48, 0.18);
    transition: transform 0.3s ease;
}

.edu-pillar-card:hover .edu-pillar-icon-box {
    transform: scale(1.08) rotate(2deg);
}

.edu-pillar-num {
    font-family: 'DM Mono', monospace;
    font-size: 13px;
    font-weight: 700;
    color: #999385;
    background: #f4f0e6;
    padding: 4px 10px;
    border-radius: 20px;
}

.edu-pillar-title {
    font-size: 20px;
    font-weight: 800;
    color: #0c3a30;
    letter-spacing: -0.5px;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.edu-pillar-desc {
    font-size: 14px;
    color: #637069;
    line-height: 1.6;
    margin: 0;
}

/* Branch / Track list */
.edu-branch-tree {
    border-top: 1px dashed #e2dcce;
    padding-top: 18px;
    margin-top: auto;
}

.edu-branch-tree-title {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #8c8577;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.edu-branch-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
}

.edu-branch-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f6f3eb;
    color: #1a382f;
    font-size: 12.5px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid #ece5d6;
    transition: all 0.25s ease;
}

.edu-branch-pill i {
    font-size: 10px;
    color: #c98860;
}

.edu-pillar-card:hover .edu-branch-pill {
    background: #f0eae0;
    border-color: #dfd7c5;
}

.edu-branch-pill:hover {
    background: #0c3a30 !important;
    color: #ffffff !important;
    border-color: #0c3a30 !important;
}

.edu-branch-pill:hover i {
    color: #ffd2b1 !important;
}

/* ── Join The Room Master Card ─────────────────────────────── */
.edu-join-room-card {
    background: radial-gradient(ellipse at top left, #0e4539 0%, #082821 60%, #051a15 100%);
    border-radius: 24px;
    border: 1.5px solid rgba(255, 210, 177, 0.35);
    padding: 46px 40px;
    color: #ffffff;
    box-shadow: 0 25px 60px rgba(8, 38, 31, 0.35);
    position: relative;
    overflow: hidden;
    margin-top: 40px;
}

.edu-join-room-card::before {
    content: "";
    position: absolute;
    top: -100px;
    right: -100px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(255, 210, 177, 0.12) 0%, transparent 70%);
    pointer-events: none;
}

.edu-join-room-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 210, 177, 0.15);
    border: 1px solid rgba(255, 210, 177, 0.35);
    color: #ffd2b1;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 50px;
    margin-bottom: 14px;
}

.edu-join-room-title {
    font-size: clamp(26px, 3.5vw, 38px);
    font-weight: 900;
    letter-spacing: -1px;
    color: #ffffff;
    margin-bottom: 10px;
}

.edu-join-room-subtitle {
    font-size: 15.5px;
    color: rgba(255, 255, 255, 0.82);
    max-width: 680px;
    line-height: 1.7;
    margin-bottom: 32px;
}

.edu-join-actions-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    position: relative;
    z-index: 2;
}

.edu-join-action-tile {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 210, 177, 0.2);
    border-radius: 16px;
    padding: 22px 18px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    color: #ffffff;
    backdrop-filter: blur(6px);
}

.edu-join-action-tile:hover {
    background: rgba(255, 210, 177, 0.16);
    border-color: #ffd2b1;
    transform: translateY(-4px);
    color: #ffffff;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.3);
}

.edu-action-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
}

.edu-action-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(255, 210, 177, 0.18);
    color: #ffd2b1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    transition: transform 0.3s ease;
}

.edu-join-action-tile:hover .edu-action-icon {
    transform: scale(1.1);
    background: #ffd2b1;
    color: #0c3a30;
}

.edu-action-arrow {
    color: #ffd2b1;
    font-size: 16px;
    transition: transform 0.3s ease;
}

.edu-join-action-tile:hover .edu-action-arrow {
    transform: translateX(4px);
}

.edu-action-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: #ffd2b1;
    margin-bottom: 4px;
    display: block;
}

.edu-action-title {
    font-size: 16.5px;
    font-weight: 800;
    color: #ffffff;
    margin: 0;
    line-height: 1.35;
}

@media (max-width: 991px) {
    .edu-join-actions-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .edu-business-room-section {
        padding: 80px 0;
    }
    .edu-join-room-card {
        padding: 34px 26px;
    }
}

@media (max-width: 575px) {
    .edu-join-actions-grid {
        grid-template-columns: 1fr;
    }
    .edu-room-header h2 {
        font-size: 28px;
    }
    .edu-join-room-title {
        font-size: 24px;
    }
}
</style>

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="institution-hero">
    <div class="container">
        <div class="row align-items-center gy-5">

            {{-- Left: Intro Content --}}
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge-pill">
                        <i class="bi bi-mortarboard-fill"></i> Register Your Institution
                    </div>

                    <h1>Bring YCX Programs to Your School or College</h1>

                    <p class="hero-copy">
                        Partner with Young Chanakya X to create meaningful leadership experiences for your students.
                        From events and masterclasses to internship connects and speaker programs — bring the
                        YCX ecosystem directly to your campus.
                    </p>

                    <ul class="inst-checklist">
                        <li><span class="check-icon"><i class="bi bi-check-lg"></i></span>Host YCX events, workshops &amp; masterclasses on campus</li>
                        <li><span class="check-icon"><i class="bi bi-check-lg"></i></span>Connect students with industry mentors &amp; opportunities</li>
                        <li><span class="check-icon"><i class="bi bi-check-lg"></i></span>Run campus ambassador &amp; leadership programs</li>
                        <li><span class="check-icon"><i class="bi bi-check-lg"></i></span>Gain institutional recognition in the YCX network</li>
                    </ul>

                    <div class="about-hero-buttons">
                        <a href="#institution-form" class="inst-hero-btn">Register Your Institution <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            {{-- Right: Registration Form --}}
            <div class="col-lg-6">
                <div class="institution-form-box" id="institution-form">

                    <div class="form-title">Institution Registration Form</div>
                    <div class="form-subtitle">Fill in the details below and our team will get back to you within 2–3 business days.</div>

                    {{-- Multi-Step Wizard Progress Indicator --}}
                    <div class="inst-wizard-progress">
                        <div class="inst-steps-bar">
                            <div class="inst-steps-track">
                                <div class="inst-progress-fill" id="instProgressFill"></div>
                            </div>

                            <button type="button" class="inst-step-item active" data-step="1" id="step-nav-1" onclick="instStepClick(1)">
                                <div class="inst-step-circle">
                                    <span class="inst-step-num">1</span>
                                    <i class="bi bi-check-lg inst-step-check"></i>
                                </div>
                                <span class="inst-step-label">Contact</span>
                            </button>

                            <button type="button" class="inst-step-item" data-step="2" id="step-nav-2" onclick="instStepClick(2)">
                                <div class="inst-step-circle">
                                    <span class="inst-step-num">2</span>
                                    <i class="bi bi-check-lg inst-step-check"></i>
                                </div>
                                <span class="inst-step-label">Institution</span>
                            </button>

                            <button type="button" class="inst-step-item" data-step="3" id="step-nav-3" onclick="instStepClick(3)">
                                <div class="inst-step-circle">
                                    <span class="inst-step-num">3</span>
                                    <i class="bi bi-check-lg inst-step-check"></i>
                                </div>
                                <span class="inst-step-label">Location</span>
                            </button>

                            <button type="button" class="inst-step-item" data-step="4" id="step-nav-4" onclick="instStepClick(4)">
                                <div class="inst-step-circle">
                                    <span class="inst-step-num">4</span>
                                    <i class="bi bi-check-lg inst-step-check"></i>
                                </div>
                                <span class="inst-step-label">Interests</span>
                            </button>
                        </div>

                        <div class="inst-step-counter text-center mt-3 d-sm-none">
                            <span class="inst-step-counter-badge" id="instStepCounterBadge">
                                Step 1 of 4: Contact Person Details
                            </span>
                        </div>
                    </div>

                    {{-- Error Alert --}}
                    @if (session('error') || $errors->any())
                        <div class="alert alert-danger mb-4" style="font-weight: 500; border-radius: 10px;">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            @if (session('error'))
                                {{ session('error') }}
                            @else
                                Please correct the errors highlighted below.
                            @endif
                        </div>
                    @endif

                    <form action="{{ route('institution.submit') }}" method="POST" id="institution-registration-form">
                        @csrf

                        {{-- ══════════════════════════════════════════
                             STEP 1 — CONTACT PERSON DETAILS
                             ══════════════════════════════════════════ --}}
                        <div class="inst-form-step active" id="inst-step-1" data-step="1">
                            <span class="inst-form-section-label">
                                <i class="bi bi-person-fill me-1"></i> Contact Person Details
                            </span>

                            <div class="row">
                                {{-- Full Name --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-contact-name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                        id="inst-contact-name"
                                        class="form-control @error('contact_name') is-invalid @enderror"
                                        name="contact_name"
                                        value="{{ old('contact_name') }}"
                                        placeholder="Your Full Name"
                                        required>
                                    @error('contact_name')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Designation / Role --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-designation">Designation / Role <span class="text-danger">*</span></label>
                                    <input type="text"
                                        id="inst-designation"
                                        class="form-control @error('designation') is-invalid @enderror"
                                        name="designation"
                                        value="{{ old('designation') }}"
                                        placeholder="E.g. Principal, Director, Owner"
                                        required>
                                    @error('designation')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-phone">Phone / WhatsApp Number <span class="text-danger">*</span></label>
                                    <input type="tel"
                                        id="inst-phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        placeholder="E.g. +91 9876543210"
                                        required>
                                    @error('phone')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email"
                                        id="inst-email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="official@yourinstitution.edu"
                                        required>
                                    @error('email')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="inst-wizard-nav">
                                <button type="button" class="inst-next-btn w-100" onclick="instWizardNext(1)">
                                    <span>Continue to Institution Details</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        {{-- ══════════════════════════════════════════
                             STEP 2 — INSTITUTION DETAILS
                             ══════════════════════════════════════════ --}}
                        <div class="inst-form-step" id="inst-step-2" data-step="2">
                            <span class="inst-form-section-label">
                                <i class="bi bi-building-fill me-1"></i> Institution Details
                            </span>

                            <div class="row">
                                {{-- Institution Name --}}
                                <div class="col-12 mb-3">
                                    <label for="inst-name">Institution Name <span class="text-danger">*</span></label>
                                    <input type="text"
                                        id="inst-name"
                                        class="form-control @error('institution_name') is-invalid @enderror"
                                        name="institution_name"
                                        value="{{ old('institution_name') }}"
                                        placeholder="Full name of your school or college"
                                        required>
                                    @error('institution_name')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Institution Type --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-type">Institution Type <span class="text-danger">*</span></label>
                                    <div class="select-wrapper">
                                        <select class="form-control @error('institution_type') is-invalid @enderror"
                                            id="inst-type"
                                            name="institution_type"
                                            required>
                                            <option value="" disabled {{ old('institution_type') ? '' : 'selected' }}>Select Type</option>
                                            @foreach(['School', 'College', 'Both'] as $type)
                                                <option value="{{ $type }}" {{ old('institution_type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('institution_type')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Board / University --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-board">Affiliated Board / University <span class="text-danger">*</span></label>
                                    <input type="text"
                                        id="inst-board"
                                        class="form-control @error('board_or_university') is-invalid @enderror"
                                        name="board_or_university"
                                        value="{{ old('board_or_university') }}"
                                        placeholder="E.g. CBSE, Anna University"
                                        required>
                                    @error('board_or_university')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Year of Establishment --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-year">Year of Establishment <span class="text-muted" style="font-weight: 400;">(Optional)</span></label>
                                    <input type="number"
                                        id="inst-year"
                                        class="form-control @error('year_of_establishment') is-invalid @enderror"
                                        name="year_of_establishment"
                                        value="{{ old('year_of_establishment') }}"
                                        placeholder="E.g. 1998"
                                        min="1800"
                                        max="{{ date('Y') }}">
                                    @error('year_of_establishment')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="inst-wizard-nav">
                                <button type="button" class="inst-prev-btn" onclick="instWizardPrev(2)">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    <span>Back</span>
                                </button>
                                <button type="button" class="inst-next-btn flex-grow-1" onclick="instWizardNext(2)">
                                    <span>Continue to Location &amp; Scale</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        {{-- ══════════════════════════════════════════
                             STEP 3 — LOCATION & CAMPUS DETAILS
                             ══════════════════════════════════════════ --}}
                        <div class="inst-form-step" id="inst-step-3" data-step="3">
                            <span class="inst-form-section-label">
                                <i class="bi bi-geo-alt-fill me-1"></i> Location &amp; Campus Details
                            </span>

                            <div class="row">
                                {{-- Student Strength --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-strength">Approximate Student Strength <span class="text-danger">*</span></label>
                                    <div class="select-wrapper">
                                        <select class="form-control @error('student_strength') is-invalid @enderror"
                                            id="inst-strength"
                                            name="student_strength"
                                            required>
                                            <option value="" disabled {{ old('student_strength') ? '' : 'selected' }}>Select Strength</option>
                                            @foreach(['Below 200', '200 – 500', '500 – 1,000', '1,000 – 2,500', '2,500 – 5,000', 'Above 5,000'] as $range)
                                                <option value="{{ $range }}" {{ old('student_strength') == $range ? 'selected' : '' }}>{{ $range }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('student_strength')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- City --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-city">City <span class="text-danger">*</span></label>
                                    <input type="text"
                                        id="inst-city"
                                        class="form-control @error('city') is-invalid @enderror"
                                        name="city"
                                        value="{{ old('city') }}"
                                        placeholder="City"
                                        required>
                                    @error('city')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- State --}}
                                <div class="col-md-6 mb-3">
                                    <label for="inst-state">State <span class="text-danger">*</span></label>
                                    <div class="select-wrapper">
                                        <select class="form-control @error('state') is-invalid @enderror"
                                            id="inst-state"
                                            name="state"
                                            required>
                                            <option value="" disabled {{ old('state') ? '' : 'selected' }}>Select State</option>
                                            @foreach([
                                                'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh',
                                                'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka',
                                                'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram',
                                                'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu',
                                                'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal',
                                                'Andaman & Nicobar Islands', 'Chandigarh', 'Dadra & Nagar Haveli and Daman & Diu',
                                                'Delhi', 'Jammu & Kashmir', 'Ladakh', 'Lakshadweep', 'Puducherry'
                                            ] as $st)
                                                <option value="{{ $st }}" {{ old('state') == $st ? 'selected' : '' }}>{{ $st }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('state')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Website --}}
                                <div class="col-12 mb-3">
                                    <label for="inst-website">Institution Website <span class="text-muted" style="font-weight: 400;">(Optional)</span></label>
                                    <input type="url"
                                        id="inst-website"
                                        class="form-control @error('website') is-invalid @enderror"
                                        name="website"
                                        value="{{ old('website') }}"
                                        placeholder="https://www.yourinstitution.edu.in">
                                    @error('website')
                                        <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="inst-wizard-nav">
                                <button type="button" class="inst-prev-btn" onclick="instWizardPrev(3)">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    <span>Back</span>
                                </button>
                                <button type="button" class="inst-next-btn flex-grow-1" onclick="instWizardNext(3)">
                                    <span>Continue to Areas of Interest</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>

                        {{-- ══════════════════════════════════════════
                             STEP 4 — COLLABORATION & AREAS OF INTEREST
                             ══════════════════════════════════════════ --}}
                        <div class="inst-form-step" id="inst-step-4" data-step="4">
                            <span class="inst-form-section-label">
                                <i class="bi bi-stars me-1"></i> Areas of Interest
                            </span>

                            <div class="mb-3">
                                <label style="margin-bottom: 14px;">
                                    What would you like to bring to your institution? <span class="text-danger">*</span>
                                </label>

                                @php
                                    $areas = [
                                        ['icon' => 'bi-calendar-event-fill', 'value' => 'YCX Events & Networking', 'label' => 'YCX Events & Networking'],
                                        ['icon' => 'bi-mortarboard-fill',    'value' => 'Leadership Programs',      'label' => 'Leadership Programs'],
                                        ['icon' => 'bi-play-circle-fill',    'value' => 'Masterclasses & Workshops','label' => 'Masterclasses & Workshops'],
                                        ['icon' => 'bi-briefcase-fill',      'value' => 'Internship Connect',        'label' => 'Internship Connect'],
                                        ['icon' => 'bi-mic-fill',            'value' => 'YCX Talks & Speaker Programs', 'label' => 'YCX Talks & Speaker Programs'],
                                        ['icon' => 'bi-megaphone-fill',      'value' => 'Campus Ambassador Program', 'label' => 'Campus Ambassador Program'],
                                    ];
                                    $oldAreas = old('areas_of_interest', []);
                                @endphp

                                <div class="inst-checkbox-group" id="areas-checkbox-group">
                                    @foreach($areas as $area)
                                        <label class="inst-checkbox-item {{ in_array($area['value'], $oldAreas) ? 'checked' : '' }}"
                                               for="area-{{ Str::slug($area['value']) }}">
                                            <input type="checkbox"
                                                id="area-{{ Str::slug($area['value']) }}"
                                                name="areas_of_interest[]"
                                                value="{{ $area['value'] }}"
                                                {{ in_array($area['value'], $oldAreas) ? 'checked' : '' }}
                                                onchange="toggleCheckedClass(this)">
                                            <span>
                                                <i class="bi {{ $area['icon'] }}" style="color: #0c3a30; margin-right: 4px;"></i>
                                                {{ $area['label'] }}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>

                                @error('areas_of_interest')
                                    <div class="text-danger small mt-2" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- How did you hear about YCX? --}}
                            <div class="col-12 mb-3">
                                <label for="inst-heard">How did you hear about Young Chanakya X? <span class="text-muted" style="font-weight: 400;">(Optional)</span></label>
                                <div class="select-wrapper">
                                    <select class="form-control"
                                        id="inst-heard"
                                        name="heard_about_ycx">
                                        <option value="" {{ old('heard_about_ycx') ? '' : 'selected' }}>Select an option</option>
                                        @foreach([
                                            'Social Media (Instagram / LinkedIn / Facebook)',
                                            'YouTube',
                                            'Word of Mouth',
                                            'Google Search',
                                            'Through a Student or Alumni',
                                            'Through a Staff / Faculty Member',
                                            'YCX Event or Program',
                                            'Other',
                                        ] as $source)
                                            <option value="{{ $source }}" {{ old('heard_about_ycx') == $source ? 'selected' : '' }}>{{ $source }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Additional Message --}}
                            <div class="col-12 mb-4">
                                <label for="inst-message">Additional Notes / Message <span class="text-muted" style="font-weight: 400;">(Optional)</span></label>
                                <textarea
                                    id="inst-message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    name="message"
                                    placeholder="Share any additional context, special requirements, or questions you have for our team...">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Wizard Submit Nav --}}
                            <div class="inst-wizard-nav">
                                <button type="button" class="inst-prev-btn" onclick="instWizardPrev(4)">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    <span>Back</span>
                                </button>
                                <button type="submit" class="inst-submit-btn flex-grow-1" id="inst-submit-btn">
                                    <i class="bi bi-send-fill me-2"></i>
                                    <span>Submit Registration</span>
                                </button>
                            </div>

                            <p class="text-center mt-3 mb-0" style="font-size: 12px; color: #999;">
                                <i class="bi bi-shield-check me-1" style="color: #0c3a30;"></i>
                                Your information is secure and will never be shared with third parties.
                            </p>
                        </div>

                    </form>

                </div>{{-- /.institution-form-box --}}
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     BENEFITS SECTION — What YCX Offers Institutions
     ============================================================ --}}
<section class="inst-benefits-section">
    <div class="container">

        <div class="text-center mb-60">
            <div class="eyebrow rv" style="color: #0c3a30; font-size: 10px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;">Why Partner with YCX</div>
            <h2 style="font-size: clamp(30px, 4vw, 48px); font-weight: 900; color: #0c3a30; margin-top: 14px; line-height: 1.2; letter-spacing: -1px;">
                What Your Institution Gains
            </h2>
            <p style="max-width: 580px; margin: 16px auto 0; color: #54615a; font-size: 16px; line-height: 1.7;">
                Young Chanakya X brings a proven ecosystem of leadership, networking, and real-world learning directly to your campus.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                    <h4>Leadership Development</h4>
                    <p>Empower your students with hands-on leadership programs, mentorship sessions, and real-world business challenges curated by YCX.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-people-fill"></i></div>
                    <h4>Community & Networking</h4>
                    <p>Connect your students with a diverse network of entrepreneurs, industry leaders, investors, and innovators from across India.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-camera-video-fill"></i></div>
                    <h4>YCX Talks & Expert Sessions</h4>
                    <p>Bring in experienced speakers, founders, and subject-matter experts to deliver inspiring talks and interactive workshops on your campus.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-briefcase-fill"></i></div>
                    <h4>Internship & Career Connect</h4>
                    <p>Give students access to internship listings, career guidance, and direct connections with companies actively looking to hire.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-award-fill"></i></div>
                    <h4>Institutional Recognition</h4>
                    <p>Gain visibility as a YCX partner institution in our network, events, publications, and social media — enhancing your institution's brand.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="inst-benefit-card">
                    <div class="inst-benefit-icon"><i class="bi bi-journal-richtext"></i></div>
                    <h4>Masterclasses & Workshops</h4>
                    <p>Host YCX-curated masterclasses on entrepreneurship, communication, personal branding, and more — tailored to student audiences.</p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     SECTION 3 — THE EDUCATION BUSINESS ROOM
     ============================================================ --}}
<section class="edu-business-room-section" id="education-business-room">
    <div class="container">

        {{-- Section Header --}}
        <div class="edu-room-header">
            <div class="eyebrow-badge">
                <i class="bi bi-briefcase-fill"></i> Executive Leadership Ecosystem
            </div>
            <h2>The Education Business Room</h2>
            <p>
                A high-impact collaborative ecosystem uniting school owners, college chancellors, education entrepreneurs,
                and corporate innovators to exchange strategic knowledge, explore leadership models, and build progressive institutional partnerships.
            </p>
        </div>

        {{-- 6 Core Pillars Grid --}}
        <div class="row g-4">

            {{-- 1. PODCAST --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-mic-fill"></i>
                            </div>
                            <span class="edu-pillar-num">01 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">🎙 Podcast</h3>
                        <p class="edu-pillar-desc">
                            In-depth conversations with visionary education leaders, edtech founders, and institutional changemakers on building modern learning organizations.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-play-circle-fill"></i> Episodes</span>
                            <span class="edu-branch-pill"><i class="bi bi-person-video"></i> Guest Stories</span>
                            <span class="edu-branch-pill"><i class="bi bi-camera-video"></i> Video / Audio</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2. PANEL DISCUSSIONS --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-chat-square-quote-fill"></i>
                            </div>
                            <span class="edu-pillar-num">02 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">🗣 Panel Discussions</h3>
                        <p class="edu-pillar-desc">
                            High-stakes roundtable forums addressing critical policies, campus governance, AI integration, and the commercial sustainability of institutions.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-award"></i> Leadership</span>
                            <span class="edu-branch-pill"><i class="bi bi-cpu"></i> Technology</span>
                            <span class="edu-branch-pill"><i class="bi bi-compass"></i> Future of Education</span>
                            <span class="edu-branch-pill"><i class="bi bi-graph-up-arrow"></i> Business of Education</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3. STORIES --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-book-half"></i>
                            </div>
                            <span class="edu-pillar-num">03 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">📖 Stories</h3>
                        <p class="edu-pillar-desc">
                            Unfiltered chronicles of educators and entrepreneurs turning constraints into excellence, navigating regulatory hurdles, and building enduring campuses.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-person-badge"></i> Founder Stories</span>
                            <span class="edu-branch-pill"><i class="bi bi-building"></i> Institution Stories</span>
                            <span class="edu-branch-pill"><i class="bi bi-arrow-repeat"></i> Transformation Stories</span>
                            <span class="edu-branch-pill"><i class="bi bi-lightning"></i> Failure → Success</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 4. TALKS --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <span class="edu-pillar-num">04 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">🎤 Talks</h3>
                        <p class="edu-pillar-desc">
                            Engaging keynotes and leadership masterclasses that connect students and faculties with industry icons, mentors, and corporate trailblazers.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-star"></i> Keynotes</span>
                            <span class="edu-branch-pill"><i class="bi bi-mortarboard"></i> College Talks</span>
                            <span class="edu-branch-pill"><i class="bi bi-backpack"></i> School Talks</span>
                            <span class="edu-branch-pill"><i class="bi bi-gem"></i> Leadership Sessions</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 5. MEETUPS --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <span class="edu-pillar-num">05 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">🤝 Meetups</h3>
                        <p class="edu-pillar-desc">
                            Curated, closed-door conclaves designed for confidential peer exchange, strategic alliances, and institutional synergy among decision-makers.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-building"></i> School Owners</span>
                            <span class="edu-branch-pill"><i class="bi bi-bank"></i> College Owners</span>
                            <span class="edu-branch-pill"><i class="bi bi-briefcase"></i> Education Entrepreneurs</span>
                            <span class="edu-branch-pill"><i class="bi bi-hdd-network"></i> Technology Leaders</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 6. INSIGHTS --}}
            <div class="col-md-6 col-lg-4">
                <div class="edu-pillar-card">
                    <div class="edu-pillar-card-top">
                        <div class="edu-pillar-badge-row">
                            <div class="edu-pillar-icon-box">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>
                            <span class="edu-pillar-num">06 / ROOM</span>
                        </div>
                        <h3 class="edu-pillar-title">🧠 Insights</h3>
                        <p class="edu-pillar-desc">
                            Research papers, emerging curriculum dynamics, market trends, and evidence-backed perspectives analyzing Indian and global education landscapes.
                        </p>
                    </div>

                    <div class="edu-branch-tree">
                        <div class="edu-branch-tree-title">
                            <i class="bi bi-diagram-3"></i> Core Tracks
                        </div>
                        <div class="edu-branch-pills">
                            <span class="edu-branch-pill"><i class="bi bi-file-text"></i> Articles</span>
                            <span class="edu-branch-pill"><i class="bi bi-clipboard-data"></i> Research</span>
                            <span class="edu-branch-pill"><i class="bi bi-graph-up"></i> Trends</span>
                            <span class="edu-branch-pill"><i class="bi bi-chat-dots"></i> Opinion</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- 7. JOIN THE ROOM — Master Executive Hub --}}
        <div class="edu-join-room-card">
            <div class="row align-items-center mb-4">
                <div class="col-lg-8">
                    <div class="edu-join-room-badge">
                        <i class="bi bi-rocket-takeoff-fill"></i> Gateway · Take Your Seat
                    </div>
                    <h3 class="edu-join-room-title">🚀 Join The Education Business Room</h3>
                    <p class="edu-join-room-subtitle">
                        Step directly into the room where decisions are made and progressive campus initiatives take shape. Select your path to connect with our network.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end d-none d-lg-block">
                    <a href="#institution-form" class="btn px-4 py-3 fw-bold"
                       style="background: #ffd2b1; color: #0c3a30; border-radius: 50px; font-size: 14px; text-decoration: none; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 8px;">
                        Register Institution <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- 4 Direct Action Tiles --}}
            <div class="edu-join-actions-grid">

                {{-- Action 1: Become a Guest --}}
                <a href="{{ url('/become-a-feature') }}" class="edu-join-action-tile">
                    <div class="edu-action-top">
                        <div class="edu-action-icon"><i class="bi bi-mic-fill"></i></div>
                        <div class="edu-action-arrow"><i class="bi bi-arrow-up-right"></i></div>
                    </div>
                    <div>
                        <span class="edu-action-label">Podcast &amp; Media</span>
                        <h4 class="edu-action-title">Become a Guest</h4>
                    </div>
                </a>

                {{-- Action 2: Attend a Meetup --}}
                <a href="{{ url('/events') }}" class="edu-join-action-tile">
                    <div class="edu-action-top">
                        <div class="edu-action-icon"><i class="bi bi-calendar2-check-fill"></i></div>
                        <div class="edu-action-arrow"><i class="bi bi-arrow-up-right"></i></div>
                    </div>
                    <div>
                        <span class="edu-action-label">Closed-Door Gatherings</span>
                        <h4 class="edu-action-title">Attend a Meetup</h4>
                    </div>
                </a>

                {{-- Action 3: Partner With Us --}}
                <a href="{{ url('/become-a-partner') }}" class="edu-join-action-tile">
                    <div class="edu-action-top">
                        <div class="edu-action-icon"><i class="bi bi-person-check-fill"></i></div>
                        <div class="edu-action-arrow"><i class="bi bi-arrow-up-right"></i></div>
                    </div>
                    <div>
                        <span class="edu-action-label">Strategic Alliance</span>
                        <h4 class="edu-action-title">Partner With Us</h4>
                    </div>
                </a>

                {{-- Action 4: Invite Kishorekumar --}}
                <a href="#institution-form" class="edu-join-action-tile">
                    <div class="edu-action-top">
                        <div class="edu-action-icon"><i class="bi bi-person-badge-fill"></i></div>
                        <div class="edu-action-arrow"><i class="bi bi-arrow-down-right"></i></div>
                    </div>
                    <div>
                        <span class="edu-action-label">Keynote &amp; CEO Sessions</span>
                        <h4 class="edu-action-title">Invite Kishorekumar</h4>
                    </div>
                </a>

            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     CTA BANNER
     ============================================================ --}}
<section class="inst-cta-banner">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7 text-center text-lg-start">
                <div style="font-size: 10px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: #ffd2b1; margin-bottom: 16px;">Young Chanakya X</div>
                <h2 style="font-size: clamp(28px, 4vw, 44px); font-weight: 900; color: #ffffff; line-height: 1.2; letter-spacing: -1px; margin-bottom: 16px;">
                    Ready to bring YCX to your campus?
                </h2>
                <p style="font-size: 16px; color: rgba(255,255,255,0.80); line-height: 1.7; margin: 0;">
                    Register your institution today and our team will connect with you to design the right programs for your students.
                </p>
            </div>
            <div class="col-lg-5 text-center text-lg-end">
                <a href="#institution-form" class="btn px-5 py-3 fw-bold me-3"
                   style="background: #ffd2b1; color: #0c3a30; border-radius: 50px; font-size: 15px; text-decoration: none; transition: all 0.3s ease; display: inline-block;">
                    Register Now
                </a>
                <a href="{{ url('/contact') }}" class="btn px-5 py-3 fw-bold mt-3 mt-sm-0"
                   style="background: transparent; color: #ffffff; border: 2px solid rgba(255,255,255,0.4); border-radius: 50px; font-size: 15px; text-decoration: none; transition: all 0.3s ease; display: inline-block;">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>

{{-- ============================================================
     SUCCESS MODAL
     ============================================================ --}}
@if (session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">
                    Registration Submitted Successfully!
                </h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    {{ session('success') }}
                </p>
                <a href="{{ url('/') }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center"
                   style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Explore Young Chanakya X
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
{{-- intl-tel-input for phone field --}}
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
<script>
    @php
        $initialStep = 1;
        if ($errors->has('areas_of_interest') || $errors->has('heard_about_ycx') || $errors->has('message')) {
            $initialStep = 4;
        } elseif ($errors->has('student_strength') || $errors->has('city') || $errors->has('state') || $errors->has('website')) {
            $initialStep = 3;
        } elseif ($errors->has('institution_name') || $errors->has('institution_type') || $errors->has('board_or_university') || $errors->has('year_of_establishment')) {
            $initialStep = 2;
        } elseif ($errors->has('contact_name') || $errors->has('designation') || $errors->has('phone') || $errors->has('email')) {
            $initialStep = 1;
        }
    @endphp

    var currentStep = {{ $initialStep }};
    var totalSteps = 4;
    var stepTitles = {
        1: "Contact Person Details",
        2: "Institution Details",
        3: "Location & Campus Details",
        4: "Areas of Interest"
    };

    var iti = null;
    var phoneInput = null;

    document.addEventListener("DOMContentLoaded", function () {
        // ── Phone with intl-tel-input ─────────────────────────
        phoneInput = document.getElementById('inst-phone');
        if (phoneInput) {
            iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });
        }

        // ── Initialize Wizard UI ─────────────────────────────
        updateWizardUI(currentStep);

        // ── Clear custom validation on user input ─────────────
        document.addEventListener('input', function (e) {
            if (e.target && typeof e.target.setCustomValidity === 'function') {
                e.target.setCustomValidity('');
            }
        });

        // ── Form Submit Validation ────────────────────────────
        var form = document.getElementById('institution-registration-form');
        if (form) {
            form.addEventListener('submit', function (e) {
                // Validate all steps in order
                for (var s = 1; s <= totalSteps; s++) {
                    if (!validateStep(s)) {
                        e.preventDefault();
                        goToStep(s);
                        return false;
                    }
                }

                // Format phone with international dial code
                if (iti && phoneInput) {
                    phoneInput.value = iti.getNumber();
                }
            });
        }
    });

    // ── Update Wizard UI ──────────────────────────────────────
    function updateWizardUI(step) {
        for (var i = 1; i <= totalSteps; i++) {
            var stepEl = document.getElementById('inst-step-' + i);
            var navItem = document.getElementById('step-nav-' + i);

            if (stepEl) {
                if (i === step) {
                    stepEl.classList.add('active');
                } else {
                    stepEl.classList.remove('active');
                }
            }

            if (navItem) {
                navItem.classList.remove('active', 'completed', 'clickable');
                if (i < step) {
                    navItem.classList.add('completed', 'clickable');
                } else if (i === step) {
                    navItem.classList.add('active');
                }
            }
        }

        // Update progress track fill
        var progressFill = document.getElementById('instProgressFill');
        if (progressFill) {
            var percent = ((step - 1) / (totalSteps - 1)) * 100;
            progressFill.style.width = percent + '%';
        }

        // Update mobile counter badge
        var badge = document.getElementById('instStepCounterBadge');
        if (badge) {
            badge.textContent = 'Step ' + step + ' of ' + totalSteps + ': ' + stepTitles[step];
        }
    }

    // ── Validate Step ─────────────────────────────────────────
    function validateStep(step) {
        var stepEl = document.getElementById('inst-step-' + step);
        if (!stepEl) return true;

        var inputs = stepEl.querySelectorAll('input, select, textarea');
        for (var i = 0; i < inputs.length; i++) {
            var el = inputs[i];
            if (typeof el.setCustomValidity === 'function') {
                el.setCustomValidity('');
            }
        }

        for (var i = 0; i < inputs.length; i++) {
            var el = inputs[i];

            // Required field check
            if (el.hasAttribute('required')) {
                if (el.type === 'checkbox') {
                    continue; // Checkbox group handled below
                }

                if (!el.value || !el.value.trim()) {
                    el.setCustomValidity('Please fill in this field.');
                    el.reportValidity();
                    el.focus();
                    return false;
                }

                if (!el.checkValidity()) {
                    el.reportValidity();
                    el.focus();
                    return false;
                }
            }

            // Phone specific check
            if (el.id === 'inst-phone') {
                var phoneVal = el.value.trim();
                if (!phoneVal) {
                    el.setCustomValidity('Please enter a valid phone number.');
                    el.reportValidity();
                    el.focus();
                    return false;
                }
            }

            // Year of establishment check
            if (el.id === 'inst-year' && el.value) {
                var yr = parseInt(el.value, 10);
                var currYr = new Date().getFullYear();
                if (isNaN(yr) || yr < 1800 || yr > currYr) {
                    el.setCustomValidity('Please enter a valid year between 1800 and ' + currYr + '.');
                    el.reportValidity();
                    el.focus();
                    return false;
                }
            }
        }

        // Step 4: Checkbox group validation
        if (step === 4) {
            var checked = stepEl.querySelectorAll('input[name="areas_of_interest[]"]:checked');
            if (checked.length === 0) {
                var errorMsg = document.getElementById('areas-error');
                if (!errorMsg) {
                    errorMsg = document.createElement('div');
                    errorMsg.id = 'areas-error';
                    errorMsg.className = 'text-danger small mt-2';
                    errorMsg.style.fontSize = '0.75rem';
                    errorMsg.style.fontWeight = '600';
                    errorMsg.textContent = 'Please select at least one area of interest.';
                    document.getElementById('areas-checkbox-group').parentNode.appendChild(errorMsg);
                }
                document.getElementById('areas-checkbox-group').scrollIntoView({ behavior: 'smooth', block: 'center' });
                return false;
            }
        }

        return true;
    }

    // ── Wizard Navigation Handlers ────────────────────────────
    function instWizardNext(current) {
        if (validateStep(current)) {
            goToStep(current + 1);
        }
    }

    function instWizardPrev(current) {
        goToStep(current - 1);
    }

    function instStepClick(target) {
        if (target === currentStep) return;

        if (target < currentStep) {
            goToStep(target);
        } else {
            // Validate all preceding steps before advancing to target
            for (var s = currentStep; s < target; s++) {
                if (!validateStep(s)) {
                    return;
                }
            }
            goToStep(target);
        }
    }

    function goToStep(step) {
        if (step < 1 || step > totalSteps) return;
        currentStep = step;
        updateWizardUI(currentStep);

        var formBox = document.getElementById('institution-form');
        if (formBox) {
            var rect = formBox.getBoundingClientRect();
            if (rect.top < 0 || rect.top > 200) {
                formBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    // ── Toggle checked class on checkbox cards ────────────────
    function toggleCheckedClass(checkbox) {
        var label = checkbox.closest('.inst-checkbox-item');
        if (checkbox.checked) {
            label.classList.add('checked');
        } else {
            label.classList.remove('checked');
        }
        var errorMsg = document.getElementById('areas-error');
        if (errorMsg) errorMsg.remove();
    }
</script>
@endpush

@endsection
