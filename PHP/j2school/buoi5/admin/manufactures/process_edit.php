<?php
if(empty($_POST['ma_sp'])){
    header('Location:form_edit.php?loi=Phải điền đầy đủ thông tin');
} else {
    $ma = $_POST['ma_sp'];
    $ten_sp = addslashes($_POST['ten_sp']);
    $ten_loai = addslashes($_POST['ten_loai']);
    $anh = addslashes($_POST['anh']);
    $mo_ta = addslashes($_POST['mo_ta']);
    $ma_loai = addslashes($_POST['ma_loai']);
    $gia = addslashes($_POST['gia']);
    if (empty($ten_sp)||empty($ten_loai)||empty($anh)||empty($mo_ta)||empty($ma_loai)||empty($gia)){
        header("location: form_edit.php?ma=$_POST[ma_sp]&loi=Phải điền đầy đủ thông tin");
    } else {
        require_once '../root/connect.php';
        $sql = "update dien_thoai
        set ten_sp = '$ten_sp',
        ten_loai = '$ten_loai',
        anh = '$anh',
        mo_ta = '$mo_ta',
        ma_loai = '$ma_loai',
        gia = '$gia'
        where ma_sp = '$ma'";
        // die($sql);
        mysqli_query($ket_noi,$sql);
        $loi = mysqli_error($ket_noi);
        echo $loi;
        mysqli_close($ket_noi);
        header('Location:index.php?thong_bao=Sửa thành công');
    }
}





