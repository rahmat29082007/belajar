<?php

if (@$_POST['bilangan pertama'] != "" && @$_POST ['bilangan_pemangkat'] != "") {
    $hasilpangkat = $_POST
    ['bilangan_pertama'] ** $_POST
    ['bilangan_pemangkat'];
}else {
    echo "<p style='text-align : center; color:red; margin:10px 0;'>data harus di isi lengkap</p>";
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" style="display : flex; justify-content: center" method = "POST">

    <table border="1">
        <tr>
            <td><label for="bilangan"></label> Bilangan pertama</td>
            <td><input type="number" name="bilangan_pertama" id="bilangan"></td>
        </tr>
        <tr>
            <td>Bilangan pemangkat</td>
            <td><input type="number" name="bilangan_pemngkat"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Hitung</button></td>
        </tr>        
    </table>
</form>

<p style="text-align: center">
    <?php
    if (isset($hasilpangkat) && @$_POST['bilangan_pertama'] != "" @$_POST ['bilangan_pemangkat'] != "") {
        echo "Hasil pangkat <b>" . $_POST['bilangan_pertama'] . " pangkat " . $_POST ['bilangan_pemangkat'] . " = " . $hasilpangkat . "</b>";
    }
    ?>
</p>
</body>
</html>