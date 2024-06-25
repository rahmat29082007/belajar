<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Informasi Siswa</title>
</head>
<body>

        <p>Nama     :Rahmat hidayat </p>
        <p>Nis      :12309975 </p>
        <p>Rayon    :Cisarua 4 </p>
        <p>Rombel   :PPLG X-3 </p>
    <header>
        <h1>Belajar</h1>
      
    </header>

<?php
// Data siswa (contoh, bisa diambil dari database)
$siswa = [
    ['nis' => '001', 'nama' => 'Moes', 'rombel' => 'XII-A'],
    ['nis' => '002', 'nama' => 'Aditya', 'rombel' => 'XII-B'],
    ['nis' => '003', 'nama' => 'Rohim', 'rombel' => 'X-5'],
    ['nis' => '004', 'nama' => 'Adit ', 'rombel' => 'X-1'],
    ['nis' => '005', 'nama' => 'Anafi', 'rombel' => 'X-4'],   
    // Tambahkan lebih banyak siswa jika diperlukan
];

// Mencetak informasi siswa


?> 

    <div style= "display:flex ; flex-wrap : wrap ;">
     <?php
        foreach ($siswa as $data) {
        echo "<div>";
        print "<p>NIS: {$data['nis']}</p>";
        echo "<p>Nama: {$data['nama']}</p>";
        echo "<p>Rombel: {$data['rombel']}</p>";
        echo "</div>";
        echo "<hr>";
    }
     ?>
    </div>
    
</body>
</html>
