<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM UPDATE GIAY</title>
</head>
<body>
<?php 
    $ma = $_GET['ma'];
    require_once('connect.php');

    $sql = "select * from ban_giay where ma = $ma";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $san_pham = mysqli_fetch_array($ket_qua);

?>
    <form method="POST" action="process_update_giay.php">
        <input type="hidden" name="ma" value="<?php echo $san_pham['ma']?>">
        <!-- <br> -->
        Tên sản phẩm
        <br>
        <input type="text" name="ten" value="<?php echo htmlentities($san_pham['ten'])?>">
        <br>
        Giá
        <br>
        <input type="text" name="gia" value="<?php echo $san_pham['gia']?>">
        <br>
        Mô tả sản phẩm
        <br>
        <input name="mo_ta" value="<?php echo htmlentities($san_pham['mo_ta'])?>">
        <br>
        Link ảnh 1:
        <br>
        <input type="text" name="anh_1" value="<?php echo $san_pham['anh_1']?>">
        <br>
        Link ảnh 2:
        <br>
        <input type="text" name="anh_2" value="<?php echo $san_pham['anh_2']?>">
        <br>
        Link ảnh 3:
        <br>
        <input type="text" name="anh_3" value="<?php echo $san_pham['anh_3']?>">
        <br>
        Link ảnh 4:
        <br>
        <input type="text" name="anh_4" value="<?php echo $san_pham['anh_4']?>">
        <br>
        <br>
        <button>Update sản phẩm</button>
    </form>
    <?php 
      mysqli_close($ket_noi);
    ?>
</body>
</html>