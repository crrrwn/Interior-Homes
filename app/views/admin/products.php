<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>

<?php echo include('chop/header.php'); ?>

    <!-- ======= Sidebar ======= -->
    <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main text-white"> <!-- Dark background for main content -->

    <div class="pagetitle">
        <h1 class="text-black">Products</h1> <!-- Warning color for the title -->
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card "> <!-- Dark background for the card -->
                    <div class="card-body">

                        <!-- Table with striped rows -->
                        <div class="table-responsive">
                            <table class="table  table-striped"> <!-- Dark and striped table -->
                                <thead class="bg-warning text-blue"> <!-- Warning background for the header -->
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prod as $pr): ?>
                                        <tr class="<?= $pr['quantity'] < 5 ? 'bg-danger' : '' ?>"> <!-- Danger background for low quantity -->
                                            <th scope="row"><?= $pr['id'] ?></th>
                                            <td>
                                                <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="product image"
                                                    style="max-width: 70px; cursor: pointer;">
                                            </td>
                                            <td>
                                                <?= $pr['name'] ?>
                                            </td>
                                            <td>
                                                <?= $pr['description'] ?>
                                            </td>
                                            <td>
                                                <?= $pr['category'] ?>
                                            </td>
                                            <td>
                                                <?= $pr['quantity'] ?>
                                            </td>
                                            <td>
                                                <?= $pr['prize'] ?>
                                            </td>
                                            <td>
                                                <?= $pr['date'] ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

  <?php echo include('chop/script.php'); ?>

</body>

</html>