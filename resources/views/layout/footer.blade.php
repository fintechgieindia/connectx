<style>
/* ==========================================
   LANDSCAPE MOUNTAIN FOOTER SYSTEM
   ========================================== */

/* Main Footer Container with Dark Mountain Background */
.footer-landscape-sec {
    background: linear-gradient(180deg, rgba(8, 38, 31, 0.88) 0%, rgba(6, 28, 23, 0.94) 55%, rgba(4, 18, 15, 0.98) 100%), 
                url('{{ asset('images/media/footer.png') }}') no-repeat center bottom !important;
    background-size: cover !important;
    color: #ffffff;
    padding: 85px 0 36px;
    position: relative;
}

/* Attached Top Tagline Section (Dark Matched Theme) */
.footer-top-attached {
    text-align: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 50px;
    margin-bottom: 60px;
}

.footer-made-badge {
    display: inline-flex;
    align-items: center;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #ffd2b1;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.footer-hero-heading {
    font-size: clamp(30px, 4.2vw, 48px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.18;
    letter-spacing: -0.5px;
    margin-bottom: 16px;
}

.footer-hero-highlight {
    color: #ffd2b1;
}

.footer-hero-desc {
    font-size: 15.5px;
    color: rgba(255, 255, 255, 0.78);
    line-height: 1.65;
    max-width: 620px;
    margin: 0 auto;
}

/* Brand Column (Young Chanakya X) */
.footer-brand-space {
    padding-right: 15px;
}

.footer-logo {
    max-height: 120px;
    width: auto;
    margin-bottom: 18px;
}

.footer-brand-text {
    font-size: 13.5px;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.65;
    margin-bottom: 18px;
}

.footer-contact-box {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.footer-contact-box .fc-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13.5px;
    color: rgba(255, 255, 255, 0.8);
}

.footer-contact-box .fc-item i {
    color: #ffd2b1;
    font-size: 1rem;
    flex-shrink: 0;
}

.footer-contact-box .fc-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.25s ease;
}

.footer-contact-box .fc-item a:hover {
    color: #ffffff;
    text-decoration: underline;
}

/* Link Columns */
.footer-col-title {
    font-size: 14.5px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: #ffd2b1;
    margin-bottom: 20px;
}

.footer-link-list li {
    margin-bottom: 11px;
}

.footer-link-list a {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    font-size: 13.5px;
    transition: all 0.25s ease;
}

.footer-link-list a:hover {
    color: #ffffff;
    padding-left: 4px;
    text-decoration: none;
}

/* Dedicated Young Chanakya (YC) Row */
.footer-yc-row {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    background: rgba(255, 255, 255, 0.04);
    border-radius: 16px;
    padding: 24px 28px;
    margin-top: 50px;
}

.yc-row-logo {
    max-height: 80px;
    width: auto;
}

.yc-row-text {
    font-size: 13.5px;
    color: rgb(218 218 218 / 85%);
    line-height: 1.6;
    margin-bottom: 0;
}

/* Social Circles */
.social-circle {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-circle:hover {
    background: #ffd2b1;
    color: #0c3a30;
    transform: translateY(-3px);
    text-decoration: none;
}

/* Copyright Bar */
.footer-bottom-bar {
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    font-size: 13px;
    color: rgba(255, 255, 255, 0.65);
}

.footer-legal-links a {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: none;
    transition: color 0.2s ease;
}

.footer-legal-links a:hover {
    color: #ffffff;
    text-decoration: underline;
}

.partners-text a {
    color: rgba(255, 255, 255, 0.85);
    font-weight: 600;
    text-decoration: none;
}

.partners-text a:hover {
    color: #ffd2b1;
    text-decoration: underline;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .footer-landscape-sec {
        padding: 65px 0 30px;
    }
    .footer-top-attached {
        padding-bottom: 40px;
        margin-bottom: 45px;
    }
    .footer-yc-row {
        padding: 20px;
    }
}

@media (max-width: 767px) {
    .footer-landscape-sec {
        padding: 50px 0 24px;
    }
    .footer-hero-heading {
        font-size: 26px;
    }
    .footer-brand-space {
        padding-right: 0;
        margin-bottom: 24px;
    }
    .footer-yc-row {
        text-align: center;
    }
}
</style>

<!-- LANDSCAPE MOUNTAIN BACKGROUND FOOTER (SEAMLESSLY ATTACHED) -->
<footer class="footer-landscape-sec" role="contentinfo">
    <div class="container">
        
        <!-- ATTACHED TOP TAGLINE SECTION -->
        <div class="footer-top-attached">
            <h2 class="footer-hero-heading">
                Empowering India's Next Generation<br>
                <span class="footer-hero-highlight">of Leaders &amp; Creators</span>
            </h2>
            <p class="footer-hero-desc">
                Young Chanakya X is built to bring creators, founders, and innovators together in a structured ecosystem designed for real-world impact.
            </p>
        </div>

        <!-- MAIN 4-COLUMN ROW -->
        <div class="row gy-4 justify-content-between align-items-start">
            
            <!-- COLUMN 1: Young Chanakya X (Primary Platform) -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="footer-brand-space">
                    <a href="{{ url('/') }}" class="d-inline-block text-decoration-none">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X Logo" class="footer-logo">
                    </a>
                    <p class="footer-brand-text">
                        A global creator ecosystem connecting creators, influencers, speakers, podcasters &amp; founders through live events, collaborations, and meaningful experiences.
                    </p>
                </div>
            </div>

            <!-- COLUMN 2: Quick Links -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <h5 class="footer-col-title">Quick Links</h5>
                <ul class="footer-link-list style-none">
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/events') }}">Events</a></li>
                    <li><a href="{{ url('/connectors') }}">Connectors</a></li>
                    <li><a href="{{ url('/masterclass') }}">Masterclasses</a></li>
                    <li><a href="{{ url('/career') }}">Careers</a></li>
                    <li><a href="{{ url('/internship') }}">Internships</a></li>
                    <li><a href="{{ route('insights.index') }}">Insights</a></li>
                </ul>
            </div>

            <!-- COLUMN 3: Get Involved -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                <h5 class="footer-col-title">Get Involved</h5>
                <ul class="footer-link-list style-none">
                    <li><a href="{{ url('/share-your-story') }}">Share Your Story</a></li>
                    <li><a href="{{ url('/become-a-speaker') }}">YCX Talks</a></li>
                    <li><a href="{{ url('/become-a-feature') }}">Featured on YCX Podcast</a></li>
                    <li><a href="{{ url('/become-a-partner') }}">Become a Partner</a></li>
                    <li><a href="{{ url('/become-a-sponsor') }}">Become a Sponsor</a></li>
                </ul>
            </div>

            <!-- COLUMN 4: Contact Us (AT THE END COL) -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <h5 class="footer-col-title">Contact Us</h5>
                <div class="footer-contact-box">
                    <div class="fc-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Tiruchengode, Tamil Nadu, India</span>
                    </div>
                    <div class="fc-item">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:youngchanakya.x@gmail.com">youngchanakya.x@gmail.com</a>
                    </div>
                </div>

                <div class="ycx-socials d-flex align-items-center gap-2 mt-3">
                    <a href="https://www.linkedin.com/company/youngchanakyax/" target="_blank" class="social-circle" aria-label="YCX LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCunrW6XIpxgonRXd6CjQ9eQ" target="_blank" class="social-circle" aria-label="YCX YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/YoungChanakyaX" target="_blank" class="social-circle" aria-label="YCX Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/youngchanakyax/" target="_blank" class="social-circle" aria-label="YCX Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.threads.com/@youngchanakyax" target="_blank" class="social-circle" aria-label="YCX Threads"><i class="bi bi-threads"></i></a>
                </div>
            </div>

        </div>

        <!-- DEDICATED YOUNG CHANAKYA (YC) ROW -->
        <div class="footer-yc-row">
            <div class="row align-items-center gy-3 justify-content-between">
                <!-- Left Logo -->
                <div class="col-xl-2 col-lg-2 col-md-3 col-12 text-center text-md-start">
                    <a href="https://youngchanakya.com/" target="_blank" class="d-inline-block text-decoration-none">
                        <img src="{{ asset('images/logo/yc.png') }}" alt="Young Chanakya Logo" class="yc-row-logo">
                    </a>
                </div>
                <!-- Middle Content -->
                <div class="col-xl-7 col-lg-7 col-md-6 col-12 text-center text-md-start">
                    <p class="yc-row-text">
                        Young Chanakya is a Business Leadership Launchpad dedicated to empowering the next generation of entrepreneurs, innovators, and leaders by bridging education and real-world success.
                    </p>
                </div>
                <!-- Right Social Icons with Website Globe Icon FIRST -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-12 d-flex justify-content-center justify-content-md-end">
                    <div class="d-flex align-items-center gap-2">
                        <a href="https://youngchanakya.com/" target="_blank" class="social-circle" aria-label="YC Website" title="Visit Young Chanakya Website"><i class="bi bi-globe"></i></a>
                        <a href="https://www.linkedin.com/company/youngchanakya" target="_blank" class="social-circle" aria-label="YC LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/youngchanakya/" target="_blank" class="social-circle" aria-label="YC Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/youngchanakya" target="_blank" class="social-circle" aria-label="YC YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.facebook.com/youngchanakya/" target="_blank" class="social-circle" aria-label="YC Facebook"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- COPYRIGHT BAR -->
        <div class="footer-bottom-bar mt-4 pt-4">
            <div class="row align-items-center gy-3 text-center text-md-start">
                <div class="col-md-5 col-12 copyright-text">
                    Copyright &copy; {{ date('Y') }} Young Chanakya X. All Rights Reserved.
                </div>
                <div class="col-md-3 col-12 footer-legal-links text-center">
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                    <span class="mx-2 opacity-50">|</span>
                    <a href="{{ route('terms.conditions') }}">Terms of Service</a>
                </div>
                <div class="col-md-4 col-12 text-md-end partners-text">
                    Partners: <a href="https://fintechgie.com" target="_blank">FintechGie</a> &amp; <a href="https://wegeni.com" target="_blank">Wegeni</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>

<!-- JS FILES -->
<script src="{{ asset('vendor/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/validator.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('js/theme.js') }}"></script>
