<?php
class Pegawai{
    //member1 variabel
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;

    //variabel konstanta & static di dlm class
    static $jml = 0;
    const Data = 'Data Pegawai';
    
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status,){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
       
    
     }
    //member3 method2
    public function setGajiPokok(){
        switch($this->jabatan){
            case "Manager" : $this->gajiPokok = 15000000; break;
            case "Asisten" : $this->gajiPokok = 10000000; break;
            case "Kepala Bagian" : $this->gajiPokok = 7000000; break;
            case "Staff" : $this->gajiPokok = 4000000; break;
            default : $this->gajiPokok = 0;
          }
          return $this->gajiPokok;
        }
   

    public function setTunJab(){
        
         $this->tunjab = 0.2 * $this->setGajiPokok() ;
         return $this->tunjab;
          
    }
    // ternary
    public function settunKel(){
        $this->tunkel = $this->status == 'Menikah' ? 0.1*$this->setGajiPokok() : 0 ;
        return $this->tunkel;
    }

    public function setGator(){
        
        $this->gator = $this->setGajiPokok() + $this->setTunJab() + $this->setTunKel() ;
        return $this->gator;
         
   }

    public function setZakat(){
        $this->zakat = $this->setGator() * 2.5 / 100; 
        if($this->agama == 'Islam' && $this->setGator() >= 6000000) $this->zakat;
            else $this->zakat = 0;

        return $this->zakat;
    }

    public function setGajiBersih(){
        
        $this->gaji = $this->setGajiPokok() + $this->setTunJab() + $this->setTunKel() - $this->setZakat() ;
        return $this->gaji;
         
   }

   

    public function mencetak(){
        echo '<b><u>'.self::Data.'</u></b>'; 
        echo '<br/>No. NIP: '.$this->nip;
        echo '<br/>Nama Pegawai: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: Rp '.number_format($this->setGajiPokok(),0,',','.') ;
        echo '<br/>Tunjangan Jabatan: Rp '.number_format($this->setTunJab(),0,',','.');
        echo '<br/>Tunjangan Keluarga: Rp '.number_format($this->setTunKel(),0,',','.');
        echo '<br/>Zakat Profesi: Rp '.number_format($this->setZakat(),0,',','.');
        echo '<br/>Gaji Bersih: Rp '.number_format($this->setGajiBersih(),0,',','.');

        echo '<hr/>';
    }
}