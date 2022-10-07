<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPbuoi1</title>
    <style>
        body{
            background-image: url("bg.jpg");
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
        #ket_qua{
            font-size: 14px;
        }
        
    </style>
</head>
<body>
    <div id="div_tong">
        <div class="box">
                    <div id="ket_qua">
                        <?php 
                            $so= $_POST['so'];
                            for($i=1;$i<=$so;$i++){
                                echo $i,' ';
                            }
                         ?>
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>