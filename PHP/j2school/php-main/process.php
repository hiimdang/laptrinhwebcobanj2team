

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="SHORTCUT ICON" href="./image/Prox_logo_white.png">
    <title>Bài tập php 2</title>
    <style>
        html {
            height: 100%;
        }
        body {
            margin:0;
            padding:0;
            font-family: 'Courier New', Courier, monospace;
            background: rgb(29, 29, 29);
        }
        
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 500px;
            padding: 30px;
            transform: translate(-50%, -50%);
            background: rgb(36, 36, 36);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.322);
            backdrop-filter: blur(20px);
            border-radius: 10px;
        }
        
        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
            font-weight: 200;
        }

        .login-box h3 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
            font-weight: 200;
        }
        
        
        .login-box .user-box {
            position: relative;
        }
        
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin: 5px;
            border: none;
            border-bottom: 1px solid rgb(73, 73, 73);
            outline: none;
            background: transparent;
            
        }

        input[type=date]:required:invalid::-webkit-datetime-edit {
            color: transparent;
        }
        input[type=date]:focus::-webkit-datetime-edit {
            color: rgb(255, 255, 255) !important;
        }

        
        .login-box .user-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #15c80f;
            font-size: 12px;
        }


        #title{
            color:  #fff;
            margin: 0px;
            padding: 0px;
        }

        .error{
            padding: 0px;
            margin: 0px;
            font-size: 13px;
            color: red;
            margin-bottom: 15px;
        }

        .radio-toolbar {
            margin: 15px 10px 25px 10px;
        }
        
        .radio-toolbar input[type="radio"] {
            opacity: 0;
            position: fixed;
            width: 0;
        }
        
        .radio-toolbar label {
            display: inline-block;
            background-color: rgba(221, 221, 221, 0);
            padding: 5px 10px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border: 1px solid #444;
            border-radius: 5px;
            color: #fff;
        }
        
        .radio-toolbar label:hover {
            background-color: rgba(255, 255, 255, 0.116);
        }
        
        .radio-toolbar input[type="radio"]:focus + label {
            border: 1px solid rgb(114, 114, 114);
        }
        
        .radio-toolbar input[type="radio"]:checked + label {
            background-color: #15c80f;
        }
        
        .login-box form a {
            position: relative;
            display: block;
            padding: 10px 20px;
            color: #15c80f;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            text-align: center;
        }
        
        .login-box a:hover {
            background: #15c80f;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #15c80f,
                        0 0 25px #15c80f,
                        0 0 50px #15c80f,
                        0 0 100px #15c80f;
        }
        
        .login-box a span {
            position: absolute;
            display: block;
        }
        
        

        #btn_submit{
            background-color:  rgba(0, 0, 0, 0);
            color: #fff;
            outline: none;
            border: none;
            font-size: large;
            font-family: 'Courier New', Courier, monospace;
        }

        #caption{
            color: #15c80f;
        }


  
    </style>
</head>
<body>

    <form action="process.php" method="post">
        <div class="login-box">
            <h3 id="caption">Cảm ơn đã điền đầy đủ nhó ( •̀ ω •́ )✧</h2>
            <h3>
            <?php
                if(isset($_POST["name"])){
                    echo "<p>Tên bạn là " . $_POST["name"] . "</p>";
                }
                if(isset($_POST["email"])){
                    echo "<p>Email bạn là " . $_POST["email"] . "</p>";
                }
                if(isset($_POST["gender"])){
                    echo "<p>Giới tính bạn là " . $_POST["gender"] . "</p>";
                }
                if(isset($_POST["password"])){
                    $pass = $_POST["password"] ;
                    $last2Word = substr($pass,6);
                    echo "<p>Mật khẩu bạn là ". "******" . $last2Word . "</p>";
                }
                if(isset($_POST["birthday"])){
                    echo "<p>Ngày sinh bạn là " . $_POST["birthday"] . "</p>";
                }
                if(isset($_POST["hobby"])){
                    echo "<p>Sở thích bạn là " . $_POST["hobby"] . "</p>";
                }
            ?>

            </h2>
          </div>
    </form>
	
</body>
</html>
