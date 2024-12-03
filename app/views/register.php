<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Interior Homes- Register</title>
  <meta content="Restaurant Registration" name="description">
  <meta content="restaurant, registration, account" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      background-image: url('https://i.pinimg.com/736x/af/9c/92/af9c9290fe35d6865ed2a5752933eb69.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    /* Semi-transparent overlay */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.1);
      z-index: 0;
    }

    .card {
      max-width: 500px;
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      background-color: rgba(255, 255, 255, 0.40  );
      position: relative;
      z-index: 1;
    }

    .card-body {
      padding: 40px;
    }

    .card-title {
      color: #5d3a28;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
    }

    .form-control {
      border-radius: 8px;
      border: 1px solid #bca795;
      background-color: #f5f0e7;
      color: #5d3a28;
    }

    .form-control::placeholder {
      color: #a08d7d;
    }

    .btn-warning {
      background-color: #8b5e3b;
      border-color: #8b5e3b;
      border-radius: 8px;
      color: #fff;
    }

    .btn-warning:hover {
      background-color: #7a5132;
    }

    .footer-links a {
      color: #798645;
      text-decoration: none;
    }

    .footer-links a:hover {
      color: #6b793c;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Create an Account</h5>
      <p class="text-center small text-muted">Enter your personal details to create an account</p>
      <form class="row g-3 needs-validation" novalidate method="post" action="/register/process">
        <div class="col-12">
          <input type="text" name="fullname" class="form-control" id="yourFullname" placeholder="Full Name" required>
          <div class="invalid-feedback">Please enter your full name!</div>
        </div>
        <div class="col-12">
          <input type="text" name="compAdd" class="form-control" id="yourCompAdd" placeholder="Address">
          <div class="invalid-feedback">Please enter your address!</div>
        </div>
        <div class="col-12">
          <input type="text" name="number" class="form-control" id="yourNumber" placeholder="Phone Number" required>
          <div class="invalid-feedback">Please enter your phone number!</div>
        </div>
        <div class="col-12">
          <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Your Email" required>
          <div class="invalid-feedback">Please enter a valid email address!</div>
        </div>
        <div class="col-12">
          <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
          <div class="invalid-feedback">Please enter your password!</div>
        </div>
        <div class="col-12">
          <select name="role" class="form-select" required>
            <option value="">Select Role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
          <div class="invalid-feedback">Please select a role!</div>
        </div>
        <div class="col-12">
          <button class="btn btn-warning w-100" type="submit">Create Account</button>
        </div>
        <div class="col-12">
          <p class="small mb-0 text-center">Already have an account? <a href="/login" class="footer-links">Log in</a></p>
        </div>
      </form>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
</body>

</html>
