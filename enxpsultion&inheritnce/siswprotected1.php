<?php

class Siswa{
    public $nama;
    protected $nis;

    public function __cosntruct($nama,$nis) {
        $this ->nama = $nama;
        $this ->nis  = $nis;
    }

    public function getNis() {
        return $this->nis;
    }
}

class SiswaKelas extends Siswa{
    public function dataSiswa() {
        return "Nama: " . $this->nama . "<br>Nis" . $this->nis;
}
}

$siswaKelas = new SiswaKelas('Marsha','12007880');

echo $siswaKelas->dataSiswa();

?>