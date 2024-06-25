<?php

    if (isset(@$_POST['ok'])) {
        # code...
    }







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memasukan data</title>
</head>
<body>
<form action="" style=" display : flex; justify-content: center" method = "POST">

<table border="0">
    <tr>
        <td colspan="3"><hr></td>
    </tr>
    <tr>
        <td><label for="user"></label> User </td>
        <td><input type="text" name="isi_user" id="user"></td>
    </tr>
    <tr>
        <td>Pasword</td>
        <td><input type="number" name="bilangan_pemngkat"></td>
    </tr>
    <tr>
        <td><button type="submit" style="justify-content: center">ok</button><button type="submit">cancel</button></td>
     
    </tr>   
    <tr>
        <td colspan="3"><hr></td>
    </tr>     
</table>
</form>
</body>
</html>