<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Day la trang chu
    </h1>
    <?php 
    $ket_noi = mysqli_connect('localhost','root','','j2school');
    mysqli_set_charset($ket_noi,'utf8');

    //Tim kiem
    $tim_kiem='';
    if(isset($_GET['tim_kiem'])){
        $tim_kiem = $_GET['tim_kiem'];
    }
    //Trang
    $trang=1;
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }
    $sql_so_tin_tuc = "select count(*) from tin_tuc where tieu_de like '%$tim_kiem%'";
    $mang_so_tin_tuc = mysqli_query($ket_noi,$sql_so_tin_tuc);
    $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
    $so_tin_tuc = $ket_qua_so_tin_tuc[0];

    $so_tin_tuc_tren_mot_trang = 1;
    $so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_mot_trang);
    $bo_qua = $so_tin_tuc_tren_mot_trang*($trang-1);
    // echo $so_trang;


    

    
    $sql = "select * from tin_tuc
        where tieu_de like '%$tim_kiem%'
        limit $so_tin_tuc_tren_mot_trang
        offset $bo_qua";

    $ket_qua = mysqli_query($ket_noi,$sql)
     ?>

     <a href="form_insert.php" target="_blank">
        Thêm bài viết
     </a>
   
     <table border="1" width="100%">
     <caption>
        <form>
             <input type="search" name='tim_kiem'>
        </form>
     </caption>
        <tr>
            <th>Ma</th>
            <th>Tieu de</th>
            <th>Anh</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>

        <?php foreach ($ket_qua as $tung_bai_tin_tuc){?>
            <tr>
                <td>
                    <?php echo $tung_bai_tin_tuc['ma']?>
                </td>
                <td>
                    <a href="show.php?ma=<?php echo $tung_bai_tin_tuc['ma']?>">
                        <?php echo $tung_bai_tin_tuc['tieu_de'] ?>
                    </a>
                </td>
                <td>
                    <img src="<?php echo $tung_bai_tin_tuc['anh'] ?>" height="100">
                    
                </td>
                <td>
                    <a href="form_update.php?ma=<?php echo $tung_bai_tin_tuc['ma']?>">
                        SỬA
                    </a>
                </td>
                <td>
                    <a href="delete.php?ma=<?php echo $tung_bai_tin_tuc['ma']?>">
                        XOÁ
                    </a>
                </td>
            </tr>
        <?php } ?>
     </table>
     
     <?php for ($i=1;$i<=$so_trang;$i++){?>
            <a href="?trang=<?php echo $i?>&tim_kiem=<?php echo $tim_kiem?>">
                <?php echo $i?>
            </a>
     <?php } ?>

     <?php mysqli_close($ket_noi) ?>
</body>
</html>
