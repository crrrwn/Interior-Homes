<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PanCHITan ni UNCHANG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Restaurant, Pancit, Dining" name="keywords">
    <meta content="Delicious pancit and Filipino dishes at PanCHITan ni Unchang." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
   
    <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-0 d-none d-lg-block">
                <a href="/" class="text-decoration-none">
                    <h1 class="m-0 display-10 font-weight-semi-bold">
                        <span class="">Interior Homes
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
    <<div class="container-fluid mb-3">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg  navbar-light py-3 py-lg-0 px-0">
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
            <div class="carousel-item active" style="height: 410px;">
                <img class="img-fluid" src="https://i.pinimg.com/736x/7c/35/e3/7c35e3cd08d678e01eaabdf2e0b77387.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Crafting Your Own Design</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Crafting Your Unique Home Decor Design</h3>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="https://i.pinimg.com/736x/96/72/99/96729961976edd2aef40026e0a67bd73.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Create Spaces That Inspire</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Living Spaces, Loving Places.</h3>
                        <a href="/shop" class="btn btn-light py-2 px-3">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item" style="height: 410px;">
    <img class="img-fluid" src="https://i.pinimg.com/736x/46/5d/85/465d85ebf5069341a95ebf244808952f.jpg" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 700px;">
            <h4 class="text-light text-uppercase font-weight-medium mb-3">Hearty & Flavorful</h4>
            <h3 class="display-4 text-white font-weight-semi-bold mb-4">A Taste of Filipino Tradition</h3>
            <a href="/menu" class="btn btn-light py-2 px-3">Explore Our Menu</a>
        </div>
    </div>
</div>
<div class="carousel-item" style="height: 410px;">
    <img class="img-fluid" src="https://i.pinimg.com/736x/27/6d/32/276d326ad0478d4b72e977ee670cb82c.jpg" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 700px;">
            <h4 class="text-light text-uppercase font-weight-medium mb-3">Where Style Meets Comfort</h4>
            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Beauty Begins at Home</h3>
            <a href="/order" class="btn btn-light py-2 px-3">Order Now</a>
        </div>
    </div>
</div>
<div class="carousel-item" style="height: 410px;">
    <img class="img-fluid" src="https://i.pinimg.com/736x/77/56/6c/77566c80518cc0a5255c8a3df8eaeb42.jpg" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 700px;">
            <h4 class="text-light text-uppercase font-weight-medium mb-3">Timeless Design, Modern Living</h4>
            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Chic Comfort for Every Corner</h3>
            <a href="/specials" class="btn btn-light py-2 px-3">View Specials</a>
        </div>
    </div>
</div>
<div class="carousel-item" style="height: 410px;">
    <img class="img-fluid" src="https://i.pinimg.com/736x/41/86/f1/4186f1e4d484cbc00a01d9b317bdd328.jpg" alt="Image">
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 700px;">
            <h4 class="text-light text-uppercase font-weight-medium mb-3">From Blank Walls to Masterpieces</h4>
            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Make Your Home Uniquely Yours</h3>
            <a href="/about" class="btn btn-light py-2 px-3">Learn More</a>
        </div>
    </div>
</div>

    <!-- Crousel End -->

    <!-- Featured Start -->
    
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <div class="text-center mb-4">
        <p>Home interior design is not just about decorating spaces—it's about crafting a haven that reflects your soul, comforts your spirit, and inspires your life.</p>
        <div class="d-flex flex-column mb-3">   
        </div>
</div>
    </div>
</div>
<!-- Contact End -->
   

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-light text-uppercase mb-4">Interior Homes Decor </h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt icon-yellow-orange mr-3"></i>456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
            <p class="mb-2"><i class="fa fa-envelope icon-yellow-orange mr-3"></i>support@InteriorHomesDecor.com</p>
            <p class="mb-2"><i class="fa fa-phone-alt icon-yellow-orange mr-3"></i>+639 123 456 789</p>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0 text-center text-md-left">
                <p class="mb-md-0 text-center text-md-left text-light"> © Interior Homes Decor . All Rights Reserved 2024.</p>
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
