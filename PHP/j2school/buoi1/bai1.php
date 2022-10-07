<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHPbuoi1</title>
</head>
<body>
    <div id="div_tong">
        <div class="box">
            <form method="post" action="process.php">
                <div class="div_trong_form">
                    <input type="text" id="input_so" name="so" placeholder="Nhập số: (VD: 4)">
                    <div id="loi_so"></div>
                    <button type="submit" name="button" onclick="return kiem_tra()">Tính</button>
                    <div id="ket_qua"></div>
                </div>
            </form>
        </div>
    </div>
    <script src="file.js"></script>
</body>
</html>