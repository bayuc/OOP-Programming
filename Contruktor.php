<?php   

// Penjualan Mobil
// Toyota 
// BMW

use Mobil as GlobalMobil;

class Mobil{

    public $Tahun_produksi, 
           $Jenis,
           $Warna,
           $Harga;

    public function __construct($Tahun_produksi= 0, $Jenis = "jenis", $Warna="warna", $Harga=0){
        $this->Tahun_produksi = $Tahun_produksi;
        $this->Jenis = $Jenis;
        $this->Warna = $Warna;
        $this->Harga = $Harga;
    }

    public function getvalue(){
       return "$this->Tahun_produksi, $this->Jenis, $this->Warna, $this->Harga";
    }

}

$Mobil1 = new Mobil(2017, "sedan", "putih", 15000000);
$Mobil2 = new Mobil(2017, "Truck", "Hitam", 250000000);
$Mobil3 = new Mobil(2015);


echo "Mobil : " . $Mobil1->getvalue(); 
echo "<br>";
echo "Mobil : " . $Mobil2->getvalue();
echo "<br>";
echo "Mobil : " . $Mobil3->getvalue();
