<?php 
class pegawai{
    private $namaDepan;
    private $namaBelakang;
    private $jabatan;

    public function setNamaDepan($namaDepan){
        $this->namaDepan=$namaDepan;
    }

    public function getNamaDepan(){
        return $this->namaDepan;
    }

    public function setNamaBelakang($namaBelakang){
        $this->namaBelakang=$namaBelakang;
    }

    public function getNamaBelakang(){
        return $this->namaBelakang;
    }

    public function setJabatan($jabatan){
        $this->jabatan=$jabatan;
    }
    
    public function getJabatan(){
        return $this->jabatan;
    }

}
?>