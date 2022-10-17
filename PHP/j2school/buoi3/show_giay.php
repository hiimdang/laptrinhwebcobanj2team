<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giày</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .product_div{
            height: 90%;
            width: 95%;
            /* background-color: black; */
            /* padding: 10px; */
            margin: 10px;
            display: flex;
        }
        .trai{
            width: 867px;
            height: 950px;
            /* background-color: black; */
            /* display: flex; */
            /* flex-wrap: wrap; */
        }
        .phai{
            height: 950px;
            width: 357px;
            /* display: flex; */
            /* flex-wrap: wrap; */
        }
        .product_img_show{
            width: 369px;
            height: 461px;
            object-fit: cover;
            margin-right: 12px;
            margin-top: 12px;
        }
        .div_duoi{
        height: 1000px;
        width: 100%;
        display: flex;
        justify-content: center;
        /* padding: 0px 5px; */
        }
        .thong_tin_san_pham{
            padding: 12px 0px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-weight: 500;
        }
        .product_name{
            font-size: 28px;
        }
        .product_subs{
            font-size: 16px;
            margin-top: 10px;
        }
        .product_price{
            font: inherit;
            color: rgb(17, 17, 17);
            font-size: 18px;
            margin-top: 15px;
        }
        .button_task{
            display: flex;
            flex-direction: column;
        }
        .add_button{
            height: 63px;
            width: 367px;
            background-color: black;
            color: white;
            border-radius: 100px;
            cursor: pointer;
        }
        .add_button:hover{
            background-color: #757575;
            transition-duration: 0.5s;
        }
        .favorite_button{
            margin-top: 12px;
            height: 63px;
            width: 367px;
            background-color: white;
            color: black;
            border: 1px #cccccc solid;
            border-radius: 100px;
            cursor: pointer;
        }
        .favorite_button:hover{
            border: 1px black solid;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
        <?php 
        $ma = $_GET['ma'];
        $ket_noi = mysqli_connect('localhost','root','','ban_giay');
        $sql = "select * from ban_giay where ma = $ma";

        ?>

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
        
        <?php 
        $ma = $_GET['ma'];
        $ket_noi = mysqli_connect('localhost','root','','j2school');
        mysqli_set_charset($ket_noi,'utf8');

        $sql = "select * from ban_giay where ma = $ma";
        $ket_qua = mysqli_query($ket_noi,$sql); // cai nay la dang mang
        $san_pham = mysqli_fetch_array($ket_qua);
        ?>

        <div class="div_duoi">
            <div class="product_div">
                <div class="trai">
                    <img src="<?php echo $san_pham['anh_1']?>" class="product_img_show">
                    <img src="<?php echo $san_pham['anh_2']?>" class="product_img_show">
                    <img src="<?php echo $san_pham['anh_3']?>" class="product_img_show">
                    <img src="<?php echo $san_pham['anh_4']?>" class="product_img_show">
                </div>
                <div class="phai">
                    <div class="thong_tin_san_pham">
                        <div class="product_name"><?php echo $san_pham['ten']?></div>
                        <div class="product_subs"><?php echo $san_pham['mo_ta']?></div>
                        <div class="product_price"><?php echo number_format($san_pham['gia'] , 0, ',', '.')?>₫</div>
                    </div>
                    <div class="button_task">
                        <button class="add_button" onclick="window.location='https:/\/youtu.be/dQw4w9WgXcQ'">Add to bag</button>
                        <button class="favorite_button" onclick="window.location='https:/\/youtu.be/dQw4w9WgXcQ'">Favorite ♡</button>
                    </div>
                </div>
            </div>
        </div>
</div>
    <script src="file.js"></script>
</body>
</html>