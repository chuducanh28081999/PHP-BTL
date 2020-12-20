<?php 
    session_start();
    if(!isset($_SESSION['message']) || !empty($_SESSION['message'])){
        echo "<div class='alert alert-success' role='alert'>" . $_SESSION['message'] . "</div>";
    }
    // unset($_SESSION['message']);
    $_SESSION['message'] = "";
?>
