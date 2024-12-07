<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes - Checkout</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, checkout" name="keywords">
    <meta content="Complete your purchase of beautiful home decor items" name="description">

    <!-- Favicon -->
    <link href="<?php echo BASE_URL . 'img/favicon.ico'; ?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4a6741;
            --secondary-color: #8a9e8d;
            --accent-color: #d4a373;
            --text-color: #333;
            --bg-color: #f8f9fa;
            --card-bg: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color) !important;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--primary-color);
            transition: all 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
            left: 0;
        }

        .btn-cart {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-cart:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-cart::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.5s ease;
        }

        .btn-cart:active::after {
            width: 300px;
            height: 300px;
            margin-left: -150px;
            margin-top: -150px;
            opacity: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background-color: var(--primary-color);
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1.5rem;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid var(--secondary-color);
            padding: 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(74, 103, 65, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transition: all 0.3s ease;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 3rem 0;
        }

        .footer h5 {
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .footer a {
            color: #fff;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--accent-color);
            text-decoration: none;
        }

        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
            background-color: var(--primary-color);
            color: #fff;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            font-size: 20px;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
            transform: translateY(-5px);
        }

        .order-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 1rem;
        }

        .order-item-details {
            flex-grow: 1;
        }

        .order-item-name {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .order-item-price {
            font-size: 0.9rem;
            color: var(--secondary-color);
        }

        .order-total {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.5s ease-out;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a href="/" class="navbar-brand">Interior Homes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/main" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/shop" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
                <a href="/cart" class="btn btn-cart ml-3">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-light ml-1"><?php echo $cartItemCount; ?></span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Checkout Start -->
    <div class="container py-5">
        <h2 class="text-center mb-5 fade-in-up">Complete Your Order</h2>
        <div class="row">
            <div class="col-lg-8 fade-in-up" style="animation-delay: 0.2s;">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-0">Billing Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="/purchase" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="fullname">Full Name</label>
                                    <input class="form-control" type="text" id="fullname" name="fullname" value="<?= htmlspecialchars($users['fullname']); ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email" value="<?= htmlspecialchars($users['email']); ?>" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="compAdd">Complete Address</label>
                                    <input class="form-control" type="text" id="compAdd" name="compAdd" value="<?= htmlspecialchars($users['compAdd']); ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="number">Mobile No</label>
                                    <input class="form-control" type="tel" id="number" name="number" value="<?= htmlspecialchars($users['number']); ?>" required>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 fade-in-up" style="animation-delay: 0.4s;">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-0">Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $cartTotal = 0;
                        foreach ($cart as $c):
                            $itemTotal = $c['prize'] * $c['quantity'];
                            $cartTotal += $itemTotal;
                        ?>
                            <div class="order-item">
                                <img src="<?php echo BASE_URL . 'uploads/' . $c['image']; ?>" alt="<?= htmlspecialchars($c['name']) ?>" class="order-item-image">
                                <div class="order-item-details">
                                    <div class="order-item-name"><?= htmlspecialchars($c['name']) ?></div>
                                    <div class="order-item-price">
                                        <?= $c['quantity'] ?> x ₱<?= number_format($c['prize'], 2) ?>
                                    </div>
                                </div>
                                <div class="order-item-total">
                                    ₱<?= number_format($itemTotal, 2) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <hr>
                        <div class="d-flex justify-content-between order-total">
                            <strong>Total:</strong>
                            <strong>₱<?= number_format($cartTotal, 2) ?></strong>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="mb-0">Payment Method</h4>
                    </div>
                    <div class="card-body">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="COD" checked>
                            <label class="custom-control-label" for="COD">Cash on Delivery</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block py-3">Place Order</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Interior Homes</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Juan Luna St., Calapan City, Philippines</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@interiorhomes.com</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+639 123 456 789</p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mr-2"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 Interior Homes. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            
            $('.back-to-top').click(function() {
                $('html, body').animate({scrollTop : 0}, 800);
                return false;
            });

            // Form validation
            $('form').submit(function(event) {
                var isValid = true;
                $(this).find('input[required]').each(function() {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });
                if (!isValid) {
                    event.preventDefault();
                    alert('Please fill in all required fields.');
                }
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        });
    </script>
</body>

</html>

