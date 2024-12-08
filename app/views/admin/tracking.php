<!DOCTYPE html>
<html lang="en">

<?php echo include('partials/head.php'); ?>

<body>
    <?php echo include('partials/header.php'); ?>
    <?php echo include('partials/aside.php'); ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Order Tracking</h1>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Purchase Items List</h5>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <label for="entriesPerPage" class="me-2">Show</label>
                                    <select id="entriesPerPage" class="form-select form-select-sm" style="width: auto;">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <span class="ms-2">entries</span>
                                </div>
                                <div class="search-bar">
                                    <input type="text" class="form-control" placeholder="Search orders..." id="searchInput">
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Item Name</th>
                                            <th>Customer</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($purchase_items as $item): ?>
                                            <tr>
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['Item_name'] ?></td>
                                                <td><?= $item['Customer'] ?></td>
                                                <td><?= $item['quantity'] ?></td>
                                                <td>₱<?= number_format($item['prize'], 2) ?></td>
                                                <td>₱<?= number_format($item['total_price'], 2) ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-secondary dropdown-toggle w-100" type="button" id="status<?= $item['id'] ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <?= $item['status'] ?>
                                                        </button>
                                                        <ul class="dropdown-menu w-100" aria-labelledby="status<?= $item['id'] ?>">
                                                            <?php
                                                            $statuses = ['Pending', 'Preparing', 'Out for Delivery', 'Delivered'];
                                                            foreach ($statuses as $status):
                                                            ?>
                                                                <li>
                                                                    <form action="<?= site_url('updateStatus') ?>" method="POST" style="margin:0;">
                                                                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                                                        <input type="hidden" name="status" value="<?= $status ?>">
                                                                        <button type="submit" class="dropdown-item <?= $item['status'] === $status ? 'active' : '' ?>"><?= $status ?></button>
                                                                    </form>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><?= date('M d, Y H:i:s', strtotime($item['order_at'])) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    Showing <span id="startEntry">1</span> to <span id="endEntry">10</span> of <span id="totalEntries"><?= count($purchase_items) ?></span> entries
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
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
    </main>

    <?php echo include('partials/script.php'); ?>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const table = document.querySelector('.table');
        const rows = table.querySelectorAll('tbody tr');
        const entriesPerPageSelect = document.getElementById('entriesPerPage');
        
        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            let visibleRows = 0;
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const display = text.includes(searchTerm) ? '' : 'none';
                row.style.display = display;
                if (display === '') visibleRows++;
            });
            updatePagination(visibleRows);
        });

        // Entries per page functionality
        entriesPerPageSelect.addEventListener('change', function() {
            const entriesPerPage = parseInt(this.value);
            let visibleRows = 0;
            rows.forEach((row, index) => {
                if (row.style.display !== 'none') {
                    visibleRows++;
                    row.style.display = visibleRows <= entriesPerPage ? '' : 'none';
                }
            });
            updatePagination(visibleRows);
        });

        function updatePagination(visibleRows) {
            const startEntry = document.getElementById('startEntry');
            const endEntry = document.getElementById('endEntry');
            const totalEntries = document.getElementById('totalEntries');
            
            startEntry.textContent = visibleRows > 0 ? '1' : '0';
            endEntry.textContent = Math.min(visibleRows, entriesPerPageSelect.value);
            totalEntries.textContent = visibleRows;
        }
    });
    </script>

    <style>
    .table-responsive {
        overflow: visible !important;
    }
    .dropdown {
        position: relative;
    }
    .dropdown-menu {
        position: absolute;
        z-index: 1021;
        width: 100%;
        margin-top: 0;
        padding: 0.5rem 0;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 0.25rem;
    }
    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.5rem 1rem;
        clear: both;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
        cursor: pointer;
    }
    .dropdown-item:hover {
        background-color: #f8f9fa;
    }
    .dropdown-item.active {
        background-color: #0d6efd;
        color: white;
    }
    .search-bar {
        max-width: 300px;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    </style>
</body>
</html>

