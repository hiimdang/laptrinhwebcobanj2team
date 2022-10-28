<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product Admin</title>
    <style>
        *{ 
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
        }
        #tong{
            /* background-color: black; */
            height: 100vh;
        }
        .header{
            height: 7%;
            width: 100%;
            display: flex;
            align-items: center;
        }
        .header > .new{
            padding: 0px 5px;
            display: flex;
        }
        .div_table{
            height: 93%;
            width: 100%;
             /* background-color: green; */
        }
        a:link,a:visited{
            text-decoration: underline;
            color: #236dc9;
        }
        input[name="search"],input[name="search"]:focus{
            border: 1px black solid;
            outline:none;
            padding: 0px 5px;
            width: 150px;
        }
        table{
            width: 100%;
            border-collapse:collapse;
        }
        td{
            width: 15px;
            padding: 10px;
        }
        tr {
        -webkit-box-shadow: 0px 2px 0px 0px rgba(0,0,0,0.35);
        -moz-box-shadow: 0px 2px 0px 0px rgba(0,0,0,0.35);
        box-shadow: 0px 2px 0px 0px rgba(0,0,0,0.35);
        height: 40px;
        }
        .big_td{
            width: 140px;
            font-weight: bold;
        }
        .td_tieu_de{
            font-weight: bold;
        }
        a:link,a:visited{
            text-decoration: none;
        }
    </style>
</head>
<body>
        <?php
            $tim_kiem='';
            $trang=1;
            require_once '../root/connect.php';
            //Phan trang
            if(isset($_GET['trang'])){
                $trang = $_GET['trang'];
            }
            if(isset($_GET['search'])){
                $tim_kiem = $_GET['search'];
            }
               $sql_so_san_pham = "select count(*) from dien_thoai where ten_sp like '%$tim_kiem%'";
               $truy_van_so_san_pham = mysqli_query($ket_noi,$sql_so_san_pham);
               $mang_so_san_pham = mysqli_fetch_array($truy_van_so_san_pham);
               $so_san_pham = $mang_so_san_pham[0];
               $so_san_pham_tren_mot_trang = 4;
               $so_trang = ceil($so_san_pham/$so_san_pham_tren_mot_trang);
               $bo_qua = $so_san_pham_tren_mot_trang * ($trang - 1);
            //    echo $so_san_pham;
            //Search

                // echo $tim_kiem;
                $sql="select * from dien_thoai where ten_sp like '%$tim_kiem%'
                limit $so_san_pham_tren_mot_trang
                offset $bo_qua";

            $mang_dien_thoai = mysqli_query($ket_noi,$sql);
            // $mang_dien_thoai = mysqli_fetch_array($mang_dien_thoai);
        ?>
    <div id="tong">
        <div class="header">
            <div class="new">
            <a href="../manufactures/form_insert.php" style="margin-right: 50px;">
                New Product
            </a>
                <form autocomplete="off">
                Search:
                    <input type="search" name="search" value="<?php echo $tim_kiem?>">
                </form>
            <?php for($i=1;$i<=$so_trang;$i++){?>
                    <a href="index.php?trang=<?php echo $i?>&search=<?php echo $tim_kiem?>" style="margin-left: 5px"><?php echo $i?></a>
            <?php } ?>
            <?php if(isset($_GET['loi'])){?>
                <span style="margin-left: 30px; color: red"> <?php echo $_GET['loi']?></span>
            <?php } ?>
            <?php if(isset($_GET['thong_bao'])){?>
                <span style="margin-left: 30px; color: lime"><?php echo $_GET['thong_bao']?></span>
            <?php } ?>
            </div>
        </div>
        <div class="div_table">
            <table>
                <tr>
                    <td class="td_tieu_de">
                        TenSP
                    </td>
                    <td class="td_tieu_de">
                        TenLoai
                    </td>
                    <td class="td_tieu_de">
                        Img
                    </td>
                    <td class="big_td" class="td_tieu_de">
                        MoTa
                    </td>
                    <td class="td_tieu_de">
                        MaLoai
                    </td>
                    <td class="td_tieu_de">
                        Gia
                    </td>
                    <td class="td_tieu_de">
                        MaSP
                    </td>
                    <td class="big_td" class="td_tieu_de">
                        Action
                    </td>
                </tr>
            
                <?php foreach ($mang_dien_thoai as $each){?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($each['ten_sp'])?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($each['ten_loai'])?>
                    </td>
                    <td>
                        <img src="<?php echo htmlspecialchars($each['anh'])?>" style="width: 80px; height:80%;">
                    </td>
                    <td>
                        <?php echo htmlspecialchars($each['mo_ta'])?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($each['ma_loai'])?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars(number_format($each['gia'], 0, ',', '.'))?>
                    </td>
                    <td>
                        <?php echo $each['ma_sp']?>
                    </td>
                    <td>
                        <a href="form_edit.php?ma=<?php echo $each['ma_sp']?>">
                            Edit
                        </a>|
                        <a href="show.php?ma=<?php echo $each['ma_sp']?>">
                            Details
                        </a>|
                        <a href="delete.php?ma=<?php echo $each['ma_sp']?>">
                            Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </div>
</body>
</html>
