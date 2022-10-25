<?php

    $ma = $_GET['ma'];
    require_once 'connect.php';
    $truy_van = "delete from ban_giay where ma = '$ma'";

    mysqli_query($ket_noi,$truy_van);
    mysqli_close($ket_noi);