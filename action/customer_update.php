<?php 
    session_start();
    include_once('../DB/getConnection.php');
    if(isset($_POST['ma']) | isset($_POST['ten']) | isset($_POST['ngaysinh']) | isset($_POST['cmnd']) | isset($_POST['diachi']) |
       isset($_POST['gt']) | isset($_POST['ngaysd']) | isset($_POST['nhomkh']) | isset($_POST['khuvuc'])){
           $ma = $_POST['ma'];
           $ten = $_POST['ten'];
           $ngaysinh = $_POST['ngaysinh'];
           $cmnd = $_POST['cmnd'];
           $diachi = $_POST['diachi'];
           $gt = $_POST['gt'];
           $ngaysd = $_POST['ngaysd'];
           $nhomkh = $_POST['nhomkh'];
           $ghichu = $_POST['ghichu'];
           $khuvuc = $_POST['khuvuc'];

           if(empty($ma) | empty($ten) | empty($ngaysinh) | empty($cmnd) | empty($diachi) | empty($khuvuc)| empty($gt) | empty($ngaysd) | empty($nhomkh)){
            $_SESSION['message'] = "Thông tin thiếu hoặc sai lệch";
           }
           else{
               $strSQL = "Update khachhang Set TenKH = '". $ten ."', NgaySinh = '" . $ngaysinh . "'
                , CMND = " . $cmnd . ", DiaChi = '" . $diachi . "', KhuVuc = '" . $khuvuc . "'
                , GioiTinh = " . $gt . ", NgayBDSD = '" . $ngaysd . "', NhomKH = '" . $nhomkh . "'
                , GhiChu = '" . $ghichu . "' Where MaKH = '" . $ma . "'";
               $update = $conn -> query($strSQL);
               if(!$update){
                   $_SESSION['message'] = 'Cập nhật thất bại';
               }
               else{
                    $_SESSION['message'] = 'Cập nhật thành công';
               }
           }
    }
    header('location: http://localhost:8085/QLTD/pages/customer_main.php');
?>