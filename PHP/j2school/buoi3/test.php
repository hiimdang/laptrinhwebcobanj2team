<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="text"],input[type="text"]:focus{
            border-radius: 0px 100px 100px 0px;
            /* border: 1px black solid; */
            border:none;
            outline: none;
            /* background-color: #e5e5e5; */
        }
        .icon{
            height: 36px;
            width: 36px;
            cursor: pointer;
        }
        /* .divngu:hover,input[type="text"]:hover{
            background-color: #e5e5e5;
            transition-duration: 0.5s;
        } */
        
    </style>
</head>
<body>
        <div id="div_ngu" class="divngu" style="width: 210px; height:40px; display:flex; border-radius:100px; border: 1px black solid; align-items:center;" onmouseover="mouse_on()"; onmouseout="mouse_off()">
            <img class="icon" src="img/search.png">
            <input type="text" id="input_ngu">
        </div>
  
        <script>
            function mouse_on(){
                document.getElementById("input_ngu").style.transitionDuration="0.5s";
                document.getElementById("div_ngu").style.backgroundColor="0.5s";
                document.getElementById("input_ngu").style.backgroundColor="#e5e5e5";
                document.getElementById("div_ngu").style.backgroundColor=`#e5e5e5`;

            }
            function mouse_off(){
                document.getElementById("input_ngu").style.transitionDuration="0.5s";
                document.getElementById("div_ngu").style.backgroundColor="0.5s";
                document.getElementById("input_ngu").style.backgroundColor=`White`;
                document.getElementById("div_ngu").style.backgroundColor=`White`;
            }
        </script>
</body>
</html>