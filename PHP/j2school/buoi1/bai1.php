<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPbuoi1</title>
    <style>
        body{
            background-image: url("img/bg.jpg");
            background-repeat: no-repeat;
            background-position-y: -20vh;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        #div_tong{
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .box{
            height: auto;
            width: auto;
            background-color: rgba(240, 236, 229, 0.65);
            padding: 10px;
            border-radius: 25px;
            font-size: 28px;
        }

        .div_trong_form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        input[type="text"]:focus{
            outline: none;
        }
        input[type="text"],input[type="text"]::placeholder{
            border: none;
            border-radius: 15px;
            padding: 2px 5px;
            text-align: center;
            margin: 5px 10px 1px 10px;
        }
        button[type="submit"]{
            background-color: #04aa6d;
            border:none;
            cursor: pointer;
            border-radius: 15px;
            color: white;
            font-size: 10px;
            padding: 2px 10px;
        }
        button[type="submit"]:hover{
            background-color: #059862;
        }
        #loi_so{
            font-size: 8px;
            width: 80%;
            height: 15px;
            color: red;
            padding: 0px 10px;
        }
        #loi_so:empty{
            height: 14px;
            width: 100%;
            height: 15px;
        }
        
    </style>
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
    <script>
        function kiem_tra(){
            let $kiem_tra_loi = false;
            let $so = parseInt(document.getElementById("input_so").value);
            if(isNaN($so)){
                $kiem_tra_loi = true;
                document.getElementById("loi_so").innerHTML=`*Số không được để trống á pà`;
                document.getElementById("input_so").style.border="1px red solid";
                document.getElementById("input_so").focus();
            } else {
                document.getElementById("loi_so").innerHTML=``;
                document.getElementById("input_so").style.border="none";
            }
            
            if ($kiem_tra_loi == true){
                return false;
            }
        }
    </script>
</body>
</html>