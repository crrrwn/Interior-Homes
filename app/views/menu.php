<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PanCHITan ni UNCHANG</title>
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
                    <<h1 class="m-0 display-10 font-weight-semi-bold">
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
                            <a href="/menu" class="nav-item nav-link active">Menu</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
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

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="<?= BASE_URL . 'search'; ?>" method="get">
                                <div class="input-group">
                               
                                <input type="text" class="form-control" name="search" placeholder="Search by name">
                                    <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary" style="background-color: #FFEB3B; border-color: #FFEB3B;">
                                        <i class="fa fa-search"></i>
                                    </button>

                                    </div>
                                    <a href="/shop" class="btn btn-primary"style="background-color: #FFEB3B; border-color: #FFEB3B;" onclick="location.reload(true)">
                                    <i class="fas fa-sync-alt"></i>
                                    </a>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (empty($prod)): ?>
                        <div class="col-12 pb-1">
                            <div class="alert alert-info mt-3" role="alert">
                                No items found.
                            </div>
                        </div>
                    <?php else: ?>

                        <?php foreach ($prod as $pr): ?>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4 h-100">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <a href="<?php echo BASE_URL . 'view/' . $pr['id']; ?>"><img class="img-fluid w-100" src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3"><?= $pr['name'] ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>₱<?= $pr['prize'] ?></h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="<?php echo BASE_URL . 'Acc/' . $pr['id']; ?>" class="btn btn-sm text-dark p-0">
                                            <i class="fas fa-shopping-cart text-danger mr-1"></i>Add To Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop End -->

    
    

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
                             <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top"><i class="fa fa-angle-double-up"></i></a>
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
