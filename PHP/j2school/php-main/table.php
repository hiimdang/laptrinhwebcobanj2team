<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
        box-sizing: border-box;
        }

        html,
        body {
        margin: 0 auto;
        height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            font-family: monospace;
            justify-content: center;
            background-color: #1d212b;
        }

        .login-box {
            position: relative;
            width: 600px;
            padding: 20px 0px 20px 0px;
            text-align: center;
            color: #252B37;
            background-color: #191d2a;
            animation: textColor 5s ease infinite;
            border-radius: 10px;
        }
        .login-box:after {
            position: absolute;
            content: "";
            top: 5vw;
            left: 0;
            right: 0;
            z-index: -1;
            height: 100%;
            width: 100%;
            margin: 0 auto;
            transform: scale(0.9);
            -webkit-filter: blur(30px);
            -moz-filter: blur(30px);
            -ms-filter: blur(30px);
            filter: blur(30px);
            background: linear-gradient(270deg, #0fffc1, #7e0fff);
            background-size: 200% 200%;
            animation: animateGlow 5s ease infinite;
        }
        @keyframes animateGlow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes textColor {
            0% {
                color: #7e0fff;
            }
            50% {
                color: #0fffc1;
            }
            100% {
                color: #7e0fff;
            }
        }

        @keyframes buttonGlow {
            0% {
                /* background: #7e0fff; */
                text-shadow: 0px 0px 5px #7e0fff;
                color: #7e0fff;
            }
            50% {
                /* background: #0fffc1; */

                text-shadow: 0px 0px 5px #0fffc1;
                color: #0fffc1;
            }
            100% {
                /* background: #7e0fff; */
                text-shadow: 0px 0px 5px #7e0fff;
                color: #7e0fff;
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 100% 0;
            }
        }

        .input-box {
            position: relative;
            display: flex;
            flex-direction: row;
            width: 90%;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 2px;
            padding: 0px;
            background: #1f2433;
        }
        .input-box:after {
            content: "";
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: 0px;
            z-index: 999;
            height: 2px;
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
            background-position: 0% 0%;
            background: linear-gradient(
            to right,
            #b294ff,
            #57e6e6,
            #feffb8,
            #57e6e6,
            #b294ff,
            #57e6e6
            );
            background-size: 500% auto;
            animation: gradient 3s linear infinite;
        }

        .input-box input {
            flex-grow: 1;
            color: #bfd2ff;
            vertical-align: middle;
            background: none;
            width: 100%;
            font-size: 12px;
            border: none;
            padding: 10px;
            outline: none;
        }

        .input-box input::-webkit-input-placeholder {
            color: #7881a1;
        }

        
        .label{
            font-size: 14px;
            padding: 0px;
            margin: 0px;
            text-align: left;
            margin: 15px 0px 5px 15px;
        }

        .login-box input[type=date]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

        .login-box input[type=password]{
            filter: invert(1);
            color: black;
            
        }

        .login-box input[type=submit]{
            width: 90%;
            animation: textColor 5s ease infinite;
            background: none;
            outline: none;
            border: none;
            padding: 5px;
            margin: 10px 10px 0px 10px;
        }

        .login-box input[type=submit]:hover{
            cursor: pointer;
            margin: 10px 10px 0px 10px;
            animation: buttonGlow 5s ease infinite;
        }

        .list__item {
            position: relative;
            margin-left: 25px;
        }
        

        .radio-btn {
            position: absolute;
            opacity: 0;
            visibility: hidden;
            color: transparent;
        }
        .radio-btn:checked + .label_radio {
            animation: textColor 5s ease infinite;  
        }

        .radio-btn::before {
            margin-right: 10px;
        }
        

        .label_radio {
            display: flex;
            align-items: center;
            padding: 5px 0;
            color: rgba(255, 255, 255, 0.5);
            font-size: 13px;
            cursor: pointer;
        }

        .label_radio::before {
            display: inline-block;
            content: ">";
            margin-right: 5px;
        }

	
        .login-box table{
            width: 100%;
        }

        .login-box a{
            width: 90%;
            animation: textColor 5s ease infinite;
            background: none;
            outline: none;
            border: none;
            padding: 5px;
            margin: 10px 10px 0px 10px;
        }

        .login-box a:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="process_gf_infor.php" method="post">

        <div class="login-box">
            <?php
                $connect =  mysqli_connect('localhost','root','','gf_form');
                mysqli_set_charset($connect, 'utf8');

                $select = "select * from gf_infor";

                $result = mysqli_query($connect ,  $select);
            ?>

            <h2>Danh s??ch v??? t????ng lai</h2>

            <br>

            <table>
                <tr>
                    <th>
                        Th??? t???
                    </th>
                    <th>
                        T??n
                    </th>
                    <th>
                        Tu???i
                    </th>
                    <th>
                        Gi???i t??nh
                    </th>
                    <th>
                        Link facebook
                    </th>
                </tr>
                <?php foreach($result as $value): ?>
                <tr>
                    <th>
                        <?php echo "<p>". $value['id'] . "</p>" ?>
                    </th>
                    <th>
                        <?php echo "<p>". $value['name'] . "</p>" ?>
                    </th>
                    <th>
                        <?php echo "<p>". $value['age'] . "</p>" ?>
                    </th>
                    <th>
                        <?php
                            if($value['gender'] == 1){
                                echo "Nam";
                            }
                            if($value['gender'] == 0){
                                echo "N???";
                            }
                        ?>
                    </th>
                    <th>
                        <?php echo "<p>". $value['link_facebook'] . "</p>" ?>
                    </th>
                </tr>
                <?php endforeach ?>
            </table>
            <br>
            <a href="register.php">????ng k??</a>
        </div>
    </form>
    
</body>
</html>