<?php

class siswa{
    public $nama;
    protected $nis;

    public function __construct($nama,$nis)
 {  $this->nama =$nama;
    $this->nis  =$nis ;
}

public function getNis() {
    return $this->nis;
    }
}

class SiswaKelas extends Siswa {
    public $rombel;
    public $rayon ;

    public function __construct($nama,$nis,$rombel,$rayon) {
        parent::__construct($nama,$nis);
        $this->rombel = $rombel;
        $this->rayon  = $rayon ;
    }

    public function dataSiswa() {
        return "Nama: " .$this->nama . "<br> Nis: " . $this->nis . "<br>
        rombel: " . $this->rombel . "<br> Rayon: " . $this->rayon;
    }
}

$siswa_Kelas =new SiswaKelas('Marsha','12007880','RPL XI-10', 'Ciawi 10');

echo $siswa_Kelas->getNis();
echo "<hr>";
echo $siswa_Kelas->dataSiswa();
 
?>