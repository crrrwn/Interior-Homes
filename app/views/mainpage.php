<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* General Body Settings */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f2;
            color: #2f4f4f;
        }

        /* Navbar */
       

        .navbar .nav-link {
            color: #1F4529 !important;
        }

        .navbar .nav-link:hover {
            color: #d2b48c !important;
        }

        /* Carousel */
        .carousel-item {
            position: relative;
            height: 450px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            filter: blur(9px); /* Apply blur effect */
        }

        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            z-index: 1;
        }

        .carousel-caption::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0); /* Dark overlay for text readability */
            z-index: -1;
        }

        .carousel-caption h3 {
            font-size: 3rem;
            font-weight: 700;
            color:white;
        }

        .carousel-caption h4 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1F4529;
        }

        /* Buttons */
        .btn-light {
            background-color: #6b8e23;
            color: white;
            border-radius: 30px;
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn-light:hover {
            background-color: #556b2f;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Section Title */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #556b2f;
            margin-bottom: 30px;
        }

        /* Contact Info */
        .contact-info {
            font-size: 1.1rem;
            color: #2f4f4f;
            line-height: 1.6;
        }

        .contact-info i {
            color: #6b8e23;
        }

        /* Footer */
        .footer {
            background-color: #556b2f;
            color: #fff;
            padding: 30px 0;
        }

        .footer p {
            margin: 0;
            text-align: center;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            color: #d2b48c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .carousel-caption h3 {
                font-size: 2rem;
            }

            .carousel-caption h4 {
                font-size: 1.2rem;
            }

            .section-title {
                fontD-size: 2rem;
            }

            .navbar .nav-link {
                font-size: 0.9rem;
            }

            .contact-info {
                font-size: 1rem;
            }

            .btn-light {
                padding: 8px 18px;
            }
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-12 text-center">
            <a href="/" class="text-decoration-none">
                <h1 class="m-0 display-4 font-weight-semi-bold text-dark">
                    Interior Homes Decor
                </h1>
            </a>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-3">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/main" class="nav-item nav-link active">Home</a>
                            <a href="/shop" class="nav-item nav-link">Menu</a>
                            <a href="/profile" class="nav-item nav-link">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/logout" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="https://i.pinimg.com/736x/72/94/60/7294601d084f78bbefb0e4f17545e5e4.jpg" alt="Image">
                <div class="carousel-caption">
                    <h4>Crafting Your Own Design</h4>
                    <h3>Crafting Your Unique Home Decor Design</h3>
                    <a href="/shop" class="btn btn-light py-2 px-3">Shop Now</a>
                </div>
            </div>
            <!-- Add more carousel items here -->
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title">Contact Us for Any Inquiries</h2>
            <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
            <p>Home interior design is not just about decorating spaces—it's about crafting a haven that reflects your soul, comforts your spirit, and inspires your life.</p>
            <div class="contact-info">
                <p><i class="fa fa-map-marker-alt mr-3"></i>456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
                <p><i class="fa fa-envelope mr-3"></i>support@InteriorHomesDecor.com</p>
                <p><i class="fa fa-phone-alt mr-3"></i>+639 123 456 789</p>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <p>© Interior Homes Decor . All Rights Reserved 2024.</p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>