<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | BSAT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #eef2ff, #ffffff, #eef2ff);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid #dee2e6;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 2.5rem;
      width: 90%;
      max-width: 450px;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <!-- Logo -->
    <div class="text-center mb-4">
      <img src="{{ asset('assets/img/logo/Barakah-Logo.png') }}" alt="Company Logo" class="mb-3" width="130">
      <h2 class="fw-semibold text-dark">Admin Login</h2>
      <p class="text-muted small mb-0">Access your admin dashboard</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
      <div class="alert alert-success text-center py-2 mb-4">
        {{ session('status') }}
      </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label fw-medium">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
          class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label fw-medium">Password</label>
        <input id="password" type="password" name="password" required
          class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <!-- Remember & Forgot -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember">
          <label class="form-check-label text-muted small" for="remember">
            Remember me
          </label>
        </div>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-decoration-none text-primary small">
            Forgot password?
          </a>
        @endif
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm">
        Log In
      </button>
    </form>

    <!-- Footer -->
    <p class="text-center text-muted small mt-4 mb-0">
      © {{ date('Y') }} Your Company. All rights reserved.
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
