<?php

//Nama  : Ahmad Zain Mahmud
//NIM   : 121140232
//Kelas : RB

class Mahasiswa
{
    private $nama;
    private $nim;
    private $prodi;

    public function __construct($nama, $nim, $prodi)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa()
    {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Prodi: " . $this->prodi . "\n";
    }

    public function __destruct()
    {
        echo "\nObjek Mahasiswa dengan NIM {$this->nim} dihapus.\n";
    }
}

$mahasiswa = new Mahasiswa("5tr0ngk1ll4", "000000000", "Hukum Rimba");

echo "Data Mahasiswa:\n";
$mahasiswa->tampilkanDataMahasiswa();

$mahasiswa->setNama("Ahmad Zain Mahmud");
$mahasiswa->setNim("121140232");
$mahasiswa->setProdi("Teknik Informatika");

echo "\nData Mahasiswa Baru:\n";
$mahasiswa->tampilkanDataMahasiswa();

unset($mahasiswa);

?>