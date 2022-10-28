<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INSERT</title>
    <style>
        a:link,a:visited{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href="index.php">
        Về trang chủ
    </a>
    <?php if(isset($_GET['loi'])){ ?>
        <span style="color: red;">Phải nhập đầy đủ thông tin</span>
    <?php } ?>
    <?php if(isset($_GET['success'])){ ?>
        <span style="color: lime;">Nhập thành công</span>
    <?php } ?>
    <form method="POST" action="process_insert.php">
        Tên sản phẩm: <br>
        <input type="text" name="ten_sp">
        <br>
        Tên loại: <br>
        <input type="text" name="ten_loai">
        <br>
        Link ảnh: <br>
        <input type="text" name="anh">
        <br>
        Mô tả: <br>
        <input type="text" name="mo_ta">
        <br>
        Mã loại: <br>
        <input type="text" name="ma_loai">
        <br>
        Giá: <br>
        <input type="text" name="gia">
        <br>
        <br>
        <button>Thêm sản phẩm</button>
    </form>
</body>
</html>