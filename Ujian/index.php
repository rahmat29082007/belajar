<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Well </title>
</head>
<body>
    <center>
        <h1><b>Rental Motor</b></h1>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="namaPelanggan" required></td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (Per-Hari)</td>
                    <td>:</td>
                    <td><input type="number" name="LamaRentalMotor" min="0 "max="100000000" required></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>:</td>
                    <td>
                        <select name="jenisMotor" required;>
                            <option value="Vario">Vario</option>
                            <option value="Beat">Beat</option>
                            <option value="Nmax">Nmax</option>
                            <option value="Mio">Mio</option>
                        </sellect>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Bayar" name="Bayar"></td>
                </tr>
            </from>
        </table>
        <?php
       include 'excute.php';
        $proses = new Rental();
        $proses -> setHarga(70000,90000,90000,100000);
        
        if(isset($_POST['Bayar'])){
            $proses->member = $_POST['namaPelanggan'];
            $proses->jenis = $_POST['jenisMotor'];
            $proses->waktu = $_POST['LamaRentalMotor'];
            $proses->pembayaran();
        }
        ?>
    </center>
</body>
</html>