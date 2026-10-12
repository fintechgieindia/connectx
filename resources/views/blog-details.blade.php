@php
use Illuminate\Support\Str;

$postTitle       = $post->meta_title ?: ($post->title . ' — Young Chanakya X');
$postDescRaw     = $post->meta_description ?: ($post->excerpt ?: strip_tags($post->content));
$postDescription = Str::limit(trim(preg_replace('/\s+/', ' ', $postDescRaw)), 155);
$postKeywords    = $post->meta_keywords ?: ('ycx insights, ' . $post->category . ', Young Chanakya X, creator ecosystem, leadership');
$prodBase        = 'https://connectx.youngchanakya.com';

if (!empty($post->image)) {
    $postImage = Str::startsWith($post->image, ['http://', 'https://']) ? $post->image : ($prodBase . '/' . ltrim($post->image, '/'));
} else {
    $postImage = $prodBase . '/images/assets/ogg.png';
}

$postCanonical = $prodBase . '/insights/' . $post->slug;

$seo = [
    'title'       => $postTitle,
    'description' => $postDescription,
    'keywords'    => $postKeywords,
    'image'       => $postImage,
    'type'        => 'article',
    'canonical'   => $postCanonical,
];

$blogPostingSchema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BlogPosting',
            '@id' => $postCanonical . '#article',
            'isPartOf' => [
                '@type' => 'WebPage',
                '@id' => $postCanonical . '#webpage'
            ],
            'headline' => $post->title,
            'description' => $postDescription,
            'image' => [
                '@type' => 'ImageObject',
                'url' => $postImage
            ],
            'datePublished' => optional($post->created_at)->toIso8601String() ?: now()->toIso8601String(),
            'dateModified' => optional($post->updated_at)->toIso8601String() ?: now()->toIso8601String(),
            'author' => [
                '@type' => 'Person',
                'name' => $post->author_name ?: 'Young Chanakya X Team'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Young Chanakya X',
                'url' => 'https://connectx.youngchanakya.com/',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://connectx.youngchanakya.com/images/logo/logo.png'
                ]
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $postCanonical
            ]
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $postCanonical . '#breadcrumb',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://connectx.youngchanakya.com/'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Insights',
                    'item' => 'https://connectx.youngchanakya.com/insights'
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $post->title,
                    'item' => $postCanonical
                ]
            ]
        ]
    ]
];
@endphp

@extends('layout.app')

@push('seo')
<script type="application/ld+json">
{!! json_encode($blogPostingSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #ffffff !important;
  }
  .blog-details-body {
      background: #ffffff !important;
      font-family: 'Manrope', sans-serif;
  }
  .article-layout {
      display: grid;
      grid-template-columns: 1.4fr 0.6fr;
      gap: 50px;
      align-items: start;
  }
  .article-sidebar {
      position: sticky;
      top: 100px;
      align-self: start;
  }
  .article-main {
      font-size: 16px;
      line-height: 1.8;
      color: #3e5246;
  }
  .article-main p {
      margin-bottom: 24px;
  }
  .article-main h3 {
      font-family: 'Fraunces', serif;
      font-size: 26px;
      font-weight: 700;
      color: #0c3a30;
      margin-top: 40px;
      margin-bottom: 16px;
  }
  .article-main blockquote {
      border-left: 4px solid var(--orange-deep);
      padding: 16px 24px;
      background: #fffaf4;
      font-family: 'Fraunces', serif;
      font-size: 20px;
      font-style: italic;
      color: #0c3a30;
      margin: 36px 0;
      border-radius: 0 12px 12px 0;
  }
  .article-main ul {
      margin-bottom: 28px;
      padding-left: 20px;
  }
  .article-main li {
      margin-bottom: 8px;
  }
  .sidebar-box {
      background: #fffaf4;
      border: 1px solid rgba(12, 58, 48, 0.06);
      padding: 30px;
      border-radius: 20px;
      margin-bottom: 30px;
  }
  .sidebar-box h4 {
      font-family: 'Fraunces', serif;
      font-size: 20px;
      font-weight: 700;
      color: #0c3a30;
      margin-bottom: 20px;
      padding-bottom: 12px;
      border-bottom: 1px solid rgba(12, 58, 48, 0.08);
  }
  .recent-link {
      display: block;
      color: #0c3a30;
      text-decoration: none;
      font-weight: 700;
      font-size: 14.5px;
      line-height: 1.4;
      margin-bottom: 16px;
      transition: color 0.3s ease;
  }
  .recent-link:hover {
      color: var(--orange-deep);
  }
  @media(max-width: 991px) {
      .article-layout {
          grid-template-columns: 1fr;
          gap: 40px;
      }
      .article-sidebar {
          position: static;
      }
  }
</style>
@endpush

@section('content')
<div class="blog-details-body">

    <!-- HERO SECTION -->
    <div class="premium-hero-container d-flex align-items-center position-relative" style="min-height: 75vh; background-image: linear-gradient(180deg, rgba(12, 58, 48, 0.65) 0%, #090d16 100%), url('{{ asset($post->image) }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container pt-200 pb-100">
            <div class="row">
                <div class="col-xl-9 col-lg-11">
                    <ul class="style-none d-flex align-items-center gap-2 p-0 mb-4 text-uppercase tracking-wider" style="font-size: 0.75rem; font-weight: 700; letter-spacing: 2px; list-style: none;">
                        <li><a href="{{ url('/') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Home</a></li>
                        <li class="text-white opacity-40">/</li>
                        <li><a href="{{ route('insights.index') }}" class="text-white opacity-60 text-decoration-none hover-opacity-100">Insights</a></li>
                        <li class="text-white opacity-40">/</li>
                        <li><a href="#" class="text-white opacity-60 text-decoration-none hover-opacity-100">{{ $post->category }}</a></li>
                        {{-- <li class="text-white opacity-40">/</li>
                        <li class="text-white" style="color: #ffd2b1 !important;">{{ Str::limit($post->title, 35) }}</li> --}}
                    </ul>
                    <h1 class="text-glow-headline mb-4" style="font-size: clamp(32px, 4.5vw, 56px);">{{ $post->title }}</h1>
                    <div class="d-flex align-items-center gap-3 text-white">
                        <!-- Author hidden per request -->
                        <div>
                            <div style="font-size: 11px; opacity: 0.75;" class="text-uppercase tracking-wider">{{ $post->created_at->format('M d, Y') }} • {{ $post->read_time }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN BODY SECTION -->
    <section style="padding: 100px 0; background: #ffffff !important;">
        <div class="container">
            <div class="article-layout">
                
                <!-- Main Content Column -->
                <div class="article-main">
                    {!! $post->content !!}
                </div>

                <!-- Sidebar Column -->
                <div class="article-sidebar">

                    <!-- Related YCX Insights Box -->
                    <div class="sidebar-box">
                        <h4>Related YCX Insights</h4>
                        @foreach($recentPosts as $item)
                        <div style="margin-bottom: 20px; border-bottom: 1px solid rgba(12, 58, 48, 0.04); padding-bottom: 16px;">
                            <div class="recent-meta" style="font-size: 10px; display: inline-block; font-weight: 700; text-transform: uppercase; color: #76583b; background: rgba(255, 190, 142, 0.25); padding: 4px 10px; border-radius: 6px; letter-spacing: 0.5px; margin-bottom: 8px;">{{ $item->category }}</div>
                            <a href="{{ route('insights.detail', $item->slug) }}" class="recent-link" style="margin-top: 4px;">{{ $item->title }}</a>
                        </div>
                        @endforeach
                    </div>

                    <!-- Popular Tags Box -->
                    <div class="sidebar-box">
                        <h4>Popular Tags</h4>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Leadership</span>
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Storytelling</span>
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Networking</span>
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Learning</span>
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Mentorship</span>
                            <span class="skill-badge" style="background: var(--white); border: 1px solid rgba(12, 58, 48, 0.12); color: var(--green); padding: 6px 14px; border-radius: 100px; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s ease;">Ecosystem</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</div>
@endsection
