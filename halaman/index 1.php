<?php
echo "<center><h1>Header</h1></center>";
echo '<a href="?page=home">HOME</a><br>';
echo '<a href="?page=tentang">TENTANG</a><br>';
echo '<a href="?page=tutorial">TUTORIAL</a><br><br>';
$page = $_GET ['page'];
switch ($page) {
    case 'home':
        include "home.php"; 
        break;
    
    case 'tentang':
        include "tentang.php";
        break;

    case 'tutorial':
        include "tutorial.php";
        break;

    default:
        echo "<center><h3>Maaf . halaman tidak ditemukan ! </h3></center>";
        break;   
}

    echo "<center><h1>Footer</h1></center>"
?>
