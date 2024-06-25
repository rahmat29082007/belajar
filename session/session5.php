<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
    <h1 style="text-align:center;">MASUKAN DATA SISWA</h1>
<form method="POST" action="" style="display:flex; justify-content:center;">
    <table border="1">
        <tr>
            <td><label for="nama">NAMA :</label></td>
            <td><input type="text" name="nama" id="nama" ></td>
        </tr>
        <br>
        <tr>
            <td><label for="nis">NIS :</label></td>
            <td><input type="text" name="nis" id="nis"></td>
        </tr>
        <br>
        <tr>
            <td><label for="rayon">RAYON :</label></td>
            <td><input type="text" name="rayon" id="rayon"></td>
        </tr>
        <br>
        <tr>
            <td><button type="submit" name="kirim">Tambah</button></td>
            <td><button type="submit" name="reset">Reset</button></td>
        </tr>

    </table>
</form>
</div>
<!--pembuka php-->
<?php
//memulai sesi
session_start();

//kalo array multimedia belum ada,maka buat dulu
if (isset($_POST['reset'])) {
   session_unset();
}
if (!isset($_SESSION['dataSiswa'])) {
   $_SESSION['dataSiswa'] = array();
}

//proses button hapus pada table tampil data
if (isset($_GET['hapus'])) {
    $index =$_GET['hapus'];
    unset($_SESSION['dataSiswa'][$index]);
}

//kalo array ada,maka buat array dari data yang dimasukan
if (isset($_POST['kirim'])) {
    if (@$_POST['nama'] && @$_POST['nis'] && @$_POST['rayon']) {
    if (isset($_SESSION['dataSiswa'])) {
            $data = [
                'nama'=>$_POST['nama'],
                'nis'=>$_POST['nis'],
                'rayon'=>$_POST['rayon'],
            ];
            array_push($_SESSION['dataSiswa'], $data);
    }
    }else {
        echo "<p>Lengkapi Data</p>";
    }
}  

//var_dump($_SESSION);
if (!empty($_SESSION['dataSiswa'])) {
echo '<table>';
echo '<tr>';
echo '<td>nama</td>';
echo '<td>nis</td>';
echo '<td>rayon</td>';
echo '<td>AKSI</td>';
echo '</tr>';

//nampilin data pake table
foreach ($_SESSION['dataSiswa'] as $index => $value) {
   echo '<tr>';
   echo '<td>'. $value['nama']. "</td>";
   echo '<td>'. $value['nis']. "</td>";
   echo '<td>'. $value['rayon']. "</td>";
   echo '<td><a href="?hapus='. $index . ' ">HAPUS</a></td>';
   echo '<tr>';
}
echo '</table>';
}else {
    echo "Data masih kosong nih";
}
?>
</body>
</html>