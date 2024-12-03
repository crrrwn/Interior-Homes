<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Interior Homes</title>
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

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        
        <div class="col-lg-6 d-none d-lg-block">
            
                </a>
            </div>
        </div>
    </div>
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


    <!-- Page Header Start -->
    
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-6">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <form method="post" action="<?= BASE_URL . 'Ac/' . $prod['id']; ?>">

                <div class="row px-xl-5">
                    <div class="col-lg-5 pb-5">
                        <div class="carousel-inner border">
                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="<?= BASE_URL . 'uploads/' . $prod['image'] ?>"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 pb-5">
                        <h3 class="font-weight-semi-bold">
                            <?= $prod['name'] ?>
                        </h3>
                   
                        <h3 class="font-weight-semi-bold mb-4">₱
                            <?= $prod['prize'] ?>
                        </h3>
                        <h4 class="font-weight-semi-bold mb-4">Stocks:
                            <?= $prod['quantity'] ?>
                        </h4>
                        <p class="mb-4">
                            <?= $prod['description'] ?>
                        </p>
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 120px;">

                                <input min="1" max="<?= $prod['quantity'] ?>" type="number" name="quantity" placeholder="Quantity"
                                    class="form-control" required />
                            </div>
                            <button type="submit" class="btn btn-danger px-3">
                                <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
                            </button>
                        </div>
            </form>
            <a href="/shop" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
           
        </div>
    </div>
    </div>
    </div>
    <!-- Shop End -->

       <!-- Footer Start -->
       
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-danger back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/owl.carousel.min.js' ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/jqBootstrapValidation.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/contact.js' ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/js/main.js' ?>"></script>
</body>

</html>