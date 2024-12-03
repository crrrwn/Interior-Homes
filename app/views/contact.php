<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PanCHITan ni UNCHANG Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/css/style.css' ?>" rel="stylesheet">
</head>
<style>
    .card-header.product-img {
        height: 400px;
        /* Set a fixed height for the card header */
    }

    .card-header.product-img img {
        object-fit: cover;
        /* Choose 'cover', 'contain', 'fill', etc., based on your preference */
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-dark py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center text-light">
                    <a class="text-light" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-light px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-light px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-light pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-0 d-none d-lg-block">
                <a href="/" class="text-decoration-none">
                    <h1 class="m-0 display-10 font-weight-semi-bold">
                        <span class="text-danger font-weight-bold border px-3 mr-1">PanCHITan</span>ni Unchang
                    </h1>
                </a>
            </div>
            <div class="col-lg-12 col-6 text-right">
              
                <a href="/cart" class="btn border">
                    <i class="fas fa-shopping-cart text-danger"></i>
                    <span class="badge"><?php echo $cartItemCount; ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-3">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-warning navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/menu" class="nav-item nav-link">Menu</a>
                            <a href="/contact" class="nav-item nav-link active">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/register" class="nav-item nav-link">Register</a>
                        </div>
            
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2 text-yellow-orange">Contact Us for Any Inquiries</span></h2>
        <div class="text-center mb-4">
    
        <h5 class="font-weight-semi-bold mb-3 text-yellow-orange">Get In Touch</h5>
        <p>We’d love to hear from you! Whether you have a question about our pancit dishes, need assistance with your order, or just want to learn more about PanChitan ni Unchang, feel free to contact us. Our team is here to ensure your dining experience is nothing short of excellent.</p>
        <div class="d-flex flex-column mb-3">
            <h5 class="font-weight-semi-bold mb-3 text-yellow-orange">Main Branch</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt icon-yellow-orange mr-3"></i>Parang, Calapan City, Philippines</p>
            <p class="mb-2"><i class="fa fa-envelope icon-yellow-orange mr-3"></i>support@panchitaniunchang.com</p>
            <p class="mb-2"><i class="fa fa-phone-alt icon-yellow-orange mr-3"></i>+639 123 456 789</p>
        </div>
</div>
    </div>
   
</div>
<!-- Contact End -->



   

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-light text-uppercase mb-4">PanCHITan ni Unchang</h5>
                <p class="mb-2">Juan Luna St., Calapan City, Philippines</p>
                <p class="mb-0"><i class="fa fa-envelope mr-3"></i>panchitan@unchang.com</p>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0 text-center text-md-left">
                <p class="mb-md-0 text-center text-md-left text-light">© PanCHITan ni Unchang. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="public/mail/jqBootstrapValidation.min.js"></script>
    <script src="public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>
</body>

</html>