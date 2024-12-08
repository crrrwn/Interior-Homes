<!DOCTYPE html>
<html lang="en">

<?php include('partials/head.php'); ?>

<body>
    <?php include('partials/header.php'); ?>
    <?php include('partials/aside.php'); ?>

    <main id="main" class="main">
        <div class="pagetitle d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-primary">Financial Reports</h1>
        </div>

        <section class="section dashboard">
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body">
                            <h5 class="card-title text-white">Today's Revenue</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary-light">
                                    <i class="bi bi-cart text-primary fs-4"></i>
                                </div>
                                <div class="ps-3">
                                    <h3><?= '₱' . number_format($today, 2) ?></h3>
                                    <span class="text-white-50 small pt-1 fw-bold">Today's Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <h5 class="card-title text-white">Weekly Revenue</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success-light">
                                    <i class="bi bi-wallet2 text-success fs-4"></i>
                                </div>
                                <div class="ps-3">
                                    <h3><?= '₱' . number_format($weekly, 2) ?></h3>
                                    <span class="text-white-50 small pt-1 fw-bold">This Week's Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-info text-white h-100">
                        <div class="card-body">
                            <h5 class="card-title text-white">Monthly Revenue</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-info-light">
                                    <i class="bi bi-cash-stack text-info fs-4"></i>
                                </div>
                                <div class="ps-3">
                                    <h3><?= '₱' . number_format($monthly, 2) ?></h3>
                                    <span class="text-white-50 small pt-1 fw-bold">This Month's Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-warning text-white h-100">
                        <div class="card-body">
                            <h5 class="card-title text-white">Yearly Revenue</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning-light">
                                    <i class="bi bi-bar-chart text-warning fs-4"></i>
                                </div>
                                <div class="ps-3">
                                    <h3><?= '₱' . number_format($yearly, 2) ?></h3>
                                    <span class="text-white-50 small pt-1 fw-bold">This Year's Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Revenue Overview</h5>
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales Summary</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Period</th>
                                            <th scope="col">Revenue</th>
                                            <th scope="col">Growth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Today</td>
                                            <td><?= '₱' . number_format($today, 2) ?></td>
                                            <td><span class="badge bg-success">+5%</span></td>
                                        </tr>
                                        <tr>
                                            <td>This Week</td>
                                            <td><?= '₱' . number_format($weekly, 2) ?></td>
                                            <td><span class="badge bg-primary">+12%</span></td>
                                        </tr>
                                        <tr>
                                            <td>This Month</td>
                                            <td><?= '₱' . number_format($monthly, 2) ?></td>
                                            <td><span class="badge bg-warning">+8%</span></td>
                                        </tr>
                                        <tr>
                                            <td>This Year</td>
                                            <td><?= '₱' . number_format($yearly, 2) ?></td>
                                            <td><span class="badge bg-info">+15%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Overall</td>
                                            <td><?= '₱' . number_format($overall_sales, 2) ?></td>
                                            <td><span class="badge bg-success">+20%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('partials/script.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Chart
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Today', 'This Week', 'This Month', 'This Year', 'Overall'],
                datasets: [{
                    label: 'Revenue',
                    data: [<?= $today ?>, <?= $weekly ?>, <?= $monthly ?>, <?= $yearly ?>, <?= $overall_sales ?>],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return '₱' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    });
    </script>

    <style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    .card-icon {
        width: 50px;
        height: 50px;
    }
    .table th, .table td {
        padding: 1rem;
    }
    .badge {
        font-size: 0.8em;
        padding: 0.5em 0.75em;
    }
    </style>
</body>
</html>

