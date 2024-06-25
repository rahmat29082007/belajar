<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=1; $i <= 3; $i++) { 
        for ($y=1; $y<=10  ; $y++) { 
           $x = $y * $i;
           echo $y . " x " . $i . " = " . $x . "<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>