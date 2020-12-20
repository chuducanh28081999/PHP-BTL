<?php
    session_start();
    include("../DB/getConnection.php");
    include("../action/login.check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Điện lực Nam Từ Liêm</title>
  <?php 
    include_once("../includes/css.php");
  ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php
    include("../includes/side-bar.php"); 
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php
        include("../includes/top-bar.php"); 
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="http://localhost:8085/QLTD/bill/report.php" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng doanh tháng vừa rồi (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số hộ gia đình đang sử dụng</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">10.000</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số lượng doanh nghiệp đang sử dụng</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>
        
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số lượng điện đã tiêu thụ trong tháng vừa rồi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18.000.000 Kwh</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">



            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                    Primary
                    <div class="text-white-50 small">#4e73df</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                    Success
                    <div class="text-white-50 small">#1cc88a</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                    Info
                    <div class="text-white-50 small">#36b9cc</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                    Warning
                    <div class="text-white-50 small">#f6c23e</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                    Danger
                    <div class="text-white-50 small">#e74a3b</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                    Secondary
                    <div class="text-white-50 small">#858796</div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                    Light
                    <div class="text-black-50 small">#f8f9fc</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                <div class="card-body">
                    Dark
                    <div class="text-white-50 small">#5a5c69</div>
                </div>
                </div>
            </div>
            </div>

            </div>

            <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                </div>
                <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
            </div>

            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php
        include("../includes/footer.php"); 
    ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    <?php
        include("../includes/logout_model.php");
    ?>

    <?php 
        include_once("../includes/js.php");
    ?>

</body>

</html>
