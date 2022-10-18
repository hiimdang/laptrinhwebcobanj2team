<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $ma=$_GET['ma'];
    require_once 'connect.php';

    $sql = "select * from tin_tuc where ma = $ma";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $tin_tuc = mysqli_fetch_array($ket_qua);
?>
    <form method="post" action="process_update.php">
        <input type="hidden" value="<?php echo $tin_tuc['ma']?>" name="ma">
        <!-- <br> -->
        Tiêu đề
        <input type="text" name="tieu_de" value="<?php echo htmlentities($tin_tuc['tieu_de'])?>">
        <br>
        Nội dung
        <textarea name="noi_dung"><?php echo htmlentities($tin_tuc['noi_dung'])?></textarea>
        <br>
        Link ảnh
        <input type="text" name="anh" value="<?php echo $tin_tuc['anh']?>">
        <br>
        <button>Sửa</button>

    </form>
</body>
</html>