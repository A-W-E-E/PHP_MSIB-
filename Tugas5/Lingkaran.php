<?php
require_once 'Bentuk2D.php';
class lingkaran extends Bentuk2D{

    public $jari2;

    public function __construct($jari2){
        $this->jari2 = $jari2;
       
       
    
     }

    public function namaBidang(){
        echo ' Lingkaran';
    }


    public function luasBidang(){
    $luas =  3.14 * ($this->jari2 **2) ;
    return $luas;
    }


    public function kelilingBidang(){
    $keliling =   3.14 * ($this->jari2 + $this->jari2 );
    return $keliling;
    }

    // public function mencetak(){
    //     echo 'Nama Bidang: '.$this->namaBidang();
    //     echo '<br/>Luas: '.$this->luasBidang();
    //     echo '<br/>Kelililng: '.$this->kelilingBidang();
    //     echo '<hr/>'; 
    // }
}