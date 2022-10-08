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
            <form class="form_box" method="POST" action="process.php">
            <div class="tren">
                <div class="chu_xanh">
                    Sign up
                </div>
            </div>
            <div class="giua">
                <div class="tieu_de">Tên: <span class="red">*</span></div>
                <input name="ten" id="input_ten" type="text">
                <div id="loi_ten" class="loi"></div>                                    <!-- Loi ten-->
                <div class="tieu_de">Email: <span class="red">*</span></div>
                <input name="email" id="input_email" type="email">
                <div id="loi_email" class="loi"></div>                                  <!-- Loi email-->
                <div class="tieu_de tieu_de_flex">
                    <div>
                        Mật khẩu: <span class="red">*</span> 
                    </div>
                    <div onclick="switch_mat_khau()">
                        <span class="switch_text">
                            <img id="switch_mat_khau_img" class="icon" src="img/eye_open.png">
                            <span id="text_mat_khau">
                                Show    
                            </span>
                        </span>
                    </div>
                </div>
                <input name="mat_khau" id="input_mat_khau" type="password">
                <div id="loi_mat_khau" class="loi"></div>                               <!-- Loi mat khau-->
                <div class="tieu_de tieu_de_flex">
                    <div>
                        Nhập lại mật khẩu: <span class="red">*</span> 
                    </div>
                    <div onclick="switch_nl_mat_khau()">
                        <span class="switch_text">
                            <img id="switch_nl_mat_khau_img" class="icon" src="img/eye_open.png">
                            <span id="text_nl_mat_khau">
                                Show    
                            </span>
                        </span>
                    </div>
                </div>
                <input name="nl_mat_khau" id="input_nl_mat_khau" type="password">
                <div id="loi_nl_mat_khau" class="loi"></div>                             <!-- Loi nl mat khau-->
                <div class="tieu_de">Ngày sinh: <span class="red">*</span></div>
                <input name="ngay_sinh" id="input_ngay_sinh" type="date">
                <div id="loi_ngay_sinh" class="loi"></div>                            <!-- Loi ngay sinh-->
            </div>
            <div class="duoi">
                <button type="submit" onclick="return kiem_tra()">Sign up for free</button>
            </div>
            </form>
        </div>
    </div>

    <script src="file.js"></script>
</body>
</html>