<?php

$nilai = 76;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
 <p>
    nilai <?php echo $nilai; ?> dinyatakan
    <spam style = "color: <?php  echo $nilai >=75 ? "green" : "red" ?>; ">
    <?php echo $nilai >= 75 ? "NILAI KOMPETEN" : "BELUM KOMPETEN"; ?>


</body>
</html>