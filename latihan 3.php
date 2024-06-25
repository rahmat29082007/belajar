<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $waktu = 16;
    
    if ($waktu <20) {
        echo "Have a good day!";
    }else {
        echo "Bad day";
    }
    echo "<br>";

    $nilai = 70;

    if ($nilai > 50) {
        echo "anda lulus dengan nilai", $nilai;
    }else {
        echo "gak lulus dengan nilai", $nilai;
    }

    ?>
</body>
</html>