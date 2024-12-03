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


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <p>Please double Check before you place ordered</p>
                    <form action="/purchase" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="fullname"
                                    value="<?= $users['fullname']; ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" name="email" value="<?= $users['email']; ?>"
                                    readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Complete Address</label>
                                <input class="form-control" type="text" name="compAdd"
                                    value="<?= $users['compAdd']; ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" name="number" value="<?= $users['number']; ?>" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>

                        <?php
                        $cartTotal = 0; // Initialize the overall cart total
                        foreach ($cart as $c):
                            $itemTotal = $c['prize'] * $c['quantity']; // Calculate total for each item
                            $cartTotal += $itemTotal; // Add the total of each item to the overall cart total
                            ?>
                            <div class="d-flex justify-content-between">
                                <p>
                                    <?= $c['name'] ?>
                                    <?= $c['quantity'] ?>
                                </p>
                                <p>₱
                                    <?= $c['prize'] ?>
                                </p>
                            </div>
                        <?php endforeach; ?>

                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold">$
                                    <?= $cartTotal ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Payment</h4>
                        </div>
                        <div class="card-body">
                           
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="COD">
                                    <label class="custom-control-label" for="COD">Cash on Delivery</label>
                                </div>
                            </div>
                          
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <button class="btn btn-lg btn-block btn-secondary font-weight-bold my-3 py-3">Place
                                Order</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->

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
    <a href="#" class="btn btn-danger back-to-top"><i class="fa fa-angle-double-up"></i></a>


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