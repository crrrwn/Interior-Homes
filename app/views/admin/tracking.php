<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>
    <?php echo include('chop/header.php'); ?>
    <?php echo include('chop/aside.php'); ?>

    <main id="main" class="main bg-dark text-white">
    

        <!-- Display Items Table -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Purchase Items List</h5>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped table-bordered">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>Id</th>
                                            <th>Item Name</th>
                                            <th>Customer</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($purchase_items as $item): ?>
                                            <tr>
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['Item_name'] ?></td>
                                                <td><?= $item['Customer'] ?></td>
                                                <td><?= $item['quantity'] ?></td>
                                                <td>₱<?= $item['prize'] ?></td>
                                                <td>₱<?= $item['total_price'] ?></td>
                                                <td><?= $item['status'] ?></td>
                                                <td><?= $item['order_at'] ?></td>
                                                <td>
                                                    <a href="/trackEdit/<?= $item['id'] ?>" class="btn btn-outline-warning">Edit</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Edit Form -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <form action="/trackSubmitEdit/<?= isset($trackEdit['id']) ? $trackEdit['id'] : '' ?>" 
                                  method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="text" name="item_name" class="form-control bg-dark text-white" 
                                           placeholder="Item Name" value="<?= isset($trackEdit['Item_name']) ? $trackEdit['Item_name'] : '' ?>" required>
                                    <label>Item Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="customer" class="form-control bg-dark text-white" 
                                           placeholder="Customer" value="<?= isset($trackEdit['Customer']) ? $trackEdit['Customer'] : '' ?>" required>
                                    <label>Customer</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" name="quantity" min="1" class="form-control bg-dark text-white" 
                                           placeholder="Quantity" value="<?= isset($trackEdit['quantity']) ? $trackEdit['quantity'] : '' ?>" required>
                                    <label>Quantity</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" step="0.01" name="prize" class="form-control bg-dark text-white" 
                                           placeholder="Price" value="<?= isset($trackEdit['prize']) ? $trackEdit['prize'] : '' ?>" required>
                                    <label>Price</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="status" class="form-select bg-dark text-white" required>
                                        <option value="Pending" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Preparing" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Preparing' ? 'selected' : '' ?>>Preparing</option>
                                        <option value="Out for Delivery" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Out for Delivery' ? 'selected' : '' ?>>Out for Delivery</option>
                                        <option value="Delivered" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                                    </select>
                                    <label>Status</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="customer_id" class="form-control bg-dark text-white" 
                                           placeholder="Customer ID" value="<?= isset($trackEdit['CustomerId']) ? $trackEdit['CustomerId'] : '' ?>" required>
                                    <label>Customer ID</label>
                                </div>

                                <button type="submit" class="btn btn-warning">Submit</button>
                                <a href="/tracking" type="reset" class="btn btn-danger" onclick="resetForm()">Reset</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo include('chop/script.php'); ?>
</body>

</html>
