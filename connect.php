<?php
    $connect = new mysqli('localhost', 'root', '', 'khachsan');
    mysqli_query($connect, "SET NAMES UTF8");
    if($connect->connect_error){
    die( 'kết nối thất bại');
    }
?>