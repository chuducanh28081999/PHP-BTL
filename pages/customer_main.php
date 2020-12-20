<?php 
  session_start();
  include_once('../DB/getConnection.php');
  include_once("../action/login.check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <?php 
    include("../includes/css.php")
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
      include("../includes/side-bar.php");
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php 
          include("../includes/top-bar.php");
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <button type='button' class='btn btn-primary' data-target='#add' data-toggle='modal'>
            Thêm khách hàng
          </button>

          <?php
            include_once('../includes/message.php');
            include_once("../pages/customer_add.php"); 
            include_once("../pages/customer_detail.php"); 
            include_once("../pages/customer_delete.php");
          ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách khách hàng</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã khách hàng</th>
                      <th>Tên khách hàng</th>
                      <th style="display: none;">Ngày sinh</th>
                      <th style="display: none;">CMND</th>
                      <th>Địa chỉ</th>
                      <th style="display: none;">Khu vực</th>
                      <th style="display: none;">Giới tính</th>
                      <th style="display: none;">Ngày bắt đầu sử dụng</th>
                      <th style="display: none;">Nhóm khách hàng</th>
                      <th style="display: none;">Ghi chú</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $strSQL = "Select * from khachhang";
                        $r = mysqli_query($conn, $strSQL);
                        $stt = 0;
                        while($row = mysqli_fetch_assoc($r)){
                          $maKH = $row['MaKH'];
                          $ten = $row['TenKH'];
                          $ngaysinh = $row['NgaySinh'];
                          $cmnd = $row['CMND'];
                          $diachi = $row['DiaChi']; 
                          $khuvuc = $row['KhuVuc'];
                          $gt = $row['GioiTinh'];
                          $bdsd = $row['NgayBDSD'];
                          $nhomkh = $row['NhomKH'];
                          $ghichu = $row['GhiChu'];
                          ?>
                                <tr>
                                  <td><?php echo $maKH; ?></td>
                                  <td><?php echo $ten; ?></td>
                                  <td style="display: none;"><?php echo $ngaysinh; ?></td>
                                  <td style="display: none;"><?php echo $cmnd; ?></td>
                                  <td><?php echo $diachi; ?></td>
                                  <td style="display: none;"><?php echo $khuvuc; ?></td>
                                  <td style="display: none;"><?php echo $gt; ?></td>
                                  <td style="display: none;"><?php echo $bdsd; ?></td>
                                  <td style="display: none;"><?php echo $nhomkh; ?></td>
                                  <td style="display: none;"><?php echo $ghichu; ?></td>
                                  <td>
                                    <button type='button' class='btn btn-primary editbtn' data-target='#update' data-toggle='modal'>
                                      Chi tiết
                                    </button>
                                    <button type='button' class='btn btn-danger deletebtn' data-target='#delete' data-toggle='modal'>
                                      Xóa
                                    </button>
                                  </td>
                                </tr>
                        <?php } ?>
                  </tbody>
                </table>
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

  <!-- Logout Modal-->
  <?php
    include("../includes/logout_model.php");
  ?>

  <?php 
    include_once("../includes/js.php");
  ?>
  <script>

    $(document).ready(function(){
      // $(".editbtn").modal('show');
      $('.editbtn').on('click', function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();
        console.log(data);
        $('#updateId').val(data[0]);
        $('#updateName').val(data[1]);
        $('#updateDate').val(data[2]);
        $('#updateCode').val(data[3]);
        $('#updateAddress').val(data[4]);
        $('#updateArea').val(data[5]);
        
        if(data[6] == 1){
          document.getElementById("updateFemale").checked = true;
          document.getElementById("updateMale").checked = false;
        }
        else{
          document.getElementById("updateFemale").checked = false;
          document.getElementById("updateMale").checked = true;
        }
        $('#updateStart').val(data[7]);
        $('#updateGroup').val(data[8]);
        $('#updateNote').val(data[9]);
      });

      $('.deletebtn').on('click', function(){
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();
        console.log(data);
        $('#deleteId').val(data[0]);
      });
    });

  </script>
</body>

</html>