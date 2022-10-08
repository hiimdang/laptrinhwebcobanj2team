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