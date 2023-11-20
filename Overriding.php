<?php   

// Penjualan Mobil
// Toyota 
// BMW

use InfoMobil as GlobalInfoMobil;
use Mobil as GlobalMobil;

class Mobil{

    public $Tahun_produksi, 
           $Jenis,
           $Warna,
           $Harga,
           $Ban,
           $Tipe,
           $Transmisi,
           $Merk;


    public function __construct($Tipe = "tipe", $Tahun_produksi= 0, $Jenis = "jenis", $Warna="warna", $Harga=0, $Ban="ban", $Transmisi="transmisi", $Merk="merk"){
        $this->Tipe = $Tipe;
        $this->Tahun_produksi = $Tahun_produksi;
        $this->Jenis = $Jenis;
        $this->Warna = $Warna;
        $this->Harga = $Harga;
        $this->Ban = $Ban;
        $this->Transmisi = $Transmisi;
        $this->Merk = $Merk;

    }

    public function getvalue(){
       return " $this->Jenis, $this->Warna, $this->Ban";
    }

    public function getLengkap(){
        // Mobil : Tipe | Merk | Jenis | Tahun | Warna | Harga | Kopling/Matic
        // Motor : Tipe |  Merk | Jenis | Tahun | Warna | Harga | Matic/Kopling/GIGI   
        $str = "{$this->Tipe} : {$this->Merk} | {$this->Jenis} | {$this->Tahun_produksi} | {$this->Warna} | (Rp.{$this->Harga}) | {$this->Transmisi}";
        if( $this->Transmisi == "Gigi" && $this->Tipe == "Mobil" ){
            echo " tidak ada mobil yang menggunakan Gigi";
        }else {
            return $str;
        }
         
        
        
    }

}

Class Motor extends Mobil{
    public function getvalue1()
    {
        $str = "Motor : {$this->Jenis} | {$this->Merk} | {$this->Transmisi} | {$this->Tahun_produksi} | {$this->Warna}";
        return $str;
    }
}


Class Car extends Mobil{
    public function getvalue1()
    {
        $str = "Mobil : {$this->Jenis} | {$this->Merk} | {$this->Transmisi} | {$this->Tahun_produksi} | {$this->Warna}";
        return $str;
    }
}

Class InfoMobil{
    public function cetak(Mobil $Mobil){
        $str = "{$Mobil->Tahun_produksi} |  {$Mobil->getvalue()} | (Rp.{$Mobil->Harga})";
        return $str;
    }
}

$Mobil = new Car("Mobil", "2020", "Sport Car","Hitam",250000000000, "Firelli", "Manual", "Ferrari");
$Motor = new Motor("Motor", "2010", "Bebek", "Merah", " 120000000", "Micellin", "Manual", "Yamaha");

echo $Motor->getLengkap();
echo "<br>"; 
echo $Mobil->getLengkap();

// Output dari Inheritance
echo "<br>";
echo $Motor->getvalue1();
echo "<br>";
echo $Mobil->getvalue1();

 
