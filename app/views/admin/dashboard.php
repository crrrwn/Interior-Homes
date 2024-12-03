<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>
  <!-- ======= Header ======= -->
  <?php echo include('chop/header.php'); ?>
  <!-- ======= Sidebar ======= -->
  <?php echo include('chop/aside.php'); ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1 class="text-warning">Admin Dashboard</h1> <!-- Warning color for the title -->
      <nav>
        <ol class="breadcrumb">
          <li class=""><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
          <li class= active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Daily Sales -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card  text-white">
                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <!-- Replaced cart icon with bar chart icon -->
          <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="dailySales"><?= '₱' . number_format($today, 2) ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Monthly Sales -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card  text-white">
                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Monthly</span></h5>
                  <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <!-- Replaced cart icon with bar chart icon -->
          <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="monthlySales"><?= '₱' . number_format($monthly, 2) ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Monthly Sales Card -->

            <!-- Overall Sales -->
            <div class="col-xxl-4 col-md-12">
  <div class="card info-card sales-card text-white">
    <div class="card-body">
      <h5 class="card-title">Sales <span>| Overall</span></h5>
      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <!-- Replaced cart icon with bar chart icon -->
          <i class="bi bi-bar-chart-line"></i>
        </div>
        <div class="ps-3">
          <h6 id="overallSales"><?= '₱' . number_format($overall_sales, 2) ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>

            </div>
            <!-- End Overall Sales Card -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto btn-primary text-white">
                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                  <table class="table table-borderless datatable text-white">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date and Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($purchase_items as $g): ?>
                        <tr>
                          <th scope="row"><?= $g['purchase_id'] ?></th>
                          <td><?= $g['Customer'] ?></td>
                          <td><?= $g['Item_name'] ?></td>
                          <td><?= $g['quantity'] ?></td>
                          <td>₱<?= $g['total_price'] ?></td>
                          <td><?= date('M, d Y h:i:sA', strtotime($g['order_at'])) ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Recent Sales -->

            <!-- Top Selling -->
           
<div class="col-12">
  <div class="card top-selling overflow-auto" style="background-color: white; color: white;">
    <div class="card-body pb-0">
      <h5 class="card-title">Top 10 Selling Products</h5>
      <table class="table table-borderless text-light">
        <thead>
          <tr>
            <th scope="col">Preview</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Sold</th>
            <th scope="col">Revenue</th>
                    </thead>
                    <tbody>
                      <?php foreach ($Topitems as $g): ?>
                        <tr>
                          <th scope="row"><a href="#"><img src="<?= BASE_URL . 'uploads/' . $g['max_image'] ?>" alt=""></a></th>
                          <td><?= $g['Item_name'] ?></td>
                          <td>₱<?= $g['max_prize'] ?></td>
                          <td class="fw-bold"><?= $g['total_quantity'] ?></td>
                          <td>₱<?= $g['total_sales'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Top Selling -->

          </div>
        </div>
        <!-- End Left side columns -->
      </div>
    </section>
  </main>

  <?php echo include('chop/script.php'); ?>

</body>

</html>

