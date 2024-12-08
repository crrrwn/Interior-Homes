<!DOCTYPE html>
<html lang="en">

<?php echo include('partials/head.php'); ?>

<body>
    <?php echo include('partials/header.php'); ?>
    <?php echo include('partials/aside.php'); ?>

    <main id="main" class="main">
        <div class="pagetitle d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Add New Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Products</a></li>
                    <li class="breadcrumb-item active">Add New Product</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center mb-4">Product Details</h5>

                            <!-- Floating Labels Form -->
                            <form class="row g-4 needs-validation" action="/save" method="post" enctype="multipart/form-data" id="productForm" novalidate>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingName" name="name" placeholder="Item Name" required>
                                        <label for="floatingName"><i class="bi bi-tag-fill me-2"></i>Item Name</label>
                                        <div class="invalid-feedback">
                                            Please provide a product name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="categorySelect" name="category" required>
                                            <option value="" selected disabled>Select a category</option>
                                            <?php foreach ($cat as $c): ?>
                                                <option value="<?= $c['categories'] ?>"><?= $c['categories'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <label for="categorySelect"><i class="bi bi-list-ul me-2"></i>Category</label>
                                        <div class="invalid-feedback">
                                            Please select a category.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingQuantity" name="quantity" placeholder="Quantity" required min="0">
                                        <label for="floatingQuantity"><i class="bi bi-box-seam me-2"></i>Quantity</label>
                                        <div class="invalid-feedback">
                                            Please provide a valid quantity.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea" style="height: 120px;" required></textarea>
                                        <label for="floatingTextarea"><i class="bi bi-card-text me-2"></i>Item Description</label>
                                        <div class="invalid-feedback">
                                            Please provide a product description.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingPrize" name="prize" placeholder="Price" required min="0" step="0.01">
                                        <label for="floatingPrize"><i class="bi bi-currency-peso me-2"></i>Price</label>
                                        <div class="invalid-feedback">
                                            Please provide a valid price.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" type="file" id="formFile" name="image" accept="image/*" onchange="previewImage()" required>
                                        <label for="formFile"><i class="bi bi-cloud-upload me-2"></i>Upload Image</label>
                                        <div class="invalid-feedback">
                                            Please upload a product image.
                                        </div>
                                    </div>
                                </div>
                                <!-- Image Preview -->
                                <div class="col-md-12 text-center" id="imagePreviewContainer" style="display: none;">
                                    <img id="imagePreview" alt="Image Preview" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg me-2">
                                        <i class="bi bi-save me-1"></i> Save Product
                                    </button>
                                    <button type="reset" class="btn btn-secondary btn-lg">
                                        <i class="bi bi-x-circle me-1"></i> Reset Form
                                    </button>
                                </div>
                            </form><!-- End Floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <?php echo include('partials/script.php'); ?>

    <script>
        // Image preview functionality
        function previewImage() {
            var input = document.getElementById('formFile');
            var imagePreview = document.getElementById('imagePreview');
            var imagePreviewContainer = document.getElementById('imagePreviewContainer');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Form validation
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        } else {
                            // Show loading indicator
                            showLoading();
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        // Loading indicator
        function showLoading() {
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Saving...';
            submitBtn.disabled = true;
        }

        // Reset form and preview
        document.querySelector('button[type="reset"]').addEventListener('click', function() {
            document.getElementById('imagePreviewContainer').style.display = 'none';
            document.getElementById('productForm').classList.remove('was-validated');
        });
    </script>

    <style>
        .card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .form-floating > label {
            left: 0.5rem;
            padding-left: 1.75rem;
        }
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label,
        .form-floating > .form-select ~ label {
            color: #0d6efd;
            opacity: 1;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-control:focus,
        .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .img-thumbnail {
            border: 2px solid #0d6efd;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .img-thumbnail:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
        }
        .btn-primary,
        .btn-secondary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover,
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .col-md-6, .col-md-3 {
                width: 100%;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }
        .form-floating input[type="file"] {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating input[type="file"] ~ label {
            opacity: 0.65;
            transform: scale(.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating input[type="file"]:focus ~ label {
            opacity: 1;
            color: #0d6efd;
        }
    </style>
</body>
</html>

