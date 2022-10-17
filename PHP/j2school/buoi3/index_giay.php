<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán giày</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="tong">
        <div class="task_tren">
            <ul>
                <li>
                    <a href="#">
                           <img src="img/nike_logo_normal.png" class="icon_to" id="logo_nike_img" onmouseover="on_hover_logo()" onmouseout="off_hover_logo()">
                    </a>
                </li>
                <li>
                    <div class="task_right">
                        <div id="search_box">
                            <div id="search_button">
                                <img src="img/search.png" class="icon">
                            </div>
                            <input type="text" placeholder="Search" id="input">
                        </div>
                        <a href="#">
                            <img src="img/white_heart.png" class="icon_nho" style="margin-left: 12px;">
                        </a>
                        <a href="#">
                            <img src="img/buy_cart.png" class="icon_nho">
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="div_duoi">

            <?php 
        $ket_noi = mysqli_connect('localhost','root','','j2school');
        mysqli_set_charset($ket_noi,'utf8');

        $sql = "select * from ban_giay";
        $ket_qua = mysqli_query($ket_noi,$sql)
        ?>
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