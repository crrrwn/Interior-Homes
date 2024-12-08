<!DOCTYPE html>
<html lang="en">

<?php echo include('partials/head.php'); ?>

<body>
  <?php echo include('partials/header.php'); ?>
  <?php echo include('partials/aside.php'); ?>
  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Admin Dashboard</h1>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Sales Cards -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Daily Sales</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <span style="font-size: 24px; font-weight: bold;">₱</span>
                    </div>
                    <div class="ps-3">
                      <h6 id="dailySales"><?= '₱' . number_format($today, 2) ?></h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Monthly Sales</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="monthlySales"><?= '₱' . number_format($monthly, 2) ?></h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Overall Sales</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="overallSales"><?= '₱' . number_format($overall_sales, 2) ?></h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
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
                          <th scope="row"><a href="#">#<?= $g['purchase_id'] ?></a></th>
                          <td><?= $g['Customer'] ?></td>
                          <td><a href="#" class="text-primary"><?= $g['Item_name'] ?></a></td>
                          <td><?= $g['quantity'] ?></td>
                          <td>₱<?= $g['total_price'] ?></td>
                          <td><span class="badge bg-success"><?= date('M, d Y h:i:sA', strtotime($g['order_at'])) ?></span></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <!-- Top Selling Products -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body pb-0">
                  <h5 class="card-title">Top 10 Selling Products</h5>
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Topitems as $g): ?>
                        <tr>
                          <th scope="row"><a href="#"><img src="<?= BASE_URL . 'uploads/' . $g['max_image'] ?>" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold"><?= $g['Item_name'] ?></a></td>
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
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php echo include('partials/script.php'); ?>

  <style>
    :root {
      --primary-color: #4154f1;
      --secondary-color: #717ff5;
      --light-color: #f6f6fe;
      --dark-color: #012970;
      --text-color: #444444;
      --border-color: #e0e0e0;
    }

    body {
      font-family: "Open Sans", sans-serif;
      background: #f6f9ff;
      color: var(--text-color);
    }

    .dashboard .info-card {
      padding-bottom: 10px;
    }

    .dashboard .info-card h6 {
      font-size: 28px;
      color: var(--dark-color);
      font-weight: 700;
      margin: 0;
      padding: 0;
    }

    .dashboard .card-icon {
      font-size: 32px;
      line-height: 0;
      width: 64px;
      height: 64px;
      flex-shrink: 0;
      flex-grow: 0;
    }

    .dashboard .sales-card .card-icon {
      color: var(--primary-color);
      background: var(--light-color);
    }

    .dashboard .revenue-card .card-icon {
      color: #2eca6a;
      background: #e0f8e9;
    }

    .dashboard .customers-card .card-icon {
      color: #ff771d;
      background: #ffecdf;
    }

    .dashboard .card-title {
      padding: 20px 0 15px 0;
      font-size: 18px;
      font-weight: 500;
      color: var(--dark-color);
      font-family: "Poppins", sans-serif;
    }

    .dashboard .card-title span {
      color: #899bbd;
      font-size: 14px;
      font-weight: 400;
    }

    .dashboard .filter {
      position: absolute;
      right: 0px;
      top: 15px;
    }

    .dashboard .filter .icon {
      color: #aab7cf;
      padding-right: 20px;
      padding-bottom: 5px;
      transition: 0.3s;
      font-size: 16px;
    }

    .dashboard .filter .icon:hover,
    .dashboard .filter .icon:focus {
      color: var(--primary-color);
    }

    .dashboard .filter .dropdown-header {
      padding: 8px 15px;
    }

    .dashboard .filter .dropdown-header h6 {
      text-transform: uppercase;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 1px;
      color: #aab7cf;
      margin-bottom: 0;
      padding: 0;
    }

    .dashboard .filter .dropdown-item {
      padding: 8px 15px;
    }

    /* Recent Sales */
    .dashboard .recent-sales {
      font-size: 14px;
    }

    .dashboard .recent-sales .table thead {
      background: var(--light-color);
    }

    .dashboard .recent-sales .table thead th {
      border: 0;
    }

    .dashboard .recent-sales .dataTable-top {
      padding: 0 0 10px 0;
    }

    .dashboard .recent-sales .dataTable-bottom {
      padding: 10px 0 0 0;
    }

    /* Top Selling */
    .dashboard .top-selling {
      font-size: 14px;
    }

    .dashboard .top-selling .table thead {
      background: var(--light-color);
    }

    .dashboard .top-selling .table thead th {
      border: 0;
    }

    .dashboard .top-selling .table tbody td {
      vertical-align: middle;
    }

    .dashboard .top-selling img {
      border-radius: 5px;
      max-width: 60px;
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translate3d(0, 40px, 0);
      }
      to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
      }
    }

    .dashboard .card {
      animation: fadeInUp 0.5s ease-out forwards;
      opacity: 0;
    }

    .dashboard .card:nth-child(1) { animation-delay: 0.1s; }
    .dashboard .card:nth-child(2) { animation-delay: 0.2s; }
    .dashboard .card:nth-child(3) { animation-delay: 0.3s; }
    .dashboard .card:nth-child(4) { animation-delay: 0.4s; }
    .dashboard .card:nth-child(5) { animation-delay: 0.5s; }

    /* Hover Effects */
    .dashboard .info-card:hover {
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transform: translateY(-5px);
      transition: all 0.3s ease;
    }

    .dashboard .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    @media (max-width: 768px) {
      .dashboard .sales-card,
      .dashboard .revenue-card,
      .dashboard .customers-card {
        margin-bottom: 20px;
      }
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Add smooth scrolling to all links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });

      // Add hover effect to table rows
      const tableRows = document.querySelectorAll('.table tbody tr');
      tableRows.forEach(row => {
        row.addEventListener('mouseenter', () => {
          row.style.backgroundColor = 'rgba(0, 0, 0, 0.05)';
          row.style.transition = 'background-color 0.3s ease';
        });
        row.addEventListener('mouseleave', () => {
          row.style.backgroundColor = '';
        });
      });

      // Animate numbers in cards
      function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
          if (!startTimestamp) startTimestamp = timestamp;
          const progress = Math.min((timestamp - startTimestamp) / duration, 1);
          obj.innerHTML = '₱' + Math.floor(progress * (end - start) + start).toLocaleString();
          if (progress < 1) {
            window.requestAnimationFrame(step);
          }
        };
        window.requestAnimationFrame(step);
      }

      const dailySales = document.getElementById('dailySales');
      const monthlySales = document.getElementById('monthlySales');
      const overallSales = document.getElementById('overallSales');

      animateValue(dailySales, 0, parseFloat(dailySales.innerText.replace('₱', '').replace(',', '')), 2000);
      animateValue(monthlySales, 0, parseFloat(monthlySales.innerText.replace('₱', '').replace(',', '')), 2000);
      animateValue(overallSales, 0, parseFloat(overallSales.innerText.replace('₱', '').replace(',', '')), 2000);
    });
  </script>
</body>
</html>

