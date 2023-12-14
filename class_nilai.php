<?php
class NilaiSantri {
    public $nama;
    public $nilai;
    public $sekolah = "PeTIK Jombang";

    // Konstruktor
    function __construct($nama, $nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function getHasil() {
        if ($this->nilai >= 70) return 'Lulus';
         else return 'Tidak Lulus';
        
    }
}

?>
