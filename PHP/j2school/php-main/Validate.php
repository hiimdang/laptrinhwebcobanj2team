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

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #15c80f);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
            left: -100%;
            }
            50%,100% {
            left: 100%;
            }
        }
        
        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #15c80f);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }
        
        @keyframes btn-anim2 {
            0% {
            top: -100%;
            }
            50%,100% {
            top: 100%;
            }
        }
        
        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #15c80f);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }
        
        @keyframes btn-anim3 {
            0% {
            right: -100%;
            }
            50%,100% {
            right: 100%;
            }
        }
        
        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #15c80f);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }
        
        @keyframes btn-anim4 {
            0% {
            bottom: -100%;
            }
            50%,100% {
            bottom: 100%;
            }
        }
        
  
    </style>
</head>
<body>


        <div class="login-box">
            <h2>Form đăng kí làm người yêu Prox ( •̀ ω •́ )✧</h2>
            <form action="process.php" method="post">
              <div class="user-box">
                <input id="input_name" type="text" name="name" required="">
                <label>Bạn ơi cho xin tên :3</label>
              </div>
              <p id="name_error" class="error"></p>


              <div class="user-box">
                <input id="input_email" type="email" name="email" required="">
                <label>Bạn ơi cho xin email :3</label>
              </div>
              <p id="email_error" class="error"></p>


              <div class="user-box">
                <input id="input_password" type="password" name="password" required="">
                <label>Mật khẩu ứ xin</label>
              </div>
              <p id="password_error" class="error"></p>


              <div class="user-box">
                <input id="input_birthday" type="date" name="birthday" required="">
                <label>Bạn sin ngày nào dọ</label>
              </div>
              <p id="birthday_error" class="error"></p>


                <p id="title">Bạn là đực hay cái</p>
                <div class="radio-toolbar">
                    <input type="radio" id="radioMale" name="gender" value="Nam" checked>
                    <label for="radioMale">Nam</label>
            
                    <input type="radio" id="radioFemale" name="gender" value="Nữ">
                    <label for="radioFemale">Nữ</label>
                </div>
                <p id="gender_error" class="error"></p>
    

                <div class="user-box">
                    <input id="input_hobby" id="input_name" type="text" name="hobby" required="">
                    <label>Sở thích là gì z :3</label>
                  </div>
                <p id="hobby_error" class="error"></p>
    
              
              <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input id="btn_submit" type="submit" value="Đăng kí" onclick="check_form()">
              </a>
            </form>
          </div>
	
</body>
<script>
let flag = true;

//ten

function check_name(name){
    let regex_name = /^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/;
    if(name.length == 0){
        document.getElementById('name_error').innerHTML = `Hãy nhập tên của người vợ tương lai tôi nào`;
        flag = false;
    }else if(!regex_name.test(name)){
        document.getElementById('name_error').innerHTML = `Tên khum hợp lệ`;
        flag = false;

    }else{
        document.getElementById('name_error').innerHTML = ``;
    }
}

//gioi_tinh

function check_gender(genderArray){
    let checkGender = false;
    for(i = 0 ;  i < genderArray.length ; i++){
        if(genderArray[i].checked){
            checkGender = true;
        }
    }

    if(checkGender == false){
        document.getElementById('gender_error').innerHTML = `Nhap gioi tinh`;
        flag = false;
    }else{
        document.getElementById('gender_error').innerHTML = ``; 
    }
}


//email

function check_email(email){
    let regex_email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
    if(email.length == 0){
        document.getElementById('email_error').innerHTML = `Nhập email đi mà, tui cầu xin đấy ><`;
        flag = false;

    }else if(!regex_email.test(email)){
        document.getElementById('email_error').innerHTML = `Email khum hợp lệ`;
        flag = false;

    }else{
        document.getElementById('email_error').innerHTML = ``;
    }
}


//password

function check_password(password){

    //Phan nay em test regex nen lam dung regex hoi nhieu :v
    
    let regex_password = /^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/;
    if(password.length == 0){
        document.getElementById('password_error').innerHTML = `Nói ứ xin là ứ cho à, đồ dễ dãi`;
        flag = false;
    }else if(!regex_password.test(password)){
        document.getElementById('password_error').innerHTML = `Mật khẩu chứa 8 kí tự <br/> Ít nhất 1 kí tự đặc biệt (!,@,#,$,&)<br/> Ít nhất 2 kí tự In hoa <br/>Ít nhất 2 kí tự số <br> Ex: abcAB12@`;
        flag = false;
    }else{
        document.getElementById('password_error').innerHTML = ``;
    }
}

//ngay sinh

function check_birthday(birthday){
    if(birthday.length == 0){
        document.getElementById('birthday_error').innerHTML = `Tui cầu xin đấy, cho tôi biết ngày thiên thần sinh ra đi nào`;
        flag = false;
    }else{
        document.getElementById('birthday_error').innerHTML = ``;
    }
}

function check_hobby(hobby){
    if(hobby.length == 0){
        document.getElementById('hobby_error').innerHTML = `Nhập sở thích của bạn vào đây, thíc tôi chẳng hạn`;
        flag = false;
    }else{
        hobby.getElementById('hobby_error').innerHTML = ``;
    }
}

function check_form(){

    let full_name = document.getElementById('input_name').value;
    check_name(full_name);
    let email = document.getElementById('input_email').value;
    check_email(email);
    let genderArray = document.getElementsByName('gender');
    check_gender(genderArray);
    
    let password = document.getElementById('input_password').value;
    check_password(password);

    let birthday = document.getElementById('input_birthday').value;
    check_birthday(birthday);

    let hobby = document.getElementById('input_hobby').value;

    check_hobby(hobby);

    if(flag == true){
        alert('Success');
    }else{
        flag = true;
    }

}
</script>
</html>
