<?php 
    session_start();
    //unset($_SESSION['LoginID']);
    session_destroy();
    // echo $_SESSION['LoginID'];
    header('location: http://localhost:8085/QLTD/pages/login.php');
?>