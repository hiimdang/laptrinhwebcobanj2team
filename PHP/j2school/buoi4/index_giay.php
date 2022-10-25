<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nai kì</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        html{
            height: 700px;
        }
    </style>
</head>
<body>
        <?php 
            require_once 'connect.php';
            //Tim kiem
            $tim_kiem='';
            $trang=1;
            if(isset($_GET['tim_kiem'])){
                $tim_kiem = $_GET['tim_kiem'];
            }
            if(isset($_GET['trang'])){
                    $trang = $_GET['trang'];
                }
            // if(isset($_GET['tim_kiem'])){
            //     $tim_kiem = $_GET['tim_kiem'];
            //     $sql = "select * from ban_giay
            //     where ten like '%$tim_kiem%'";
            // } else {
            //     $sql = "select * from ban_giay";
            // }
            // $ket_qua = mysqli_query($ket_noi,$sql);

            $sql_so_san_pham = "select count(*) from ban_giay where ten like '%$tim_kiem%'";
            $mang_so_san_pham = mysqli_query($ket_noi,$sql_so_san_pham);
            $mang_so_san_pham = mysqli_fetch_array($mang_so_san_pham);
            $so_san_pham = $mang_so_san_pham[0];

            $so_san_pham_tren_mot_trang = 8;
            $so_trang = ceil($so_san_pham / $so_san_pham_tren_mot_trang);
            $bo_qua = $so_san_pham_tren_mot_trang * ($trang -1);

            
            $sql = "select * from ban_giay
            where ten like '%$tim_kiem%'
            limit $so_san_pham_tren_mot_trang
            offset $bo_qua";
    
            $ket_qua = mysqli_query($ket_noi,$sql)


        ?>

    <div id="tong">
        <div class="task_tren">
            <ul>
                <li>
                    <a href="index_giay.php">
                           <img src="img/nike_logo_normal.png" class="icon_to" id="logo_nike_img" onmouseover="on_hover_logo()" onmouseout="off_hover_logo()">
                    </a>
                </li>
                <li>
                    <form autocomplete="off">
                    <div class="task_right">
                        <div id="search_box">
                            <div id="search_button">
                                <img src="img/search.png" class="icon">
                            </div>
                            <input type="search" placeholder="Search" name="tim_kiem" id="input" value="<?php echo $tim_kiem ?>">
                        </div>
                        <a href="#">
                            <img src="img/white_heart.png" class="icon_nho" style="margin-left: 12px;">
                        </a>
                        <a href="#">
                            <img src="img/buy_cart.png" class="icon_nho">
                        </a>
                    </div>
                    </form>
                </li>
            </ul>
        </div>

 
        <div class="div_duoi">
                <div style="height: 20px; position:absolute; width: 90%;">
                    <?php for($i=1;$i<=$so_trang;$i++){?>
                        <a href="?trang=<?php echo $i?>&tim_kiem=<?php echo $tim_kiem?>">
                            <?php echo $i?>
                        </a>
                    <?php } ?>
                </div>
            <div class="product_list_div">
            <?php foreach ($ket_qua as $tung_san_pham){?>
                <div class="product_card wrapper">
                    <div class="product_img">
                        <a href="show_giay.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                            <img class="product_card_img" src="<?php echo $tung_san_pham['anh_1']?>">
                        </a>
                    </div>
                    <div class="product_info_before">
                        <div class="product_card_title">
                             <a href="show_giay.php?ma=<?php echo $tung_san_pham['ma'] ?>">
                                <?php echo $tung_san_pham['ten'] ?>
                             </a>
                        </div>
                        <div class="product_card_subtitute" style="font-size: 15px;">
                            <?php echo $tung_san_pham['mo_ta'] ?>
                        </div>
                        <div class="product_card_price">
                            <?php echo number_format($tung_san_pham['gia'] , 0, ',', '.')?>₫
                        </div>
                        <div class="product_card_buy_button_div">
                            <button class="buy_button" onclick="window.location='show_giay.php?ma=<?php echo $tung_san_pham['ma'] ?>';">Buy Now</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>

    <script src="file.js"></script>
</body>
</html>