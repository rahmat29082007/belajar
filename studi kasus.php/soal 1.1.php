<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table border=0>
            <tr>
                <td>Angka 1</td>  
                <td>:</td>
                <td>
                    <input type="text" name="angka1">
                </td>
            </tr>
            <tr>
                <td>Angka 2</td>  
                <td>:</td>
                <td>
                    <input type="text" name="angka2"  >
                </td>
            </tr>
            <tr>
               
                <td>
                    <input type="submit"   value="hasil">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php


$angka1 = @$_POST['angka1'];
$angka2 = @$_POST['angka2'];
$hasil  = @$_POST[ 'hasil'];

if ($angka1 >$angka2) {
     echo "$angka1";
}else{
     echo "$angka2";
}

?>