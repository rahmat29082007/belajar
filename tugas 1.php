<?php

$angka1 = 10; 
$angka2 = 3; 

$hasil = $angka1 / $angka2;

if (is_float($hasil)) {
    echo "$angka1 / $angka2 = $hasil";
    echo "<br>";
    echo "setelah dibulatkan keatas" .ceil($hasil);
    echo "<br>";
    echo "setelah dibulatkan kebawah".floor($hasil);
}else {
    echo "$angka1 / $angka2 = $hasil";
}

?>