<?php 
    session_start();
    include_once('../DB/getConnection.php');
    if(isset($_POST['deleteId'])){
        $delId = $_POST['deleteId'];
        if(empty($delId)){
            $_SESSION['message'] = "Xóa thất bại";
        }
        else{
            $strSQL = "Delete From khachhang Where MaKH = '" . $delId . "'";
            $del = $conn ->query($strSQL);
            if($del){
                $_SESSION['message'] = "Xoá thành công";
            }
            else {
                $_SESSION['message'] = "Xóa thất bại";
            }
        }
    }
    header('location: http://localhost:8085/QLTD/pages/customer_main.php');
?>