<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator</title>
</head>
<body>
    <h3>
    <?php
    $bonus = 0;
     $price = 10000;
     if($price>=10000){

     $bonus=$price * 3;
     }
     else if($price>=50000){
        $bonus=$price * 2;
     }

     else if($price>=100000){
        $bonus = $price;
     }

     echo " เงินเดือนที่ได้รับ = $price บาท <br>";
     echo " โบนัสที่ได้รับ = $bonus บาท <br>";
     $SalaryTotal = $price + $bonus;
     echo " เงินเดือนที่ได้รับ = $SalaryTotal บาท<br>";

    ?>
    </h3>

</body>
</html>