@php use Illuminate\Support\Facades\Auth; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel — ConnectX YCX')</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="Young Chanakya X Admin Dashboard">
  <link rel="icon" type="image/png" href="{{ asset('images/fav-icon/icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/fav-icon/icon.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
  @stack('styles')
</head>
<body>

<div class="app-shell">
  {{-- Shared Sidebar --}}
  @include('admin.sidebar')

  {{-- Main Content View Body --}}
  @yield('content')
</div>

@stack('scripts')
</body>
</html>
