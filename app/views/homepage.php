<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes Decor - Transform Your Living Space</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, furniture, living space transformation" name="keywords">
    <meta content="Discover exquisite home decor and interior design solutions at Interior Homes Decor. Transform your living space into a haven of style and comfort." name="description">

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
            --primary-color: #6b8e23;
            --secondary-color: #556b2f;
            --accent-color: #d2b48c;
            --text-color: #2f4f4f;
            --bg-color: #f4f4f2;
            --white: #ffffff;
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
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }

        .navbar .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .navbar .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--primary-color);
            transition: all 0.3s ease;
        }

        .navbar .nav-link:hover::after,
        .navbar .nav-link.active::after {
            width: 100%;
            left: 0;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--primary-color) !important;
        }

        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position: relative;
        }

        .carousel-caption {
            bottom: 20%;
            z-index: 10;
            padding: 20px;
            background-color: rgba(0,0,0,0.6);
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
        }

        .carousel-caption h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--white);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 1rem;
        }

        .carousel-caption h4 {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary:active:focus {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        .carousel-caption .btn-primary {
            display: inline-block;
            margin-top: 1rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .contact-info {
            font-size: 1.1rem;
            line-height: 1.8;
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .contact-info i {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .footer {
            background-color: var(--secondary-color);
            color: var(--white);
            padding: 40px 0;
        }

        .footer p {
            margin: 0;
            text-align: center;
        }

        .footer a {
            color: var(--accent-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--white);
        }

        .footer .social-icons {
            text-align: center;
            margin-top: 20px;
        }

        .footer .social-icons a {
            color: var(--white);
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .carousel-caption h3 {
                font-size: 2rem;
            }

            .carousel-caption h4 {
                font-size: 1.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .navbar .nav-link {
                font-size: 0.9rem;
            }

            .contact-info {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">Interior Homes Decor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/main" class="nav-link active">Home</a>
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
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://i.pinimg.com/736x/72/94/60/7294601d084f78bbefb0e4f17545e5e4.jpg');">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h4>Crafting Your Own Design</h4>
                    <h3>Create Your Unique Home Decor Style</h3>
                    <a href="/shop" class="btn btn-primary carousel-btn">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://i.pinimg.com/originals/8c/93/4b/8c934b0a8f07aaef1e0a6239a9ef4c3b.jpg');">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h4>Elevate Your Living Space</h4>
                    <h3>Discover Timeless Elegance for Your Home</h3>
                    <a href="/shop" class="btn btn-primary">Explore Collection</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Contact Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Get In Touch</h2>
            <h5 class="font-weight-normal text-muted mb-4">We're Here to Help You Create Your Dream Space</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-center mb-5">Home interior design is not just about decorating spaces—it's about crafting a haven that reflects your soul, comforts your spirit, and inspires your life. Let us help you bring your vision to life.</p>
                <div class="contact-info text-center">
                    <p><i class="fas fa-map-marker-alt"></i>456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
                    <p><i class="fas fa-envelope"></i>support@InteriorHomesDecor.com</p>
                    <p><i class="fas fa-phone-alt"></i>+639 123 456 789</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <p>© <?php echo date('Y'); ?> Interior Homes Decor. All Rights Reserved. Designed with <i class="fas fa-heart"></i> by <a href="#">YourName</a></p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll behavior
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });

        // Add animation class to elements when they come into view
        $(window).on('load scroll', function() {
            $('.animate').each(function() {
                if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                    $(this).addClass('animated');
                }
            });
        });
    </script>
</body>

</html>

