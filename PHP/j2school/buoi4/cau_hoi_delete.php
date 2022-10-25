<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        padding: 0px;
        background-image: url('img/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }
      #div_tong{
        display: flex; 
        justify-content:center; 
        align-items:center;
        height: 100vh;
        width: 100%;
        flex-direction: column;
      }
      button{
        padding: 3px 25px;
        border-radius: 100px;
        outline: none;
        cursor: pointer;
        border:1px black solid;
      }
      button:focus{
        outline: none;
        border:none;
      }
      .confirm{
        background-color: #039d63;
        color: white;
      }
      .cancel{
        background-color: #f95770; 
        color:white;
      }

    </style>
</head>

  <?php 
  $ma = $_GET['ma'];
  require_once 'connect.php';
  $sql = "select * from ban_giay where ma = $ma";
  $ket_qua = mysqli_query($ket_noi,$sql);
  $san_pham = mysqli_fetch_array($ket_qua);
  ?>
  
<body>
  <div id="div_tong">
      <h2 style="color:white;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Mày thật sự chắc chắn chưa?</h2>
      <div>
        <button class="confirm" onclick="window.location='process_delete.php?ma=<?php echo $san_pham['ma']?>'">Chắc chắn</button>
        <button  class="cancel" onclick="window.location='index_giay_admin.php'">Không xoá nữa</button>
      </div>

  </div>
</body>
</html>
