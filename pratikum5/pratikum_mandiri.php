<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function __construct($vol, $harlas, $volgas, $namin){
        $this->volume = $vol;
        $this->hargaSegelas = $harlas;
        $this->volumeGelas = $volgas;
        $this->namaMinuman = $namin;
    }
    public function pembeli(){
        echo "Volume : ".$this->volume. "<br> Harga Segelas : ".$this->hargaSegelas. "<br> Volume Gelas : ".$this->volumeGelas. "<br> Nama Minuman : ".$this->namaMinuman;
    }
    public function getJumlah(){
        return $this->volume - $this->volumeGelas * $this->hargaSegelas;
    }
}

$pembeli1 = new Dispenser("120000","10000","1"," Es Kelapa Muda");
$pembeli1->pembeli();
echo "<br> TOTAl : ".$pembeli1->getJumlah();
echo "<hr>";
$pembeli2 = new Dispenser("170000","5000","1","Es tebu");
$pembeli2->pembeli();
echo "<br> TOTAL : ".$pembeli2->getJumlah();
?>