
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Interior Homes Decor - User Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Interior design, home decor, user profile" name="keywords">
    <meta content="Manage your Interior Homes Decor profile and view your recent orders" name="description">

    <!-- Favicon -->
    <link href="<?php echo BASE_URL . 'img/favicon.ico'; ?>" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            color: var(--primary-color);
            font-weight: 600;
        }

        .table {
            color: var(--text-color);
        }

        .table th {
            font-weight: 600;
            color: var(--primary-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .nav-tabs .nav-link {
            color: var(--text-color);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 2rem 0;
        }

        .footer a {
            color: var(--accent-color);
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #fff;
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
        /* Enhanced Table Styling */
    .custom-table {
        margin-bottom: 0;
    }

    .custom-table thead th {
        background-color: #f8f9fa;
        border-bottom: 2px solid var(--primary-color);
        color: var(--primary-color);
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        padding: 1rem;
    }

    .table-row-hover {
        transition: all 0.3s ease;
    }

    .table-row-hover:hover {
        background-color: rgba(74, 103, 65, 0.05);
        transform: translateX(5px);
    }

    .product-icon {
        width: 35px;
        height: 35px;
        background-color: var(--primary-color);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-badge {
        background-color: #e9ecef;
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-weight: 500;
    }

    .price-text {
        color: var(--primary-color);
        font-weight: 600;
    }

    .date-text {
        color: #6c757d;
        font-size: 0.9rem;
    }

    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 15px;
        font-weight: 500;
        font-size: 0.85rem;
    }

    .status-delivered {
        background-color: #d4edda;
        color: #155724;
    }

    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }

    /* Enhanced Card Styling */
    .orders-card {
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    .title-underline {
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary-color);
    }

    /* Enhanced Profile Card */
    .profile-card {
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .custom-tabs {
        background-color: #f8f9fa;
        padding: 1rem;
        border-bottom: 1px solid #dee2e6;
    }

    .custom-tabs .nav-link {
        color: #495057;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        margin-right: 0.5rem;
    }

    .custom-tabs .nav-link i {
        margin-right: 0.5rem;
    }

    .custom-tabs .nav-link.active {
        background-color: var(--primary-color);
        color: white;
    }

    .profile-section-title {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .profile-section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background-color: var(--primary-color);
    }

    .profile-info .info-item {
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #dee2e6;
    }

    .profile-info .info-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .info-label {
        display: flex;
        align-items: center;
        color: #6c757d;
        margin-bottom: 0.5rem;
    }

    .info-label i {
        margin-right: 0.5rem;
        color: var(--primary-color);
    }

    .info-value {
        font-weight: 500;
        color: var(--text-color);
    }

    /* Animation for tab transitions */
    .tab-pane {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
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
                        <a href="/profile" class="nav-link active">Profile</a>
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

  <!-- Profile Content Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="profile-header text-center">
                    
                    <h2><?= htmlspecialchars($users['fullname']); ?></h2>
                    <p class="mb-0"><?= htmlspecialchars($users['email']); ?></p>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Recently Ordered</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Items</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($purchase_items as $pur): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($pur['Item_name']) ?></td>
                                        <td><?= htmlspecialchars($pur['quantity']) ?></td>
                                        <td>$<?= number_format($pur['total_price'], 2) ?></td>
                                        <td><?= date('M d, Y', strtotime($pur['order_at'])) ?></td>
                                        <td>
                                            <span class="badge badge-custom <?= $pur['status'] == 'Delivered' ? 'badge-delivered' : 'badge-pending' ?>">
                                                <?= htmlspecialchars($pur['status']) ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab">
                                <i class="fas fa-user-circle mr-2"></i>Overview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab">
                                <i class="fas fa-edit mr-2"></i>Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab">
                                <i class="fas fa-key mr-2"></i>Change Password
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="info-item">
                                <div class="info-label">Full Name:</div>
                                <div class="info-value"><?= htmlspecialchars($users['fullname']); ?></div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Address:</div>
                                <div class="info-value"><?= htmlspecialchars($users['compAdd']); ?></div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Phone:</div>
                                <div class="info-value"><?= htmlspecialchars($users['number']); ?></div>
                            </div>
                            <div class="info-item">
                                <div class="info-label">Email:</div>
                                <div class="info-value"><?= htmlspecialchars($users['email']); ?></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="edit" role="tabpanel">
                            <h5 class="card-title">Edit Profile</h5>
                            <form action="profUp" method="post">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= htmlspecialchars($users['fullname']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="compAdd">Complete Address</label>
                                    <input type="text" class="form-control" id="compAdd" name="compAdd" value="<?= htmlspecialchars($users['compAdd']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="number">Phone</label>
                                    <input type="text" class="form-control" id="number" name="number" value="<?= htmlspecialchars($users['number']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($users['email']); ?>" readonly>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel">
                            <h5 class="card-title">Change Password</h5>
                            <form method="post" action="changePass">
                                <div class="form-group">
                                    <label for="currentPassword">Current Password</label>
                                    <input type="password" class="form-control" id="currentPassword" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" class="form-control" id="newPassword" name="newpassword">
                                </div>
                                <div class="form-group">
                                    <label for="renewPassword">Re-enter New Password</label>
                                    <input type="password" class="form-control" id="renewPassword" name="renewpassword">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Content End -->
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Interior Homes Decor</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>456 Maplewood Drive, Springfield, Illinois, USA 62704</p>
                    <p><i class="fa fa-envelope mr-2"></i>support@InteriorHomesDecor.com</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+639 123 456 789</p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mr-2"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 Interior Homes Decor. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        $(document).readyfunction() (document).ready(function() {
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

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            // Toggle active class on nav items
            $('.nav-link').on('click', function() {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

            // Form validation
            $('form').submit(function(event) {
                var isValid = true;
                $(this).find('input[required]').each(function() {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });
                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>