<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHPbuoi2</title>
</head>
<body>
    <div id="div_tong">
        <div class="box">
            <form class="form_box" action="https://youtu.be/dQw4w9WgXcQ">
            <div class="tren">
                <div class="chu_xanh">
                    Sign up
                </div>
            </div>
            <div class="giua">
                <div class="tieu_de">Tên đã nhập:</span></div>
                <input name="ten" id="input_ten" readonly value="<?php
                     $ten = $_POST['ten'];
                     echo $ten; 
                ?>">
                <div id="loi_ten" class="loi"></div>                                    <!-- Loi ten-->
                <div class="tieu_de">Email đã nhập:</div>
                <input name="email" id="input_email" type="email" readonly value="<?php
                    $email = $_POST['email'];
                    echo $email;
                ?>">
                <div id="loi_email" class="loi"></div>                                  <!-- Loi email-->
                <div class="tieu_de tieu_de_flex">
                    <div>
                        Mật khẩu đã nhập:
                    </div>
                </div>
                <input name="mat_khau" id="input_mat_khau" type="text" readonly value="<?php
                    $mat_khau = $_POST['mat_khau'];
                    echo $mat_khau
                ?>">
                <div id="loi_mat_khau" class="loi"></div>                               <!-- Loi mat khau-->
                <div class="tieu_de">Ngày sinh đã nhập:</div>
                <input name="ngay_sinh" id="input_ngay_sinh" type="date" readonly value="<?php
                    $ngay_sinh = $_POST['ngay_sinh'];
                    echo $ngay_sinh;
                ?>">
                <div id="loi_ngay_sinh" class="loi"></div>                            <!-- Loi ngay sinh-->
            </div>
            <div class="duoi">
                    <button type="submit">
                        Ấn vào đây sẽ có bất ngờ :>
                    </button>
            </div>
            </form>
        </div>
    </div>

</body>
</html>