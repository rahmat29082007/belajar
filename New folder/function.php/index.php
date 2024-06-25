<?php

function pertambahan($a, $b){
    return $a + $b ;
}



function perkalian($a,$b){
    return $a*$b;
}

function pengurangan($y,$z){
        return $y-$z;
}

echo pertambahan(5,6);
echo "<br>";

echo perkalian(3,4);
echo"<br>";
echo perkalian(12,2);
echo "<br>";
echo perkalian(122,3);
echo "<br>";

echo pengurangan(120,60);
echo "<br>";
echo pengurangan(112,43);
echo "<br>";
echo pengurangan(115,19);
echo "<br>";


function data($Nama,$Rayon){
    echo "nama" . $Nama;
    echo "<br>";
    echo "rayon" . $Rayon;

}

echo $Nama= "Dhino";
echo "<br>";
echo $Rayon="cicurug 9";
echo "<hr>";
echo $Nama= "Briliant";
echo "<br>";
echo $Rayon="ciawi 6";
echo "<hr>";
echo $Nama="Bintang";
echo "<br>";
echo $Rayon="Cisarua 7";
echo "<hr>";
echo "<br>";


function luasPersegi($s){
    return $s*$s/2 ;
}

echo luasPersegi(2);
echo "<br>";
echo luasPersegi(12);
echo "<br>";
echo luasPersegi(20);
echo "<br>";
echo "<br>";

function LuasSegitiga($l,$g,$t){
    return $l*0,5*$t;
}

echo LuasSegitiga(20,17);
echo "<br>";

?>