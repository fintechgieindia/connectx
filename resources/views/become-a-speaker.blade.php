@php
/**
 * Become a Speaker Page SEO Data
 */
$seo = [
    'title'       => 'YCX Talks | Young Chanakya X',
    'description' => 'Apply to speak at YCX Talks and share your knowledge, expertise, and ideas through live talks, workshops, and community learning sessions.',
    'keywords'    => 'YCX Talks, become a speaker, public speaking, expert talks, keynote speaker, workshops, knowledge sharing, leadership talks, Young Chanakya X talks, speaker application',
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
<link rel="stylesheet" href="{{ asset('css/partner-page.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<style>
  .speaker-body .iti { width: 100%; display: block; }
  .speaker-body .iti__country-list { color: #333333; z-index: 10; }
  .speaker-body #speaker-phone { padding-left: 95px !important; }

  :root {
    --ink: #0c3a30;
    --ink-deep: #082821;
    --peach: #ffd2b1;
    --peach-deep: #ffbe8e;
    --cream: #fffaf4;
    --white: #ffffff;
    --text: #12261f;
    --text-soft: #4d6459;
    --hero-gradient: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
  }

  /* Make sure header hamburger is white over hero */
  #hdr:not(.scrolled) .hamburger span {
    background: #ffffff !important;
  }

  .speaker-body {
    font-family: 'Manrope', sans-serif;
    color: var(--text);
    overflow-x: hidden;
  }

  .speaker-body .display {
    font-family: 'Fraunces', serif;
  }

  .speaker-body .mono {
    font-family: 'Space Mono', monospace;
  }

  .speaker-body .wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* Buttons */
  .speaker-body .btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    border-radius: 100px;
    font-family: 'Manrope', sans-serif;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    border: 1.5px solid transparent;
    transition: all .25s ease;
    white-space: nowrap;
    text-decoration: none;
  }

  .speaker-body .btn-primary {
    background: var(--ink);
    color: var(--peach) !important;
  }

  .speaker-body .btn-primary:hover {
    background: var(--ink-deep);
    transform: translateY(-2px);
    color: var(--peach) !important;
  }

  .speaker-body .btn-outline {
    border-color: var(--ink);
    color: var(--ink);
    background: transparent;
  }

  .speaker-body .btn-outline:hover {
    background: var(--ink);
    color: var(--peach);
  }

  .speaker-body .btn-peach {
    background: var(--ink);
    color: var(--peach-deep) !important;
    width: 100%;
    justify-content: center;
    border: none;
  }

  .speaker-body .btn-peach:hover {
    background: var(--ink-deep);
    transform: translateY(-2px);
    color: var(--peach-deep) !important;
  }

  .speaker-body .btn svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    fill: none;
  }

  /* Section headers - matching homepage design system exactly */
  .speaker-body .section-head {
    max-width: 640px;
    margin-bottom: 56px;
    text-align: left;
  }

  .speaker-body .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Manrope', sans-serif !important;
    font-size: 10px !important;
    font-weight: 700 !important;
    color: var(--ink) !important;
    letter-spacing: 3px !important;
    text-transform: uppercase !important;
    margin-bottom: 20px !important;
    background: transparent !important;
    padding: 0 !important;
    border-radius: 0 !important;
  }

  .speaker-body .eyebrow::before {
    content: '';
    width: 28px !important;
    height: 2px !important;
    background: var(--peach-deep) !important;
    border-radius: 2px !important;
  }

  .speaker-body .about-hero .eyebrow {
    background: rgba(255, 210, 177, 0.1) !important;
    border: 1px solid rgba(255, 210, 177, 0.2) !important;
    color: #ffd2b1 !important;
    padding: 6px 16px !important;
    font-size: 0.75rem !important;
    font-weight: 700 !important;
    letter-spacing: 1.5px !important;
    text-transform: uppercase !important;
    border-radius: 50px !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    margin-bottom: 24px !important;
  }
  .speaker-body .about-hero .eyebrow::before {
    display: none !important;
  }

  .speaker-body .section-head p,
  .speaker-body p.sec-desc {
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.85 !important;
    color: var(--text-soft) !important;
    font-weight: 400 !important;
    margin-bottom: 40px !important;
  }

  /* Hero Banner - using Bootstrap layout */
  .speaker-body .about-hero {
    padding-top: 180px;
    padding-bottom: 100px;
    background-image: linear-gradient(180deg, rgba(9, 13, 22, 0.7) 0%, #090d16 100%),
        url('{{ asset("images/media/speaker/hero-banner.webp") }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #ffffff;
  }

  .speaker-body .about-hero h1 {
    font-size: clamp(36px, 5vw, 64px) !important;
    font-weight: 900;
    line-height: 1.25 !important;
    letter-spacing: -2px;
    background: linear-gradient(135deg, #ffffff 20%, #ffbe8e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 20px;
    padding-bottom: 0.15em;
  }

  .speaker-body .about-hero h1 em {
    font-style: italic;
    font-weight: 900;
  }

  .speaker-body .about-hero .hero-copy {
    font-size: 16.5px;
    line-height: 1.85;
    color: rgba(255, 255, 255, 0.85) !important;
    margin-bottom: 30px;
  }

  .speaker-body .about-hero-buttons {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .speaker-body .about-hero-buttons a {
    display: inline-block;
    padding: 14px 32px;
    border-radius: 100px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s;
  }

  /* Partner form box styling */
  .speaker-body .partner-form-box {
    background: #ffffff;
    border-radius: 14px;
    padding: 32px 28px;
    box-shadow: 0 8px 30px rgba(12, 58, 48, 0.08);
  }

  .speaker-body .partner-form-box label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #19352d;
    margin-bottom: 8px;
    text-align: left;
  }

  .speaker-body .partner-form-box .form-control {
    display: block;
    width: 100%;
    padding: 10px 14px;
    font-size: 14px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ddd;
    border-radius: 6px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .speaker-body .partner-form-box .form-control::placeholder {
    color: #888888 !important;
  }

  .speaker-body .partner-form-box .form-control:focus {
    border-color: #0c3a30;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(12, 58, 48, 0.1);
  }

  .speaker-body .partner-form-box textarea.form-control {
    resize: vertical;
    min-height: 100px;
  }

  .speaker-body .partner-submit-btn {
    display: inline-block;
    padding: 12px 28px;
    background-color: #0c3a30;
    color: #ffffff;
    border: none;
    border-radius: 100px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
  }

  .speaker-body .partner-submit-btn:hover {
    background-color: #082821;
    transform: translateY(-1px);
  }

  .speaker-body .text-danger {
    color: #dc3545;
  }

  .speaker-body .mb-3 {
    margin-bottom: 20px;
  }

  .speaker-body .mb-4 {
    margin-bottom: 24px;
  }

  .speaker-body .mt-1 {
    margin-top: 4px;
  }

  .speaker-body .alert {
    padding: 12px 16px;
    border-radius: 6px;
  }

  .speaker-body .alert-danger {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
  }

  @media(max-width: 991px) {
    .speaker-body .about-hero {
      padding: 120px 0 70px;
    }
  }

  @media(max-width: 767px) {
    .speaker-body .about-hero {
      padding: 100px 0 60px;
    }
    .speaker-body .about-hero h1 {
      font-size: 32px;
    }
    .speaker-body .partner-form-box {
      padding: 28px 20px;
    }
  }

  @media(max-width: 480px) {
    .speaker-body .about-hero {
      padding: 90px 0 40px;
    }
    .speaker-body .about-hero h1 {
      font-size: 28px;
    }
    .speaker-body .partner-form-box {
      padding: 22px 16px;
    }
    .speaker-body .partner-submit-btn {
      font-size: 15px;
      height: 52px;
    }
  }

  /* Ways To Take The Stage */
  .speaker-body .formats-section {
    padding: 100px 0;
    background: var(--white);
  }

  .speaker-body .formats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .speaker-body .format-card {
    background: var(--cream);
    border: 1.5px solid rgba(12, 58, 48, 0.1);
    border-radius: 18px;
    padding: 30px 26px;
    transition: border-color .2s, transform .2s;
    text-align: left;
  }

  .speaker-body .format-card:hover {
    border-color: var(--ink);
    transform: translateY(-4px);
  }

  .speaker-body .format-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: var(--ink);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
  }

  .speaker-body .format-icon svg {
    width: 24px;
    height: 24px;
    color: var(--peach);
    fill: none;
  }

  .speaker-body .format-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 18px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 9px;
  }

  .speaker-body .format-card p {
    font-size: 13.5px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  @media(max-width: 900px) {
    .speaker-body .formats-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(max-width: 560px) {
    .speaker-body .formats-grid {
      grid-template-columns: 1fr;
    }
  }

  /* Before You Apply (Eligibility) */
  .speaker-body .eligibility-section {
    padding: 100px 0;
    background: var(--white);
  }

  .speaker-body .elig-layout {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 56px;
    align-items: center;
  }

  .speaker-body .elig-image {
    border-radius: 20px;
    overflow: hidden;
    height: 100%;
  }

  .speaker-body .elig-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .speaker-body .elig-checklist {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 0;
    height: 100%;
  }

  .speaker-body .elig-checklist .tick-list-item:last-child {
    margin-bottom: 0 !important;
  }

  .speaker-body .elig-row {
    display: flex;
    gap: 16px;
    padding: 20px 0;
    border-bottom: 1px solid rgba(12, 58, 48, 0.1);
    align-items: flex-start;
    text-align: left;
  }

  .speaker-body .elig-row:first-child {
    padding-top: 0;
  }

  .speaker-body .elig-row .tick {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    background: var(--ink);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .speaker-body .elig-row .tick svg {
    width: 14px;
    height: 14px;
    color: var(--peach);
    fill: none;
  }

  .speaker-body .elig-row h4 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 17px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 4px;
  }

  .speaker-body .elig-row p {
    font-size: 13.5px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  .speaker-body .elig-note {
    margin-top: 26px;
    padding: 18px 20px;
    background: var(--peach);
    border-radius: 14px;
    font-size: 13.5px;
    color: var(--ink);
    font-weight: 600;
    text-align: left;
  }

  @media(max-width: 940px) {
    .speaker-body .elig-layout {
      grid-template-columns: 1fr;
    }
    .speaker-body .elig-image {
      aspect-ratio: 16/9;
      order: -1;
    }
  }


  @media (min-width: 768px) {
    .speaker-body .nowrap-md {
      white-space: nowrap !important;
    }
  }


  .speaker-body .benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    background: rgba(12, 58, 48, 0.12);
    border: 1px solid rgba(12, 58, 48, 0.12);
    border-radius: 20px;
    overflow: hidden;
  }

  .speaker-body .benefit-card {
    background: var(--cream);
    padding: 34px 30px;
    text-align: left;
  }

  .speaker-body .benefit-card .mono {
    font-size: 12px;
    color: var(--ink);
    background: var(--peach-deep);
    display: inline-block;
    padding: 4px 10px;
    border-radius: 100px;
    margin-bottom: 16px;
  }

  .speaker-body .benefit-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 19px;
    font-weight: 700;
    color: var(--ink);
    margin-bottom: 10px;
  }

  .speaker-body .benefit-card p {
    font-size: 14px;
    color: var(--text-soft);
    line-height: 1.55;
  }

  @media(max-width: 860px) {
    .speaker-body .benefits-grid {
      grid-template-columns: 1fr;
    }
  }

  /* From Application To Stage (Journey) */
  .speaker-body .journey-section {
    padding: 115px 0;
    background: radial-gradient(circle at 10% 20%, #0d4237 0%, #072821 100%) !important;
    color: var(--cream);
    position: relative;
    overflow: hidden;
  }
  .speaker-body .journey-section::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 190, 142, 0.04) 0%, transparent 70%);
    transform: translate(-50%, -50%);
    pointer-events: none;
  }
  .speaker-body .journey-section .section-head h2 {
    color: var(--white) !important;
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(34px, 4vw, 56px) !important;
    font-weight: 900 !important;
    line-height: 1.15 !important;
    letter-spacing: -2px !important;
    margin-bottom: 24px !important;
  }
  .speaker-body .journey-section .section-head p {
    color: #ffffff !important;
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.85 !important;
    margin-bottom: 40px !important;
  }
  .speaker-body .journey-section .eyebrow {
    color: var(--orange-warm) !important;
  }
  .speaker-body .journey-section .eyebrow::before {
    background: var(--orange-warm) !important;
  }
  .speaker-body .journey-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
  }
  .speaker-body .journey-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 210, 177, 0.12);
    border-radius: 20px;
    padding: 36px 30px;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    text-align: left;
  }
  .speaker-body .journey-card:hover {
    transform: translateY(-8px);
    border-color: var(--peach);
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 1px 1px rgba(255, 210, 177, 0.2);
  }
  .speaker-body .journey-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--peach), var(--peach-deep));
    transition: width 0.4s ease;
  }
  .speaker-body .journey-card:hover::after {
    width: 100%;
  }
  .speaker-body .journey-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
  }
  .speaker-body .journey-num {
    font-family: 'Space Mono', monospace;
    font-size: 13px;
    font-weight: 700;
    color: var(--peach);
    background: rgba(255, 210, 177, 0.12);
    padding: 6px 14px;
    border-radius: 100px;
    border: 1px solid rgba(255, 210, 177, 0.2);
    transition: all 0.3s ease;
    line-height: 1;
  }
  .speaker-body .journey-card:hover .journey-num {
    background: var(--peach);
    color: var(--ink);
    border-color: var(--peach);
  }
  .speaker-body .journey-step-icon {
    width: 24px;
    height: 24px;
    color: rgba(255, 210, 177, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .speaker-body .journey-step-icon svg {
    width: 100%;
    height: 100%;
    fill: none;
    stroke: currentColor;
  }
  .speaker-body .journey-card:hover .journey-step-icon {
    color: var(--peach);
    transform: scale(1.15);
  }
  .speaker-body .journey-card h3 {
    font-family: 'Manrope', sans-serif !important;
    font-size: 21px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 12px;
    transition: color 0.3s ease;
  }
  .speaker-body .journey-card:hover h3 {
    color: var(--peach);
  }
  .speaker-body .journey-card p {
    font-size: 14px;
    line-height: 1.6;
    color: rgba(255, 250, 244, 0.7);
    margin: 0;
  }
  @media(max-width: 991px) {
    .speaker-body .journey-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  @media(max-width: 640px) {
    .speaker-body .journey-grid {
      grid-template-columns: 1fr;
    }
  }

  /* CTA */
  .speaker-body .cta-banner {
    padding: 110px 0;
    background: var(--hero-gradient);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .speaker-body .cta-banner h2 {
    font-family: 'Manrope', sans-serif !important;
    font-size: clamp(34px, 4vw, 56px) !important;
    font-weight: 400 !important;
    color: var(--ink) !important;
    letter-spacing: -2px !important;
    max-width: 700px;
    margin: 0 auto 24px;
    line-height: 1.15;
  }

  .speaker-body .cta-banner p {
    font-family: 'Manrope', sans-serif !important;
    font-size: 16px !important;
    color: var(--text-soft) !important;
    max-width: 540px;
    margin: 0 auto 40px !important;
    line-height: 1.85;
    font-weight: 400 !important;
  }

  /* FAQ */
  .speaker-body .faq-section {
    padding: 100px 0;
    background: var(--white) !important;
  }

  .speaker-body .faq-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
  }

  .speaker-body .faq-item {
    border-bottom: 1px solid rgba(12, 58, 48, 0.14);
  }

  .speaker-body .faq-q {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding: 26px 0;
    cursor: pointer;
    font-family: 'Manrope', sans-serif !important;
    font-size: 18px;
    font-weight: 400;
    color: var(--ink);
    text-align: left;
  }

  .speaker-body .faq-q span {
    font-weight: 400;
  }

  .speaker-body .faq-q .plus {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    border: 1.5px solid var(--ink);
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: var(--ink);
    transition: transform .25s ease;
  }

  .speaker-body .faq-item.open .plus {
    transform: rotate(45deg);
  }

  .speaker-body .faq-a {
    max-height: 0;
    overflow: hidden;
    transition: max-height .3s ease;
  }

  .speaker-body .faq-a p {
    padding-bottom: 26px;
    font-size: 14.5px;
    font-weight: 400;
    color: var(--text-soft);
    line-height: 1.65;
    text-align: left;
  }

  .speaker-body .faq-item.open .faq-a {
    max-height: 220px;
  }

  @media(max-width: 900px) {
    .speaker-body .faq-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
  }

  
  /* ---------- Language strip ---------- */
  .speaker-body .lang-strip {
    background: var(--peach-deep);
    color: var(--ink);
    padding: 22px 0;
    overflow: hidden;
  }
  .speaker-body .lang-strip .marquee-track {
    display: flex;
    gap: 44px;
    white-space: nowrap;
    animation: scrollLeft 32s linear infinite;
    width: max-content;
  }
  .speaker-body .lang-strip span {
    font-family: 'Fraunces', serif;
    font-size: 20px;
    font-weight: 500;
    opacity: .9;
    display: flex;
    align-items: center;
    gap: 44px;
  }
  .speaker-body .lang-strip .dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: var(--ink);
    opacity: .6;
  }
  @keyframes scrollLeft {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }
  .speaker-body .lang-caption {
    text-align: center;
    font-size: 13px;
    color: var(--text-soft);
    padding: 16px 0;
    font-weight: 600;
  }


  .ycx-community-section {
    padding: 100px 0;
    background: radial-gradient(circle at 10% 20%, #0d4237 0%, #072821 100%) !important;
    color: var(--cream);
  }

  .ycx-community-section .eyebrow {
    color: var(--orange-warm) !important;
  }
  .ycx-community-section .eyebrow::before {
    background: var(--orange-warm) !important;
  }

  .heading {
    font-size: 2.5rem;
    margin: 15px 0;
    line-height: 1.2;
  }

  .ycx-community-section .heading {
    color: #ffffff !important;
  }

  .description {
    font-size: 1.1rem;
    color: rgba(255, 250, 244, 0.7) !important;
    margin-bottom: 30px;
    max-width: 500px;
  }

  .badge-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 16px;
  }

  @media (max-width: 991px) {
    .badge-grid {
      grid-template-columns: repeat(2, 1fr) !important;
    }
  }
  @media (max-width: 480px) {
    .badge-grid {
      grid-template-columns: 1fr !important;
    }
  }

  .pill {
    padding: 12px 20px;
    border: 1.5px solid var(--peach-deep) !important;
    border-radius: 50px;
    background: linear-gradient(135deg, #fbe3d2 0%, #ffd8bb 100%) !important;
    color: var(--ink-deep) !important;
    font-weight: 700;
    font-size: 0.9rem;
    transition: none !important;
    transform: none !important;
    box-shadow: none !important;
  }
  .pill:hover {
    background: linear-gradient(135deg, var(--peach) 0%, var(--peach-deep) 100%) !important;
    color: var(--ink-deep) !important;
    border-color: var(--peach-deep) !important;
    transform: none !important;
  }

.visual-box {
  flex: 1;
  height: 400px;
  background: #f4f4f4; /* Placeholder background */
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* About YCX Talks Section Styling */
.about-section {
  padding: 100px 0;
  background: var(--cream) !important;
}
.about-layout {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 40px;
}
.about-img-container {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
  height: 480px;
  box-shadow: 0 12px 40px rgba(12, 58, 48, 0.08);
}
.about-img-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.about-content {
  text-align: left;
}
@media (max-width: 991px) {
  .about-layout {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .about-img-container {
    height: 360px;
  }
}
.tracklist-card{
    background:var(--forest); color:var(--cream); border-radius:24px; padding:8px 0 0;
    box-shadow:0 40px 70px -30px rgba(12,58,48,0.5);
  }
  .tracklist-head{
    display:flex;justify-content:space-between;align-items:center;
    padding:20px 28px; font-family:'Space Mono',monospace; font-size:11px;
    letter-spacing:.1em; color:var(--peach); text-transform:uppercase;
  }
  .track-row{
    display:flex; align-items:center; gap:16px;
    padding:18px 28px; border-top:1px solid rgba(255,210,177,0.15);
  }
  .track-play{
    width:34px;height:34px;border-radius:50%;background:var(--peach);color:var(--forest-deep);
    display:flex;align-items:center;justify-content:center;font-size:12px;flex-shrink:0;
  }
  .track-info{flex:1;}
  .track-info b{display:block;font-family:'Fraunces',serif;font-size:16.5px;font-weight:600;color:var(--cream);}
  .track-info span{font-size:13px;color:rgba(255,250,244,0.55);}
  .track-time{font-family:'Space Mono',monospace;font-size:12px;color:var(--peach-deep);}
  .tracklist-foot{
    padding:18px 28px; border-top:1px solid rgba(255,210,177,0.15);
    font-family:'Space Mono',monospace; font-size:11.5px; color:rgba(255,250,244,0.5);
    display:flex;align-items:center;gap:8px;
  }
  .tracklist-foot::before{content:"●"; color:#ff8a6a; animation:blink 1.4s infinite;}
  @keyframes blink{50%{opacity:.2;}}

/* Responsive adjustment */
@media (max-width: 768px) {
  .speaker-body .about-hero > .container > .row { flex-direction: column; }
  .speaker-body .partner-form-box .row { flex-direction: row !important; }
  .button-grid { grid-template-columns: 1fr 1fr; }
}



  /* Shared Tick List Elements */
  .tick-list-item {
    display: flex !important;
    align-items: flex-start !important;
    gap: 12px !important;
    font-size: 14.5px !important;
    font-weight: 600 !important;
    text-align: left !important;
    margin-bottom: 14px !important;
  }
  .tick-list-item.white-text {
    color: #ffffff !important;
  }
  .tick-list-item.ink-text {
    color: var(--ink) !important;
  }
  .tick-list-item .tick-circle {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 50% !important;
    width: 24px !important;
    height: 24px !important;
    background-color: #ffd2b1 !important;
    color: #090d16 !important;
    flex-shrink: 0 !important;
    border: 1px solid rgba(255, 255, 255, 0.15) !important;
    margin-top: 2px !important;
  }
  .tick-list-item .tick-circle i {
    font-size: 0.8rem !important;
    -webkit-text-stroke: 1px !important;
  }
  .tick-list-item.large-tick .tick-circle {
    width: 28px !important;
    height: 28px !important;
  }
  .tick-list-item.large-tick .tick-circle i {
    font-size: 0.95rem !important;
  }
  .eligibility-section .tick-list-item {
    margin-bottom: 24px !important;
  }

.talks {
  padding: 100px 0 120px;
  background: #ffffff !important;
}
.talks .section-head {
  display: flex !important;
  justify-content: space-between !important;
  align-items: flex-end !important;
  margin-bottom: 60px !important;
  gap: 40px !important;
  max-width: 100% !important;
  text-align: left !important;
}
.talks .section-head div {
  flex: 0 0 50% !important;
  max-width: 50% !important;
}
.talks .section-head .sec-desc {
  flex: 0 0 50% !important;
  max-width: 50% !important;
  font-size: 15px !important;
  line-height: 1.65 !important;
  color: var(--text-soft) !important;
  margin: 0 !important;
  text-align: left !important;
}
.talk-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}
.talk-card {
  background: var(--cream) !important;
  border: 1.5px dashed rgba(12, 58, 48, 0.15);
  border-radius: 24px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
  text-align: left;
}
.talk-card:hover {
  transform: translateY(-5px);
  border-color: var(--ink);
  box-shadow: 0 12px 30px rgba(12, 58, 48, 0.06);
}
.talk-thumb {
  position: relative;
  height: 220px;
  width: 100%;
  overflow: hidden;
}
.talk-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.talk-tag {
  position: absolute;
  top: 20px;
  left: 20px;
  background: var(--peach-deep);
  color: var(--ink);
  padding: 6px 14px;
  border-radius: 100px;
  font-size: 11.5px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.talk-dur {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: rgba(8, 40, 33, 0.85);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  color: #ffffff;
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 11.5px;
  font-weight: 700;
  font-family: 'Space Mono', monospace;
}
.ticket-perf {
  height: 1px;
  border-top: 1.5px dashed rgba(12, 58, 48, 0.15);
  position: relative;
  margin: 0;
}
.ticket-perf::before,
.ticket-perf::after {
  content: '';
  position: absolute;
  top: 50%;
  width: 18px;
  height: 18px;
  background: #ffffff; /* Matches section white background */
  border: 1.5px solid rgba(12, 58, 48, 0.15);
  border-radius: 50%;
  transform: translateY(-50%);
}
.ticket-perf::before {
  left: -10px;
}
.ticket-perf::after {
  right: -10px;
}
.talk-body {
  padding: 28px 24px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  flex: 1;
}
.talk-body h3 {
  font-family: 'Manrope', sans-serif !important;
  font-size: 18px;
  font-weight: 700;
  line-height: 1.4;
  color: var(--ink);
  margin: 0;
}
.talk-speaker {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 13.5px;
  color: var(--text-soft);
  font-weight: 600;
  margin-top: auto;
}
.talk-speaker .dot {
  width: 8px;
  height: 8px;
  background-color: var(--ink);
  border-radius: 50%;
  display: inline-block;
}

@media (max-width: 991px) {
  .talks {
    padding: 70px 0 80px !important;
  }
  .talks .section-head {
    margin-bottom: 40px !important;
    gap: 24px !important;
  }
  .talk-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
  .talk-thumb {
    height: 200px;
  }
}

@media (max-width: 768px) {
  .talks {
    padding: 50px 0 60px !important;
  }
  .talks .section-head {
    flex-direction: column !important;
    align-items: flex-start !important;
    gap: 14px !important;
    margin-bottom: 30px !important;
  }
  .talks .section-head div {
    flex: 0 0 100% !important;
    max-width: 100% !important;
    width: 100% !important;
  }
  .talks .section-head .sec-desc {
    flex: 0 0 100% !important;
    max-width: 100% !important;
    width: 100% !important;
    font-size: 14px !important;
    line-height: 1.6 !important;
  }
  .talk-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .talk-card {
    border-radius: 20px;
  }
  .talk-thumb {
    height: 200px;
  }
  .talk-body {
    padding: 22px 20px;
    gap: 10px;
  }
  .talk-body h3 {
    font-size: 17px;
  }
}

@media (max-width: 480px) {
  .talks {
    padding: 40px 0 50px !important;
  }
  .talks .section-head {
    margin-bottom: 24px !important;
    gap: 10px !important;
  }
  .talk-grid {
    gap: 16px;
  }
  .talk-card {
    border-radius: 16px;
  }
  .talk-thumb {
    height: 180px;
  }
  .talk-tag {
    top: 14px;
    left: 14px;
    padding: 4px 10px;
    font-size: 10px;
  }
  .talk-body {
    padding: 18px 16px;
  }
  .talk-body h3 {
    font-size: 15.5px;
    line-height: 1.35;
  }
  .talk-speaker {
    font-size: 12.5px;
  }
}

/* Same form style and theme like feature page form */
.speaker-body .partner-form-box {
  background: rgba(255, 255, 255, 0.03) !important;
  border: 1px solid rgba(255, 255, 255, 0.08) !important;
  backdrop-filter: blur(12px) !important;
  border-radius: 20px !important;
  padding: 32px !important;
  transition: transform 0.3s ease;
}

.speaker-body .partner-form-box:hover {
  transform: translateY(-4px);
  border-color: rgba(255, 210, 177, 0.3) !important;
}

.speaker-body .partner-form-box label {
  display: block;
  margin-bottom: 6px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #ffd2b1 !important;
}

.speaker-body .partner-form-box .form-control,
.speaker-body .partner-form-box textarea,
.speaker-body .partner-form-box select {
  background: rgba(255, 255, 255, 0.05) !important;
  border: 1px solid rgba(255, 255, 255, 0.15) !important;
  color: #ffffff !important;
  border-radius: 12px !important;
  padding: 12px 14px !important;
  height: auto !important;
  font-size: 14.5px !important;
  transition: all 0.3s ease;
}

/* Ensure intlTelInput flag button is visible */
.speaker-body .partner-form-box #speaker-phone {
  padding-left: 95px !important;
}
.speaker-body .partner-form-box .iti {
  width: 100%;
  display: block;
}
.speaker-body .partner-form-box .iti__flag-container {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 4px;
}
.speaker-body .partner-form-box .iti__selected-flag {
  background: rgba(255,255,255,0.06) !important;
  border-radius: 10px 0 0 10px;
}

.speaker-body .partner-form-box .form-control:focus,
.speaker-body .partner-form-box textarea:focus,
.speaker-body .partner-form-box select:focus {
  background: rgba(255, 255, 255, 0.08) !important;
  border-color: #ffd2b1 !important;
  box-shadow: 0 0 10px rgba(255, 210, 177, 0.25) !important;
}

.speaker-body .partner-form-box .form-control::placeholder,
.speaker-body .partner-form-box textarea::placeholder {
  color: rgba(255, 255, 255, 0.4) !important;
}

.speaker-body .partner-submit-btn {
  background: linear-gradient(135deg, #ffffff 0%, #ffd2b1 100%) !important;
  color: #0c3a30 !important;
  font-weight: 700 !important;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 14px 28px !important;
  border: none !important;
  border-radius: 50px !important;
  transition: all 0.3s ease;
}

.speaker-body .partner-submit-btn:hover {
  transform: translateY(-2px);
}

.speaker-body .iti__country-list {
  background-color: #090d16 !important;
  border: 1px solid rgba(255, 255, 255, 0.15) !important;
  color: #ffffff !important;
}

.speaker-body .iti__country {
  padding: 10px 14px !important;
}

.speaker-body .iti__country:hover,
.speaker-body .iti__country.iti__highlight {
  background-color: rgba(255, 210, 177, 0.15) !important;
}

.speaker-body .iti__selected-dial-code {
  color: #ffffff !important;
}
</style>
@endpush

@section('content')
<div class="speaker-body">

  <!-- HERO with embedded form - Bootstrap layout matching partner page -->
  <div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-lg-6">
          <div class="eyebrow rv">Become a YCX Speaker</div>
          <h1>Every Idea Deserves<br> a Stage</h1>
          <p class="hero-copy">Every great idea has the power to inspire action. Speak at YCX Talks and share your expertise, practical insights, and experiences with a community that's eager to learn, grow, and create meaningful impact.</p>
          
          <div class="about-hero-buttons">
            <div class="tick-list-item white-text">
              <span class="tick-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Educate through practical, real-world knowledge
            </div>
            <div class="tick-list-item white-text">
              <span class="tick-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Build credibility as a trusted speaker
            </div>
            <div class="tick-list-item white-text">
              <span class="tick-circle">
                <i class="bi bi-check-lg"></i>
              </span>
              Connect with a diverse and engaged audience
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="partner-form-box" id="speaker-apply-form">

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

            <form action="{{ route('speaker.apply') }}" method="POST" id="speakerForm">
              @csrf

              <div class="row">

                <!-- 1st row: Full Name -->
                <div class="col-md-6 mb-3">
                  <label for="speaker-full-name">Full Name <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-full-name"
                    class="form-control"
                    name="full_name"
                    value="{{ old('full_name') }}"
                    placeholder="Full Name" required>
                  @error('full_name')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 2nd row: Phone Number & Email Address (Optional) -->
                <div class="col-md-6 mb-3">
                  <label for="speaker-phone">Phone Number <span class="text-danger">*</span></label>
                  <input type="tel"
                    id="speaker-phone"
                    class="form-control"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Phone Number" required>
                  @error('phone')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-12 mb-3">
                  <label for="speaker-email">Email Address</label>
                  <input type="email"
                    id="speaker-email"
                    class="form-control"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Email Address">
                  @error('email')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 3rd row: Location -->
                <div class="col-12 mb-3">
                  <label for="speaker-location">Location <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-location"
                    class="form-control"
                    name="location"
                    value="{{ old('location') }}"
                    placeholder="Location" required>
                  @error('location')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 4th row: Your Primary Role & Preferred Speaking Language -->
                <div class="col-md-6 mb-3">
                  <label for="speaker-role">Your Primary Role <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-role"
                    class="form-control"
                    name="primary_role"
                    value="{{ old('primary_role') }}"
                    placeholder="e.g. Founder, Student, etc." required>
                  @error('primary_role')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label for="speaker-language">Preferred Speaking Language <span class="text-danger">*</span></label>
                  <input type="text"
                    id="speaker-language"
                    class="form-control"
                    name="speaking_language"
                    value="{{ old('speaking_language') }}"
                    placeholder="e.g. English, Hindi, etc." required>
                  @error('speaking_language')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 5th row: Social Media URL -->
                <div class="col-12 mb-3">
                  <label for="speaker-social">Social Media URL <span class="text-danger">*</span></label>
                  <input type="url"
                    id="speaker-social"
                    class="form-control"
                    name="social_media_url"
                    value="{{ old('social_media_url') }}"
                    placeholder="https://" required>
                  @error('social_media_url')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <!-- 6th row: Share Your Story and its Main Message (200 words) -->
                <div class="col-12 mb-4">
                  <label for="speaker-story">Share Your Story and its Main Message (200 words) <span class="text-danger">*</span></label>
                  <textarea id="speaker-story"
                    class="form-control"
                    name="story"
                    placeholder="Tell us your story in 200 words..."
                    style="min-height: 100px; resize: vertical;" required>{{ old('story') }}</textarea>
                  @error('story')
                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-12">
                  <button type="submit"
                    class="partner-submit-btn"
                    style="width: 100%; text-align: center;">
                    Submit Application
                  </button>
                </div>

              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== SUCCESS MODAL (Bootstrap) ========== -->
  <div class="modal fade" id="speakerSuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background:linear-gradient(135deg,#fffcf9 0%,#ffeada 100%);border:1px solid rgba(12,58,48,.15);border-radius:20px;">
        <div class="modal-body text-center p-5">
          <div class="mb-4"><i class="bi bi-check-circle-fill" style="font-size:4rem;color:#0c3a30;"></i></div>
          <h3 class="fw-bold mb-3" style="font-size:1.5rem;line-height:1.3;color:#0c3a30;">Thank You for Sharing Your Expertise!</h3>
          <p class="mb-4" style="line-height:1.6;font-size:0.95rem;color:#687588;">We're grateful for your interest in becoming a YCX Talks speaker. We look forward to exploring the ideas and experiences you've shared.</p>
          <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration:none;background-color:#0c3a30;color:#fff;border-radius:12px;border:none;transition:all 0.3s ease;">
            Continue Exploring
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="lang-strip">
    <div class="marquee-track">
      <span>
        English <i class="dot"></i> हिन्दी <i class="dot"></i> தமிழ் <i class="dot"></i> తెలుగు <i class="dot"></i> ಕನ್ನಡ <i class="dot"></i> മലയാളം <i class="dot"></i> বাংলা <i class="dot"></i> मराठी <i class="dot"></i> ਪੰਜਾਬੀ <i class="dot"></i> ગુજરાતી <i class="dot"></i>
        English <i class="dot"></i> हिन्दी <i class="dot"></i> தமிழ் <i class="dot"></i> తెలుగు <i class="dot"></i> ಕನ್ನಡ <i class="dot"></i> മലയാളം <i class="dot"></i> বাংলা <i class="dot"></i> मराठी <i class="dot"></i> ਪੰਜਾਬੀ <i class="dot"></i> ગુજરાતી <i class="dot"></i>
      </span>
    </div>
  </div>
  <!-- <p class="lang-caption">Because the best stories shouldn't wait for a translation.</p> -->
<section class="about-section" id="about">
  <div class="wrap">
    <div class="about-layout">
      <!-- Left Column: Image Card -->
    <div class="about-img-container">
    <img src="{{ asset('images/media/speaker/about-ycx-talks.webp') }}" alt="About YCX Talks">
</div>
      
      <!-- Right Column: Content -->
      <div>
        <span class="eyebrow" style="display: inline-flex; align-items: center; gap: 10px;">About YCX Talks</span>
        <h2>A Stage for Ideas That Create Impact</h2>
        <p>YCX Talks is a knowledge-sharing series where professionals, founders, educators, creators, and industry experts share practical insights that help people think differently, learn continuously, and grow together.</p>
        
        <div style="margin-top: 36px; display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
          <!-- Point 1 -->
          <div class="tick-list-item ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <b style="display: block; font-size: 15px; color: var(--ink); margin-bottom: 4px;">Live Stage Talk</b>
              <span style="font-size: 13px; color: var(--text-soft); line-height: 1.5;">Share your ideas, experiences, or expertise with a live audience</span>
            </div>
          </div>
          <!-- Point 2 -->
          <div class="tick-list-item ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <b style="display: block; font-size: 15px; color: var(--ink); margin-bottom: 4px;">Fireside Chat</b>
              <span style="font-size: 13px; color: var(--text-soft); line-height: 1.5;">Take part in a relaxed conversation about your experiences and insights</span>
            </div>
          </div>
          <!-- Point 3 -->
          <div class="tick-list-item ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <b style="display: block; font-size: 15px; color: var(--ink); margin-bottom: 4px;">Expert Interview</b>
              <span style="font-size: 13px; color: var(--text-soft); line-height: 1.5;">Answer thoughtful questions and share your expertise with the community</span>
            </div>
          </div>
          <!-- Point 4 -->
          <div class="tick-list-item ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <b style="display: block; font-size: 15px; color: var(--ink); margin-bottom: 4px;">Ask Me Anything (AMA)</b>
              <span style="font-size: 13px; color: var(--text-soft); line-height: 1.5;">Answer audience questions and share practical advice from your experience</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="talks" id="talks">
  <div class="wrap">

    <div class="section-head">
      <div>
        <span class="eyebrow">Featured Talks</span>
        <h2>Speak on What You Know Best</h2>
      </div>
      <p class="sec-desc">Explore talks from inspiring speakers who have shared practical knowledge, innovative thinking, and valuable experiences with the YCX community</p>
    </div>

    <div class="talk-grid">

      <div class="talk-card">
       
      <div class="talk-thumb">
    <img src="{{ asset('images/media/speaker/personal-growth.webp') }}" alt="Personal Growth">
    <span class="talk-tag">Personal Growth</span>
</div>

        <div class="ticket-perf"></div>
        <div class="talk-body">
          <h3>Small Habits That Create Extraordinary Results</h3>
          <div class="talk-speaker"><span class="dot"></span><span>Aanya Rao</span></div>
        </div>
      </div>

      <div class="talk-card">

      <div class="talk-thumb">
    <img src="{{ asset('images/media/speaker/education.webp') }}" alt="Education">
    <span class="talk-tag">Education</span>
</div>


        <div class="ticket-perf"></div>
        <div class="talk-body">
          <h3>Rethinking Learning for the Next Generation</h3>
          <div class="talk-speaker"><span class="dot"></span><span>Rohan Mehta</span></div>
        </div>
      </div>

      <div class="talk-card">

      <div class="talk-thumb">
    <img src="{{ asset('images/media/speaker/business-growth.webp') }}" alt="Business Growth">
    <span class="talk-tag">Business Growth</span>
</div>


        <div class="ticket-perf"></div>
        <div class="talk-body">
          <h3>Creating Brands That People Remember and Trust</h3>
          <div class="talk-speaker"><span class="dot"></span><span>Elena Cruz — Marketing</span></div>
        </div>
      </div>

    </div>
  </div>
</section>

  <section class="ycx-community-section" style="padding: 100px 0;">
    <div class="wrap">
      <!-- Row 1: Content & Image -->
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 text-start">
          <span class="eyebrow">Who Belongs On This Stage</span>
          <h2 class="heading">Knowledge Comes from Every Journey</h2>
          <p class="description">We're looking for individuals who enjoy sharing practical knowledge, industry expertise, and fresh perspectives that help others learn and grow.</p>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <!-- <div class="visual-box" style="height: 300px; overflow: hidden; border-radius: 20px; background: #f4f4f4;">
            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1200&q=80" alt="YCX Ecosystem Visual" style="width: 100%; height: 100%; object-fit: cover;">
          </div> -->
          <div class="visual-box" style="height: 300px; overflow: hidden; border-radius: 20px; background: #f4f4f4;">
    <img src="{{ asset('images/media/speaker/who-belongs-on this-stage.webp') }}" alt="YCX Ecosystem Visual" style="width: 100%; height: 100%; object-fit: cover;">
</div>
        </div>
      </div>

      <!-- Row 2: Badges (4 per row) -->
      <div class="row mt-5">
        <div class="col-12 pt-4">
          <div class="badge-grid" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px;">
            <div class="pill text-center">Innovators</div>
            <div class="pill text-center">Entrepreneurs</div>
            <div class="pill text-center">Founders</div>
            <div class="pill text-center">Professionals</div>
            <div class="pill text-center">Creators</div>
            <div class="pill text-center">Mentors</div>
            <div class="pill text-center">Educators</div>
            <div class="pill text-center">Investors</div>
            <div class="pill text-center">Business Leaders</div>
            <div class="pill text-center">Organizations</div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- ELIGIBILITY -->
  <section class="eligibility-section">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Before You Apply</span>
        <h2 class="sec-title">What Makes a Great YCX Talk</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">We're looking for speakers who can share practical knowledge, engage the audience, and create meaningful learning experiences</p>
      </div>
      <div class="elig-layout">
      <div class="elig-image">
    <img src="{{ asset('images/media/speaker/before-you-apply.webp') }}" alt="Speaker presenting on stage to a large audience">
</div>
        <div class="elig-checklist">
          <div class="tick-list-item large-tick ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <h4 style="margin: 0 0 4px 0; font-family: 'Manrope', sans-serif; font-size: 18px; font-weight: 700; color: var(--ink);">Valuable Insights</h4>
              <p style="margin: 0; font-size: 14.5px; color: var(--text-soft); line-height: 1.6;">Share practical ideas, lessons, or strategies that people can apply in their careers, businesses, or everyday life</p>
            </div>
          </div>
          <div class="tick-list-item large-tick ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <h4 style="margin: 0 0 4px 0; font-family: 'Manrope', sans-serif; font-size: 18px; font-weight: 700; color: var(--ink);">Clear & Relevant Topic</h4>
              <p style="margin: 0; font-size: 14.5px; color: var(--text-soft); line-height: 1.6;">Choose a focused topic that addresses real challenges, emerging trends, or valuable opportunities</p>
            </div>
          </div>
          <div class="tick-list-item large-tick ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <h4 style="margin: 0 0 4px 0; font-family: 'Manrope', sans-serif; font-size: 18px; font-weight: 700; color: var(--ink);">Engaging Presentation</h4>
              <p style="margin: 0; font-size: 14.5px; color: var(--text-soft); line-height: 1.6;">Communicate your ideas with clarity, confidence, and an approach that keeps the audience engaged</p>
            </div>
          </div>
          <div class="tick-list-item large-tick ink-text">
            <span class="tick-circle">
              <i class="bi bi-check-lg"></i>
            </span>
            <div>
              <h4 style="margin: 0 0 4px 0; font-family: 'Manrope', sans-serif; font-size: 18px; font-weight: 700; color: var(--ink);">Actionable Takeaways</h4>
              <p style="margin: 0; font-size: 14.5px; color: var(--text-soft); line-height: 1.6;">Leave the audience with useful insights, practical tools, or next steps they can immediately put into practice</p>
            </div>
          </div>
          <!-- <div class="elig-note">Applying doesn't guarantee a stage — but every honest story gets read by a real person on our team.</div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- SPEAKING FORMATS -->
  {{-- <section class="formats-section" id="formats">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 900px;">
        <span class="eyebrow">Ways To Take The Stage</span>
        <h2 class="sec-title">Every Story Finds Its Own Format</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">Tell us your story, and we'll help shape it into the perfect format for your audience. Whether it's a keynote, podcast, or workshop, we'll make it resonate</p>
      </div>
      <div class="formats-grid">
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z"/>
              <path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8"/>
            </svg>
          </div>
          <h3>Podcast Episode</h3>
          <p>A recorded, long-form conversation released across YCX's audio and video channels.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 3h20v14H2z"/>
              <path d="M8 21h8M12 17v4"/>
            </svg>
          </div>
          <h3>Live Stage Talk</h3>
          <p>A solo talk in front of a live YCX audience at one of our city events.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 20h9M16.5 3.5a2.1 2.1 0 013 3L7 19l-4 1 1-4z"/>
            </svg>
          </div>
          <h3>Workshop Session</h3>
          <p>A hands-on session teaching a skill or framework to a small, focused group.</p>
        </div>
        <div class="format-card">
          <div class="format-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="7" r="4"/>
              <path d="M2 21v-2a4 4 0 014-4h6a4 4 0 014 4v2"/>
              <circle cx="19" cy="8" r="3"/>
            </svg>
          </div>
          <h3>Panel Conversation</h3>
          <p>A guided discussion alongside other speakers, moderated by the YCX team.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- FROM APPLICATION TO STAGE -->
  {{-- <section class="journey-section" id="journey">
    <div class="wrap">
      <div class="section-head text-center mx-auto">


        <span class="eyebrow">From Application To Stage</span>

    <h2 class="sec-title" style="white-space: nowrap !important; text-align: center !important;"> becoming a YCX speaker</h2>


        <p class="sec-desc">A real story deserves real preparation. Here's exactly what happens between the moment you apply and the moment you're heard.</p>
      </div>
      
      <div class="journey-grid">
        <!-- Step 1 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 01</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 20h9M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Apply</h3>
          <p>Tell us who you are and the story only you can tell — through the simple application form above.</p>
        </div>

        <!-- Step 2 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 02</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Discovery Call</h3>
          <p>A short conversation with our team to understand your journey and find its real turning points.</p>
        </div>

        <!-- Step 3 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 03</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Story Shaping</h3>
          <p>We work with you to structure the arc of your talk — where it starts, where it turns, and where it lands.</p>
        </div>

        <!-- Step 4 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 04</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v4M8 23h8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Rehearsal</h3>
          <p>Run through your talk with our team. We tighten the pacing and sharpen the message together.</p>
        </div>

        <!-- Step 5 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 05</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M23 7l-7 5 7 5V7zM1 5h14v14H1z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Record or Go Live</h3>
          <p>Step onto the YCX stage or into the studio — in the language you're most yourself in.</p>
        </div>

        <!-- Step 6 -->
        <div class="journey-card">
          <div class="journey-header">
            <span class="journey-num">STEP 06</span>
            <div class="journey-step-icon">
              <svg viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
          </div>
          <h3>Amplify</h3>
          <p>Your story goes out across YCX's channels and community, to the people who need to hear it.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- WHAT YOU GAIN -->
  <section class="benefits-section py-5">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="max-width: 1000px;">
        <span class="eyebrow">What You Gain</span>
        <h2 class="sec-title nowrap-md">Speaking at YCX Goes Beyond the Stage</h2>
        <p class="sec-desc">Every YCX Talk is an opportunity to educate, inspire, and build meaningful connections with a community <br>that values knowledge, ideas, and real experiences</p>
      </div>
      <div class="benefits-grid">
        <div class="benefit-card">
          <span class="mono">REACH</span>
          <h3>A Community That Wants to Learn</h3>
          <p>Share your ideas with an engaged audience that's eager to discover practical knowledge and fresh perspectives</p>
        </div>
        <div class="benefit-card">
          <span class="mono">CREDIBILITY</span>
          <h3>Build Trust Through Expertise</h3>
          <p>Position yourself as a knowledgeable voice by sharing insights backed by real-world experience</p>
        </div>
        <div class="benefit-card">
          <span class="mono">VISIBILITY</span>
          <h3>Expand Your Presence</h3>
          <p>Reach new audiences through YCX events, digital platforms, and community initiatives</p>
        </div>
        <div class="benefit-card">
          <span class="mono">IMPACT</span>
          <h3>Inspire Meaningful Change</h3>
          <p>Help people gain confidence, solve challenges, and take action through your knowledge</p>
        </div>
        <div class="benefit-card">
          <span class="mono">NETWORK</span>
          <h3>Build Valuable Connections</h3>
          <p>Meet founders, professionals, creators, educators, and future collaborators who share your interests.</p>
        </div>
        <div class="benefit-card">
          <span class="mono">LANGUAGE</span>
          <h3>Leave Ideas That Last</h3>
          <p>Your session becomes part of a growing knowledge ecosystem that continues to educate and inspire beyond the event</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" style="
    background-image: url('{{ asset('images/media/speaker/cta-banner.webp') }}');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
    padding: 110px 0;
    text-align: center;
  ">
    {{-- Dark overlay for readability --}}
    <div style="
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(7, 40, 33, 0.82) 0%, rgba(12, 58, 48, 0.72) 100%);
      z-index: 0;
    "></div>

    <div class="wrap" style="position: relative; z-index: 1;">
      <h2 class="sec-title" style="color: #ffffff !important; letter-spacing: -2px; font-weight: 400 !important;">Have a Story that Needs a Bigger Room?</h2>
      <p class="sec-desc" style="color: rgba(255,250,244,0.85) !important;">If you have ideas, expertise, or practical experiences that can educate and inspire others, we'd love to welcome you to the YCX Talks stage.</p>
      <a href="#speakerForm" class="btn btn-primary" style="background: #ffd2b1; color: #0c3a30 !important; font-weight: 700;">Become a Speaker</a>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="wrap">
      <div class="section-head text-center mx-auto" style="margin-bottom: 56px; max-width: 900px;">
        <span class="eyebrow">Questions, Answered</span>
        <h2 class="sec-title">Frequently asked questions</h2>
        <p class="sec-desc" style="max-width: 720px; margin-left: auto; margin-right: auto;">Everything you need to know about the selection process, speaker formats, and how we help you build your story.</p>
      </div>
      <div class="faq-grid">
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>How do I become a YCX speaker?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Fill out the application form above with your story and details. Our team reviews it and reaches out within 5–7 working days if it's a fit.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who can apply?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Students, entrepreneurs, founders, professionals, creators, mentors, educators, investors, and business leaders — if you have a story or expertise worth sharing, you're welcome to apply.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Is there a cost to speak at YCX?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>No. Speaking on YCX is free. We invest in producing your story because we believe it's worth telling well.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What languages can I speak in?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Whatever language you're most fluent and expressive in. We currently support English, Hindi, Tamil, Telugu, and are actively expanding to more.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I nominate someone else?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes — use the "Someone else" option in the form and share as much as you can about their story. We'll take it from there.</p></div>
          </div>
        </div>
        <div class="faq-col">
          <div class="faq-item">
            <div class="faq-q"><span>What happens after I submit the form?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Our team reviews every application. If shortlisted, we'll set up a short discovery call to learn more about your story and next steps.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Do I get help preparing my talk?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes! Our editorial team works closely with you on story structure, presentation, and rehearsals to ensure you're fully prepared.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>What formats are available for talks?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>We match stories to the best format—which could be a video podcast episode, a live stage talk, a panel discussion, or a small workshop.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Can I apply with multiple different stories?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>Yes. If you have different experiences or lessons that serve different target audiences, feel free to apply again with a new concept.</p></div>
          </div>
          <div class="faq-item">
            <div class="faq-q"><span>Who will be in the audience?</span><span class="plus">+</span></div>
            <div class="faq-a"><p>You will speak to an active community of creators, corporate professionals, college students, and founders looking for real, actionable wisdom.</p></div>
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
  document.addEventListener('DOMContentLoaded', function() {

    // intl-tel-input initialization
    var phoneInput = document.getElementById('speaker-phone');
    var iti;
    if (phoneInput && window.intlTelInput) {
      iti = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
      });
    }

    // AJAX Form Submission
    var speakerForm = document.getElementById('speakerForm');
    var thankyouBlock = document.getElementById('thankyou');

    if (speakerForm) {
      speakerForm.addEventListener('submit', function(e) {
        e.preventDefault();

        if (phoneInput && iti) {
          phoneInput.value = iti.getNumber();
        }

        var formData = new FormData(speakerForm);

        fetch(speakerForm.action, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: formData
        })
        .then(function(res) {
          return res.json();
        })
        .then(function(data) {
          if (data.type === 'success' || data.success) {
            speakerForm.reset();
            new bootstrap.Modal(document.getElementById('speakerSuccessModal')).show();
          } else {
            alert(data.message || 'Something went wrong. Please try again.');
          }
        })
        .catch(function(err) {
          console.error(err);
          alert('Submission failed. Please try again.');
        });
      });
    }

    // FAQ Accordion logic
    document.querySelectorAll('.faq-item').forEach(function(item) {
      var q = item.querySelector('.faq-q');
      if (q) {
        q.addEventListener('click', function() {
          var isOpen = item.classList.contains('open');
          document.querySelectorAll('.faq-item').forEach(function(i) { i.classList.remove('open'); });
          if (!isOpen) {
            item.classList.add('open');
          }
        });
      }
    });

    // Category Pills interaction
    var diffPills = document.querySelectorAll('.speaker-body .diff-ui-chips span');
    var diffCards = document.querySelectorAll('.speaker-body .gallery-card');

    diffPills.forEach(function(pill) {
      pill.style.cursor = 'pointer';
      pill.addEventListener('click', function() {
        diffPills.forEach(function(p) { p.classList.remove('chip-active'); });
        pill.classList.add('chip-active');

        var selectedText = pill.textContent.trim().toLowerCase();

        diffCards.forEach(function(card) {
          var label = card.querySelector('.glass-label').textContent.trim().toLowerCase();
          if (label === selectedText) {
            card.style.transform = 'scale(1.05) translateY(-8px)';
            card.style.boxShadow = '0 25px 50px rgba(12, 58, 48, 0.25)';
            card.querySelector('img').style.transform = 'scale(1.08)';
            card.querySelector('.glass-label').style.background = 'var(--ink)';
            card.querySelector('.glass-label').style.color = 'var(--white)';
            card.querySelector('.glass-label').style.borderColor = 'var(--peach)';
          } else {
            card.style.transform = '';
            card.style.boxShadow = '';
            card.querySelector('img').style.transform = '';
            card.querySelector('.glass-label').style.background = '';
            card.querySelector('.glass-label').style.color = '';
            card.querySelector('.glass-label').style.borderColor = '';
          }
        });
      });
    });

  });
</script>
<style>
@keyframes speakerPopIn {
  from { opacity:0; transform:translateY(24px) scale(.96); }
  to   { opacity:1; transform:translateY(0) scale(1); }
}
</style>
@endpush
