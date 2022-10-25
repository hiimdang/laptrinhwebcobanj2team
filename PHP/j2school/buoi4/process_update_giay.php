<?php  
$ma = $_POST['ma'];
require_once 'connect.php';
$ten = addslashes($_POST['ten']);
$gia = $_POST['gia'];
$mo_ta = addslashes($_POST['mo_ta']);
$anh_1 = addslashes($_POST['anh_1']);
$anh_2 = addslashes($_POST['anh_2']);
$anh_3 = addslashes($_POST['anh_3']);
$anh_4 = addslashes($_POST['anh_4']);

$truy_van = "update ban_giay
set
ten = '$ten',
gia = '$gia',
mo_ta= '$mo_ta',
anh_1= '$anh_1',
anh_2= '$anh_2',
anh_3= '$anh_3',
anh_4= '$anh_4'
where
ma = '$ma'";

mysqli_query($ket_noi,$truy_van);
mysqli_close($ket_noi);