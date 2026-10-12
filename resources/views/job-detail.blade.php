@php
/**
 * Job Detail Page SEO Data
 */
$categoryName = $job->category === 'internship' ? 'Internship' : 'Career';
$categoryPath = $job->category === 'internship' ? 'internship' : 'career';
$canonicalUrl = 'https://connectx.youngchanakya.com/' . $categoryPath . '/' . $job->slug;
$seoDescription = !empty($job->tagline)
    ? $job->tagline . ' Apply for the ' . $job->title . ' (' . $categoryName . ') role at Young Chanakya X.'
    : 'Apply for the ' . $job->title . ' (' . $categoryName . ') role at Young Chanakya X. ' . ($job->department ? 'Department: ' . $job->department . '.' : '');
$seoDescription = \Illuminate\Support\Str::limit(strip_tags($seoDescription), 160);

$seo = [
    'title'       => $job->title . ' (' . $categoryName . ') | Young Chanakya X',
    'description' => $seoDescription,
    'keywords'    => 'careers, internships, ' . $job->title . ', work at Young Chanakya X, ' . $job->department,
    'image'       => 'https://connectx.youngchanakya.com/images/assets/seo-share.jpg',
    'type'        => 'website',
    'canonical'   => $canonicalUrl,
];

$employmentType = $job->category === 'internship' ? 'INTERN' : (stripos($job->work_mode, 'part') !== false ? 'PART_TIME' : 'FULL_TIME');
$isRemote = stripos($job->work_mode, 'remote') !== false || stripos($job->location ?? '', 'remote') !== false;
$datePosted = $job->created_at ? $job->created_at->toIso8601String() : '2026-01-01T00:00:00+05:30';

$jobSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://connectx.youngchanakya.com'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => $categoryName . 's',
                    'item' => 'https://connectx.youngchanakya.com/' . $categoryPath
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $job->title,
                    'item' => $canonicalUrl
                ]
            ]
        ],
        [
            '@type' => 'JobPosting',
            'title' => $job->title,
            'description' => !empty($job->content) ? $job->content : '<p>' . e($job->tagline ?? $job->title) . '</p>',
            'datePosted' => $datePosted,
            'employmentType' => $employmentType,
            'occupationalCategory' => $job->department,
            'hiringOrganization' => [
                '@type' => 'Organization',
                'name' => 'Young Chanakya X',
                'sameAs' => 'https://connectx.youngchanakya.com',
                'logo' => 'https://connectx.youngchanakya.com/images/assets/logo.png'
            ],
            'jobLocation' => [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => (!empty($job->location) && strtolower($job->location) !== 'remote') ? $job->location : 'Tiruchengode',
                    'addressRegion' => 'Tamil Nadu',
                    'addressCountry' => 'IN'
                ]
            ]
        ]
    ]
];

if ($isRemote) {
    $jobSchema['@graph'][1]['jobLocationType'] = 'TELECOMMUTE';
    $jobSchema['@graph'][1]['applicantLocationRequirements'] = [
        '@type' => 'Country',
        'name' => 'India'
    ];
}
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
{!! json_encode($jobSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/role-detail.css') }}">
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
        z-index: 9999 !important;
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
        border-top-left-radius: 10px !important;
        border-bottom-left-radius: 10px !important;
    }
    @media(min-width: 769px) {
        .grid-4 {
            grid-template-columns: repeat(4, 1fr) !important;
        }
        .grid-3 {
            grid-template-columns: repeat(3, 1fr) !important;
        }
        .grid-2 {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    @media(max-width: 768px) {
        .grid-4, .grid-3, .grid-2 {
            grid-template-columns: 1fr !important;
        }
    }
    .detail-layout .sidebar {
        position: sticky !important;
        top: 120px !important;
        align-self: start !important;
        height: fit-content !important;
    }
</style>
@endpush

@section('content')

<style>
#hdr:not(.scrolled) .hamburger span {
    background: #0c3a30 !important;
}
</style>

<!-- ROLE HERO -->
<section class="role-hero">
  <div class="wrap">
    <div class="crumb">
      <a href="{{ url('/') }}">Home</a>
      <span class="sep">/</span>
      @if($job->category == 'internship')
        <a href="{{ route('internships.index') }}">Internships</a>
      @else
        <a href="{{ route('careers.index') }}">Careers</a>
      @endif
      <span class="sep">/</span>
      <span class="current">{{ $job->title }}</span>
    </div>
    
    <div class="badge-row">
      <span class="badge-pill {{ $job->category == 'internship' ? 'badge-internship' : 'badge-career' }}">
        {{ ucfirst($job->category) }}
      </span>
      <span class="badge-pill badge-track">{{ $job->department }}</span>
    </div>
    
    <h1>{{ $job->title }}</h1>
    <p class="tagline">{{ $job->tagline }}</p>
    
    <div class="detail-chips">
      <div class="dchip">
        <span class="mono">Department</span>
        <span class="val">{{ $job->department }}</span>
      </div>
      <div class="dchip">
        <span class="mono">Work Mode</span>
        <span class="val">{{ ucfirst($job->work_mode) }}</span>
      </div>
      <div class="dchip">
        <span class="mono">Experience</span>
        <span class="val">{{ $job->experience ?? 'Not Specified' }}</span>
      </div>
      @if($job->category == 'internship')
      <div class="dchip">
        <span class="mono">Duration</span>
        <span class="val">{{ $job->duration ?? '3 Months' }}</span>
      </div>
      @else
      <div class="dchip">
        <span class="mono">Location</span>
        <span class="val">{{ $job->location ?? 'Remote' }}</span>
      </div>
      @endif
    </div>
  </div>
</section>

<!-- ROLE BODY -->
<section id="role-body">
  <div class="wrap detail-layout">
    
    <!-- Rich dynamic content populated via CKEditor (No hardcoded image, as requested) -->
    <div class="main-col">
      <div class="rich-job-content" style="font-size: 15px; color: #4d6459; line-height: 1.8;">
        {!! $job->content !!}
      </div>
    </div>

    <!-- Sidebar stats -->
    <div class="sidebar">
      <div class="facts-card">
        <div class="facts-head">
          <h3>Job Overview</h3>
        </div>
        
        <div class="fact-row">
          <div class="fact-icon"><i class="bi bi-briefcase-fill" style="color: #ffbe8e;"></i></div>
          <div class="fact-text">
            <span class="fk">Position</span>
            <span class="fv">{{ $job->title }}</span>
          </div>
        </div>

        <div class="fact-row">
          <div class="fact-icon"><i class="bi bi-laptop-fill" style="color: #ffbe8e;"></i></div>
          <div class="fact-text">
            <span class="fk">Work Mode</span>
            <span class="fv">{{ ucfirst($job->work_mode) }}</span>
          </div>
        </div>

        <div class="fact-row">
          <div class="fact-icon"><i class="bi bi-geo-alt-fill" style="color: #ffbe8e;"></i></div>
          <div class="fact-text">
            <span class="fk">Location</span>
            <span class="fv">{{ $job->location ?? 'Remote' }}</span>
          </div>
        </div>

        @if($job->category == 'internship')
        <div class="fact-row">
          <div class="fact-icon"><i class="bi bi-calendar-range-fill" style="color: #ffbe8e;"></i></div>
          <div class="fact-text">
            <span class="fk">Duration</span>
            <span class="fv">{{ $job->duration ?? '3 Months' }}</span>
          </div>
        </div>
        @endif

        <button class="sidebar-apply" id="sidebarApplyBtn">Apply for this Role</button>
      </div>

      @if($job->skills)
      <div class="skills-card">
        <h4>Key Skills Required</h4>
        <div class="skills-wrap">
          @foreach(explode(',', $job->skills) as $skill)
            <span class="skill-badge">{{ trim($skill) }}</span>
          @endforeach
        </div>
      </div>
      @endif
    </div>

  </div>
</section>

<!-- MORE OPEN ROLES (Links related internships as requested) -->
<section id="more-roles">
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow">Keep Exploring</span>
      <h2>Related Internships & Roles</h2>
      <p>Across internships and full-time careers — pick the track that fits where you are right now.</p>
    </div>
    
    <div class="role-grid">
      @forelse($related as $rel)
        <a href="{{ route($rel->category == 'internship' ? 'internships.detail' : 'careers.detail', $rel->slug) }}" class="role-card">
          <span class="rc-badge {{ $rel->category == 'internship' ? 'badge-internship' : 'badge-career' }}">
            {{ ucfirst($rel->category) }}
          </span>
          <h4>{{ $rel->title }}</h4>
          <p>{{ Str::limit($rel->tagline, 120) }}</p>
          <span class="rc-link">
            View Brief
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </span>
        </a>
      @empty
        <div class="w-100 py-3">
          <p style="color: #4d6459;">No other related roles posted at this time.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

<!-- STICKY BOTTOM BAR -->
<div class="sticky-bar">
  <div class="msg">
    <span class="mono">Applications Open</span>
    <span class="txt">Applying for {{ $job->title }}</span>
  </div>
  <button class="sbtn" id="stickyApplyBtn">Apply Now</button>
</div>

<!-- BOTTOM SHEET DRAWER -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<div class="drawer" id="drawer">
  <div class="drawer-handle"></div>
  <div class="drawer-top">
    <div>
      <h3>Apply for {{ $job->title }}</h3>
      <p>Fill out the details below to submit your application.</p>
    </div>
    <button class="drawer-close" id="drawerCloseBtn">&times;</button>
  </div>
  
  <form action="{{ route('jobs.apply') }}" method="POST" id="jobApplyForm" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="posted_job_id" value="{{ $job->id }}">
    <input type="hidden" name="category" value="{{ $job->category }}">

    <div style="font-family: inherit; font-size: 13.5px; padding-bottom: 8px; margin-bottom: 12px; border-bottom: 1px solid rgba(12,58,48,0.1); font-weight: 700; color: #0c3a30; text-transform: uppercase; letter-spacing: 0.5px;">Role you're applying for</div>
    <div class="field" style="margin-bottom: 20px;">
      <input type="text" value="{{ $job->title }} ({{ ucfirst($job->category) }})" disabled style="width: 100%; background: #f7f5f0; border: 1px solid rgba(12,58,48,0.15); padding: 12px; border-radius: 8px; font-weight: 600; color: #4d6459;">
    </div>

    <div style="font-family: inherit; font-size: 12.5px; padding-bottom: 6px; margin-bottom: 14px; border-bottom: 1px solid rgba(12,58,48,0.1); font-weight: 700; color: #0c3a30; text-transform: uppercase; letter-spacing: 0.5px;">Personal Details</div>
    <div class="form-row grid-4">
      <div class="field">
        <label>Full Name <span class="text-danger">*</span></label>
        <input type="text" name="full_name" placeholder="E.g. Karthik Subramaniam" required>
      </div>
      <div class="field">
        <label>Date of Birth <span class="text-danger">*</span></label>
        <input type="date" name="dob" required style="height: 50px;">
      </div>
      <div class="field">
        <label>Nationality <span class="text-danger">*</span></label>
        <input type="text" name="nationality" placeholder="E.g. Indian" required>
      </div>
      <div class="field">
        <label>Marital Status <span class="text-danger">*</span></label>
        <select name="marital_status" required style="width: 100%; padding: 12px; border: 1px solid rgba(12,58,48,0.15); border-radius: 8px; height: 50px;">
          <option value="">- Select -</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorced">Divorced</option>
          <option value="Widowed">Widowed</option>
          <option value="Prefer not to say">Prefer not to say</option>
        </select>
      </div>
    </div>

    <div style="font-family: inherit; font-size: 12.5px; padding-bottom: 6px; margin-top: 20px; margin-bottom: 14px; border-bottom: 1px solid rgba(12,58,48,0.1); font-weight: 700; color: #0c3a30; text-transform: uppercase; letter-spacing: 0.5px;">Contact Details</div>
    <div class="form-row grid-3" style="max-width: 800px;">
      <div class="field">
        <label>Phone Number <span class="text-danger">*</span></label>
        <input type="tel" name="phone" id="job-phone" placeholder="E.g. +91 98765 43210" required>
      </div>
      <div class="field">
        <label>WhatsApp Number <span class="text-danger">*</span></label>
        <input type="tel" name="whatsapp_number" id="job-whatsapp" placeholder="E.g. +91 98765 43210" required>
      </div>
      <div class="field">
        <label>Emergency Contact Number <span class="text-danger">*</span></label>
        <input type="tel" name="emergency_phone" id="job-emergency" placeholder="E.g. +91 98765 43210" required>
      </div>
    </div>
    <div class="form-row grid-2">
      <div class="field">
        <label>Email Address <span class="text-danger">*</span></label>
        <input type="email" name="email" placeholder="E.g. name@example.com" required style="height: 50px;">
      </div>
      <div class="field">
        <label>Residential Address <span class="text-danger">*</span></label>
        <textarea name="residential_address" placeholder="Enter your full current residential address" required style="min-height: 50px; height: 50px;"></textarea>
      </div>
    </div>

    <div style="font-family: inherit; font-size: 12.5px; padding-bottom: 6px; margin-top: 20px; margin-bottom: 14px; border-bottom: 1px solid rgba(12,58,48,0.1); font-weight: 700; color: #0c3a30; text-transform: uppercase; letter-spacing: 0.5px;">Education</div>
    <div class="field" style="margin-bottom: 15px;">
      <label style="margin-bottom: 8px; display: block;">Are you currently pursuing education? *</label>
      <div style="display: flex; gap: 20px; align-items: center;">
        <label style="display: flex; align-items: center; gap: 6px; cursor: pointer; font-weight: 600;">
          <input type="radio" name="pursuing_education" value="yes" id="pursuing_yes" checked style="width: auto;"> Yes
        </label>
        <label style="display: flex; align-items: center; gap: 6px; cursor: pointer; font-weight: 600;">
          <input type="radio" name="pursuing_education" value="no" id="pursuing_no" style="width: auto;"> No
        </label>
      </div>
    </div>

    <!-- Pursuing YES fields -->
    <div class="form-row grid-3" id="yesEducationFields" style="display: grid; gap: 14px;">
      <div class="field">
        <label>College Name *</label>
        <input type="text" name="college" id="college_input" placeholder="e.g. Madras University">
      </div>
      <div class="field">
        <label>Course Name *</label>
        <input type="text" name="course" id="course_input" placeholder="e.g. Bachelor of Technology">
      </div>
      <div class="field">
        <label>Current Semester *</label>
        <select name="semester" id="semester_input" style="width: 100%; padding: 12px; border: 1px solid rgba(12,58,48,0.15); border-radius: 8px; height: 50px;">
          <option value="">- Select Semester -</option>
          @for($i=1; $i<=8; $i++)
            <option value="{{ $i }}">Semester {{ $i }}</option>
          @endfor
        </select>
      </div>
    </div>

    <!-- Pursuing NO fields -->
    <div class="form-row grid-3" id="noEducationFields" style="display: none; gap: 14px;">
      <div class="field">
        <label>Institution / Board / University *</label>
        <input type="text" name="institution" id="institution_input" placeholder="e.g. Madras University">
      </div>
      <div class="field">
        <label>Degree / Qualification *</label>
        <input type="text" name="degree" id="degree_input" placeholder="e.g. Bachelor of Technology">
      </div>
      <div class="field">
        <label>Year of Passing *</label>
        <input type="text" name="year_of_passing" id="year_of_passing_input" placeholder="e.g. 2024">
      </div>
    </div>

    <div style="font-family: inherit; font-size: 12.5px; padding-bottom: 6px; margin-top: 20px; margin-bottom: 14px; border-bottom: 1px solid rgba(12,58,48,0.1); font-weight: 700; color: #0c3a30; text-transform: uppercase; letter-spacing: 0.5px;">Profiles & Resume</div>
    <div class="form-row grid-2">
      <div class="field">
        <label>LinkedIn Profile URL <span class="text-danger">*</span></label>
        <input type="url" name="linkedin_url" placeholder="https://linkedin.com/in/username" required>
      </div>
      <div class="field">
        <label>Upload your resume *</label>
        <input type="file" name="resume_file" required style="width: 100%; padding: 10px; border: 1px solid rgba(12,58,48,0.15); border-radius: 8px; background: #fffaf4; height: 50px;">
      </div>
    </div>

    <div class="declaration-row" style="display: flex; gap: 10px; align-items: flex-start; margin-top: 20px;">
      <input type="checkbox" id="declarationCheck" required style="width: auto; margin-top: 4px;">
      <p style="font-size: 12.5px; color: #4d6459; line-height: 1.5; margin: 0;">I hereby declare that the information provided above is true and correct to the best of my knowledge, and I understand that any false information may disqualify my application.</p>
    </div>

    <button type="submit" class="drawer-submit" style="margin-top: 20px;">Submit Application</button>
    <span class="drawer-note" style="display: block; text-align: center; margin-top: 8px;">We'll only use this to reach out about your application.</span>
  </form>

</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: linear-gradient(135deg, #fffcf9 0%, #ffeada 100%); border: 1px solid rgba(12, 58, 48, 0.15); border-radius: 20px;">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #0c3a30;"></i>
                </div>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; line-height: 1.3; color: #0c3a30;">Application Submitted Successfully!</h3>
                <p class="mb-4" style="line-height: 1.6; font-size: 0.95rem; color: #687588;">
                    We've successfully received your application. Our hiring team will review your submission and keep you informed about the next steps in the recruitment process.
                </p>
                <a href="{{ request()->url() }}" class="btn px-5 py-3 fw-bold w-100 d-block text-center" style="text-decoration: none; background-color: #0c3a30; color: #ffffff; border-radius: 12px; border: none; transition: all 0.3s ease;">
                    Continue Exploring
                </a>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
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
        // Toggle Conditional Education Fields
        const yesRadio = document.getElementById('pursuing_yes');
        const noRadio = document.getElementById('pursuing_no');
        const yesFields = document.getElementById('yesEducationFields');
        const noFields = document.getElementById('noEducationFields');

        // Required inputs to toggle validation dynamically
        const collegeInput = document.getElementById('college_input');
        const courseInput = document.getElementById('course_input');
        const semesterInput = document.getElementById('semester_input');
        const institutionInput = document.getElementById('institution_input');
        const degreeInput = document.getElementById('degree_input');
        const passingInput = document.getElementById('year_of_passing_input');

        function toggleEdu() {
            if (yesRadio && yesRadio.checked) {
                yesFields.style.display = 'grid';
                noFields.style.display = 'none';
                collegeInput.required = true;
                courseInput.required = true;
                semesterInput.required = true;
                institutionInput.required = false;
                degreeInput.required = false;
                passingInput.required = false;
            } else if (noRadio && noRadio.checked) {
                yesFields.style.display = 'none';
                noFields.style.display = 'grid';
                collegeInput.required = false;
                courseInput.required = false;
                semesterInput.required = false;
                institutionInput.required = true;
                degreeInput.required = true;
                passingInput.required = true;
            }
        }

        if (yesRadio && noRadio) {
            yesRadio.addEventListener('change', toggleEdu);
            noRadio.addEventListener('change', toggleEdu);
            toggleEdu(); // Initial trigger
        }

        // Phone formatting
        var phoneInput = document.getElementById('job-phone');
        var whatsappInput = document.getElementById('job-whatsapp');
        var emergencyInput = document.getElementById('job-emergency');

        var itiPhone, itiWhatsapp, itiEmergency;
        
        var telOpts = {
            initialCountry: "in",
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
        };

        if (phoneInput) itiPhone = window.intlTelInput(phoneInput, telOpts);
        if (whatsappInput) itiWhatsapp = window.intlTelInput(whatsappInput, telOpts);
        if (emergencyInput) itiEmergency = window.intlTelInput(emergencyInput, telOpts);

        // Drawer Controls
        var overlay = document.getElementById('drawerOverlay');
        var drawer = document.getElementById('drawer');
        var openBtns = [
            document.getElementById('sidebarApplyBtn'),
            document.getElementById('stickyApplyBtn')
        ];
        var closeBtn = document.getElementById('drawerCloseBtn');

        function openDrawer() {
            overlay.style.display = 'block';
            drawer.style.display = 'block';
            setTimeout(function() {
                overlay.classList.add('active');
                drawer.classList.add('active');
            }, 10);
        }

        function closeDrawer() {
            overlay.classList.remove('active');
            drawer.classList.remove('active');
            setTimeout(function() {
                overlay.style.display = 'none';
                drawer.style.display = 'none';
            }, 350);
        }

        openBtns.forEach(function(btn) {
            if(btn) btn.addEventListener('click', openDrawer);
        });

        if(closeBtn) closeBtn.addEventListener('click', closeDrawer);
        if(overlay) overlay.addEventListener('click', closeDrawer);

        // Form submission with ajax
        var form = document.getElementById('jobApplyForm');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Format phone numbers to full International format
                if (phoneInput && itiPhone) {
                    phoneInput.value = itiPhone.getNumber();
                }
                if (whatsappInput && itiWhatsapp) {
                    whatsappInput.value = itiWhatsapp.getNumber();
                }
                if (emergencyInput && itiEmergency) {
                    emergencyInput.value = itiEmergency.getNumber();
                }

                var formData = new FormData(form);

                fetch(form.action, {
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
                    if (data.type === 'success') {
                        closeDrawer();
                        var successModalElement = document.getElementById('successModal');
                        if (successModalElement) {
                            var myModal = new bootstrap.Modal(successModalElement);
                            myModal.show();
                        }
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
    });
</script>
@endpush

@endsection
