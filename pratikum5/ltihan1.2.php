<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function banyak($harga){
        $this->hargaSegelas = $harga;
        return $harga;
    }
    public function berat($volges){
        $this->volumeGelas = $volges;
        return $volges;
    }
    function macam($namin){
        $this->namaMinuman = $namin;
        return $namin;
    }
}

$barang = new Dispenser();
echo $barang-> isi ('3Liter');
echo $barang-> banyak ('3gelas');
echo $barang-> berat ('3kilogram');
echo $barang-> macam ('3minum');
?>