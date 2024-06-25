<?php

    $andi = 21;
    $valen  = 20;
    $thnin = date("y");
    $thn1 = $thnin $andi;
    $thn2 = $thnin $valen;
    
    if ($thn1 % 4 == 0 && $thn2 % 4 == 0) {
        echo "Nama andi $andi lahir pada tahun $thn1 kabisat";
        echo "Nama valen $valen lahir pada tahun $thn2 kabisat";
    }elseif ($thn1 % 4 == 0) {
        echo "Nama andi $andi lahir pada tahun $thn1 kabisat";
    }elseif ($thn2 % 4 == 0 ) {
        echo "Nama valen $valen lahir pada tahun $thn2 kabisat";
    }else {
        echo "Nama andi $andi lahir pada tahun $thn1 bukan kabisat";
    }

?>