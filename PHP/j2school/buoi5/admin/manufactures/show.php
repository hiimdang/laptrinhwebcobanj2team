<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Em luoi lam cai nay lam nen dai khai thoi a -->
    <?php
        if(isset($_GET['ma'])){
            $ma = $_GET['ma'];
        } else {
            header('Location:index.php?loi=Phải nhập mã');
        }
        require_once '../root/connect.php';
        // echo 'test';
        $sql = "select * from dien_thoai where ma_sp = '$ma'";
        $truy_van = mysqli_query($ket_noi,$sql);
        $mang_thong_tin = mysqli_fetch_array($truy_van);
    ?>
    <table style="width: 100%; border:1px black solid;">
        <tr>
            <th>
                Tên sản phẩm:
            </th>
            <th>
                Tên loại:
            </th>
            <th>
                Hình ảnh:
            </th>
            <th>
                Mô tả:
            </th>
            <th>
                Loại:
            </th>
        </tr>
        <tr>
            <td>
                  <?php echo htmlspecialchars($mang_thong_tin['ten_sp'])?>
            </td>
            <td>
                  <?php echo htmlspecialchars($mang_thong_tin['ten_loai'])?>
            </td>
            <td>
                <img src="<?php echo htmlspecialchars($mang_thong_tin['anh'])?>" style="height:100px;width:100px;">
            </td>
            <td>
                  <?php echo htmlspecialchars($mang_thong_tin['mo_ta'])?>
            </td>
            <td>
                  <?php if($mang_thong_tin['ma_loai'] == 1){ echo "Điện thoại cùi bắp";} elseif($mang_thong_tin['ma_loai'] == 2){ echo "Điện thoại thông minh Andr";} elseif($mang_thong_tin['ma_loai'] == 3) { echo "Điện thoại thông minh iPhone";} else { echo "Mày đang tính nhập cái gì vào vậy thằng ngu?";}?>
            </td>
        </tr>
    </table>
</body>
</html>