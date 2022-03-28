<?php
    require_once('./connect.php');
    $id = $_GET['idp'];
    mysqli_query($connect, "DELETE FROM room_type WHERE idroom = '$id'");
    header('location: ./room_type.php');
?>