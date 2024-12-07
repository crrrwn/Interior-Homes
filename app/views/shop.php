<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes - Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, online shop" name="keywords">
    <meta content="Discover beautiful home decor items at Interior Homes" name="description">

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
            --accent-color:  #d4a373;
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

        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .product-img {
            height: 250px;
            overflow: hidden;
        }

        .product-img img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .product-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-price {
            color: var(--primary-color);
            font-weight: 700;
        }

        .btn-add-to-cart {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .btn-add-to-cart:hover {
            background-color: var(--secondary-color);
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

        .footer i {
            color: var(--accent-color);
            margin-right: 0.5rem;
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
                        <a href="/shop" class="nav-link active">Shop</a>
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

    <!-- Shop Start -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Our Collection</h2>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?= BASE_URL . ''; ?>" method="get" class="mb-4">
                    <div class="input-group">
                        
                        <div class="input-group-append">
                            
                                
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php if (empty($prod)): ?>
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        No items found.
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($prod as $pr): ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="card product-card">
                            <div class="product-img">
                                <a href="<?php echo BASE_URL . 'view/' . $pr['id']; ?>">
                                    <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="<?= $pr['name'] ?>" class="card-img-top">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title product-title"><?= $pr['name'] ?></h5>
                                <p class="card-text product-price">₱<?= number_format($pr['prize'], 2) ?></p>
                                <a href="<?php echo BASE_URL . 'Acc/' . $pr['id']; ?>" class="btn btn-add-to-cart">
                                    <i class="fas fa-shopping-cart mr-2"></i>Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Shop End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h5>Interior Homes Decor</h5>
                    <p><i class="fa fa-map-marker-alt"></i> 456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
                    <p><i class="fa fa-envelope"></i> support@InteriorHomesDecor.com</p>
                    <p><i class="fa fa-phone-alt"></i> +639 123 456 789</p>
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

