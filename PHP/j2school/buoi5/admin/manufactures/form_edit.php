<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
        if(isset( $_GET['ma'])){
            $ma = $_GET['ma'];
            require_once '../root/connect.php';
            $sql = "select * from dien_thoai
            where ma_sp = '$ma'";
            $truy_van = mysqli_query($ket_noi,$sql);
            $mang_dien_thoai = mysqli_fetch_array($truy_van);
        } else {
            header('Location: index.php?loi=Phải điền mã');
        }
    ?>

<body>
    <?php if(isset($_GET['loi'])){ ?>
        <span style="color: red;"><?php echo $_GET['loi']?></span>
    <?php } ?>
    <form method="POST" action="process_edit.php">
        <input type="hidden" value="<?php echo $mang_dien_thoai['ma_sp']?>" name="ma_sp">
        Tên sản phẩm: <br>
        <input type="text" name="ten_sp" value="<?php echo $mang_dien_thoai['ten_sp']?>">
        <br>
        Tên loại: <br>
        <input type="text" name="ten_loai" value="<?php echo $mang_dien_thoai['ten_loai']?>">
        <br>
        Link ảnh: <br>
        <input type="text" name="anh" value="<?php echo $mang_dien_thoai['anh']?>">
        <br>
        Mô tả: <br>
        <input type="text" name="mo_ta" value="<?php echo $mang_dien_thoai['mo_ta']?>">
        <br>
        Mã loại: <br>
        <input type="text" name="ma_loai" value="<?php echo $mang_dien_thoai['ma_loai']?>">
        <br>
        Giá: <br>
        <input type="text" name="gia" value="<?php echo $mang_dien_thoai['gia']?>">
        <br>
        <br>
        <button>Chỉnh sửa sản phẩm</button>
    </form>
</body>
</html>