<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | BSAT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #eef2ff, #ffffff, #eef2ff);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card-container {
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

  <div class="card-container">
    <!-- Logo & Header -->
    <div class="text-center mb-4">
      <img src="{{ asset('assets/img/logo/Barakah-Logo.png') }}" alt="Company Logo" class="mb-3" width="130">
      <h2 class="fw-semibold text-dark">Forgot Password</h2>
      <p class="text-muted small mb-0">Enter your email to reset your password</p>
    </div>

    <!-- Info Text -->
    <div class="mb-4 text-sm text-muted">
      {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    @if (session('status'))
      <div class="alert alert-success text-center py-2 mb-4">
        {{ session('status') }}
      </div>
    @endif

    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}">
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

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm">
        Email Password Reset Link
      </button>
    </form>

    <!-- Footer -->
    <p class="text-center text-muted small mt-4 mb-0">
      © {{ date('Y') }} BSAT. All rights reserved.
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
