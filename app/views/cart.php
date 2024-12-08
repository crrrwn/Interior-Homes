<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Interior Homes - Shopping Cart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, shopping cart" name="keywords">
    <meta content="View and manage your Interior Homes shopping cart" name="description">

    <!-- Favicon -->
    <link href="<?php echo BASE_URL . 'img/favicon.ico'; ?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
        }

        .btn-cart {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-cart:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .table {
            color: var(--text-color);
        }

        .table th {
            font-weight: 600;
            color: var(--primary-color);
            background-color: rgba(74, 103, 65, 0.1);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 2rem 0;
        }

        .footer a {
            color: var(--accent-color);
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #fff;
            text-decoration: none;
        }

        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
            background-color: var(--primary-color);
            color: #fff;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            background-color: var(--secondary-color);
        }

        .cart-item {
            background-color: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .cart-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
        }

        .cart-summary {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 1.5rem;
        }

        .btn-remove {
            color: #dc3545;
            background-color: transparent;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-remove:hover {
            color: #bd2130;
            transform: scale(1.1);
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            border: 1px solid var(--secondary-color);
            border-radius: 5px;
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

    <!-- Cart Start -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Your Shopping Cart</h2>
        <div class="row">
            <div class="col-lg-8">
                <?php 
                // Initialize cartTotal at the start
                $cartTotal = 0;
                
                if (empty($cart)): ?>
                    <div class="alert alert-info" role="alert">
                        Your cart is empty. <a href="/shop" class="alert-link">Continue shopping</a>
                    </div>
                <?php else: ?>
                    <?php
                    foreach ($cart as $item):
                        $itemTotal = $item['prize'] * $item['quantity'];
                        $cartTotal += $itemTotal;
                    ?>
                        <div class="cart-item d-flex align-items-center p-3 mb-3">
                            <img src="<?php echo BASE_URL . 'uploads/' . $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="cart-item-image mr-3">
                            <div class="flex-grow-1">
                                <h5 class="mb-1"><?php echo $item['name']; ?></h5>
                                <p class="mb-0">Price: ₱<?php echo number_format($item['prize'], 2); ?></p>
                                <div class="d-flex align-items-center mt-2">
                                    <form action="<?php echo site_url('main/updateQuantity'); ?>" method="post" class="d-flex align-items-center">
                                        <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                        <input type="number" name="quantity" class="form-control quantity-input mr-2" value="<?php echo $item['quantity']; ?>" min="1">
                                    </form>
                                    <p class="mb-0 ml-3">Total: ₱<?php echo number_format($itemTotal, 2); ?></p>
                                </div>
                            </div>
                            <a href="/cartdel/<?php echo $item['id']; ?>" class="btn btn-remove">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary">
                    <h4 class="mb-4">Cart Summary</h4>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Subtotal</span>
                        <span>₱<?php echo number_format($cartTotal, 2); ?></span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <strong>Total</strong>
                        <strong>₱<?php echo number_format($cartTotal, 2); ?></strong>
                    </div>
                    <a href="/checkout" class="btn btn-primary btn-block">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

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

            // Quantity input functionality
            $('.quantity-input').change(function() {
                $(this).closest('form').submit();
            });
        });
    </script>
</body>
</html>

