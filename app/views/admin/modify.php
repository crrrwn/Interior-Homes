<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>

    <?php echo include('chop/header.php'); ?>

    <!-- ======= Sidebar ======= -->
    <?php echo include('chop/aside.php'); ?>
    <main id="main" class="main bg-dark text-white">
    <div class="pagetitle">
        <h1 class="text-warning">Modify Items</h1> <!-- Warning color for the title -->
    </div>

    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Item List</h5>
                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-bordered datatable">
                                <thead class="table-danger">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prod as $pr): ?>
                                        <tr>
                                            <th scope="row" class="text-warning">
                                                <?= $pr['id'] ?>
                                            </th>
                                            <td><?= $pr['name'] ?></td>
                                            <td><?= $pr['description'] ?></td>
                                            <td><?= $pr['category'] ?></td>
                                            <td><?= $pr['quantity'] ?></td>
                                            <td>
                                                <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="Product Image"
                                                    style="max-width: 70px; cursor: pointer;">
                                            </td>
                                            <td>₱<?= $pr['prize'] ?></td>
                                            <td><?= $pr['date'] ?></td>
                                            <td>
                                                <a href="/edit/<?= $pr['id'] ?>" type="button"
                                                    class="btn btn-outline-warning btn-sm">Edit</a>
                                                <a href="/delete/<?= $pr['id'] ?>" type="button"
                                                    class="btn btn-outline-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div><!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                    <div class="pagetitle bg-warning p-3 rounded">
                      <h1 class="text-dark">Modify Items</h1>
                    </div><!-- End Page Title -->
                        <!-- Floating Labels Form -->
                        <form class="row g-3" action="/<?= (isset($edit['id'])) ? "submitedit/" . $edit['id'] : "save" ?>" 
                              method="post" enctype="multipart/form-data" id="imageForm">
                              
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark text-white" id="floatingName" 
                                           name="name" placeholder="Item Name" value="<?= (isset($edit['name'])) ? $edit['name'] : "" ?>" required>
                                    <label for="floatingName">Item Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea required class="form-control bg-dark text-white" name="description"
                                              placeholder="Description" id="floatingTextarea"
                                              style="height: 100px;"><?= (isset($edit['description'])) ? $edit['description'] : "" ?></textarea>
                                    <label for="floatingTextarea">Item Description</label>
                                </div>
                            </div>

                            <!-- Category here -->
                            <div class="col-md-2">
                                <div class="form-floating mb-3">
                                    <select class="form-select bg-dark text-white" id="floatingSelect" name="category"
                                            aria-label="State" required>
                                        <option value="">Select</option>
                                        <?php foreach ($cat as $c): ?>
                                            <option value="<?= $c['categories'] ?>" <?= (isset($edit['category']) && $edit['category'] == $c['categories']) ? "selected" : "" ?>>
                                                <?= $c['categories'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect">Category</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input min="1" type="number" class="form-control bg-dark text-white" id="floatingQuantity"
                                           name="quantity" placeholder="Quantity"
                                           value="<?= (isset($edit['quantity'])) ? $edit['quantity'] : "" ?>" required>
                                    <label for="floatingQuantity">Quantity</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark text-white" id="floatingPrize" name="prize"
                                           placeholder="Price" value="<?= (isset($edit['prize'])) ? $edit['prize'] : "" ?>" required>
                                    <label for="floatingPrize">Price</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="formFile" class="form-label text-warning">Upload Image</label>
                                <input class="form-control bg-dark text-white" type="file" id="formFile" name="image"
                                       onchange="previewImage()" <?= isset($edit['id']) ? '' : 'required' ?>>
                            </div>

                            <?php if (isset($edit['image']) && !empty($edit['image'])): ?>
                                <div class="col-md-12" id="imagePreviewContainer" style="display: block;">
                                    <img id="imagePreview" src="<?= BASE_URL . 'uploads/' . $edit['image'] ?>"
                                         alt="Image Preview" style="max-width: 300px; max-height: 300px;">
                                </div>
                            <?php else: ?>
                                <div class="col-md-12" id="imagePreviewContainer" style="display: none;">
                                    <img id="imagePreview" alt="Image Preview" style="max-width: 300px; max-height: 300px;">
                                </div>
                            <?php endif; ?>

                            <!-- Submit and Reset Buttons -->
                            <div class="text-center">
                                <input class="btn btn-warning" type="submit" value="<?= (isset($edit['id'])) ? "Update" : "Add" ?>">
                                <a href="/modify" type="reset" class="btn btn-danger" onclick="resetForm()">Reset</a>
                            </div>
                        </form><!-- End floating Labels Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->


    <?php echo include('chop/script.php'); ?>
    <script>
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
        function resetForm() {
            document.getElementById('imageForm').reset(); // Reset the form
            document.getElementById('imagePreviewContainer').style.display = 'none'; // Hide the image preview
        }
    </script>
</body>

</html>
