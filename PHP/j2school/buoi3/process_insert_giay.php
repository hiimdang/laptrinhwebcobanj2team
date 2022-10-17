<?php 
$ten = addslashes($_POST['ten']);
$gia = $_POST['gia'];
$mo_ta = addslashes($_POST['mo_ta']);
$anh_1 = $_POST['anh_1'];
$anh_2 = $_POST['anh_2'];
$anh_3 = $_POST['anh_3'];
$anh_4 = $_POST['anh_4'];

$ket_noi = mysqli_connect('localhost','root','','j2school');
mysqli_set_charset($ket_noi,'utf8');


$sql = "insert into ban_giay(ten,gia,mo_ta,anh_1,anh_2,anh_3,anh_4) values ('$ten','$gia','$mo_ta','$anh_1','$anh_2','$anh_3','$anh_4')";

// die($sql);
mysqli_query($ket_noi,$sql);
$loi = mysqli_error($ket_noi);
echo $loi;

mysqli_close($ket_noi);