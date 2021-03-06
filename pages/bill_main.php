<?php
    session_start();
    include("../DB/getConnection.php");
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
                        <h1 class="h3 mb-0 text-gray-800">Giá điện - Đối tượng sử dụng</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <?php
                        $strSQL = "Select * From nhomdoituong";
                        $result = $conn -> query($strSQL);
                        while($row = $result->fetch_assoc()){
                            echo "<div class='col-xl-3 col-md-6 mb-4'>
                                    <div class='card border-left-primary shadow h-100 py-2'>
                                        <div class='card-body'>
                                            <div class='row no-gutters align-items-center'>
                                                <div class='col mr-2'>
                                                    <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>
                                                        " . $row['TenDT'] . "
                                                    </div>
                                                    <div class='h5 mb-0 font-weight-bold text-gray-800'>100 đơn vị</div>
                                                </div>
                                                <div class='col-auto'>
                                                    <i class='fas fa-calendar fa-2x text-gray-300'></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }
                    ?>
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