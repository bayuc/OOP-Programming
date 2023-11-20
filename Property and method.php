<?php   

// Penjualan Mobil
// Toyota 
// BMW

class Mobil{

    public $Tahun_produksi = 0,
           $Jenis = "jenis",
           $Warna = "warna" ,
           $Harga = 0;

    public function getvalue(){
       return "$this->Tahun_produksi, $this->Jenis";
    }

}

$Mobil1 = new Mobil();
$Mobil1 -> Tahun_produksi = 2017;
$Mobil1 -> Jenis = "Sedan";
$Mobil1 -> Warna = "putih";
$Mobil1 -> Harga = 1500000000;

echo "Mobil :  $Mobil1->Tahun_produksi, $Mobil1->Harga, $Mobil1->Jenis, $Mobil1->Warna"; 
echo "<br>";
echo $Mobil1->getvalue();