<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login — Young Chanakya X</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="Secure admin login for the Young Chanakya X dashboard.">
  <link rel="icon" href="{{ asset('images/fav-icon/favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="page-login">

<div class="login-split">

  {{-- ============ LEFT PANEL ============ --}}
  <div class="login-left">
    <div class="grid-bg"></div>
    <div class="left-content">
      <img src="{{ asset('images/logo/logo.png') }}" alt="Young Chanakya X" class="left-logo">
    </div>
  </div>

  {{-- ============ RIGHT PANEL ============ --}}
  <div class="login-right">

    <div class="form-header">
      <div class="eyebrow">Admin Access</div>
      <h1>Welcome back</h1>
      <p>Sign in to continue to the YCX dashboard.</p>
    </div>

    {{-- Flash info --}}
    @if(session('info'))
      <div class="alert alert-info">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
        {{ session('info') }}
      </div>
    @endif

    {{-- Error --}}
    @if($errors->any())
      <div class="alert alert-error">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M15 9l-6 6M9 9l6 6"/></svg>
        <span>{{ $errors->first() }}</span>
      </div>
    @endif

    {{-- Login Form --}}
    <form method="POST" action="{{ route('admin.login.post') }}" id="loginForm" novalidate>
      @csrf

      {{-- Email --}}
      <div class="login-field">
        <label for="email">Email address</label>
        <div class="input-wrap">
          <span class="input-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </span>
          <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter your email address"
            autocomplete="email"
            autofocus
            class="{{ $errors->has('email') ? 'input-error' : '' }}"
            required
          >
        </div>
        @error('email')
          <span class="field-error">{{ $message }}</span>
        @enderror
      </div>

      {{-- Password --}}
      <div class="login-field">
        <label for="password">Password</label>
        <div class="input-wrap">
          <span class="input-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          </span>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            autocomplete="current-password"
            class="{{ $errors->has('password') ? 'input-error' : '' }}"
            required
          >
          <button type="button" class="toggle-pw" id="togglePw" aria-label="Toggle password visibility">
            <svg id="eyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          </button>
        </div>
        @error('password')
          <span class="field-error">{{ $message }}</span>
        @enderror
      </div>

      {{-- Remember --}}
      <div class="options-row">
        <label class="remember-label">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <span>Remember me</span>
        </label>
      </div>

      {{-- Submit --}}
      <button type="submit" class="btn-login" id="loginBtn">
        <span class="spinner"></span>
        <span class="btn-text">Sign in to Dashboard</span>
        <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </button>

    </form>

    {{-- Footer --}}
    <div class="form-footer">
      <div class="security-row">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Protected session — credentials are encrypted in transit.
      </div>
      <a href="{{ url('/') }}" class="back-link">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        Back to YCX website
      </a>
    </div>

  </div>

</div>

<script>
  // Toggle password visibility
  const togglePw = document.getElementById('togglePw');
  const pwInput  = document.getElementById('password');
  const eyeIcon  = document.getElementById('eyeIcon');

  const eyeOpen   = `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`;
  const eyeClosed = `<path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/>`;

  togglePw.addEventListener('click', () => {
    const isHidden = pwInput.type === 'password';
    pwInput.type      = isHidden ? 'text' : 'password';
    eyeIcon.innerHTML = isHidden ? eyeClosed : eyeOpen;
  });

  // Loading state on submit
  document.getElementById('loginForm').addEventListener('submit', () => {
    document.getElementById('loginBtn').classList.add('loading');
  });

  // Focus first error field
  const firstError = document.querySelector('.input-error');
  if (firstError) firstError.focus();
</script>

</body>
</html>
