<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table colspan="3">
            <tr>
                <td>angka 1</td>
                <td>:</td>
                <td>
                    <input type="text" name="angka1">
                </td>
            </tr>
            <tr>
                <td>angka 2</td>
                <td>:</td>
                <td>
                    <input type="text" name="angka2">
                </td>
            </tr>
            <tr>
                <td>angka 3</td>
                <td>:</td>
                <td>
                    <input type="text" name="angka3">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit"  value="hasil">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

$angka1 = @$_POST['angka1'];
$angka2 = @$_POST['angka2'];
$angka3 = @$_POST['angka3'];
$hasil  = @$_POST[ 'hasil'];

if($angka1 > $angka2){
    echo "$angka1";
}else if($angka3 < $angka2){
    echo "$angka2";
}else {
    echo "$angka3";
}

?>