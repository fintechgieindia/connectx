@php
/**
 * Insights Listing Page SEO Data
 */
$seo = [
    'title'       => 'Insights | Young Chanakya X',
    'description' => 'Read stories, insights, expert perspectives, and community updates from Young Chanakya X on leadership, entrepreneurship, careers, networking, and personal growth.',
    'keywords'    => 'YCX blog, leadership insights, entrepreneurship, career advice, networking, business stories, community blog, knowledge hub, Young Chanakya X articles, professional growth',
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
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #ffffff !important;
  }
  .search-btn-orange {
      background-color: var(--orange) !important;
      color: var(--primary) !important;
      border-radius: 8px !important;
      padding: 8px 16px !important;
      border: none !important;
      transition: all 0.25s ease !important;
      display: flex;
      align-items: center;
      justify-content: center;
  }
  .main-page-wrapper,
  .blog-body,
  .blog-content-section {
      overflow: visible !important;
  }
  .insights-sidebar {
      position: -webkit-sticky !important;
      position: sticky !important;
      top: 110px !important;
      align-self: flex-start !important;
      z-index: 99 !important;
  }
</style>
@endpush

@section('content')
<div class="blog-body">

    <!-- HERO SECTION -->
    <div class="premium-hero-container d-flex align-items-center position-relative" style="min-height: 70vh; background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.55) 0%, #090d16 100%), url('{{ asset('images/media/blog/blog.webp') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container pt-200 pb-100">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-10">
                    <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                        <li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                        <li class="text-white opacity-40">/</li>
                        <li class="text-white" style="color: #ffd2b1 !important;">Insights</li>
                    </ul>
                    <h1 class="hero-heading text-glow-headline mb-4">Stories, Knowledge & Perspectives</h1>
                    <p class="hero-desc fs-5 mb-0" style="max-width: 650px; line-height: 1.6; font-weight: 500; color: #ffffff; text-shadow: 0 4px 10px rgba(0,0,0,0.8);">
                        Empowering creators, entrepreneurs, and leaders with actionable insights and inspiration to shape a stronger community.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT SECTION -->
    <section class="blog-content-section py-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                
                <div class="col-lg-4 col-xl-3 insights-sidebar-col">
                    <aside class="insights-sidebar">
                        <div class="insights-sidebar-card">
                            <div class="sidebar-header">
                                <h4 class="sidebar-title">Categories</h4>
                            </div>
                            <div class="sidebar-category-list">
                                <a href="javascript:void(0)" class="sidebar-cat-link filter-btn active" data-filter="All">
                                    All Insights
                                </a>
                                @php
                                    $pubCategories = \App\Models\Category::orderBy('name')->get();
                                    if ($pubCategories->isEmpty()) {
                                        $pubCategories = collect(['Storytelling', 'Networking', 'Learning', 'Personal Branding', 'Collaboration', 'Career Growth', 'Entrepreneurship'])->map(fn($c) => (object)['name' => $c]);
                                    }
                                @endphp
                                @foreach($pubCategories as $cat)
                                    <a href="javascript:void(0)" class="sidebar-cat-link filter-btn" data-filter="{{ $cat->name }}">
                                        {{ $cat->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>

                <!-- MAIN CONTENT COLUMN -->
                <div class="col-lg-8 col-xl-9">
                    <!-- Search Filter Bar (Aligned Right) -->
                    <div class="d-flex justify-content-end align-items-center mb-4">
                        <div class="insights-search-box" style="max-width: 450px; width: 100%;">
                            <div class="input-group align-items-center" style="background: #ffffff; border-radius: 12px; border: 1px solid rgba(12, 58, 48, 0.12); padding: 4px 6px; box-shadow: 0 4px 18px rgba(0,0,0,0.03); transition: all 0.25s ease;">
                                <input type="text" id="insightSearchInput" class="form-control border-0 ps-3 bg-transparent" placeholder="Search..." style="font-size: 14.5px; color: #0c3a30; box-shadow: none;">
                                <button class="btn search-btn-orange" type="button" id="insightSearchBtn">
                                    <i class="bi bi-search" style="font-size: 0.95rem;"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Grid -->
                    <div class="blog-grid">
                        @foreach($posts as $item)
                        <!-- Card -->
                        <div class="blog-card" data-category="{{ $item->category }}">
                            <div class="card-img" style="background-image: url('{{ asset($item->image) }}');"></div>
                            <div class="card-content">
                                <div class="post-meta">
                                    <span class="post-category">{{ $item->category }}</span>
                                    {{-- <span>{{ $item->created_at->format('M d, Y') }}</span>
                                    <span>•</span>
                                    <span>{{ $item->read_time }}</span> --}}
                                </div>
                                <h3 class="card-title"><a href="{{ route('insights.detail', $item->slug) }}">{{ $item->title }}</a></h3>
                                <p class="card-excerpt">{{ $item->excerpt }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination (Shows only if items count is more than 9) -->
                    @if(count($posts) > 9)
                    <div class="blog-pagination mb-3">
                        <a href="#" class="page-link"><i class="bi bi-chevron-left"></i></a>
                        <a href="#" class="page-link active">1</a>
                        <a href="#" class="page-link">2</a>
                        <a href="#" class="page-link"><i class="bi bi-chevron-right"></i></a>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filters = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.blog-card');
        const searchInput = document.getElementById('insightSearchInput');

        let currentCat = 'all';
        let currentSearch = '';

        function filterCards() {
            cards.forEach(card => {
                const cardCat = (card.getAttribute('data-category') || '').trim().toLowerCase();
                const cardText = (card.textContent || '').trim().toLowerCase();

                const matchesCat = (currentCat === 'all' || cardCat === currentCat);
                const matchesSearch = (!currentSearch || cardText.includes(currentSearch));

                if (matchesCat && matchesSearch) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        filters.forEach(filter => {
            filter.addEventListener('click', function(e) {
                e.preventDefault();
                filters.forEach(f => f.classList.remove('active'));
                this.classList.add('active');
                
                currentCat = (this.getAttribute('data-filter') || '').trim().toLowerCase();
                filterCards();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', function() {
                currentSearch = this.value.trim().toLowerCase();
                filterCards();
            });
        }
    });
</script>
@endpush
