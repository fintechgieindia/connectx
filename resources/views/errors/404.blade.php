@php
$seo = [
    'title'       => 'Page Not Found (404) | Young Chanakya X',
    'description' => 'The page you are looking for does not exist or has been moved. Explore Young Chanakya X to discover creators, events, and initiatives.',
    'robots'      => 'noindex, follow',
];
@endphp

@extends('layout.app')

@section('content')
<div class="error-404-wrapper py-5 text-center" style="min-height: 65vh; display: flex; align-items: center; justify-content: center; background: #0c3a30; color: #ffffff;">
    <div class="container py-5">
        <span class="badge mb-3" style="background: rgba(255, 210, 177, 0.2); color: #ffd2b1; font-size: 14px; padding: 8px 16px; border-radius: 50px;">404 ERROR</span>
        <h1 style="font-size: clamp(36px, 5vw, 64px); font-weight: 800; color: #ffd2b1; margin-bottom: 20px;">Page Not Found</h1>
        <p class="lead mb-4 mx-auto" style="max-width: 580px; color: rgba(255, 255, 255, 0.8); font-size: 18px;">
            The page you are looking for may have been moved, removed, or is temporarily unavailable.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="{{ url('/') }}" class="btn" style="background: #ffd2b1; color: #0c3a30; font-weight: 700; padding: 12px 28px; border-radius: 50px;">Return Home</a>
            <a href="{{ url('/connectors') }}" class="btn" style="background: transparent; color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.4); font-weight: 700; padding: 12px 28px; border-radius: 50px;">Explore Connectors</a>
            <a href="{{ url('/contact') }}" class="btn" style="background: transparent; color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.4); font-weight: 700; padding: 12px 28px; border-radius: 50px;">Contact Us</a>
        </div>
    </div>
</div>
@endsection
