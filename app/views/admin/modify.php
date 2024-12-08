<!DOCTYPE html>
<html lang="en">

<?php echo include('partials/head.php'); ?>

<body>
  <?php echo include('partials/header.php'); ?>
  <?php echo include('partials/aside.php'); ?>

  <main id="main" class="main bg-white">
      <div class="pagetitle d-flex justify-content-between align-items-center mb-4">
          <h1 class="text-primary">Modify Items</h1>
          <div class="search-bar">
              <input type="text" class="form-control" placeholder="Search items..." id="searchInput">
          </div>
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
                  <div class="card shadow-sm">
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-4">
                              <h5 class="card-title text-primary">Item List</h5>
                              <div class="d-flex gap-3">
                                  <select class="form-select" style="width: 100px;">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                  </select>
                              </div>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-hover align-middle">
                                  <thead>
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
                                              <td class="fw-medium"><?= $pr['id'] ?></td>
                                              <td class="fw-medium"><?= $pr['name'] ?></td>
                                              <td class="text-muted small"><?= substr($pr['description'], 0, 50) ?>...</td>
                                              <td><?= $pr['category'] ?></td>
                                              <td><?= $pr['quantity'] ?></td>
                                              <td>
                                                  <div class="product-image-wrapper">
                                                      <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" 
                                                           alt="<?= $pr['name'] ?>"
                                                           onclick="showImageModal('<?= BASE_URL . 'uploads/' . $pr['image'] ?>', '<?= $pr['name'] ?>')"
                                                           class="product-image">
                                                  </div>
                                              </td>
                                              <td class="fw-medium">₱<?= number_format($pr['prize'], 2) ?></td>
                                              <td><?= date('M d, Y', strtotime($pr['date'])) ?></td>
                                              <td>
                                                  <div class="d-flex gap-2">
                                                      <button type="button" 
                                                              class="btn btn-outline-primary btn-sm"
                                                              onclick="editItem(<?= htmlspecialchars(json_encode($pr)) ?>)">
                                                          <i class="bi bi-pencil-square me-1"></i>
                                                          Edit
                                                      </button>
                                                      <button type="button" 
                                                              class="btn btn-outline-danger btn-sm"
                                                              onclick="confirmDelete(<?= $pr['id'] ?>, '<?= $pr['name'] ?>')">
                                                          <i class="bi bi-trash me-1"></i>
                                                          Delete
                                                      </button>
                                                  </div>
                                              </td>
                                          </tr>
                                      <?php endforeach ?>
                                  </tbody>
                              </table>
                          </div>

                          <div class="d-flex justify-content-between align-items-center mt-4">
                              <p class="text-muted mb-0">Showing 1 to <?= count($prod) ?> of <?= count($prod) ?> entries</p>
                              <nav aria-label="Page navigation">
                                  <ul class="pagination pagination-sm mb-0">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                      </li>
                                      <li class="page-item active">
                                          <a class="page-link" href="#">1</a>
                                      </li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">2</a>
                                      </li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">3</a>
                                      </li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Edit Modal -->
      <div class="modal fade" id="editModal" tabindex="-1">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">
                          <i class="bi bi-pencil-square me-2"></i>
                          Edit Item
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                      <div class="modal-body">
                          <div class="row g-4">
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="text" class="form-control" id="edit_name" 
                                             name="name" placeholder="Item Name" required>
                                      <label>Item Name</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <select class="form-select" id="edit_category" name="category" required>
                                          <option value="">Select Category</option>
                                          <?php foreach ($cat as $c): ?>
                                              <option value="<?= $c['categories'] ?>"><?= $c['categories'] ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                      <label>Category</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="number" class="form-control" id="edit_quantity" 
                                             name="quantity" placeholder="Quantity" min="0" required>
                                      <label>Quantity</label>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-floating">
                                      <input type="number" class="form-control" id="edit_prize" 
                                             name="prize" placeholder="Price" step="0.01" min="0" required>
                                      <label>Price</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="form-floating">
                                      <textarea class="form-control" id="edit_description" 
                                                name="description" placeholder="Description" 
                                                style="height: 100px;" required></textarea>
                                      <label>Description</label>
                                  </div>
                              </div>
                              <div class="col-12">
                                  <div class="upload-wrapper border rounded p-4">
                                      <label class="form-label fw-medium mb-3">Product Image</label>
                                      <div id="currentImageContainer" class="mb-3">
                                          <img id="currentImage" src="" alt="Current Image" 
                                               class="current-image">
                                      </div>
                                      
                                      <input class="form-control" type="file" 
                                             id="edit_image" name="image" accept="image/*"
                                             onchange="previewImage(this)">
                                      
                                      <div id="imagePreview" class="mt-3">
                                          <img id="preview" src="" alt="Preview" 
                                               class="preview-image">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Image Preview Modal -->
      <div class="modal fade" id="imagePreviewModal" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header border-0">
                      <h5 class="modal-title" id="imagePreviewModalLabel"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body text-center p-0">
                      <img id="modalImage" src="" alt="" class="img-fluid rounded">
                  </div>
              </div>
          </div>
      </div>
  </main>

  <?php echo include('partials/script.php'); ?>
  
  <script>
  function editItem(item) {
      document.getElementById('editForm').action = `/submitedit/${item.id}`;
      document.getElementById('edit_name').value = item.name;
      document.getElementById('edit_description').value = item.description;
      document.getElementById('edit_category').value = item.category;
      document.getElementById('edit_quantity').value = item.quantity;
      document.getElementById('edit_prize').value = item.prize;
      
      const currentImage = document.getElementById('currentImage');
      const currentImageContainer = document.getElementById('currentImageContainer');
      if (item.image) {
          currentImage.src = `<?= BASE_URL ?>uploads/${item.image}`;
          currentImage.style.display = 'block';
          currentImageContainer.style.display = 'block';
      } else {
          currentImage.style.display = 'none';
          currentImageContainer.style.display = 'none';
      }
      
      document.getElementById('imagePreview').style.display = 'none';
      document.getElementById('edit_image').value = '';
      
      new bootstrap.Modal(document.getElementById('editModal')).show();
  }

  function previewImage(input) {
      const preview = document.getElementById('preview');
      const previewContainer = document.getElementById('imagePreview');
      
      if (input.files && input.files[0]) {
          const reader = new FileReader();
          reader.onload = function(e) {
              preview.src = e.target.result;
              previewContainer.style.display = 'block';
          }
          reader.readAsDataURL(input.files[0]);
      } else {
          previewContainer.style.display = 'none';
      }
  }

  function showImageModal(imageSrc, title) {
      const modal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
      document.getElementById('modalImage').src = imageSrc;
      document.getElementById('imagePreviewModalLabel').textContent = title;
      modal.show();
  }

  function confirmDelete(id, name) {
      if(confirm(`Are you sure you want to delete "${name}"? This action cannot be undone.`)) {
          window.location.href = `/delete/${id}`;
      }
  }
  </script>

  <script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const table = document.querySelector('.table');
    const rows = table.querySelectorAll('tbody tr');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });
});
  </script>

  <style>
  .product-image-wrapper {
      width: 60px;
      height: 60px;
      overflow: hidden;
      border-radius: 8px;
  }

  .product-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
      cursor: pointer;
  }

  .product-image:hover {
      transform: scale(1.1);
  }

  .current-image,
  .preview-image {
      max-width: 200px;
      max-height: 200px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      display: none;
  }

  .table th, .table td {
      vertical-align: middle;
  }

  .search-bar {
      max-width: 300px;
  }
  </style>
</body>
</html>

