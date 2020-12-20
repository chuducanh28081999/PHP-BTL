<?php
    session_start();
    if(!isset($_SESSION['LoginID']) || empty($_SESSION['LoginID'])){
        header('location: http://localhost:8085/QLTD/pages/login.php');
    }
?>