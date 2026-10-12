@php
/**
 * Become a sponsor Page SEO Data
 */
$seo = [
    'title'       => 'Become a Sponsor | Young Chanakya X',
    'description' => 'Sponsor Young Chanakya X and showcase your brand through events, podcasts, networking, workshops, and community initiatives with meaningful audience engagement.',
    'keywords'    => 'sponsor YCX, event sponsorship, podcast sponsorship, brand sponsorship, community sponsorship, networking events, sponsor programs, brand visibility, Young Chanakya X sponsor, sponsorship opportunities',
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
            "@type": "WebPage",
            "@id": "https://connectx.youngchanakya.com/become-a-sponsor#webpage",
            "url": "https://connectx.youngchanakya.com/become-a-sponsor",
            "name": "Become a Sponsor | Young Chanakya X",
            "description": "Sponsor Young Chanakya X and showcase your brand through events, podcasts, networking, workshops, and community initiatives with meaningful audience engagement.",
            "isPartOf": {
                "@type": "WebSite",
                "@id": "https://connectx.youngchanakya.com/#website"
            }
        },
        {
            "@type": "Service",
            "name": "Become a Sponsor | Young Chanakya X",
            "url": "https://connectx.youngchanakya.com/become-a-sponsor",
            "description": "Sponsor Young Chanakya X and showcase your brand through events, podcasts, networking, workshops, and community initiatives with meaningful audience engagement.",
            "provider": {
                "@type": "Organization",
                "name": "Young Chanakya X",
                "url": "https://connectx.youngchanakya.com/"
            },
            "serviceType": "Event & Creator Ecosystem sponsorship",
            "areaServed": {
                "@type": "Country",
                "name": "India"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Sponsorship Packages",
                "itemListElement": [
                    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Title sponsorship"}},
                    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Event sponsorship"}},
                    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Community sponsorship"}},
                    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Creator Ecosystem sponsorship"}}
                ]
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://connectx.youngchanakya.com/become-a-sponsor#breadcrumb",
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
                    "name": "Become a Sponsor",
                    "item": "https://connectx.youngchanakya.com/become-a-sponsor"
                }
            ]
        }
    ]
}
@endverbatim
</script>
@endpush
@push('styles')
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
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
        margin-left: 6px;
    }
    .iti__arrow {
        border-top-color: #666666 !important;
    }
    .iti__arrow--up {
        border-bottom-color: #666666 !important;
    }
    .iti__selected-flag {
        border-top-left-radius: 12px !important;
        border-bottom-left-radius: 12px !important;
    }
</style>
@endpush

@section('content')


<style>
        #hdr:not(.scrolled) .hamburger span {
            background: #0c3a30 !important;
        }

        /* =========================================
        sponsor SECTION
        ========================================= */

        .sponsor-contact-section{
            position: relative;
            padding: 180px 0 100px;
            background: #f8f6f2;
            overflow: hidden;
        }

        @media (max-width: 991px){
            .sponsor-contact-section{
                padding: 120px 0 70px;
            }
        }
        @media (max-width: 767px){
            .sponsor-contact-section{
                padding: 100px 0 60px;
            }
        }
        @media (max-width: 480px){
            .sponsor-contact-section{
                padding: 90px 0 50px;
            }
        }

        .sponsor-content h1{
            font-size: 52px;
            line-height: 1.15em;
            font-weight: 700;
            color: #000;
            margin-bottom: 25px;
            letter-spacing: -1px;
        }

        .sponsor-content p{
            font-size: 16px;
            line-height: 1.9em;
            color: #555;
            margin-bottom: 0;
        }

        @media (max-width: 991px){
            .sponsor-content{
                margin-bottom: 40px;
            }

            .sponsor-content h1{
                font-size: 38px;
                line-height: 1.25em;
            }
        }

        @media (max-width: 576px){
            .sponsor-content h1{
                font-size: 30px;
            }
        }

        /* FORM BOX */

        .sponsor-form-box{
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 60px rgba(0,0,0,0.08);
            position: relative;
        }

        @media (max-width: 576px){
            .sponsor-form-box{
                padding: 25px;
            }
        }

        /* INPUTS */

        .sponsor-form-box .form-control,
        .sponsor-form-box select{
            height: 58px;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 0 18px;
            font-size: 15px;
            color: #000;
            box-shadow: none;
            transition: all .3s ease;
            background: #fff;
        }

        .sponsor-form-box label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #19352d;
            margin-bottom: 8px;
            text-align: left;
        }

        .sponsor-form-box .form-control::placeholder {
            color: #888888 !important;
        }

        .sponsor-form-box textarea.form-control{
            height: 130px;
            padding-top: 15px;
        }

        .sponsor-form-box .form-control:focus,
        .sponsor-form-box select:focus{
            border-color: #0c3a30;
            box-shadow: 0 0 0 3px rgba(12,58,48,0.12);
        }

        /* BUTTON */

        .btn-sponsor-submit{
            width: 100%;
            height: 58px;
            border: none;
            border-radius: 12px;
            background: #19352d;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            transition: all .3s ease;
        }

        .btn-sponsor-submit:hover{
            background: #071f1a;
            color: #fff;
        }

        /* OPTIONAL SHAPE */

        .sponsor-contact-section::before{
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(118,88,59,0.05);
            border-radius: 50%;
            top: -200px;
            right: -150px;
        }






        /* sponsor section */
        /* ======================
        sponsor CARDS
        ====================== */

        .sponsor-category-section{
            background:#fff;
        }

        .sponsor-card{
            background:#ffffff;
            padding:40px 30px;
            border-radius:25px;
            height:100%;

            border:1px solid #e8e8e8;

            box-shadow:0 10px 30px rgba(0,0,0,.05);
        }

        /* removed hover */

        .sponsor-card .icon{
            width:75px;
            height:75px;

            border-radius:20px;

            background: #19352d;

            color:#fff;

            font-size:28px;

            display:flex;
            align-items:center;
            justify-content:center;

            margin-bottom:25px;
        }

        .sponsor-card h4{
            color:#000;
            font-size:24px;
            font-weight:700;
            margin-bottom:15px;
        }

        .sponsor-card p{
            color:#555;
            line-height:1.8;
            margin-bottom:20px;
        }

        .sponsor-card ul{
            padding:0;
            margin:0;
            list-style:none;
        }

        .sponsor-card ul li{
            position:relative;

            padding-left:30px;

            margin-bottom:12px;

            color:#222;

            font-size:15px;
        }

        .sponsor-card ul li:before{
            content:"✓";

            position:absolute;

            left:0;
            top:2px;

            width:18px;
            height:18px;

            background: #0c3a30;

            border-radius:50%;

            color:#fff;

            display:flex;
            align-items:center;
            justify-content:center;

            font-size:10px;
        }



        /* CTA BUTTON */

        .sponsor-cta{
            margin-top:35px;
        }

        .btn-become-sponsor{
            display:inline-flex;
            align-items:center;
            justify-content:center;

            padding:16px 34px;

            background: #19352d;

            color:#fff;

            border-radius:14px;

            font-size:16px;
            font-weight:600;

            text-decoration:none;

            transition:.3s ease;

            border:1px solid #19352d;
        }

        .btn-become-sponsor:hover{
            background:transparent;

            color:#ffd2b1;

            transform:translateY(-3px);
        }

        /* smooth scroll */

        html{
            scroll-behavior:smooth;
        }
        /* second section  */
        /* ==========================
        WHY CONNECTX SECTION
        ========================== */

        .connectx-benefits-section{
            background:#fff;
        }

        .connectx-benefits-section .sc-title{
            color:#000;
        }

        .connectx-benefits-section .main-title{
            color:#000;
        }

        .connectx-benefits-section p{
            color:#666;
        }

        .benefit-card{
            background: var(--cream);

            padding:35px;

            height:100%;

            border-radius:13px;

            border:1px solid #ececec;
        }

        .icon-box{
            width:46px;
            height:46px;

            border-radius:18px;

            background: #ffbe8e;

            color:var(--primary);

            display:flex;
            align-items:center;
            justify-content:center;

            font-size:24px;

            margin-bottom:22px;
        }
        .icon-box i{
            font-size:18px;
        }

        .benefit-card h4{
            color:#0c3a30;

            font-size:22px;

            font-weight:700;

            margin-bottom:15px;
        }

        .benefit-card p{
            color:#666;

            line-height:1.8;

            margin:0;
        }



        /* =============================================
        CONNECTX BRAND SECTION — OVERRIDES
        ============================================= */

        /* Override global bg image with our professional conference photo */
        .connectx-brand-section.fancy-banner-seven .bg-wrapper {
            background: url('../images/media/here-is-my-colleague.jpg') no-repeat center center !important;
            background-size: cover !important;
            min-height: 680px;
            position: relative;
        }

        /* Strong dark overlay so all text is crisp and readable */
        .connectx-brand-section.fancy-banner-seven .bg-wrapper::before,
        .connectx-brand-section.fancy-banner-seven .bg-wrapper::after {
            content: '' !important;
            position: absolute !important;
            inset: 0 !important;
            width: 100% !important;
            height: 100% !important;
            transform: none !important;
            z-index: 0 !important;
        }

        .connectx-brand-section.fancy-banner-seven .bg-wrapper::before {
            background: rgba(0, 0, 0, 0.70) !important;
        }

        .connectx-brand-section.fancy-banner-seven .bg-wrapper::after {
            background: rgba(0, 0, 0, 0.25) !important;
        }

        /* Ensure z-index stacking works for content */
        .connectx-brand-section .bg-wrapper .container {
            position: relative;
            z-index: 2;
        }

        /* ---- Left heading block ---- */
        .connectx-brand-section .brand-tag {
            display: inline-block;
            background: rgba(118,88,59,0.30);
            border: 1px solid rgba(118,88,59,0.60);
            color: #e8c89a;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 30px;
            margin-bottom: 22px;
        }

        .connectx-brand-section .brand-heading {
            font-size: clamp(30px, 4vw, 52px);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .connectx-brand-section .brand-heading span {
            color: #e8c89a;
        }

        .connectx-brand-section .brand-desc {
            font-size: 17px;
            line-height: 1.85;
            color: rgba(255,255,255,0.80);
            margin-bottom: 36px;
            max-width: 480px;
        }

        /* CTA button for brand section */
        .btn-brand-explore {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 36px;
            background: #0c3a30;
            color: #ffd2b1;
            font-size: 16px;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            border: 2px solid #0c3a30;
            transition: all .3s ease;
            letter-spacing: 0.3px;
        }

        .btn-brand-explore i {
            font-size: 14px;
            transition: transform .3s ease;
        }

        .btn-brand-explore:hover {
            background: transparent;
            color: #ffd2b1;
            border-color: #ffd2b1;
        }

        .btn-brand-explore:hover i {
            transform: translateX(4px);
        }

        /* ---- Points list — high specificity to override global fancy-banner-seven li styles ---- */
        .connectx-brand-section .bg-wrapper .connectx-points,
        .connectx-points {
            padding-left: 0;
            margin: 0;
            list-style: none;
        }

        /* Override the white-card style from style.min.css for fancy-banner-seven .bg-wrapper li */
        .connectx-brand-section .bg-wrapper .connectx-points li,
        .connectx-brand-section.fancy-banner-seven .bg-wrapper li.connectx-points-item,
        .connectx-points li {
            position: relative !important;
            color: #ffffff !important;
            font-size: 17px !important;
            font-weight: 500 !important;
            line-height: 1.5 !important;
            padding: 18px 20px 18px 68px !important;
            margin-bottom: 10px !important;
            border-radius: 14px !important;
            background: rgba(255,255,255,0.08) !important;
            border: 1px solid rgba(255,255,255,0.13) !important;
            backdrop-filter: blur(8px) !important;
            -webkit-backdrop-filter: blur(8px) !important;
            transition: background .25s ease, border-color .25s ease !important;
        }

        .connectx-brand-section .bg-wrapper .connectx-points li:hover,
        .connectx-points li:hover {
            background: rgba(255,255,255,0.14) !important;
            border-color: rgba(232,200,154,0.40) !important;
        }

        .connectx-brand-section .bg-wrapper .connectx-points li:last-child,
        .connectx-points li:last-child {
            margin-bottom: 0 !important;
            border-bottom: 1px solid rgba(255,255,255,0.13) !important;
        }

        /* Override the orange/peach bullet from style.min.css fancy-banner-seven .bg-wrapper li:before */
        .connectx-brand-section .bg-wrapper .connectx-points li::before,
        .connectx-brand-section.fancy-banner-seven .bg-wrapper .connectx-points li::before,
        .connectx-points li::before {
            content: "✓" !important;
            position: absolute !important;
            left: 16px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            width: 36px !important;
            height: 36px !important;
            background: #ffca95 !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            color: #0c3a30 !important;
            font-size: 15px !important;
            font-weight: 800 !important;
            font-family: inherit !important;
        }

        /* Override the after pseudo-element (check icon overlay from global) */
        .connectx-brand-section .bg-wrapper .connectx-points li::after,
        .connectx-brand-section.fancy-banner-seven .bg-wrapper .connectx-points li::after,
        .connectx-points li::after {
            display: none !important;
        }

        @media(max-width:991px){
            .connectx-brand-section.fancy-banner-seven .bg-wrapper {
                min-height: auto;
            }
            .connectx-brand-section .brand-desc {
                max-width: 100%;
            }
            .connectx-brand-section .bg-wrapper .connectx-points li,
            .connectx-points li {
                font-size: 15px !important;
                padding-left: 60px !important;
            }
        }

        @media(max-width:767px){
            .connectx-brand-section .brand-heading {
                font-size: 26px;
            }
            .connectx-brand-section .bg-wrapper .connectx-points li,
            .connectx-points li {
                font-size: 14px !important;
                padding: 14px 16px 14px 56px !important;
            }
            .connectx-brand-section .bg-wrapper .connectx-points li::before,
            .connectx-points li::before {
                width: 30px !important;
                height: 30px !important;
                font-size: 13px !important;
                left: 14px !important;
            }
        }

        /* *4. sponsorship Categories* */

        .title-style-one .sc-title{
            color:#000;
        }

        .title-style-one .main-title{
            font-size: clamp(34px, 4vw, 56px);
            font-weight: 900;
            line-height: 1.15;
            letter-spacing: -2px;
            color: #0c3a30;
            margin-bottom: 24px;
        }
        /* ==========================
        CTA SECTION
        ========================== */

        .connectx-cta-section{
            background:#fff;
        }

        .cta-wrapper{

            background:#f8f6f3;

            padding:70px;

            border-radius:35px;

            border:1px solid #ececec;
        }

        .cta-content .sc-title{
            color:#0c3a30;

            margin-bottom:15px;

            font-weight:700;
        }

        .cta-content h2{

            color:#000;

            font-size:48px;

            font-weight:700;

            line-height:1.3;

            margin-bottom:35px;
        }

        .cta-points{

            display:flex;

            flex-wrap:wrap;

            gap:18px;
        }

        .point{

            display:flex;

            align-items:center;

            gap:12px;

            background:#fff;

            padding:14px 22px;

            border-radius:50px;

            border:1px solid #e7e7e7;
        }

        .point i{

            width:28px;

            height:28px;

            background:#0c3a30;

            color:#fff;

            border-radius:50%;

            display:flex;

            align-items:center;

            justify-content:center;

            font-size:12px;
        }

        .point span{
            color:#111;
            font-weight:600;
        }

        .theme-btn-one{
            margin-top:20px;
        }


        @media(max-width:991px){

        .cta-wrapper{
            padding:45px;
        }

        .cta-content h2{
            font-size:34px;
        }

        .text-lg-end{
            margin-top:35px;
        }

        }



        /* ==========================================
        BECOME A sponsor — MOBILE RESPONSIVE
        Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
        ========================================== */

        /* ---- Hero / sponsor Contact Section ---- */
        @media (max-width: 991px) {
            .sponsor-contact-section {
                padding: 130px 0 70px;
            }
            .sponsor-content {
                margin-bottom: 40px;
                text-align: center;
            }
            .sponsor-content h1 {
                font-size: 36px;
            }
            .sponsor-cta {
                display: flex;
                justify-content: center;
            }
        }

        @media (max-width: 767px) {
            .sponsor-contact-section {
                padding: 110px 0 60px;
            }
            .sponsor-content h1 {
                font-size: 28px;
            }
            .sponsor-form-box {
                padding: 28px 20px;
            }
        }

        @media (max-width: 480px) {
            .sponsor-contact-section {
                padding: 100px 0 50px;
            }
            .sponsor-content h1 {
                font-size: 24px;
                letter-spacing: -0.5px;
            }
            .sponsor-form-box {
                padding: 20px 14px;
            }
            .btn-sponsor-submit {
                height: 52px;
                font-size: 15px;
            }
            .btn-become-sponsor {
                padding: 13px 24px;
                font-size: 14px;
            }
        }

        /* ---- Why Young Chanakya X (Benefits) Section ---- */
        @media (max-width: 991px) {
            .connectx-benefits-section.pt-120 {
                padding-top: 70px;
            }
            .connectx-benefits-section.pb-120 {
                padding-bottom: 70px;
            }
            .benefit-card {
                padding: 28px;
            }
        }

        @media (max-width: 767px) {
            .connectx-benefits-section .main-title {
                font-size: 28px;
            }
            .benefit-card {
                padding: 24px 20px;
            }
            .benefit-card h4 {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .connectx-benefits-section .main-title {
                font-size: 22px;
            }
            .benefit-card {
                padding: 20px 16px;
            }
            .icon-box {
                width: 56px;
                height: 56px;
                font-size: 20px;
                margin-bottom: 16px;
            }
        }

        /* ---- Brand Presence Section ---- */
        @media (max-width: 991px) {
            .connectx-brand-section .bg-wrapper {
                min-height: auto !important;
                padding: 60px 20px !important;
            }
            .connectx-points li {
                font-size: 16px;
                padding-left: 55px;
            }
            .connectx-brand-section .title-two h2 {
                font-size: 28px;
            }
        }

        @media (max-width: 767px) {
            .connectx-brand-section .bg-wrapper {
                padding: 50px 16px !important;
            }
            .connectx-brand-section .title-two h2 {
                font-size: 24px;
            }
            .connectx-brand-section .title-two p {
                font-size: 14px;
            }
            .connectx-points li {
                font-size: 15px;
                padding-left: 52px;
                padding-top: 14px;
                padding-bottom: 14px;
            }
            .connectx-points li::before {
                width: 36px;
                height: 36px;
                font-size: 16px;
                top: 12px;
            }
            .connectx-brand-section .col-lg-5 {
                margin-top: 30px;
            }
        }

        @media (max-width: 480px) {
            .connectx-brand-section .title-two h2 {
                font-size: 21px;
            }
            .connectx-points li {
                font-size: 14px;
                padding-left: 48px;
            }
            .connectx-points li::before {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }
        }

        /* ---- sponsorship Categories Section ---- */
        @media (max-width: 991px) {
            .sponsor-category-section.pt-120 {
                padding-top: 70px;
            }
            .sponsor-category-section.pb-120 {
                padding-bottom: 70px;
            }
            .sponsor-card {
                padding: 30px 24px;
            }
            .title-style-one .main-title {
                letter-spacing: -1px;
            }
        }

        @media (max-width: 767px) {
            .title-style-one .main-title {
                font-size: 26px;
                letter-spacing: -0.5px;
            }
            .sponsor-card {
                padding: 24px 20px;
            }
            .sponsor-card h4 {
                font-size: 20px;
            }
            .sponsor-card .icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
                margin-bottom: 18px;
            }
        }

        @media (max-width: 480px) {
            .title-style-one .main-title {
                font-size: 22px;
            }
            .sponsor-card {
                padding: 20px 16px;
            }
            .sponsor-card h4 {
                font-size: 18px;
            }
        }

        /* ---- CTA / text-feature-five Section ---- */
        @media (max-width: 991px) {
            .text-feature-five.mt-150 {
                margin-top: 80px !important;
            }
            .connectx-cta-bg .text-wrapper {
                padding-top: 40px !important;
                padding-bottom: 40px !important;
            }
            .connectx-cta-bg .media-wrapper {
                min-height: 260px;
            }
            .cta-wrapper {
                padding: 40px;
            }
            .cta-content h2 {
                font-size: 30px;
            }
        }

        @media (max-width: 767px) {
            .text-feature-five.mt-150 {
                margin-top: 60px !important;
            }
            .connectx-cta-bg .text-wrapper {
                padding: 28px 20px !important;
            }
            .connectx-cta-bg .col-lg-6.order-lg-first {
                order: 2 !important;
            }
            .connectx-cta-bg .col-lg-6.order-lg-last {
                order: 1 !important;
            }
            .connectx-cta-bg .title-one h2.text-dark {
                font-size: 24px;
            }
            .cta-wrapper {
                padding: 30px 20px;
            }
            .cta-content h2 {
                font-size: 26px;
            }
            .cta-points {
                gap: 12px;
            }
            .point {
                padding: 10px 16px;
                font-size: 14px;
            }
            .btn-eleven {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .connectx-cta-bg .title-one h2.text-dark {
                font-size: 20px;
            }
            .cta-content h2 {
                font-size: 22px;
            }
            .cta-wrapper {
                padding: 24px 14px;
            }
            .connectx-list li {
                font-size: 14px;
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

        /* fifth section */


</style>

<style>
    .about-hero .eyebrow.rv { color: #0c3a30 !important; font-weight: 700; font-family: 'DM Mono', monospace; font-size: 13px; }
    .about-hero .eyebrow.rv::before { background: #d4936a !important; width: 42px; height: 2px; }
</style>
<div class="about-hero" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">SPONSOR YOUNG CHANAKYA X</div>
                <h1 style="font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Become a Sponsor</h1>
                <p class="hero-copy" style="margin-bottom: 24px;">Partner with Young Chanakya X to position your brand at the center of innovation, community leadership, and digital media excellence. Showcase your brand directly to tomorrow's dynamic leaders.</p>
                
                <ul class="checklist-style" style="margin-bottom: 30px;">
                    <li>
                        <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                        Brand integration across flagship events and media platforms.
                    </li>
                    <li>
                        <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                        Direct connection with top-tier creators, founders, and leaders.
                    </li>
                    <li>
                        <span class="check-icon"><i class="bi bi-check-lg"></i></span>
                        Structured opportunities for target-audience activation.
                    </li>
                </ul>

                <div class="about-hero-buttons">
                    <a href="#sponsorship-categories" class="about-btn-2">View Opportunities</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sponsor-form-box" id="sponsor-form">

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

                    <form action="{{ route('sponsor.apply') }}" method="POST">
                        @csrf

                        <div class="row">

                            <!-- 1. Full Name and Phone number -->
                            <div class="col-md-6 mb-3">
                                <label for="sponsor-name">Full Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       id="sponsor-name"
                                       class="form-control"
                                       name="name"
                                       value="{{ old('name') }}"
                                       placeholder="Full Name" required>
                                @error('name')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sponsor-phone">Phone / WhatsApp <span class="text-danger">*</span></label>
                                <input type="tel"
                                       id="sponsor-phone"
                                       class="form-control"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="E.g. +91 9876543210" required>
                                @error('phone')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 2. Email -->
                            <div class="col-12 mb-3">
                                <label for="sponsor-email">Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                       id="sponsor-email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Email Address" required>
                                @error('email')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 3. Company Name, Designation -->
                            <div class="col-md-6 mb-3">
                                <label for="sponsor-company">Company Name <span class="text-danger">*</span></label>
                                <input type="text"
                                       id="sponsor-company"
                                       class="form-control"
                                       name="company"
                                       value="{{ old('company') }}"
                                       placeholder="Company Name" required>
                                @error('company')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sponsor-designation">Designation / Role <span class="text-danger">*</span></label>
                                <input type="text"
                                       id="sponsor-designation"
                                       class="form-control"
                                       name="designation"
                                       value="{{ old('designation') }}"
                                       placeholder="Designation / Role" required>
                                @error('designation')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 4. LinkedIn and website url -->
                            <div class="col-md-6 mb-3">
                                <label for="sponsor-linkedin">Social Media Profile <span class="text-danger">*</span></label>
                                <input type="url"
                                       id="sponsor-linkedin"
                                       class="form-control"
                                       name="linkedin"
                                       value="{{ old('linkedin') }}"
                                       placeholder="Social Media Profile" required>
                                @error('linkedin')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sponsor-website">Website URL (Optional)</label>
                                <input type="url"
                                       id="sponsor-website"
                                       class="form-control"
                                       name="website"
                                       value="{{ old('website') }}"
                                       placeholder="Website URL (Optional)">
                                @error('website')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- 5. sponsor Type -->
                            <div class="col-12 mb-4">
                                <label for="sponsor-level">Sponsor Type <span class="text-danger">*</span></label>
                                <select class="form-control form-select" id="sponsor-level" name="sponsorship_level" required>
                                    <option value="" disabled {{ old('sponsorship_level') ? '' : 'selected' }}>
                                        Select sponsor Type
                                    </option>
                                    @foreach(['Title Sponsor', 'Powered By Sponsor', 'Co-Sponsor', 'Platinum Sponsor', 'Gold Sponsor', 'Silver Sponsor', 'Ticket Sponsor', 'Beverage Sponsor', 'Podcast Sponsor'] as $type)
                                        <option value="{{ $type }}" {{ old('sponsorship_level') == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                                @error('sponsorship_level')
                                    <div class="text-danger small mt-1" style="font-size: 0.75rem; font-weight: 600;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn-sponsor-submit">
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


<style>
  /* TIERS UI FROM sponsor PAGE */
  .tiers-section { max-width: 1300px; margin: 0 auto; padding: 100px 5vw; }
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
  .tier-title { font-family: 'Playfair Display', Georgia, serif; font-size: 24px; font-weight: 700; color: #0c3a30; margin-bottom: 6px; }
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
  
  .tier-btn-outline {
   background:#ffca95; color: #0c3a30; padding: 14px 32px; border-radius: 100px; border:none;
    font-size: 15px; font-weight: 500; text-decoration: none; display: inline-block; transition: all 0.2s;
  }
  .tier-btn-outline:hover { background: #0c3a30; color: #ffd2b1; }
   .tier-card.featured .tier-btn-outline:hover { border: 1px solid #fff; }

  @media(max-width: 991px){
      .tier-grid { grid-template-columns: 1fr; }
  }
</style>

<section class="tiers-section position-relative pt-120 pb-120" id="sponsorship-categories">
  <div class="container">
    <div class="section-head text-center" style="margin-bottom: 50px;">
        <div class="eyebrow rv" style="color: #0c3a30; font-size: 10px; font-weight: 700; letter-spacing: 3px;">Young Chanakya X</div>
        <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Sponsorship Categories</h2>
        <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Choose a sponsorship level based on your visibility, integration, and collaboration goals.</p>
    </div>

    <div class="tier-grid">
      <!-- Card 1 -->
      <div class="tier-card featured">
        <div class="tier-badge">Flagship</div>
        <div class="tier-name">Top Tier</div>
        <div class="tier-title">Title sponsor</div>
        <div class="tier-tagline">Primary brand visibility across major ConnectX initiatives</div>
        <ul class="tier-list collapsed">
          <li>Naming rights across flagship events and properties</li>
          <li>Highest logo visibility across all formats</li>
          <li>Premium positioning in podcasts, events, and lounges</li>
          <li>Opening and closing mention in key sessions</li>
          <li>Dedicated brand integration in major campaigns</li>
          <li>Priority access to top creators and influencers</li>
          <li>Exclusive collaboration opportunities</li>
          <li>Brand-led sessions or keynote opportunities</li>
          <li>Featured across all promotional materials</li>
          <li>Maximum visibility across the ConnectX ecosystem</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>

      <!-- Card 2 -->
      <div class="tier-card">
        <div class="tier-name">Secondary Tier</div>
        <div class="tier-title">Powered By sponsor</div>
        <div class="tier-tagline">Secondary headline branding with strong ecosystem presence</div>
        <ul class="tier-list collapsed">
          <li>"Powered By" branding across key initiatives</li>
          <li>Prominent logo placement across platforms</li>
          <li>Integration in podcasts and content series</li>
          <li>Visibility in events and networking lounges</li>
          <li>Co-branded campaign opportunities</li>
          <li>Access to creator collaborations</li>
          <li>Mentions in promotional activities</li>
          <li>Participation in select sessions and formats</li>
          <li>Strong presence across digital channels</li>
          <li>Consistent exposure across programs</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
      
      <!-- Card 3 -->
      <div class="tier-card">
        <div class="tier-name">Shared Tier</div>
        <div class="tier-title">Co-sponsor</div>
        <div class="tier-tagline">Supporting partner across shared initiatives</div>
        <ul class="tier-list collapsed">
          <li>Shared branding across events and activities</li>
          <li>Logo placement alongside other sponsors</li>
          <li>Participation in collaborative campaigns</li>
          <li>Visibility in selected content formats</li>
          <li>Access to networking opportunities</li>
          <li>Inclusion in event promotions</li>
          <li>Brand mentions in shared communications</li>
          <li>Limited access to creator collaborations</li>
          <li>Presence in joint initiatives</li>
          <li>Support-level visibility across ecosystem</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
    </div>

    <div class="tier-grid" style="margin-top: 24px;">
      <!-- Card 4 -->
      <div class="tier-card">
        <div class="tier-name">Premium Tier</div>
        <div class="tier-title">Platinum sponsor</div>
        <div class="tier-tagline">High-level presence across multiple formats and touchpoints</div>
        <ul class="tier-list collapsed">
          <li>High-visibility branding across events and content</li>
          <li>Integration in podcasts and digital formats</li>
          <li>Logo placement in key promotional assets</li>
          <li>Access to curated creators and influencers</li>
          <li>Participation in networking sessions</li>
          <li>Brand inclusion in campaigns and collaborations</li>
          <li>Visibility in lounges and meetups</li>
          <li>Priority placement in selected initiatives</li>
          <li>Multi-channel exposure across ConnectX</li>
          <li>Consistent brand engagement opportunities</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
      
      <!-- Card 5 -->
      <div class="tier-card">
        <div class="tier-name">Mid Tier</div>
        <div class="tier-title">Gold sponsor</div>
        <div class="tier-tagline">Strong visibility in selected events and content formats</div>
        <ul class="tier-list collapsed">
          <li>Branding across selected events and sessions</li>
          <li>Logo presence in content and campaigns</li>
          <li>Participation in creator collaborations</li>
          <li>Visibility in meetups and roundtables</li>
          <li>Access to networking opportunities</li>
          <li>Brand mentions in promotional materials</li>
          <li>Inclusion in digital campaigns</li>
          <li>Presence in specific content formats</li>
          <li>Moderate exposure across channels</li>
          <li>Engagement-driven visibility</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
      
      <!-- Card 6 -->
      <div class="tier-card">
        <div class="tier-name">Entry Tier</div>
        <div class="tier-title">Silver sponsor</div>
        <div class="tier-tagline">Focused exposure in specific programs or segments</div>
        <ul class="tier-list collapsed">
          <li>Branding in selected programs or sessions</li>
          <li>Logo placement in limited formats</li>
          <li>Participation in specific campaigns</li>
          <li>Access to targeted networking opportunities</li>
          <li>Visibility in select content pieces</li>
          <li>Inclusion in event-specific promotions</li>
          <li>Brand mentions in curated activities</li>
          <li>Limited creator collaboration access</li>
          <li>Presence in niche segments</li>
          <li>Focused visibility within defined scope</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
    </div>

    <!-- 3rd Row: Custom Sponsorship Tiers -->
    <div class="tier-grid" style="margin-top: 24px;">
      <!-- Card 7: Ticket Sponsor -->
      <div class="tier-card">
        <div class="tier-name">Entry Tier</div>
        <div class="tier-title">Ticket Sponsor</div>
        <div class="tier-tagline">Exclusive branding on event entry tickets, badges, and registrations.</div>
        <ul class="tier-list collapsed">
          <li>Logo printed on all physical/digital entry tickets</li>
          <li>Brand placement at the registration desk</li>
          <li>Inclusion in ticket confirmation emails</li>
          <li>5 Complimentary VIP passes to the events</li>
          <li>Social media shout-out during ticket launch campaigns</li>
          <li>Brand mention in attendee guide</li>
          <li>Standard visibility across website sponsor listings</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>

      <!-- Card 8: Beverage Sponsor -->
      <div class="tier-card featured">
        <div class="tier-badge">Popular</div>
        <div class="tier-name">Ecosystem Tier</div>
        <div class="tier-title">Beverage Sponsor</div>
        <div class="tier-tagline">Exclusive brand placement at beverage bars, lounges, and refreshment zones.</div>
        <ul class="tier-list collapsed">
          <li>Custom branded cups, coasters, and napkins at the event</li>
          <li>Prominent logo placement at all food &amp; beverage counters</li>
          <li>Signature cocktail/drink named after your brand</li>
          <li>Brand mention during networking breaks</li>
          <li>Dedicated area in the lounge for brand activation</li>
          <li>10 Complimentary VIP passes to the events</li>
          <li>Prominent logo placement in food court maps and digital displays</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
      
      <!-- Card 9: Podcast Sponsor -->
      <div class="tier-card">
        <div class="tier-name">Digital Tier</div>
        <div class="tier-title">Podcast Sponsor</div>
        <div class="tier-tagline">Integrate your brand natively into our podcast episodes and digital content.</div>
        <ul class="tier-list collapsed">
          <li>30-second mid-roll slot in featured podcast episodes</li>
          <li>Logo in podcast thumbnails and video overlays</li>
          <li>Brand link in podcast descriptions across platforms</li>
          <li>Social media clips highlighting the sponsor</li>
          <li>Mention in newsletter and community announcements</li>
          <li>Opportunity to suggest guests or content angles</li>
          <li>Year-round digital exposure on the YCX ecosystem</li>
        </ul>
        <button class="tier-toggle" onclick="toggleTier(this)">Show all benefits</button>
        <a href="#sponsor-form" class="tier-btn-outline" style="width:100%; text-align:center;">Become a sponsor</a>
      </div>
    </div>
  </div>
</section>

<!-- Image Carousel Section -->
@include('partials.image-carousel')

<!-- ===================================
WHY CONNECT WITH CONNECTX
=================================== -->
<section class="connectx-benefits-section pt-60 pb-30">
    <div class="container">

        <!-- Heading -->
        <div class="section-head text-center" style="margin-bottom: 50px;">
            <div class="eyebrow rv" style="font-size: 10px; font-weight: 700; letter-spacing: 3px;">Why Connect With Us</div>
            <h2 class="sec-title rv" style="color: #0c3a30; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">Why Connect With Young Chanakya X</h2>
            <p class="sec-desc rv" style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">Position your brand within a structured creator ecosystem designed for consistent visibility, engagement, and collaboration</p>
        </div>

        <div class="row gx-4 gy-4">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-eye"></i>
                    </div>

                    <h4>Community Visibility</h4>

                    <p>Build your brand presence through podcasts, talks, events, stories, and community initiatives throughout the year.</p>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>

                    <h4>Meaningful Connections</h4>

                    <p>Connect with entrepreneurs, professionals, creators, educators, students, and industry leaders in one trusted ecosystem.</p>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>

                    <h4>Multi-Platform Reach</h4>

                    <p>Increase your brand visibility across digital content, live events, podcasts, workshops, and networking experiences.</p>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-comments"></i>
                    </div>

                    <h4>Authentic Engagement</h4>

                    <p>Be part of conversations and experiences that create genuine interactions with an engaged community.</p>

                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                    </div>

                    <h4>Long-Term Partnership</h4>

                    <p>Go beyond one-time sponsorships with opportunities to collaborate across multiple YCX initiatives.</p>

                </div>
            </div>

            <!-- 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">

                    <div class="icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>

                    <h4>Community Impact</h4>

                    <p>Support learning, leadership, entrepreneurship, and innovation while contributing to a thriving community.</p>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- third section — Brand Presence -->
<section class="fancy-banner-seven box-layout connectx-brand-section pt-60 lg-pt-30 pb-40" id="partnership-opportunities" style="max-width: 96% !important; margin: 0 auto !important; width: 100% !important;">

    <div class="bg-wrapper border-40 position-relative z-1 overflow-hidden pt-120 pb-120 lg-pt-80 lg-pb-80" style="max-width: 100% !important; width: 100% !important;">

        <div class="container-fluid position-relative px-4 px-lg-5" style="z-index:2; max-width: 1700px; margin: 0 auto;">

            <div class="row align-items-center gy-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-7">
                    <div style="margin-bottom: 30px;">
                        <div class="eyebrow rv" style="color: #ffd2b1; font-size: 10px; font-weight: 700; letter-spacing: 3px;">WHERE YOUR BRAND APPEARS</div>
                        <h2 class="sec-title rv" style="color: #ffffff; font-size: clamp(34px, 4vw, 56px); font-weight: 900; line-height: 1.15;">
                           Put Your Brand at the <br>
                            <span style="color: #ffd2b1;">Heart of the Community</span>
                        </h2>
                        <p class="sec-desc rv" style="margin-top: 16px; color: rgba(255,255,255,0.85); max-width: 100%;">Partner with Young Chanakya X and connect your brand with experiences that inspire learning,<br> build relationships, and create lasting community impact.</p>
                    </div>

                    <a href="#sponsor-form" class="tier-btn-primary">
                        Explore sponsorship Packages
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- RIGHT LIST -->
                <div class="col-lg-5 ms-auto">

                    <ul class="style-none connectx-points">

                        <li>Podcast & Video Series</li>

                        <li>YCX Talks & Speaker Sessions</li>

                        <li>Networking Events & Meetups</li>

                        <li>Awards &amp; Recognition Platforms</li>

                        <li>Community Campaigns & Digital Experiences</li>

                    </ul>

                </div>

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
                    We're excited about the opportunity to collaborate and create meaningful experiences together.
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

            // On submit, update phone input value with the full international number
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
