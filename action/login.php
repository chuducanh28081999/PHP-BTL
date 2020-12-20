<?php 
    session_start();
    include_once('../DB/getConnection.php');
    if(!isset($_POST['userName']) | !isset($_POST['passWord'])){
        header('location: http://localhost:8085/QLTD/pages/login.php');
    }
    else{
        $userName = $_POST['userName'];
        $passWord = $_POST['passWord'];
        if(empty($userName) | empty($passWord)){
            header('location: http://localhost:8085/QLTD/pages/login.php');
        }
        else
        {
            $strSQL = "Select * From nhanvien Where MaDN = '" . $userName . "' AND MatKhau = '" . $passWord . "'";
            $result = $conn -> query($strSQL);
            if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    $_SESSION['LoginID'] = $row['MaNV'];
                    header('location: http://localhost:8085/QLTD/pages/index.php');
                }
            }
            else{
                header('location: http://localhost:8085/QLTD/pages/login.php');
            }
        }
    }
    
?>