{{-- ============================================================
     MAIN NAVBAR — YCX
     Desktop: sticky header with grouped dropdown menus
     Mobile: hamburger → slide-in drawer with accordions
     All pages preserved, grouped into 5 logical categories.
     ============================================================ --}}

{{-- ── Mobile Drawer Overlay ─────────────────────────────── --}}
<div class="nav-drawer-overlay" id="navOverlay" onclick="closeDrawer()"></div>

{{-- ── Mobile Drawer ─────────────────────────────────────── --}}
<div class="nav-drawer" id="navDrawer">
    <div class="nav-drawer-header">
        <a href="{{ url('/') }}" onclick="closeDrawer()">
            <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X" class="nav-drawer-logo">
        </a>
        <button class="nav-drawer-close" onclick="closeDrawer()" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <nav class="nav-drawer-nav">

        {{-- About --}}
        <div class="nav-drawer-item">
            <button class="nav-drawer-group-btn" onclick="toggleDrawerGroup(this)">
                <span>About</span>
                <i class="bi bi-chevron-down nav-drawer-chevron"></i>
            </button>
            <div class="nav-drawer-sub">
                <a href="{{ url('/about') }}" onclick="closeDrawer()" class="{{ request()->is('about') ? 'active' : '' }}">
                    <i class="bi bi-info-circle"></i> About YCX
                </a>
                <a href="{{ url('/connectors') }}" onclick="closeDrawer()" class="{{ request()->is('connectors') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Connectors
                </a>
                <a href="{{ url('/masterclass') }}" onclick="closeDrawer()" class="{{ request()->is('masterclass') ? 'active' : '' }}">
                    <i class="bi bi-play-circle"></i> Masterclasses
                </a>
                <a href="{{ url('/insights') }}" onclick="closeDrawer()" class="{{ request()->is('insights') || request()->is('insights/*') ? 'active' : '' }}">
                    <i class="bi bi-journal-richtext"></i> Insights
                </a>
                <a href="{{ url('/contact') }}" onclick="closeDrawer()" class="{{ request()->is('contact') ? 'active' : '' }}">
                    <i class="bi bi-envelope"></i> Contact Us
                </a>
            </div>
        </div>

        {{-- Stories & Talks (Fix the name) --}}
        <div class="nav-drawer-item">
            <button class="nav-drawer-group-btn" onclick="toggleDrawerGroup(this)">
                <span>Stories &amp; Talks</span>
                <i class="bi bi-chevron-down nav-drawer-chevron"></i>
            </button>
            <div class="nav-drawer-sub">
                <a href="{{ url('/share-your-story') }}" onclick="closeDrawer()" class="{{ request()->is('share-your-story') ? 'active' : '' }}">
                    <i class="bi bi-chat-quote"></i> Share Your Story
                </a>
                <a href="{{ url('/become-a-speaker') }}" onclick="closeDrawer()" class="{{ request()->is('become-a-speaker') ? 'active' : '' }}">
                    <i class="bi bi-mic"></i> YCX Talks
                </a>
                <a href="{{ url('/become-a-feature') }}" onclick="closeDrawer()" class="{{ request()->is('become-a-feature') ? 'active' : '' }}">
                    <i class="bi bi-broadcast"></i> Featured on YCX Podcast
                </a>
            </div>
        </div>

        {{-- Business Collaboration --}}
        <div class="nav-drawer-item">
            <button class="nav-drawer-group-btn" onclick="toggleDrawerGroup(this)">
                <span>Business Collaboration</span>
                <i class="bi bi-chevron-down nav-drawer-chevron"></i>
            </button>
            <div class="nav-drawer-sub">
                <a href="{{ url('/become-a-partner') }}" onclick="closeDrawer()" class="{{ request()->is('become-a-partner') ? 'active' : '' }}">
                    <i class="bi bi-person-check"></i> Become a Partner
                </a>
                <a href="{{ url('/become-a-sponsor') }}" onclick="closeDrawer()" class="{{ request()->is('become-a-sponsor') ? 'active' : '' }}">
                    <i class="bi bi-star"></i> Become a Sponsor
                </a>
                <a href="{{ url('/events') }}" onclick="closeDrawer()" class="{{ request()->is('events') || request()->is('event-details*') ? 'active' : '' }}">
                    <i class="bi bi-calendar-event"></i> Event
                </a>
                <a href="{{ url('/register-institution') }}" onclick="closeDrawer()" class="{{ request()->is('register-institution') ? 'active' : '' }}">
                    <i class="bi bi-building"></i> Register Institution
                </a>
            </div>
        </div>

        {{-- Work with Us --}}
        <div class="nav-drawer-item">
            <button class="nav-drawer-group-btn" onclick="toggleDrawerGroup(this)">
                <span>Work with Us</span>
                <i class="bi bi-chevron-down nav-drawer-chevron"></i>
            </button>
            <div class="nav-drawer-sub">
                <a href="{{ url('/career') }}" onclick="closeDrawer()" class="{{ request()->is('career') || request()->is('career/*') ? 'active' : '' }}">
                    <i class="bi bi-briefcase"></i> Career
                </a>
                <a href="{{ url('/internship') }}" onclick="closeDrawer()" class="{{ request()->is('internship') || request()->is('internship/*') ? 'active' : '' }}">
                    <i class="bi bi-mortarboard"></i> Internship
                </a>
            </div>
        </div>

    </nav>

    <div class="nav-drawer-footer">
        <a href="{{ url('/connectors') }}" class="nav-drawer-cta" onclick="closeDrawer()">Connect with Us</a>
    </div>
</div>

@php
    $isLightHeroPage = (isset($lightNav) && $lightNav) 
        || request()->is('about*') 
        || request()->is('become-a-partner*') 
        || request()->is('become-a-sponsor*') 
        || request()->is('career') 
        || request()->is('career/*')
        || request()->is('internship/*')
        || request()->is('masterclass*');
@endphp

{{-- ── Main Header ───────────────────────────────────────── --}}
<header id="hdr" class="ycx-header {{ $isLightHeroPage ? 'light-hero-nav' : '' }}">

    {{-- Logo --}}
    <a href="{{ url('/') }}" class="ycx-header-logo">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X" class="site-logo">
    </a>

    {{-- Desktop Navigation --}}
    <nav class="ycx-nav" aria-label="Main navigation">

        {{-- 1. About --}}
        <div class="ycx-nav-group" id="nav-group-about">
            <button class="ycx-nav-trigger" aria-haspopup="true" aria-expanded="false">
                About <i class="bi bi-chevron-down ycx-chevron"></i>
            </button>
            <div class="ycx-dropdown" role="menu">
                <a href="{{ url('/about') }}" class="ycx-dropdown-item {{ request()->is('about') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-info-circle-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>About YCX</strong>
                        <small>Our story, mission &amp; vision</small>
                    </span>
                </a>
                <a href="{{ url('/connectors') }}" class="ycx-dropdown-item {{ request()->is('connectors') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-people-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Connectors</strong>
                        <small>Meet the YCX community</small>
                    </span>
                </a>
                <a href="{{ url('/masterclass') }}" class="ycx-dropdown-item {{ request()->is('masterclass') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-play-circle-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Masterclasses</strong>
                        <small>Deep-dive learning sessions</small>
                    </span>
                </a>
                <a href="{{ url('/insights') }}" class="ycx-dropdown-item {{ request()->is('insights') || request()->is('insights/*') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-journal-richtext"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Insights</strong>
                        <small>Articles, trends &amp; perspectives</small>
                    </span>
                </a>
                <a href="{{ url('/contact') }}" class="ycx-dropdown-item {{ request()->is('contact') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-envelope-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Contact Us</strong>
                        <small>Get in touch with our team</small>
                    </span>
                </a>
            </div>
        </div>

        {{-- 2. Stories & Talks (Fix the name) --}}
        <div class="ycx-nav-group" id="nav-group-stories">
            <button class="ycx-nav-trigger" aria-haspopup="true" aria-expanded="false">
                Stories &amp; Talks <i class="bi bi-chevron-down ycx-chevron"></i>
            </button>
            <div class="ycx-dropdown" role="menu">
                <a href="{{ url('/share-your-story') }}" class="ycx-dropdown-item {{ request()->is('share-your-story') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-chat-quote-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Share Your Story</strong>
                        <small>Submit your story or proposal</small>
                    </span>
                </a>
                <a href="{{ url('/become-a-speaker') }}" class="ycx-dropdown-item {{ request()->is('become-a-speaker') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-mic-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>YCX Talks</strong>
                        <small>Speak at a YCX event</small>
                    </span>
                </a>
                <a href="{{ url('/become-a-feature') }}" class="ycx-dropdown-item {{ request()->is('become-a-feature') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-broadcast-pin"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Featured on YCX Podcast</strong>
                        <small>Get featured on our podcast</small>
                    </span>
                </a>
            </div>
        </div>

        {{-- 3. Business Collaboration --}}
        <div class="ycx-nav-group" id="nav-group-collaboration">
            <button class="ycx-nav-trigger" aria-haspopup="true" aria-expanded="false">
                Business Collaboration <i class="bi bi-chevron-down ycx-chevron"></i>
            </button>
            <div class="ycx-dropdown" role="menu">
                <a href="{{ url('/become-a-partner') }}" class="ycx-dropdown-item {{ request()->is('become-a-partner') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-person-check-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Become a Partner</strong>
                        <small>Co-create community initiatives</small>
                    </span>
                </a>
                <a href="{{ url('/become-a-sponsor') }}" class="ycx-dropdown-item {{ request()->is('become-a-sponsor') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-star-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Become a Sponsor</strong>
                        <small>Showcase your brand with YCX</small>
                    </span>
                </a>
                <a href="{{ url('/events') }}" class="ycx-dropdown-item {{ request()->is('events') || request()->is('event-details*') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-calendar-event-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Event</strong>
                        <small>Networking &amp; community events</small>
                    </span>
                </a>
                <a href="{{ url('/register-institution') }}" class="ycx-dropdown-item {{ request()->is('register-institution') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-building-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Register Institution</strong>
                        <small>Schools &amp; colleges</small>
                    </span>
                </a>
            </div>
        </div>

        {{-- 4. Work with Us --}}
        <div class="ycx-nav-group" id="nav-group-work">
            <button class="ycx-nav-trigger" aria-haspopup="true" aria-expanded="false">
                Work with Us <i class="bi bi-chevron-down ycx-chevron"></i>
            </button>
            <div class="ycx-dropdown" role="menu">
                <a href="{{ url('/career') }}" class="ycx-dropdown-item {{ request()->is('career') || request()->is('career/*') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-briefcase-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Career</strong>
                        <small>Full-time roles at YCX</small>
                    </span>
                </a>
                <a href="{{ url('/internship') }}" class="ycx-dropdown-item {{ request()->is('internship') || request()->is('internship/*') ? 'active' : '' }}" role="menuitem">
                    <span class="ycx-dropdown-icon"><i class="bi bi-mortarboard-fill"></i></span>
                    <span class="ycx-dropdown-text">
                        <strong>Internship</strong>
                        <small>Learn &amp; grow with us</small>
                    </span>
                </a>
            </div>
        </div>

    </nav>

    {{-- Right side: CTA + Hamburger --}}
    <div class="ycx-header-right">
        <a href="{{ url('/connectors') }}" class="ycx-cta-btn">Connect with Us</a>
        <button class="ycx-hamburger" id="hambBtn" onclick="toggleDrawer()" aria-label="Open menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

</header>
