<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-left: 380px;">
<div class="card" style=" 
        background-color: grey;
        width:600px ;
        height:300px;">

    <h1 style="text-align:center;">Aplikasi kasir</h1>
    <form method="POST" action="" style="display:flex; justify-content:center; ">
      <table>
      <tr>
            <td><label for="barang">Nama <br> barang</label></td>
            <td><input type="text" name="barang" id="barang"></td>
      </tr> 
      <tr>
            <td><label for="harga">Harga</label></td>
            <td><input type="text" name="harga" id="harga"></td>
      </tr>
      <tr>
            <td><label for="jumlah">Jumlah <br>barang</label></td>
            <td><input type="text" name="jumlah" id="jumlah"></td>
      </tr>
      <tr>
            <td><button type="submit" name="kirim" style="background-color:blue;">Tambah</button></td>
            <td><button type="submit" name="reset" style="background-color:blue;">Reset</button></td>
      </tr>
      </table>

     </form>
</div>

<!--memulai php-->
<?php
//start session
session_start()

?>

</body>
</html>