<?php

$ten_sp = addslashes($_POST['ten_sp']);
$ten_loai = addslashes($_POST['ten_loai']);
$anh = addslashes($_POST['anh']);
$mo_ta = addslashes($_POST['mo_ta']);
$ma_loai = addslashes($_POST['ma_loai']);
$gia = addslashes($_POST['gia']);

if (empty($ten_sp)||empty($ten_loai)||empty($anh)||empty($mo_ta)||empty($ma_loai)||empty($gia)){
    header('Location:form_insert.php?loi=Phải điền đầy đủ thông tin');
} else {
    require_once '../root/connect.php';
    $sql = "insert into dien_thoai(ten_sp,ten_loai,anh,mo_ta,ma_loai,gia) 
    values ('$ten_sp','$ten_loai','$anh','$mo_ta','$ma_loai','$gia') ";
    mysqli_query($ket_noi,$sql);
    $loi = mysqli_error($ket_noi);
    echo $loi;
    mysqli_close($ket_noi);
    header('Location:form_insert.php?success');
}

