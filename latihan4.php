<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   $hari = "selasa";
   
   if ($hari == "minggu") {
     echo "Have a nice weekend!";
   }else {
     echo "Have a nice weekday";
   }
   echo "<hr>";

   $umur = 15;

   if ($umur <17) {
     echo "Anda belum cukup umur untuk melakukan pendaftaran";
   }else {
    echo "Anda tidak melanjutkan";
   }
   echo "<hr>";

   $nilai = 80;

     if ($nilai == 100) {
      echo "Istimewa";
   }else if ($nilai <100 && $nilai>=90) {
        echo "Baik sekali";
   }else if($nilai <90 && $nilai>=80){
        echo "Baik";
   }else if ($nilai<80 && $nilai>=70) {
        echo "Cukup sekali";
   }else if($nilai<70 && $nilai>=60) {
        echo "cukup";
   }else {
        echo "Belajar lagi";
   }
   echo "<hr>";

   $kendaraan = "motor";

   
    ?>
</body>
</html>