<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Interior Homes - Login</title>
  <meta content="Interior Homes Login" name="description">
  <meta content="interior, homes, login, account" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    :root {
      --primary-color: #8b5e3b;
      --secondary-color: #5d3a28;
      --accent-color: #bca795;
      --background-color: #f5f0e7;
      --text-color: #333;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-image: url('https://i.pinimg.com/736x/af/9c/92/af9c9290fe35d6865ed2a5752933eb69.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      z-index: 0;
    }

    .card {
      max-width: 400px;
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      position: relative;
      z-index: 1;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .card::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 80%);
      transform: rotate(45deg);
      pointer-events: none;
    }

    .card-body {
      padding: 40px;
    }

    .card-title {
      color: var(--secondary-color);
      font-size: 2rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid var(--accent-color);
      background-color: rgba(255, 255, 255, 0.8);
      color: var(--text-color);
      padding: 12px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      box-shadow: 0 0 0 3px rgba(139, 94, 59, 0.25);
      border-color: var(--primary-color);
    }

    .form-control::placeholder {
      color: var(--accent-color);
    }

    .btn-warning {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      border-radius: 8px;
      color: #fff;
      padding: 12px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .btn-warning:hover {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .footer-links a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--secondary-color);
      text-decoration: underline;
    }

    .form-check-input:checked {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .card, .form-control, .btn-warning {
      animation: fadeIn 0.5s ease-out forwards;
    }

    @media (max-width: 576px) {
      .card {
        max-width: 90%;
      }

      .card-body {
        padding: 30px;
      }

      .card-title {
        font-size: 1.75rem;
      }
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Welcome Back</h5>
      <p class="text-center small text-muted mb-4">Enter your credentials to access your account</p>
      <form class="row g-3 needs-validation" novalidate method="post" action="/auth">
        <div class="col-12 mb-3">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
          </div>
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>
        <div class="col-12 mb-3">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
          </div>
          <div class="invalid-feedback">Please enter your password.</div>
        </div>
        <div class="col-12 mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
        </div>
        <div class="col-12 mb-3">
          <button class="btn btn-warning w-100" type="submit">Login</button>
        </div>
        <div class="col-12">
          <p class="small mb-0 text-center footer-links">
            Don't have an account? <a href="/register">Create an account</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

  <script>
    // Form validation
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>

</html>

