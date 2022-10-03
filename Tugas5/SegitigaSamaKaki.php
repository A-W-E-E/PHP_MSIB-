<?php
require_once 'Bentuk2D.php';
class segitiga extends Bentuk2D{

    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
       
       
    
     }

    public function namaBidang(){
        echo ' Segitiga Sama Kaki';
    }


    public function luasBidang(){
    // echo '1/2 x Alas x Tinggi <br/>';

    $luas =  1/2 * $this->alas * $this->tinggi;
    return $luas;
    }

    public function sisiMiring(){
        $sisi = sqrt(($this->alas**2)+($this->tinggi**2)) ;
        return $sisi;
        }



    public function kelilingBidang(){
    $keliling =   $this->alas + (2 * $this->sisiMiring() );
    return $keliling;
    }
}