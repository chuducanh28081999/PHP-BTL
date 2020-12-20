<?php 
    $serverName = "localhost";
    $dBUserName = "root";
    $dBPassWord = "12345678";
    $dBName = "QLTD";
    //Connect to DB
    $conn = mysqli_connect($serverName, $dBUserName, $dBPassWord, $dBName);
    if(!$conn){
        die("Connection Fail!" . mysqli_connect_error());
    }
?>