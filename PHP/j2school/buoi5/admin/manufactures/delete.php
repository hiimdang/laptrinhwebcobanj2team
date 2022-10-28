<?php

if(isset($_GET['ma'])){
    $ma = $_GET['ma'];
    require_once '../root/connect.php';
    $sql = "delete from dien_thoai
    where ma_sp = '$ma'";
    mysqli_query($ket_noi,$sql);
    mysqli_close($ket_noi);
    header('Location:index.php?thong_bao=Xoá thành công');
} else {
    header('Location:index.php?loi=Phải điền mã');
}