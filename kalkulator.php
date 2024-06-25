 <?php
    //belajar membuat kalkulator sederhana denagna php

   //tampung impulan textfield ke dalam variabel
    $angka1 = @$_POST['tangka1'];
    $angka2 = @$_POST['tangka2'];
    $angka3 = @$_POST['tangka3'];
    $hasil  = @$_POST[ 'hasil' ];

    //uji jika tombol tambah diklik
   if(isset($_POST['btambah']))
   {
    $hasil = $angka1 + $angka2 +$angka3;
   }


    //uji jika tombol kurang diklik
    if(isset($_POST['bkurang']))
    {
     $hasil = $angka1 - $angka2 - $angka3;
    }

     //uji jika tombol bagi diklik
   if(isset($_POST['bbagi']))
   {
    $hasil = $angka1 / $angka2 / $angka3;
   }

    //uji jika tombol kali diklik
    if(isset($_POST['bkali']))
    {
     $hasil = $angka1 * $angka2 * $angka3;
    }

    //uji jika tombol pemangkatan di klik
    if(isset($_POST['bpemangkatan']))
    {
        $hasil = $angka1 ** $angka2 ** $angka3;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat calculator</title>
</head>
<body>

<form method="post" >
    <table align="center" border="0">
            <tr>
                <td colspan="3" bgcolor="green">kalkulator sederhana ngoding pintar </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
            <tr>
                <td>Angka 1</td>  
                <td>:</td>
                <td>
                    <input type="text" name="tangka1" value="<?=$angka1?>">
                </td>
            </tr>
            <tr>
                <td>Angka 2</td>  
                <td>:</td>
                <td>
                    <input type="text" name="tangka2"  value="<?=$angka2?>">
                </td>
            </tr>
            <tr>
                <td>Angka 3</td>  
                <td>:</td>
                <td>
                    <input type="text" name="tangka3"  value="<?=$angka3?>">
                </td>
            </tr>
            <tr>
                <td></td>  
                <td></td>
                <td>
                    <input type="submit" name="btambah" value="+">
                    <input type="submit" name="bkurang" value="-">
                    <input type="submit" name="bbagi" value="/">
                    <input type="submit" name="bkali" value="*">
                    <input type="submit" name="bpemangkatan" value="**">
                </td>
            </tr>
            <tr>
                <td>Hasil</td>  
                <td>:</td>
                <td>
                    <input type="text" name="bhasil"  value="<?=$hasil?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>

        </table>
    </form>

</body>
</html>

