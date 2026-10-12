@php
/**
 * Contact Page SEO Data
 */
$seo = [
    'title'       => 'Contact Us | Young Chanakya X',
    'description' => 'Contact Young Chanakya X for partnerships, sponsorships, speaking opportunities, podcasts, community programs, events, or general inquiries.',
    'keywords'    => 'contact YCX, Young Chanakya X contact, partnership inquiry, sponsorship inquiry, podcast contact, speaker application, community support, event inquiry, connect with YCX, contact us',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
    'robots'      => 'index, follow',
];
@endphp

@extends('layout.app')

@push('seo')
{{-- ── Contact Page: ContactPage + BreadcrumbList JSON-LD ─── --}}
<script type="application/ld+json">
@verbatim
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "ContactPage",
            "@id": "https://connectx.youngchanakya.com/contact#webpage",
            "url": "https://connectx.youngchanakya.com/contact",
            "name": "Contact Us | Young Chanakya X",
            "description": "Contact Young Chanakya X for partnerships, sponsorships, speaking opportunities, podcasts, community programs, events, or general inquiries.",
            "inLanguage": "en-IN",
            "isPartOf": {
                "@type": "WebSite",
                "@id": "https://connectx.youngchanakya.com/#website"
            },
            "mainEntity": {
                "@type": "Organization",
                "name": "Young Chanakya X",
                "url": "https://connectx.youngchanakya.com/",
                "email": "youngchanakya.x@gmail.com",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Tiruchengode",
                    "addressRegion": "Tamil Nadu",
                    "addressCountry": "India"
                },
                "contactPoint": [
                    {
                        "@type": "ContactPoint",
                        "contactType": "customer service",
                        "email": "youngchanakya.x@gmail.com",
                        "availableLanguage": ["English", "Hindi"]
                    },
                    {
                        "@type": "ContactPoint",
                        "contactType": "partnerships and sponsorships",
                        "email": "youngchanakya.x@gmail.com",
                        "availableLanguage": ["English", "Hindi"]
                    }
                ]
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://connectx.youngchanakya.com/contact#breadcrumb",
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
                    "name": "Contact Us",
                    "item": "https://connectx.youngchanakya.com/contact"
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
<style>
  .iti {
    width: 100%;
    display: block;
  }
  .iti__country-list {
    color: #333333;
    z-index: 10;
  }
  #contact-phone {
    padding-left: 90px !important;
  }
</style>
@endpush

@section('content')

<style>

.hero-heading {
    color: #ffffff !important;
    position: relative;
}

.hero-heading img {
    filter: brightness(0) invert(1);
}

/* ==========================================
   CONTACT PAGE — MOBILE RESPONSIVE
   Breakpoints: 991px (tablet), 767px (mobile), 480px (small mobile)
   ========================================== */

/* ---- Inner Banner ---- */
@media (max-width: 991px) {
    .inner-banner-one {
        padding-top: 120px !important;
        padding-bottom: 60px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: 36px;
    }
    .inner-banner-one .col-xl-4 {
        margin-top: 20px;
    }
    .inner-banner-one .col-xl-4 p {
        margin-bottom: 20px !important;
    }
}

@media (max-width: 767px) {
    .inner-banner-one {
        padding-top: 100px !important;
        padding-bottom: 50px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: clamp(26px, 7vw, 36px);
        letter-spacing: -1px;
        line-height: 1.15;
    }
    .inner-banner-one .col-xl-4 {
        margin-left: 0 !important;
    }
    .pager {
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .inner-banner-one {
        padding-top: 90px !important;
        padding-bottom: 40px !important;
    }
    .inner-banner-one .hero-heading {
        font-size: 26px;
        letter-spacing: -0.5px;
    }
}

/* ---- Contact Info Blocks ---- */
@media (max-width: 767px) {
    .contact-us-section {
        padding-top: 60px !important;
    }
    .address-block-one {
        padding: 0 10px;
    }
    .address-block-one .title {
        font-size: 18px;
    }
    .address-block-one p {
        font-size: 14px;
    }
    .address-block-one .webaddress {
        font-size: 13px;
        word-break: break-all;
    }
    .call {
        font-size: 18px !important;
    }
}

@media (max-width: 480px) {
    .address-block-one .icon {
        width: 60px !important;
        height: 60px !important;
    }
    .address-block-one .icon img {
        width: 28px;
    }
}

/* ---- Contact Form Section ---- */
@media (max-width: 991px) {
    .bg-wrapper.light-bg.mt-80 {
        margin-top: 40px !important;
    }
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 40px 30px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 30px;
    }
    .form-style-one.ps-xl-5 {
        padding-left: 0 !important;
    }
    .title-one h2 {
        font-size: 26px;
    }
}

@media (max-width: 767px) {
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 30px 20px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 20px;
    }
    .title-one h2 {
        font-size: 22px;
    }
    .btn-four {
        font-size: 15px;
        padding: 14px 20px;
    }
}

@media (max-width: 480px) {
    .bg-wrapper.light-bg .col-lg-5 {
        padding: 20px 14px 0;
    }
    .bg-wrapper.light-bg .col-lg-7 {
        padding: 14px;
    }
    .title-one h2 {
        font-size: 20px;
    }
}

/* ---- Map Section ---- */
@media (max-width: 767px) {
    .map-banner {
        margin-top: 50px !important;
    }
    .map-banner .gmap_canvas {
        height: 280px !important;
    }
    .gmap_iframe {
        height: 280px !important;
    }
}

@media (max-width: 480px) {
    .map-banner .gmap_canvas {
        height: 220px !important;
    }
    .gmap_iframe {
        height: 220px !important;
    }
}

/* ---- Newsletter Section ---- */
@media (max-width: 991px) {
    .newsletter-banner {
        margin-top: 30px;
    }
    .newsletter-banner .main-wrapper {
        padding: 30px 0;
    }
    .newsletter-banner h2 {
        font-size: 28px;
    }
    .newsletter-banner .col-lg-6:last-child {
        margin-top: 20px;
    }
}

@media (max-width: 767px) {
    .newsletter-banner form .d-flex {
        flex-direction: column;
        gap: 12px;
    }
    .newsletter-banner form input[type="email"] {
        width: 100%;
        border-radius: 12px;
    }
    .newsletter-banner form button {
        align-self: flex-end;
    }
    .newsletter-banner h2 {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .newsletter-banner h2 {
        font-size: 20px;
    }
    .newsletter-banner p.text-lg {
        font-size: 14px;
    }
}

/* ==========================================
   THEME STYLE & COLOR BALANCE CUSTOMIZATIONS
   ========================================== */

.premium-hero-container {
    min-height: 75vh;
    background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.55) 0%, #090d16 100%), 
                      url('{{ asset("images/media/contact/contact.webp") }}');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.text-glow-headline {
    font-size: clamp(38px, 5.5vw, 72px);
    font-weight: 900;
    line-height: 1.2;
    padding-bottom: 15px;
    letter-spacing: -3px;
    background: linear-gradient(135deg, #ffffff 30%, #ffd2b1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* ---- Premium Hero Section ---- */
@media (max-width: 991px) {
    .premium-hero-container {
        min-height: 65vh;
        background-attachment: scroll;
    }
    .premium-hero-container .container {
        padding-top: 120px;
        padding-bottom: 70px;
    }
    .text-glow-headline {
        font-size: clamp(30px, 5vw, 48px) !important;
        letter-spacing: -1.5px !important;
    }
    .premium-hero-container p.fs-5 {
        font-size: 16px !important;
    }
}

@media (max-width: 767px) {
    .premium-hero-container {
        min-height: 55vh;
    }
    .premium-hero-container .container {
        padding-top: 100px;
        padding-bottom: 50px;
    }
    .text-glow-headline {
        font-size: clamp(26px, 7vw, 36px) !important;
        letter-spacing: -1px !important;
        line-height: 1.15 !important;
        padding-bottom: 10px !important;
    }
    .premium-hero-container p.fs-5 {
        font-size: 15px !important;
    }
    .premium-hero-container ul.style-none {
        flex-wrap: wrap;
        gap: 6px;
    }
}

@media (max-width: 480px) {
    .premium-hero-container {
        min-height: auto;
    }
    .premium-hero-container .container {
        padding-top: 90px;
        padding-bottom: 40px;
    }
    .text-glow-headline {
        font-size: 26px !important;
        letter-spacing: -0.5px !important;
    }
}

/* Custom Form Submit Button */
.form-style-one .btn-four {
    background-color: #ffd2b1 !important;
    color: #0c3a30 !important;
    border: 1px solid #ffd2b1 !important;
    border-radius: 50px !important; /* Fully rounded pill shape like other page buttons */
    height: 58px !important;
    line-height: 56px !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 8px 20px rgba(255, 210, 177, 0.15) !important;
    cursor: pointer !important;
}

.form-style-one .btn-four:hover {
    background-color: #0c3a30 !important; /* Invert green and peach on hover */
    color: #ffd2b1 !important;
    border-color: #0c3a30 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 12px 24px rgba(12, 58, 48, 0.2) !important;
}

@media (max-width: 767px) {
    .form-style-one .btn-four {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
        padding: 0 !important;
    }
}

/* Form inputs border adjustments */
.form-style-one .input-group-meta input:focus,
.form-style-one .input-group-meta textarea:focus {
    border: 1px solid #ffd2b1 !important;
    box-shadow: 0 0 0 3px rgba(255, 210, 177, 0.15) !important;
    outline: none !important;
}

.form-style-one .input-group-meta label {
    font-weight: 600 !important;
    color: #0c3a30 !important;
}

/* Theme-specific adjustments for Address/Contact Info Blocks */
.address-block-one .icon {
    background-color: #ffd2b1 !important;
    transition: transform 0.3s ease, border-color 0.3s ease !important;
}


.address-block-one .title {
    font-weight: 700 !important;
    color: #0c3a30 !important;
}

.address-block-one p .call,
.address-block-one p .webaddress {
    color: #0c3a30 !important;
    font-weight: 600 !important;
    transition: color 0.3s ease !important;
    text-decoration: none !important;
}

.address-block-one p .call:hover,
.address-block-one p .webaddress:hover {
    color: #e8a876 !important;
    text-decoration: underline !important;
}
	</style>
		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="premium-hero-container d-flex align-items-center position-relative">
			<div class="container pt-200 pb-100">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-10">
						
						<ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
							<li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
							<li class="text-white opacity-40">/</li>
							<li class="text-white" style="color: #ffd2b1 !important;">Contact Us</li>
						</ul>

						<h1 class="text-glow-headline mb-4">Let's Build the Future of Influence Together.</h1>
						<p class="fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
							Have questions about partnerships, sponsorships, or joining the ecosystem? Reach out and start a conversation.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.inner-banner-one -->

		


		<!-- 
		=============================================
			Contact Us
		============================================== 
		-->
		<div class="contact-us-section pt-150 lg-pt-80">
			<div class="container">
                <div class="position-relative">
                    <div class="row">
						<div class="col-12 m-auto">
							<div class="row">
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><i class="bi bi-geo-alt-fill" style="font-size: 26px; color: var(--primary);"></i></div>
										<h5 class="title">Our Address</h5>
										<p style="color: #29594b; font-weight: 400; line-height: 1.6em;">Tiruchengode, <br>India</p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><i class="bi bi-telephone-fill" style="font-size: 24px; color: var(--primary);"></i></div>
										<h5 class="title">Contact Info</h5>
										<p><a href="tel:8667205661" class="call" style="color: #29594b; font-weight: 400;">+91 8667205661</a></p>
									</div> <!-- /.address-block-one -->
								</div>
								<div class="col-md-4">
									<div class="address-block-one text-center mb-40 wow fadeInUp">
										<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><i class="bi bi-envelope-fill" style="font-size: 24px; color: var(--primary);"></i></div>
										<h5 class="title">Mail Us</h5>
										<p><a href="mailto:youngchanakya.x@gmail.com" class="webaddress" style="color: #29594b; font-weight: 400; text-decoration: underline;">youngchanakya.x@gmail.com</a></p>
									</div> <!-- /.address-block-one -->
								</div>
							</div>
						</div>
					</div>

                    <div class="bg-wrapper light-bg mt-80 lg-mt-40">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex flex-column flex-lg-column-reverse">
									<div class="row">
										<div class="col-md-8 col-6 me-auto ms-auto"><img src="images/lazy.svg" data-src="images/assets/ils_07.svg" alt="" class="lazy-img me-auto ms-auto"></div>
									</div>
									<div class="title-one text-center text-lg-start md-mt-20 mb-70 md-mb-30">
										<h2>Have inquiries? Reach out via message</h2>
									</div>
									<!-- /.title-one -->
								</div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-style-one ps-xl-5">
                                    <form action="{{ route('contact.submit') }}" method="POST" id="contact-form" data-toggle="validator">
                                        @csrf
                                        <div class="messages">
                                            @if (session('error') || $errors->any())
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    {{ session('error') ?? 'Please correct the errors in the form below.' }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row controls">
                                            <div class="col-md-6 col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="">Name*</label>
                                                    <input type="text" placeholder="Your Name*" name="name" required="required" data-error="Name is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="" style="display:block;">Phone Number*</label>
                                                    <input type="tel" id="contact-phone" placeholder="Phone Number*" name="phone" required="required" data-error="Phone number is required." style="width:100%;">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label for="">Email*</label>
                                                    <input type="email" placeholder="Email Address*" name="email" required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-35">
                                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please, leave us a message." style="min-height: 120px;"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12"><button class="btn-four tran3s w-100 d-block">Send Message</button></div>
                                        </div>
                                    </form>
                                </div> <!-- /.form-style-one -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-banner mt-120 lg-mt-80">
                <div class="gmap_canvas h-100 w-100">
                    <iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=tiruchengode&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
		</div>
		<!-- ./contact-us-section -->




	

		

		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>

@if (session('success'))
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">Thank You for Reaching Out!</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    We've received your message. Our team will review your inquiry and get back to you as soon as possible.
                </p>
                <a href="{{ url('/') }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Explore YCX
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
        var phoneInput = document.getElementById('contact-phone');
        var iti;
        if (phoneInput) {
            iti = window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
            });

            var form = document.getElementById('contact-form');
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
