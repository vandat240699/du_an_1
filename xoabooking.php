<?php
    require_once('./connect.php');
    $id = $_GET['idb'];
    mysqli_query($connect, "DELETE FROM booking WHERE id = '$id'");
    header('location: ./booking.php');
?>