<?php 
//header
echo '<h1> My Navbar</h1>';
//navbar
echo '<a href="?haha=home">HOME</a>';
echo '<a href="?haha=tentang">TENTANG</a>';
echo '<a href="?haha=tutorial>TUTORIAL</a>';
//main
$haha = $_GET['haha'];
switch ($haha) {
    case 'home':
        $tampil = 'HOME';
        break;
    case 'tentang':
        $tampil = 'TENTANG';
        break;
    case 'tutorial':
        $tampil = 'tutorial';
        break;
    default:
        $tampil = 'maaf';
        break;
    }
    echo $tampil;
    //footer
    echo '<h1>Footer</h1>'
?>