<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes - Product Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, product details" name="keywords">
    <meta content="Explore our beautiful home decor items in detail" name="description">

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

        .product-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .product-details {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .product-title {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.5rem;
            color: var(--accent-color);
            font-weight: 600;
        }

        .product-stock {
            font-size: 1rem;
            color: var(--secondary-color);
        }

        .product-description {
            margin-top: 1rem;
            line-height: 1.6;
        }

        .quantity-input {
            width: 100px;
            text-align: center;
        }

        .btn-add-to-cart {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-add-to-cart:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-back {
            background-color: var(--secondary-color);
            color: #fff;
            border: none;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 3rem 0;
        }

        .footer h5 {
            color: var(--accent-color);
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
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a href="/" class="navbar-brand">Interior Homes Decor</a>
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

    <!-- Product Details Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="product-image">
                    <img class="img-fluid" src="<?= BASE_URL . 'uploads/' . $prod['image'] ?>" alt="<?= htmlspecialchars($prod['name']) ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-details">
                    <h2 class="product-title"><?= htmlspecialchars($prod['name']) ?></h2>
                    <p class="product-price">₱<?= number_format($prod['prize'], 2) ?></p>
                    <p class="product-stock">In Stock: <?= $prod['quantity'] ?></p>
                    <p class="product-description"><?= nl2br(htmlspecialchars($prod['description'])) ?></p>
                    <form method="post" action="<?= BASE_URL . 'Ac/' . $prod['id']; ?>" class="mt-4">
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control quantity-input" min="1" max="<?= $prod['quantity'] ?>" value="1" required>
                        </div>
                        <button type="submit" class="btn btn-add-to-cart">
                            <i class="fa fa-shopping-cart mr-2"></i>Add To Cart
                        </button>
                    </form>
                    <a href="/shop" class="btn btn-back mt-3">
                        <i class="fa fa-arrow-left mr-2"></i>Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5>Interior Homes Decor</h5>
                    <p><i class="fa fa-map-marker-alt mr-3"></i>456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
                    <p><i class="fa fa-envelope mr-3"></i>support@InteriorHomesDecor.com</p>
                    <p><i class="fa fa-phone-alt mr-3"></i>+639 123 456 789</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/main">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/cart">Cart</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest updates and offers.</p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="button">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Interior Homes Decor. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

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
        });
    </script>
</body>

</html>

