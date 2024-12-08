<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes Decor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, furniture" name="keywords">
    <meta content="Transform your living space with Interior Homes Decor" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #6b8e23;
            --secondary-color: #556b2f;
            --accent-color: #d2b48c;
            --text-color: #2f4f4f;
            --bg-color: #f4f4f2;
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
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--secondary-color) !important;
        }

        .navbar .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--primary-color) !important;
        }

        .carousel-item {
            height: 70vh;
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
            background-color: rgba(0,0,0,0.5);
            border-radius: 10px;
        }

        .carousel-caption h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .carousel-caption h4 {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: #fff;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .contact-info {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .contact-info i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        .footer {
            background-color: var(--secondary-color);
            color: #fff;
            padding: 30px 0;
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
            color: #fff;
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
                <div class="carousel-caption">
                    <h4>Crafting Your Own Design</h4>
                    <h3>Crafting Your Unique Home Decor Design</h3>
                    <a href="/shop" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://i.pinimg.com/736x/72/94/60/7294601d084f78bbefb0e4f17545e5e4.jpg');">
                <div class="carousel-caption">
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
            <h2 class="section-title">Contact Us for Any Inquiries</h2>
            <h5 class="font-weight-normal text-muted mb-4">Get In Touch</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-center mb-5">Home interior design is not just about decorating spaces—it's about crafting a haven that reflects your soul, comforts your spirit, and inspires your life.</p>
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
    <div class="footer">
        <div class="container">
            <p>© 2024 Interior Homes Decor. All Rights Reserved. Designed with <i class="fas fa-heart"></i> by <a href="#">YourName</a></p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll behavior
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
    </script>
</body>

</html>

