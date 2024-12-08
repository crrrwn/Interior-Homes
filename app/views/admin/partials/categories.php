<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Categories - Interior Homes</title>
    <?php include 'head.php'; ?>
    <style>
        .category-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .category-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .category-list {
            max-height: 400px;
            overflow-y: auto;
        }
        .category-item {
            transition: all 0.2s ease;
            border-left: 4px solid transparent;
        }
        .category-item:hover {
            background-color: #f8f9fa;
            border-left-color: #0d6efd;
        }
        .btn-delete {
            transition: all 0.2s ease;
        }
        .btn-delete:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php include 'aside.php'; ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Category Management</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card category-card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Category</h5>
                            <?php if(isset($_SESSION['success'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['success'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['success']); ?>
                            <?php endif; ?>

                            <?php if(isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['error'] ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php unset($_SESSION['error']); ?>
                            <?php endif; ?>

                            <form action="<?= site_url('addcat') ?>" method="POST" class="mt-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" name="newcat" placeholder="New Category" required>
                                    <label for="floatingName">Insert New Category</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="bi bi-plus-circle me-2"></i>Add Category
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card category-card">
                        <div class="card-body">
                            <h5 class="card-title">Existing Categories</h5>
                            <div class="category-list mt-4">
                                <?php if(isset($cat) && is_array($cat) && !empty($cat)): ?>
                                    <?php foreach($cat as $c): ?>
                                        <div class="category-item d-flex justify-content-between align-items-center p-3 mb-2">
                                            <span class="fw-bold"><?= $c['categories'] ?></span>
                                            <button class="btn btn-outline-danger btn-sm btn-delete" 
                                                    onclick="deleteCategory(<?= $c['id'] ?>, '<?= $c['categories'] ?>')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted text-center">No categories found.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'script.php'; ?>
    <script>
        function deleteCategory(id, name) {
            if(confirm('Are you sure you want to delete the category "' + name + '"?')) {
                window.location.href = '<?= site_url('delcat/') ?>' + id;
            }
        }
    </script>
</body>
</html>

