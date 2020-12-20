<?php 
    session_start();
    include_once('../DB/getConnection.php');
    if(isset($_POST['ten']) | isset($_POST['ngaysinh']) | isset($_POST['cmnd']) | isset($_POST['diachi']) |
       isset($_POST['gt']) | isset($_POST['ngaysd']) | isset($_POST['nhomkh']) | isset($_POST['khuvuc'])){
           $ten = $_POST['ten'];
           $ngaysinh = $_POST['ngaysinh'];
           $cmnd = $_POST['cmnd'];
           $diachi = $_POST['diachi'];
           $gt = $_POST['gt'];
           $ngaysd = $_POST['ngaysd'];
           $nhomkh = $_POST['nhomkh'];
           $ghichu = $_POST['ghichu'];
           $khuvuc = $_POST['khuvuc'];

           if(empty($ten) | empty($ngaysinh) | empty($cmnd) | empty($diachi) | empty($khuvuc)| empty($gt) | empty($ngaysd) | empty($nhomkh)){
            $_SESSION['message'] = "Thông tin thiếu hoặc sai lệch";
           }
           else{
               $strSQL = "Select MaKH From khachhang Order By MaKH DESC Limit 1";
               $result = $conn -> query($strSQL);
               while($row = $result->fetch_assoc()){
                   $max = $row ['MaKH'];
               }
               $temp = substr($max, 2);
               (int)$temp ++;
               $ma = 'KH'. $temp;
               $strSQL = "Insert into khachhang values('$ma', '$ten', '$ngaysinh', $cmnd, '$diachi', '$khuvuc', $gt, '$ngaysd', '$nhomkh', '$ghichu')";
               $insert = $conn -> query($strSQL);
               if(!$insert){
                   $_SESSION['message'] = 'Thêm thất bại';
               }
               else{
                    $_SESSION['message'] = 'Thêm thàng công';
               }
           }
    }
    header('location: http://localhost:8085/QLTD/pages/customer_main.php');
?>